@extends('layouts.admin')

@section('content')

<div class="container-fluid p-0">
    <div class="row no-gutters">
        <div class="col-12">
            <div class="card shadow p-4" style="width: 100%; height: 100%;">
                <h2 class="text-center mb-4">Add New Question</h2>

                @if(session('status'))
                    <div class="alert alert-success text-center">{{ session('status') }}</div>
                @endif

                <form action="{{ route('questionsTwo.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="round_two_questions">Question Text</label>
                        <textarea name="round_two_questions" id="round_two_questions" class="w-full p-2 border-2 border-black rounded-md resize-none mb-5" rows="3" required></textarea>
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
