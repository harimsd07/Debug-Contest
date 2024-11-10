@extends('layouts.admin')

@section('content')
    <h2 class="text-2xl font-bold text-cyan-700 mb-8">Round One Responses</h2>

    @foreach($users as $user)
        <div class="user-container mb-10 p-6 bg-white shadow-md rounded-lg border border-gray-300">
            <h3 class="text-xl font-semibold text-gray-800 mb-3">Name: {{ $user->name }}</h3>
            <p><span class="font-semibold">Register Number:</span> {{ $user->regNumber }}</p>
            <p><span class="font-semibold">Phone Number:</span> {{ $user->mobnumber }}</p>

            <table class="table-auto w-full mt-4 border-collapse">
                <thead class="bg-green-600 text-white">
                    <tr>
                        <th class="px-6 py-3 text-left font-semibold text-lg">Question</th>
                        <th class="px-6 py-3 text-left font-semibold text-lg">Selected Answer</th>
                        <th class="px-6 py-3 text-left font-semibold text-lg">Correct Answer</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($user->answers as $answer)
                        <tr class="bg-gray-50 odd:bg-gray-100 border-b">
                            <td class="px-4 py-4 text-gray-800">
                                <div class="font-medium">{{ $answer->question->question_text }}</div>
                            </td>
                            <td class="px-4 py-4 text-gray-700">
                                @if($answer->submitted_answer)
                                    {{ $answer->submitted_answer }}
                                @else
                                    <span class="text-red-500 font-semibold">Unanswered</span>
                                @endif
                            </td>
                            <td class="px-4 py-4 text-gray-700 font-semibold">
                                {{ $answer->question->correct_answer }}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endforeach

    <style>
        /* Additional styling for structure and appearance */
        .user-container {
            transition: transform 0.2s ease-in-out;
        }
        .user-container:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }
        .table-auto th {
            position: sticky;
            top: 0;
            z-index: 10;
        }
    </style>
@endsection
