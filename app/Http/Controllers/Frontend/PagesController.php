<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
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
        return view('frontend.price_list');
    }
}
