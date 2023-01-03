<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\FruitPriceList;
use App\Models\FruitPriceListTransition;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home ()
    {
        return view('frontend.pages.home');
    }

    public function employees ()
    {
        return view('frontend.pages.employees');
    }

    public function client ()
    {
        return view('frontend.pages.client');
    }

    public  function  partnerships ()
    {
        return view('frontend.pages.partnerships');
    }

    public function market ()
    {
        return view('frontend.pages.market');
    }

    public function coldchain ()
    {
        return view('frontend.pages.coldchain');
    }

    public function job ()
    {
        return view('frontend.pages.job');
    }

    public function register ()
    {
        return view('frontend.auth.register');
    }

    public function priceList()
    {
        $fruitPriceList = FruitPriceList::where('hide_show',1)->where('status',1)->orderBy('id','DESC')->get();
        return view('frontend.price_list',compact('fruitPriceList'));
    }

    public function priceListHistory($id)
    {
        $priceList = FruitPriceList::where('token',$id)->first();
        if ($priceList)
        {
            $priceListHistory = FruitPriceListTransition::where('f_id',$priceList->id)->orderBy('id','DESC')->get();
            return $priceListHistory;
        }else{
            return abort(404);
        }
    }
}
