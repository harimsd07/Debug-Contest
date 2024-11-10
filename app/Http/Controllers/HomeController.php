<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Question;
use App\Models\RoundTwoQuestion;
use App\Models\Score;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function adminIndex(){
        $user = User::all();
        $totalusers = User::where('usertype','user')->count();
        return view('admin.adminDashboard',compact('user','totalusers'));
    }

    public function showContestDetails()
    {
        $totalusers = User::where('usertype', 'user')->count();
        $user = User::all();
        $participants = User::whereHas('answers')->get();

        // Initialize an empty array to store each user's score
        $scores = [];

        // Calculate score for each participant and store it in the $scores array
        foreach ($participants as $participant) {
            // Calculate the score for the current user
            $userScore = Answer::join('questions', 'answers.question_id', '=', 'questions.id')
                ->where('answers.user_id', $participant->id)
                ->whereColumn('answers.submitted_answer', '=', 'questions.correct_answer')
                ->count();

            // Store the calculated score for each user in the $scores array
            $scores[$participant->id] = $userScore;  // Using user ID as the key
        }

        // Pass the $scores array to the view
        return view('admin.contestDetails', compact('totalusers', 'participant', 'user', 'scores'));
    }



    public function userIndex(){
        $user = User::first();
        return view('student.dashboard',compact('user'));
    }

    public function viewRoundOne(){
        $questions = Question::get();
        return view('admin.viewRoundOneQues',compact('questions'));
    }

    public function viewRoundTwo(){
        $roundTwoQuestions = RoundTwoQuestion::get();
        return view('admin.viewRoundTwoQues',compact('roundTwoQuestions'));
    }
}
