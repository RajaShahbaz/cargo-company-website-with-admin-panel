<?php

namespace App\Http\Controllers;

use App\Models\Contacts;
use Illuminate\Http\Request;

class ContactsController extends Controller
{
    public function index(){
        $contacts = Contacts::latest()->get();
        return view('admin.contacts',compact('contacts'));
    }
    public function store(Request $request){
        $contacts = new Contacts();
        $contacts->name = $request->name;
        $contacts->email = $request->email;
        $contacts->phone = $request->phone;
        $contacts->subject = $request->subject;
        $contacts->message = $request->message;
        $contacts->save();
        return redirect(route('contact'));
    }
}
