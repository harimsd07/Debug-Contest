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
                    <h2 class="text-center text-cyan-500 text-primary mb-5 font-weight-bold">Round One Questions</h2>
                </div>

                @if(session('status'))
                    <div class="alert alert-success text-center">{{ session('status') }}</div>
                @endif



                    @foreach($questions as $index => $question)
                    <div class="question-container">
                        <div class="question-header">{{ $index + 1 }}. <pre>{{ $question->question_text }}</pre></div>

                        <div class="mt-3">
                            <label><input type="radio" name="answers[{{ $question->id }}]" value="A" required> {{ $question->option_a }}</label><br>
                            <label><input type="radio" name="answers[{{ $question->id }}]" value="B"> {{ $question->option_b }}</label><br>
                            <label><input type="radio" name="answers[{{ $question->id }}]" value="C"> {{ $question->option_c }}</label><br>
                            <label><input type="radio" name="answers[{{ $question->id }}]" value="D"> {{ $question->option_d }}</label><br>
                        </div>
                    </div>
                    @endforeach



            </div>
        </div>
    </div>



</body>
</html>@endsection