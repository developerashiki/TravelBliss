<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{
    /**
     * Contact Page here
     *
     * @return void
     */
    public function index()
    {
        return view('frontend.contact');
    }

    /**
     * ContactRequest $request
     * 
     * @return request
     * 
     */
    public function contactForm(ContactRequest $request)
    {
        $contact =  $request->all();
        Contact::create($contact);

        return back();
    }
}
