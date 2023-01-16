<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Country;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class CountryController extends Controller
{
    public function transferCity ($records) {
        $cities = [];
        foreach ($records as $record) {
            $record['id'] = $record->id;
            $record['country'] = !is_null($record->parent_id)?Country::where('id', $record->parent_id)->first()->name:"";
            $record['city'] = $record->name;
            $record['latitude'] = $record->lat;
            $record['longitude'] = $record->long;
            $record['note'] = $record->note;
            $record['description'] = $record->description;
            $record['created_at'] = $record->created_at->diffForHumans();
            $record['updated_at'] = $record->updated_at->diffForHumans();
            $record['hide_show'] = $record->hide_show;
            array_push($cities, $record);
        }
        return $cities;
    }

    public function countryList () {
        $configLevel = config('app.country_arr');
        $records = Country::where('status',1)->orderBy('id','DESC')->get();
        $cities = $this->transferCity($records);
        return view('backend.country.list', compact('cities','configLevel'));
    }

    public function addCountry () {
        $countries = Country::where('status', 1)->where('level', 1)->get();
        return view('backend.country.add', compact('countries'));
    }

    public function createCountry (Request $request) {
        try {
            $validator = Validator::make($request->all(), [
                'name' => ['required'],
                'level' => ['required'],
                'lat' => ['nullable'],
                'long' => ['nullable'],
                'description' => ['nullable'],
                'note' => ['nullable'],
            ]);

            if ( $validator->fails() ) {
                return redirect()->back()->with('warning',  $validator->errors()->first())->withInput();
            }

            if( $request->level != 1 && $request->level != 2 ){
                return  redirect()->back()->with('warning', 'Level is incorrect.')->withInput();
            }

            if ($request->level == 2 ) {
                $checkCountry = Country::find($request->parent_id);
                if(!$checkCountry){
                    return redirect()->back()->with('warning', 'You need to select Country.')->withInput();
                }
            }

            $record = new Country();
            $record->name = $request->name;
            $record->parent_id = $request->level == 2 ? $request->parent_id : null;
            $record->level = $request->level;
            $record->lat = $request->lat;
            $record->long = $request->long;
            $record->description = $request->description;
            $record->note = $request->note;

            $record->reg_id = Auth::guard('admin')->user()->id;
            $record->token = str_shuffle(md5(date("ymdhis")));
            $record->save();
            return redirect()->back()->with('success', 'Created Successfully.');

        }catch (\Exception $e){
            return back()->with('warning', $e->getMessage());
        }
    }

    public function editCountry ($token) {
        $record = Country::where('status',1)->where('token', $token)->first();
        if (!$record) {
            return redirect()->route('countryList')->with('error', 'Your data is invalid.');
        }
        $countries = Country::where('status', 1)->where('level', 1)->get();
        $cities = Country::where('status', 1)->where('level', 2)->get();
        return view('backend.country.edit', compact('record', 'countries', 'cities'));
    }

    public function updateCountry (Request $request, $token) {
        try {
                $record = Country::where('status',1)->where('token', $token)->first();
                if (!$record) {
                    return redirect()->route('countryList')->with('error', 'Your data is invalid.');
                }

                $validator = Validator::make($request->all(), [
                    'name' => ['required'],
                    'level' => ['required'],
                    'lat' => ['nullable'],
                    'long' => ['nullable'],
                    'description' => ['nullable'],
                    'note' => ['nullable'],
                ]);

                if ( $validator->fails() ) {
                    return redirect()->back()->with('warning', $validator->errors()->first())->withInput();
                }

                if( $request->level != 1 && $request->level != 2 ){
                    return  redirect()->back()->with('warning', 'Level is incorrect.')->withInput();
                }

                if ($request->level == 2 ) {
                    $checkCountry = Country::find($request->parent_id);
                    if(!$checkCountry){
                        return redirect()->back()->with('warning', 'You need to select Country.')->withInput();
                    }
                }

                $record->name = $request->name;
                $record->level = $request->level;
                $record->parent_id = $request->level == 2 ? $request->parent_id : null;
                $record->lat = $request->lat;
                $record->long = $request->long;
                $record->description = $request->description;
                $record->note = $request->note;
                $record->update();
                return redirect()->back()->with('success', 'Updated Successfully.');
        }catch (\Exception $e){
            return back()->with('warning', $e->getMessage());
        }
    }
}
