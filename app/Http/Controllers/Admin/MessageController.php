<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Message;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MessageController extends Controller
{

    public function sendMessage(Request $request)
    {
        $message = new Message([
            'sender_id' => Auth::id(),
            'receiver_id' => $request->receiver_id,
            'message' => $request->message,
        ]);
        $message->save();

        return redirect()->back()->with('success', 'Message sent successfully.');
    }

    public function replyMessage(Request $request)
    {
        $message = new Message([
            'sender_id' => $request->sender_id,
            'receiver_id' => $request->receiver_id,
            'message' => $request->message,
        ]);
        $message->save();

        return redirect()->back()->with('success', 'Reply Sent successfully.');
    }

    public function getMessageView($userId)
    {
        $userMessages = Message::where('receiver_id', Auth::id())
            ->where('sender_id', $userId)
            ->orWhere('receiver_id', $userId)
            ->where('sender_id', Auth::id())
            ->orderBy('created_at', 'asc')
            ->with('sender')
            ->get();

        return response()->json(['userMessages' => $userMessages]);
    }


}
