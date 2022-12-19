<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home () {
        return view('frontend.home');
    }

    public function employees () {
        return view('frontend.employees');
    }

    public function client () {
        return view('frontend.client');
    }

    public  function  partnerships () {
        return view('frontend.partnerships');
    }

    public function market () {
        return view('frontend.market');
    }

    public function coldchain () {
        return view('frontend.coldchain');
    }

    public function job () {
        return view('frontend.job');
    }

    public function register () {
        return view('frontend.auth.register');
    }
}
