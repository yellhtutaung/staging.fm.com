<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
class LangController extends Controller
{
    public function change(Request $request)
    {
        App::setLocale($request->lang);
        // \Session::put('locale','en');
        // \Session::save();

        // $putSession = session()->put('aa', $request->lang);
        session()->put('locale', $request->lang);
        // return session()->get('locale');
        return response()->json([
            'status' => 200,
            'data' => $request->lang
        ]);
        return redirect()->back();
    }
}
