<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\FruitPriceList;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class FruitController extends Controller
{

    public function chrGenerator($prefix)
    {
        $UpperCase = chr(rand(65,90));
        $NewCase = chr(rand(65,90));
        $LowerCase = chr(rand(97,122));
        return $prefix.$UpperCase.$NewCase.$LowerCase;
    }

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
        foreach ($images as $image)
        {
            $extension = $image->getClientOriginalExtension();
            if ( !in_array($extension, $extArr) ) {
                return 'Your file type must be jpg, png, jpeg and webp!';
            }
//            if ( $images[$i]->getSize() > 800000 ) {
//                return 'Your file size is too large! | We only accept 500KB';
//            }
        }

        if ($whichOne ==  'add')
        {
            $folderId = $uptToken;
        }else{
            $folderId = Material::where('token',$uptToken)->first()->id;
        }

        foreach ($images as $image) {
            $token = str_shuffle(md5(date("ymdhis")));
            $record = new Image();
            $record->path = $image->path();
            $record->extension = $image->extension();
            $record->file_size = $image->getSize();
            $record->material_id = $folderId;
            $record->reg_id = auth()->id();
            $record->token = $token;
            $imgName = $token.'.'.$image->getClientOriginalExtension();
            $image->move("uploads/materials/$folderId/",$imgName);
            $record->image = $imgName;
            $record->save();
        }

    }

    public function saveFruitData($In)
    {
        $formData = $In->validate([
            'name' => ['required'],
            'price' => ['required','max:9',''],
            'depend_count' => ['required'],
            'unit' => ['required'],
            'description' => ['nullable'],
            'notes' => ['nullable'],
        ]);

        $formData['name_id'] = $this->chrGenerator('FR-');
        $formData['reg_id'] = auth()->id();
        $formData['token'] = str_shuffle(md5(date("ymdhis")));
        $fruitCreate = FruitPriceList::create($formData);

        if ($fruitCreate->save())
        {
            return $fruitCreate->id;
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
                redirect()->back()->with('warning',  $validator->errors()->first());
            }

            return $materialCreate = $this->saveFruitData($In);

            if ($materialCreate)
            {
                $images = $In->file('images');
                $imgValidate = $this->imgValidate($images,'add',$materialCreate);
                if (is_string($imgValidate))
                {
                    return back()->with('warning', $imgValidate); // validate and upload img to dynamic folder
                }
                return redirect()->route('createFruit')->with('success', 'Fruit created successfully!');
            }else{
                return redirect()->route('createFruit')->with('warning', 'Server error occurred .');
            }
        }else{
            return redirect()->back()->with('warning', 'Image must be upload.');
        }
    }
}
