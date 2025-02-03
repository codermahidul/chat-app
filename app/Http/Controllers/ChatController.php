<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ChatController extends Controller
{
    public function index()
    {
        $users  = User::where('id', '!=', auth()->id())->get();
        return view('dashboard', compact('users'));
    }

    function fetchMessages(Request $request)
    {
        $user = User::findOrfail($request->selected_id);
        return response()->json([
            'user' => $user,
        ]);
    }


}
