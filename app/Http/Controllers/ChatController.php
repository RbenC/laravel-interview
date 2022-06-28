<?php

namespace App\Http\Controllers;

use App\Models\Chat;
use Illuminate\Http\Request;
use League\CommonMark\Node\Block\Document;

class ChatController extends Controller
{
    public function index() 
    {
        return view('academia.chatspiano');
    }
    public function store(Request $request)
    {
        $this->validate($request,[
            'chat_line' => 'required|max:200',
            'username' => 'required'
        ]);        

        Chat::create([
            'username'=>$request->username,
            'chatline'=>$request->chat_line
        ]);

        
        return redirect()->route('chatspiano');

    }

}

 
