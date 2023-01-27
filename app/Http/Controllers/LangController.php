<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
class LangController extends Controller
{
    public function change(Request $request)
    {
//        return response()->json([
//            'status' => 'success',
//            'data' => $request->lang
//        ]);
        App::setLocale($request->lang);
        session()->put('locale', $request->lang);
        return response()->json([
            'status' => 200,
            'data' => $request->lang
        ]);
        return redirect()->back();
    }
}
