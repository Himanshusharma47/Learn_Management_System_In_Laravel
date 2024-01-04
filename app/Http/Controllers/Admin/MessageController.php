<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MessageController extends Controller
{

    public function sendMessage(Request $request)
    {

        // dd($request->all());

        $message = new Message([
            'sender_id' => Auth::id(),
            'receiver_id' => $request->receiver_id,
            'content' => $request->content,
        ]);
        $message->save();

        return redirect()->back()->with('success', 'Message sent successfully.');
    }

    public function getMessages()
    {
        $user = Auth::user();
        $messages = Message::where('receiver_id', $user->id)->with('sender')->get();

        return view('messages.index', compact('messages'));
    }
}
