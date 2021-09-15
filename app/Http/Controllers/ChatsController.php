<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events\MessageSent;
use App\Models\Message;


class ChatsController extends Controller
{
    //

    public function  __construct()
    {
        $this->middleware('auth');
     //   $this->middleware('isAdmin');
      //  $this->middleware('role');
    }
    public function index(){
        return view('chats');
    }
    public function fetchMessages(){
        return Message::with('user')->get();
    }
    public function sendMessage(Request $request){
     
        $message = auth()->user()->messages()->create([
        'message' => $request->message['message'] ]); 
        broadcast(new MessageSent($message->load('user')))->toOthers();
        return ['status'=>'success'];
    }
}
