<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    //

    public function addContact(){

        $contact = new Contact();

        $contact->name      =   "yacine";
        $contact->email     =   "yacineboulyalis@gmail.com";
        $contact->message   =   "bonjour le monde";

        $contact->save();
    }

    public function listContact(){

        $contact = Contact::all();

        dd($contact);


    }
}
