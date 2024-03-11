<?php

namespace App\Http\Controllers;

use App\Events\MessageEvent;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function send(Request $request)
    {
        broadcast(new MessageEvent($request->message))->toOthers();
        return response()->json(['success' => true], 200);
    }
}
