<?php

namespace App\Http\Controllers;

use App\Message;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function create(Request $request)
    {
        $input = $request->validate([
            'name' => 'required|string',
            'message' => 'required|string'
        ]);

        $message = new Message();
        $message->name = $input['name'];
        $message->message = $input['message'];
        $message->save();

        return redirect('/')->with('success', true);
    }
}
