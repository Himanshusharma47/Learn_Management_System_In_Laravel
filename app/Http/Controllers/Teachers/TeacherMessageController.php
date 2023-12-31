<?php

namespace App\Http\Controllers\Teachers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Message;
use Illuminate\Support\Facades\Auth;

class TeacherMessageController extends Controller
{
    public function teachersMessage()
    {
        $data = User::whereIn('role', ['super_admin','teacher'])->get();
        $messageData = Message::with('sender')->get();
        return view('teacher.message', compact('data', 'messageData'));
    }

    public function sendMessage(Request $request)
    {
        // Validate the request
        $request->validate([
            'receiver_id' => 'required|exists:users,id',
            'message' => 'required',
        ]);

        // Create a new message
        Message::create([
            'sender_id' => auth()->id(),
            'receiver_id' => $request->input('receiver_id'),
            'message' => $request->input('message'),
        ]);

        return redirect()->back()->with('success', 'Message sent successfully');
    }

    public function replyMessage(Request $request)
    {
        // Validate the request
        $request->validate([
            'sender_id' => 'required|exists:users,id',
            'receiver_id' => 'required|exists:users,id',
            'message' => 'required',
        ]);

        // Find the original message
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
            ->with('sender')
            ->orderBy('created_at', 'asc')
            ->get();

        return response()->json(['userMessages' => $userMessages]);
    }
}
