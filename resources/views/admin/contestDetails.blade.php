@extends('layouts.admin')
@section('content')
<div class="mt-5">
    <div class="bg-white shadow-lg rounded-lg">
        <div class="bg-blue-500 text-white py-4 px-6 rounded-t-lg text-center">
            <h4 class="text-2xl">Users</h4>
        </div>
        <div class="p-6">
            <div class="overflow-x-auto">
                <table class="min-w-full table-auto border-collapse">
                    <thead class="bg-blue-500 text-white">
                        <tr>
                            <th class="px-6 py-3 text-left text-lg font-semibold">Name</th>
                            <th class="px-6 py-3 text-left text-lg font-semibold">College</th>
                            <th class="px-6 py-3 text-left text-lg font-semibold">Phone Number</th>
                            <th class="px-6 py-3 text-left text-lg font-semibold">Score (Round 1)</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($user as $user)
                        <tr class="border-t">
                            <td class="px-6 py-4">{{ $user->name }}</td>
                            <td class="px-6 py-4">{{ $user->collegename }}</td>
                            <td class="px-6 py-4">{{ $user->mobnumber }}</td>
                            <td class="px-6 py-4">{{ $scores[$participant->id] ?? 0  }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
