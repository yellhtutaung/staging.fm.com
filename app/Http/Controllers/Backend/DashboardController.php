<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\ContactForm;
use App\Models\FruitPriceList;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class DashboardController extends Controller
{
    public function __construct()
    {

    }

    public function home () {
        $user_count = User::all()->count();
        $contactSms = ContactForm::all()->count();
        $fruitPrice = FruitPriceList::all()->count();
        return view('backend.dashboard.home', compact('user_count','contactSms','fruitPrice'));
    }

    public function job () {
        return view('backend.job');
    }

}
