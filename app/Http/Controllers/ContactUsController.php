<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Facades\Mail;


class ContactUsController extends Controller
{

    public function ContactUsForm(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:11',
            'service' => 'required'
        ]);

        Contact::create($request->all());

        Mail::send('mail', array(
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'phone' => $request->get('phone'),
            'service' => $request->get('service'),
        ), function ($message) use ($request) {
            $message->from($request->email);
            $message->to('tasfik1212@gmail.com', 'Admin')->subject($request->get('subject'));
        });

        return back()->with('success', 'We have received your message and we would like to thank you for writing to us.');
    }
}
