<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmailController extends Controller
{
    public function sendEmail(Request $request)
    {
        $emailData = [
            'to_name' => $request->to_name,
            'message' => $request->message,
        ];

      
        return response()->json(['success' => true, 'data' => $emailData]);
    }
}
