<?php

namespace App\Http\Controllers;

use App\ContactForm;
use App\Http\Requests\ContactFormRequest;

class ContactFormController extends Controller
{
    public function index()
    {
        return view('contacts');
    }

    public function store(ContactFormRequest $request)
    {
        ContactForm::create($request->all());

        return back()->with(['status' => 'Your message was successfully sent!']);
    }
}
