<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function confirm(ContactRequest $request)
    {
        $contact=$request->only(['first_name','last_name','gender','email','first_tell','middle_tell','last_tell','address','building','select','detail']);
        return view('confirm', compact('contact'));
    }
    public function store(ContactRequest $request){
        $contact=$request->only(['first_name','last_name','gender','email','first_tell','middle_tell','last_tell','address','building','select','detail']);
        Contact::create($contact);
        return view('thanks');
    }
    public function thanks(ContactRequest $request) {
        return view('index');
    }
    public function login()
    {
        return view('login');
    }
    public function register()
    {
        return view('register');
    }
    public function admin()
    {
        $authors = Contact::all();
        return view('admin', ['authors' => $authors]);
    }
}
