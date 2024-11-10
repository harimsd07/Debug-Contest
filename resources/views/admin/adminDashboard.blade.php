<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Admin Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    @if(Auth::check())
                    <p class="text-gray-500">Welcome, <span class="font-bold">{{ Auth::user()->name }}</span>! Your ID is: <span class="font-bold">{{ Auth::user()->custom_id }}</span></p>
                    @else
                    <p>User is not authenticated.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <section>
        <div class="container mx-auto my-8 px-6">


            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 align-middle">
                <div class="col-span-1">
                    <div class="bg-yellow-500 text-white shadow-lg rounded-lg p-6 flex items-center justify-between">
                        <div>
                            <h5 class="text-xl font-semibold text-center">Total Users</h5>
                            <p class="text-4xl font-bold text-center">{{ $totalusers }}</p>
                        </div>
                        <div class="bg-yellow-600 p-3 rounded-full">
                            <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 2L2 7h3v7h5V7h3l-10 5z"></path>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="py-12">
            <div class="w-full sm:w-80 mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100 flex justify-center">
                        <a href="{{ url('contestDetails') }}" class="btn btn-sm bg-cyan-500 border-cyan-500 text-white hover:bg-cyan-600 text-center hover:border-cyan-600 rounded-lg px-6 py-2 transition-all">
                            Contest Details
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="py-12">
            <div class="w-full sm:w-80 mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100 flex justify-center">
                        <a href="{{ url('admin/questions/create') }}" class="btn btn-sm bg-cyan-500 border-cyan-500 text-white text-center hover:bg-cyan-600 hover:border-cyan-600 rounded-lg px-6 py-2 transition-all">
                            Add Round One Questions
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="py-12">
            <div class="w-full sm:w-80 mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100 flex justify-center">
                        <a href="{{ url('RoundOneQuestions') }}" class="btn btn-sm bg-cyan-500 border-cyan-500 text-white text-center hover:bg-cyan-600 hover:border-cyan-600 rounded-lg px-6 py-2 transition-all">
                            View Round One Questions
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="py-12">
            <div class="w-full sm:w-80 mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100 flex justify-center">
                        <a href="{{ url('showRoundOneAnswer') }}" class="btn btn-sm bg-cyan-500 border-cyan-500 text-white text-center hover:bg-cyan-600 hover:border-cyan-600 rounded-lg px-6 py-2 transition-all">
                            Display Round One Answer
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="py-12">
            <div class="w-full sm:w-80 mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100 flex justify-center">
                        <a href="{{ url('admin/questionsTwo/create') }}" class="btn btn-sm bg-cyan-500 border-cyan-500 text-white text-center hover:bg-cyan-600 hover:border-cyan-600 rounded-lg px-6 py-2 transition-all">
                             Add Round Two Questions
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="py-12">
            <div class="w-full sm:w-80 mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100 flex justify-center">
                        <a href="{{ url('RoundTwoQuestions') }}" class="btn btn-sm bg-cyan-500 border-cyan-500 text-white text-center hover:bg-cyan-600 hover:border-cyan-600 rounded-lg px-6 py-2 transition-all">
                            View Round Two Questions
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="py-12">
            <div class="w-full sm:w-80 mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100 flex justify-center">
                        <a href="{{ url('showRoundTwoAnswer') }}" class="btn btn-sm bg-cyan-500 border-cyan-500 text-white text-center hover:bg-cyan-600 hover:border-cyan-600 rounded-lg px-6 py-2 transition-all">
                            Display Round Two Answer
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
