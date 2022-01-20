<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContactController extends Controller
{
    public function ViewContact(){
        $messages = Contact::all();
        return view('backend.setup.contact.view_contact',compact('messages'));
    }//end viewcontact

    public function Contact(){
        $contacts = DB::table('contacts')->first();
        return view('body.contact',compact('contacts'));
    }

    public function ContactForm(Request $request){
        Contact::insert([
            'name' => $request ->name,
            'email' => $request ->email,
            'phone' => $request ->phone,
            'message' => $request ->message,
            'created_at' => Carbon::now()
        ]);

        return Redirect()->route('contact')->with('success','Bedankt voor uw bercht');
    }
}
