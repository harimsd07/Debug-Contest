<?php

namespace App\Http\Controllers;

use App\Models\Problem;
use App\Models\Question;
use App\Models\Questiontwo;
use App\Models\RoundTwoQuestion;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function create(){
        return view('admin.questionCreate');
    }

    public function submitAnswer(Request $request){
        $request->validate([
            'question_text' => 'required|string',
            'option_a' => 'required|string',
            'option_b' => 'required|string',
            'option_c' => 'required|string',
            'option_d' => 'required|string',
            'correct_answer' => 'required|in:A,B,C,D',
        ]);

        Question::create([
            'question_text' =>$request->input('question_text'),
            'option_a' => $request->input('option_a'),
            'option_b' => $request->input('option_b'),
            'option_c' => $request->input('option_c'),
            'option_d' => $request->input('option_d'),
            'correct_answer' =>$request->input('correct_answer'),
        ]);

        return redirect()->route('questions.create')->with('status','Question added successfully!');
    }

    public function showRoundOne(){
        $questions = Question::all();
        return view('contest.roundOne',compact('questions'));
    }

    public function createRoundTwoQuestion(){
        return view('admin.questionCreate2');
    }

    public function roundTwoStore(Request $request){
       $request->validate([
        'round_two_questions' => 'required|string',
       ]);

    //    dd($request->all());



       RoundTwoQuestion::create([
        'round_two_questions' =>$request->input('round_two_questions'),
       ]);

        return redirect()->route('roundTwo.create')->with('status','Question added successfully!');
    }

}
