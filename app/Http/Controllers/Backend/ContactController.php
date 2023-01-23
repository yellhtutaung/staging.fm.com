<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\ContactForm;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contactMessageList () {
        $records = ContactForm::orderBy('created_at', 'DESC')->get();
        return view('backend.contact.list', compact('records'));
    }
}
