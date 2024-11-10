<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Question;
use App\Models\RoundTwoAnswer;
use App\Models\RoundTwoQuestion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StudentController extends Controller
{
    public function indexOne(){
        $questions = Question::get();

        return view('student.roundOne',compact('questions'));
    }
    public function storeAnswerRoundOne(Request $request){
        $answers = $request->input('answers'); // 'answers' should be an array with question IDs as keys
         $userId = auth()->id(); // Get the current contestant’s ID, assuming they’re logged in

    foreach ($answers as $questionId => $submittedAnswer) {
        Answer::create([
            'question_id' => $questionId,
            'user_id' => $userId,
            'submitted_answer' => $submittedAnswer,
        ]);
    }

    return redirect()->route('dashboard')->with('status', 'Your answers have been submitted!');
    }


    public function indexTwo(){
        $roundTwoQuestions = RoundTwoQuestion::get();
        return view('student.roundTwo',compact('roundTwoQuestions'));
    }

    public function storeAnswerRoundTwo(Request $request)
    {
        $answers = $request->input('answers'); // This will be an array

        foreach ($answers as $questionId => $answerText) {
            // Ensure the questionId is valid (not 0 or empty)
            if ($questionId) {
                RoundTwoAnswer::create([
                    'user_id' => auth()->id(),
                    'round_two_questions_id' => $questionId, // Use questionId as provided by the form
                    'answer_text' => $answerText,
                ]);
            }
        }

        return redirect()->route('dashboard')->with('status', 'Your answers have been submitted successfully!');
    }

}
