<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactsController extends Controller
{
    /**
     * Undocumented function
     *
     * @return void
     */
    public function contacts()
    {
        $this->data['contacts'] = Contact::latest('id')->simplePaginate(20);

        return view('admin.contact.contacts', $this->data);
    }
}
