@extends('layout')

@section('title', 'Welcome')

@section('content')
    <!-- Search Section -->
    <section id="search" class="max-w-6xl mx-auto mb-16">
        <div class="p-6 rounded-xl bg-white/5 backdrop-blur-sm border border-purple-500/20">
            <h2 class="text-3xl font-bold text-purple-100 mb-4">Search for Mersenne Primes</h2>
            <form id="search-form" action="{{ route('index') }}" method="GET">
                <div class="flex flex-col sm:flex-row items-center space-y-4 sm:space-y-0 sm:space-x-4">
                    <label for="n" class="text-lg text-purple-200">Enter a number (n):</label>
                    <input type="number" name="n" id="n" class="w-full sm:w-1/3 p-2 rounded-md bg-white/5 border border-purple-500/20 focus:outline-none focus:ring focus:ring-purple-500/50 text-purple-500" required min="2" value="{{ $request->n }}">
                    <button type="submit" class="w-full sm:w-auto p-2 bg-purple-500 text-white font-semibold rounded-md hover:bg-purple-600 focus:outline-none focus:ring focus:ring-purple-500/50">
                        Search
                    </button>
                </div>
            </form>
        </div>
    </section>

    <!-- Results Section -->
    <section id="result" class="max-w-6xl mx-auto mb-16">
        <div class="p-6 rounded-xl bg-white/5 backdrop-blur-sm border border-purple-500/20">
            <h3 class="text-2xl font-bold text-purple-100 mb-4">Results</h3>
            <div id="number-info" class="space-y-4">
                <div class="text-lg pb-4"><span class="text-purple-300">Number (n):</span> {{ number_format(intval($request->n)) }}</div>
                <span class="text-purple-300 text-xl font-semibold">Links</span>
                <hr class="border-purple-500/20">
                <div class="text-lg space-y-4">
                    <a href="https://www.mersenne.org/report_exponent/?exp_lo={{ $request->n }}&full=1&swversion=1" class="block text-purple-400 hover:underline" target="_blank">mersenne.org (Common)</a>
                    <a href="https://www.mersenne.ca/exponent/{{ $request->n }}" class="block text-purple-400 hover:underline" target="_blank">mersenne.ca (Detailed)</a>
                </div>
            </div>
        </div>
    </section>
@endsection