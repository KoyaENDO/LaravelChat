<?php

namespace App\Http\Controllers;

use App\Events\MessagePostEvent;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function store(Request $request) {
        $userMessage = [
            'name' => 'ユーザ'.$request->userId,
            'message' => $request->message
        ];
        event(new MessagePostEvent($userMessage));
        return response()->json($userMessage);
    }
}
