<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <!-- Welcome Section -->
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    @if(Auth::check())
                    <div class="text-center">
                        <p class="text-lg font-semibold">Welcome, {{ Auth::user()->name }}!</p>
                        <p class="text-sm text-gray-600 dark:text-gray-400">Your unique ID is: <span class="font-bold text-indigo-600">{{ Auth::user()->custom_id }}</span></p>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <!-- Action Section: Round One Questions -->
    <section>
        <div class="py-12">
            <div class="w-full md:w-2/3 mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-lg sm:rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        <div class="text-center mb-8">
                            <h3 class="text-2xl font-semibold text-cyan-600 dark:text-cyan-400">Start Your Contest Journey</h3>
                            <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">Click below to start Round One of the contest.</p>
                        </div>
                        <div class="flex justify-center">
                            <a href="{{ url('round-one-questions') }}" class="btn bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-6 rounded-lg shadow-md transition duration-300 ease-in-out transform hover:scale-105">
                                Start Round One
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="py-12">
            <div class="w-full md:w-2/3 mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-lg sm:rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        <div class="text-center mb-8">
                            <h3 class="text-2xl font-semibold text-cyan-600 dark:text-cyan-400">Start Your Contest Journey</h3>
                            <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">Click below to start Round two of the contest.</p>
                        </div>
                        <div class="flex justify-center">
                            <a href="{{ url('round-two-questions') }}" class="btn bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-6 rounded-lg shadow-md transition duration-300 ease-in-out transform hover:scale-105">
                                Start Round Two
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
