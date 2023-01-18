<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\ContactForm;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contactMessageList () {
        $records = ContactForm::all();
        return view('backend.contact.list', compact('records'));
    }
}
