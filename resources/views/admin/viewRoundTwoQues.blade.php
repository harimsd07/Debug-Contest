@extends('layouts.admin')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Round One Questions</title>

    <style>
        .question-container {
            background-color: #e0f7fa; /* Soft blue background */
            padding: 20px;
            border-radius: 8px;
            margin-bottom: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .question-header {
            font-size: 1.5em;
            font-weight: bold;
            color: #2e2e2e;
            margin-bottom: 10px;
        }
        .question-code {
            background-color: #f7f7f7;
            padding: 15px;
            border: 1px solid #b0bec5;
            border-radius: 5px;
            font-family: monospace;
            color: #37474f;
        }
        .submit-btn {
            background-color: #00796b;
            color: #fff;
            font-weight: bold;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .submit-btn:hover {
            background-color: #004d40;
        }

        /* Timer Styles */
        .timer-container {
            background-color: #00796b;
            padding: 15px;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 999;
            font-size: 1.2em;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        body {
            margin-top: 60px; /* Adjust the body content to not overlap the timer */
        }
    </style>
</head>
<body>



    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-lg-8">

                <div class="header-container">
                    <h1 class="text-center text-cyan-500 text-primary mb-5 font-weight-bold">Round Two Questions</h1>
                </div>

                @if(session('status'))
                    <div class="alert alert-success text-center">{{ session('status') }}</div>
                @endif


                    <x-slot name="header">
                        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                            {{ __('Round Two Questions') }}
                        </h2>
                    </x-slot>

                    <div class="py-12">
                        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                                <div class="p-6 text-gray-900 dark:text-gray-100">
                                    <h3 class="text-2xl font-semibold mb-4">Solve the following problems:</h3>


                                        @foreach($roundTwoQuestions as $index => $roundTwoQuestion)
                                        <div class="question-container mb-6">
                                            <div class="question-header text-lg font-semibold mb-2">
                                                {{ $index + 1 }}.
                                                <pre class="text-md">{{ $roundTwoQuestion->round_two_questions }}</pre>
                                            </div>

                                            <!-- Add a Textarea for Answer -->
                                            <div class="form-group">
                                                <label for="answer{{ $roundTwoQuestion->id }}" class="block font-medium">Your Answer</label>
                                                <textarea id="answer{{ $roundTwoQuestion->id }}" name="answers[{{ $roundTwoQuestion->id }}]" class="w-full p-2 text-black border-2 border-gray-300 rounded-md resize-none mb-5" rows="5" required></textarea>
                                            </div>
                                        </div>
                                    @endforeach



                                </div>
                            </div>
                        </div>
                    </div>

            </div>
        </div>
    </div>



</body>
</html>
@endsection


