<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class DisplayAnswerController extends Controller
{
    public function showRoundOneResponse()
{
    // Fetch all users and load their answers with the associated questions
    $users = User::with(['answers.question'])->get();

    // Pass the data to the view
    return view('admin.displayRoundOneAnswer', compact('users'));
}

    public function showRoundTwoResponse(){
        $users = User::with(['roundTwoAnswers.question'])->get();
        return view('admin.displayRoundTwoAnswer',compact('users'));
    }
}
