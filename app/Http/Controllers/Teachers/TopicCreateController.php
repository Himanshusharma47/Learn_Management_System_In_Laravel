<?php

namespace App\Http\Controllers\Teachers;

use App\Http\Controllers\Controller;
use App\Models\Topic;
use Illuminate\Http\Request;

class TopicCreateController extends Controller
{
    public function topicCreate(Request $request)
    {
        $request->validate([
            'subject_id' => 'required',
            'topic' => 'required',
            'file_path' => 'required|mimes:pdf,gif,png,jpg,jpeg|max:2048',

        ]);

        dd($request->all());

        $fileName = time() . '_' . $request->file('file_path')->getClientOriginalName();

        $filePath = $request->file('file_path')->storeAs('public/assets', $fileName);


        $subject = Topic::create([
            'subject_id' => $request->input('subject_id'),
            'topic' => $request->input('topic'),
            'file_path' => $filePath,
        ]);

        if($subject)
        {
            return redirect()->back()->with('success', '  successfully Created');
        }
        else
        {
            return redirect()->back()->with('error', ' Fail To Create');
        }


    }
}
