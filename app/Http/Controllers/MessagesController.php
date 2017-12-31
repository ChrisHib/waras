<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Daftar;

class MessagesController extends Controller
{
    public function submit(Request $request) {
    	$this->validate($request, [
    		'name' => 'required',
    		'email' => 'required'
    	]);

    	//Create New Message
    	$messages = new Message;
    	$messages->name = $request->input('name');
    	$messages->email = $request->input('email');
    	$messages->message = $request->input('message');

    	//save meesage
    	$messages->save();

    	//resirect
    	return redirect('/')->with('success', 'Pesan Terkirim');
    }

    public function getMessages(){
    	$messages = Message::all();

    	return view('messages')->with('messages', $messages);
    }
}
