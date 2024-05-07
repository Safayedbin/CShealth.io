<?php

namespace App\Http\Controllers;

use App\Events\ChatMessageSent;
use Illuminate\Http\Request;

class ChatController extends Controller
{
    public function sendMessage(Request $request)
    {
        $message = $request->input('message');
        
        // Encrypt message with recipient's public key (not shown here)
        // For simplicity, assume encryption function is implemented elsewhere
        
        // Broadcast encrypted message
        event(new ChatMessageSent($encryptedMessage));

        return response()->json(['message' => 'Message sent']);
    }
}
