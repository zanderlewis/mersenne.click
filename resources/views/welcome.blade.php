@extends('layout')

@section('title', 'Welcome')

@section('content')
    <!-- Search Section -->
    <section id="search" class="max-w-4xl mx-auto mb-12">
        <div class="p-6 sm:p-8 rounded-2xl bg-slate-800/60 backdrop-blur-md border border-slate-700/70 shadow-xl">
            <h2 class="text-3xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-indigo-300 to-cyan-300 mb-6 text-center">Search for Mersenne Primes</h2>
            <form id="search-form" action="{{ route('index') }}" method="GET">
                <div class="flex flex-col sm:flex-row items-center gap-6">
                    <label for="n" class="text-lg text-slate-200 font-medium">Enter a number (n):</label>
                    <div class="flex w-full gap-4">
                        <input 
                            type="number" 
                            name="n" 
                            id="n" 
                            class="w-full p-3 rounded-lg bg-slate-900/70 border border-slate-600 focus:outline-none focus:ring-2 focus:ring-cyan-500/50 text-slate-200 placeholder-slate-500" 
                            placeholder="e.g., 31" 
                            required 
                            min="2" 
                            value="{{ $request->n }}"
                        >
                        <button 
                            type="submit" 
                            class="px-6 py-3 bg-gradient-to-r from-indigo-600 to-cyan-600 hover:from-indigo-500 hover:to-cyan-500 text-white font-medium rounded-lg focus:outline-none focus:ring-2 focus:ring-cyan-500/50 transition-all duration-200 shadow-lg hover:shadow-cyan-500/20"
                        >
                            Search
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </section>

    <!-- Results Section -->
    <section id="result" class="max-w-4xl mx-auto mb-12">
        <div class="p-6 sm:p-8 rounded-2xl bg-slate-800/60 backdrop-blur-md border border-slate-700/70 shadow-xl">
            <h3 class="text-2xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-indigo-300 to-cyan-300 mb-6 text-center">Results</h3>
            <div id="number-info" class="space-y-6">
                <div class="text-lg"><span class="text-slate-300 font-semibold">Number (n):</span> <span class="text-cyan-300">{{ number_format(intval($request->n)) }}</span></div>
                <span class="text-slate-300 text-xl font-semibold block">Links</span>
                <hr class="border-slate-700">
                <div class="text-lg space-y-4">
                    <a href="https://www.mersenne.org/report_exponent/?exp_lo={{ $request->n }}&full=1&swversion=1" class="block text-cyan-400 hover:text-cyan-300 transition-colors flex items-center gap-2" target="_blank">
                        <span>mersenne.org (Common)</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                        </svg>
                    </a>
                    <a href="https://www.mersenne.ca/exponent/{{ $request->n }}" class="block text-cyan-400 hover:text-cyan-300 transition-colors flex items-center gap-2" target="_blank">
                        <span>mersenne.ca (Detailed)</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection