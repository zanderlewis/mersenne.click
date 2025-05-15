@extends('layout')

@section('title', 'Links')

@section('content')
    <!-- List of Useful Links -->
    <section id="mersenne-primes" class="max-w-6xl mx-auto mb-12">
        <div class="p-6 sm:p-8 rounded-2xl bg-slate-800/60 backdrop-blur-md border border-slate-700/70 shadow-xl">
            <h2 class="text-3xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-indigo-300 to-cyan-300 mb-8 text-center">Useful Links</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- t5k.org Card -->
                <div class="p-6 bg-slate-900/70 rounded-xl shadow-lg border border-slate-700/50 hover:shadow-cyan-900/10 hover:border-slate-600/70 transition-all duration-300 group">
                    <h3 class="text-xl font-semibold text-slate-100 mb-3 group-hover:text-cyan-200 transition-colors">t5k.org (PrimePages)</h3>
                    <p class="text-slate-300 mb-4 text-sm">Information on prime numbers by Chris Caldwell.</p>
                    <a href="https://t5k.org/" target="_blank" class="mt-4 inline-flex items-center gap-1 text-cyan-400 hover:text-cyan-300 text-sm group-hover:underline transition-all">
                        Visit t5k.org
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 opacity-0 group-hover:opacity-100 transform translate-x-0 group-hover:translate-x-1 transition-all" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                        </svg>
                    </a>
                </div>
                <!-- mersenne.org Card -->
                <div class="p-6 bg-slate-900/70 rounded-xl shadow-lg border border-slate-700/50 hover:shadow-cyan-900/10 hover:border-slate-600/70 transition-all duration-300 group">
                    <h3 class="text-xl font-semibold text-slate-100 mb-3 group-hover:text-cyan-200 transition-colors">mersenne.org</h3>
                    <p class="text-slate-300 mb-4 text-sm">Home of GIMPS.</p>
                    <a href="https://www.mersenne.org" target="_blank" class="mt-4 inline-flex items-center gap-1 text-cyan-400 hover:text-cyan-300 text-sm group-hover:underline transition-all">
                        Visit mersenne.org
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 opacity-0 group-hover:opacity-100 transform translate-x-0 group-hover:translate-x-1 transition-all" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                        </svg>
                    </a>
                </div>
                <!-- mersenne.ca Card -->
                <div class="p-6 bg-slate-900/70 rounded-xl shadow-lg border border-slate-700/50 hover:shadow-cyan-900/10 hover:border-slate-600/70 transition-all duration-300 group">
                    <h3 class="text-xl font-semibold text-slate-100 mb-3 group-hover:text-cyan-200 transition-colors">mersenne.ca</h3>
                    <p class="text-slate-300 mb-4 text-sm">Detailed GIMPS stats and software.</p>
                    <a href="https://www.mersenne.ca" target="_blank" class="mt-4 inline-flex items-center gap-1 text-cyan-400 hover:text-cyan-300 text-sm group-hover:underline transition-all">
                        Visit mersenne.ca
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 opacity-0 group-hover:opacity-100 transform translate-x-0 group-hover:translate-x-1 transition-all" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                        </svg>
                    </a>
                </div>
                <!-- Mersenne Forums Card -->
                <div class="p-6 bg-slate-900/70 rounded-xl shadow-lg border border-slate-700/50 hover:shadow-cyan-900/10 hover:border-slate-600/70 transition-all duration-300 group">
                    <h3 class="text-xl font-semibold text-slate-100 mb-3 group-hover:text-cyan-200 transition-colors">Mersenne Forums</h3>
                    <p class="text-slate-300 mb-4 text-sm">Forums for Mersenne Primes and other topics.</p>
                    <a href="https://mersenneforum.org" target="_blank" class="mt-4 inline-flex items-center gap-1 text-cyan-400 hover:text-cyan-300 text-sm group-hover:underline transition-all">
                        Visit Mersenne Forums
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 opacity-0 group-hover:opacity-100 transform translate-x-0 group-hover:translate-x-1 transition-all" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                        </svg>
                    </a>
                </div>
                <!-- PrimeSearch Github Card -->
                <div class="p-6 bg-slate-900/70 rounded-xl shadow-lg border border-slate-700/50 hover:shadow-cyan-900/10 hover:border-slate-600/70 transition-all duration-300 group">
                    <h3 class="text-xl font-semibold text-slate-100 mb-3 group-hover:text-cyan-200 transition-colors">PrimeSearch Github</h3>
                    <p class="text-slate-300 mb-4 text-sm">Source code for multiple GIMPS programs.</p>
                    <a href="https://github.com/primesearch" target="_blank" class="mt-4 inline-flex items-center gap-1 text-cyan-400 hover:text-cyan-300 text-sm group-hover:underline transition-all">
                        Visit PrimeSearch Github
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 opacity-0 group-hover:opacity-100 transform translate-x-0 group-hover:translate-x-1 transition-all" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection