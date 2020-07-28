<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Message;

class ContactController extends Controller
{
    public function submit(ContactRequest $request){
        $message = new Message();
        $message->name = $request->input('name');
        $message->email = $request->input('email');
        $message->subject = $request->input('subject');
        $message->message = $request->input('message');
        $message->number = $request->input('number');
        $message->save();

        return redirect()->route('home')->with('status', 'Your order sent!');
    }

    public function getMessages(){
        $messages = Message::all();
        
        return view('messages', ['messages' => $messages]);
    }
}
