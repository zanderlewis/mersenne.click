@extends('layout')

@section('title', 'Welcome')

@section('content')
    <!-- Search Section -->
    <section id="search" class="max-w-6xl mx-auto mb-16">
        <div class="p-8 rounded-xl bg-white/10 backdrop-blur-md border border-purple-500/30 shadow-lg">
            <h2 class="text-4xl font-extrabold text-purple-100 mb-6 text-center">Search for Mersenne Primes</h2>
            <form id="search-form" action="{{ route('index') }}" method="GET">
                <div class="flex flex-col sm:flex-row items-center space-y-6 sm:space-y-0 sm:space-x-6">
                    <label for="n" class="text-lg text-purple-200 font-medium">Enter a number (n):</label>
                    <input type="number" name="n" id="n" class="w-full sm:w-1/3 p-3 rounded-lg bg-white/10 border border-purple-500/30 focus:outline-none focus:ring focus:ring-purple-500/50 text-purple-500 placeholder-purple-400" placeholder="e.g., 31" required min="2" value="{{ $request->n }}">
                    <button type="submit" class="w-full sm:w-auto px-6 py-3 bg-purple-600 text-white font-semibold rounded-lg hover:bg-purple-700 focus:outline-none focus:ring focus:ring-purple-500/50 transition">
                        Search
                    </button>
                </div>
            </form>
        </div>
    </section>

    <!-- Results Section -->
    <section id="result" class="max-w-6xl mx-auto mb-16">
        <div class="p-8 rounded-xl bg-white/10 backdrop-blur-md border border-purple-500/30 shadow-lg">
            <h3 class="text-3xl font-bold text-purple-100 mb-6 text-center">Results</h3>
            <div id="number-info" class="space-y-6">
                <div class="text-lg"><span class="text-purple-300 font-semibold">Number (n):</span> {{ number_format(intval($request->n)) }}</div>
                <span class="text-purple-300 text-xl font-semibold">Links</span>
                <hr class="border-purple-500/30">
                <div class="text-lg space-y-4">
                    <a href="https://www.mersenne.org/report_exponent/?exp_lo={{ $request->n }}&full=1&swversion=1" class="block text-purple-400 hover:underline hover:text-purple-300 transition" target="_blank">mersenne.org (Common)</a>
                    <a href="https://www.mersenne.ca/exponent/{{ $request->n }}" class="block text-purple-400 hover:underline hover:text-purple-300 transition" target="_blank">mersenne.ca (Detailed)</a>
                </div>
            </div>
        </div>
    </section>
@endsection