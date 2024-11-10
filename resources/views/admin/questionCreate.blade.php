@extends('layouts.admin')

@section('content')

<div class="container-fluid p-0">
    <div class="row no-gutters">
        <div class="col-12">
            <div class="card shadow p-4" style="width: 100% height:100%;">
                <h2 class="text-center mb-4">Add New Question</h2>

                @if(session('status'))
                    <div class="alert alert-success text-center">{{ session('status') }}</div>
                @endif

                <form action="{{ route('questions.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="question_text">Question Text</label>
                        <div class="flex justify-center">
                            <textarea name="question_text" id="question_text" class="w-full p-2 border-2 border-black rounded-md resize-none mb-5" rows="3" required></textarea>
                        </div>
                    </div>


                    <div class="form-group">
                        <label for="option_a">Option A</label>
                        <input type="text" name="option_a" id="option_a" class="p-2 border-2 resize-none mb-5 form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="option_b">Option B</label>
                        <input type="text" name="option_b" id="option_b" class="p-2 border-2 resize-none mb-5 form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="option_c">Option C</label>
                        <input type="text" name="option_c" id="option_c" class="p-2 border-2 resize-none mb-5 form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="option_d">Option D</label>
                        <input type="text" name="option_d" id="option_d" class="p-2 border-2 resize-none mb-5 form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="correct_answer">Correct Answer</label>
                        <select name="correct_answer" id="correct_answer" class="p-2 border-2 resize-none mb-5 form-control" required>
                            <option class="p-2 mb-5" value="A">A</option>
                            <option value="B">B</option>
                            <option value="C">C</option>
                            <option value="D">D</option>
                        </select>
                    </div>

                    <button type="submit" class="bg-blue-500 text-white font-semibold py-2 px-4 rounded hover:bg-blue-600 transition duration-200">
                        Add Question
                    </button>

                </form>
            </div>
        </div>
    </div>
</div>

@endsection
