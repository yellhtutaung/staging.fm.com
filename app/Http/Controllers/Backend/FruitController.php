<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Helpers\General;
use App\Models\FruitPriceList;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;


class FruitController extends Controller
{

    public function fruitList()
    {
        return 'list';
    }

    public function addFruit()
    {
        return view('backend.fruit.add');
    }

    public function imgValidate($images,$whichOne,$uptToken)
    {
        $extArr = ['jpg', 'png', 'jpeg', 'webp'];
        $extension = $images->getClientOriginalExtension();
        if ( !in_array($extension, $extArr) ) {
            return 'Your file type must be jpg, png, jpeg and webp!';
        }
        if ( $images->getSize() > 800000 ) {
            return 'Your file size is too large! | We only accept 500KB';
        }

        $fruitDb = FruitPriceList::find($uptToken);
        $folderId = $fruitDb->id;
        $imgName = date('is').General::strGenerator(8).'.'.$images->getClientOriginalExtension();
        $images->move("backend-assets/uploads/fruits/$folderId/",$imgName);
        $fruitDb->images = $imgName;
        if($fruitDb->save())
        {
            return true;
        }
    }

    public function saveFruitData($In)
    {
        $FruitDb = new FruitPriceList();
        $FruitDb->name = $In->name;
        $FruitDb->price = $In->price;
        $FruitDb->depend_count = $In->depend_count;
        $FruitDb->unit = $In->unit;
        $FruitDb->description = $In->description;
        $FruitDb->notes = $In->notes;
        $FruitDb->name_id = General::chrGenerator('FR-');
        $FruitDb->reg_id = Auth::guard('admin')->user()->id;
        $FruitDb->token = str_shuffle(md5(date("ymdhis")));

        if ($FruitDb->save())
        {
            return $FruitDb->id;
        }else{
            return false;
        }
    }

    public function createFruit(Request $In)
    {
        if ($In->hasFile('images'))
        {
            $validator = Validator::make($In->all(), [
                'name' => ['required'],
                'price' => ['required','max:9',''],
                'depend_count' => ['required'],
                'unit' => ['required'],
                'description' => ['nullable'],
                'notes' => ['nullable'],
            ]);

            if ( $validator->fails() ) {
                return redirect()->back()->with('warning',  $validator->errors()->first());
            }

            $fruitCreate = $this->saveFruitData($In);
            if ($fruitCreate)
            {
                $images = $In->file('images');
                $imgValidate = $this->imgValidate($images,'add',$fruitCreate);
                if (is_string($imgValidate))
                {
                    return redirect()->back()->with('warning', $imgValidate); // validate and upload img to dynamic folder
                }
                return redirect()->back()->with('success', 'Fruit created successfully!');
            }else{
                return redirect()->back()->with('warning', 'Server error occurred .');
            }
        }else{
            return redirect()->back()->with('warning', 'Image must be upload.');
        }
    }
}
