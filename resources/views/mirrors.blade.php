@extends('layout')

@section('title', 'Software')

@section('content')
    <!-- List of Software Mirrors -->
    <section id="mersenne-primes" class="max-w-6xl mx-auto mb-12">
        <div class="p-6 sm:p-8 rounded-2xl bg-slate-800/60 backdrop-blur-md border border-slate-700/70 shadow-xl">
            <h2 class="text-3xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-indigo-300 to-cyan-300 mb-8 text-center">Software Mirrors</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- mersenne.ca Card -->
                <div class="p-6 bg-slate-900/70 rounded-xl shadow-lg border border-slate-700/50 hover:shadow-cyan-900/10 hover:border-slate-600/70 transition-all duration-300 group">
                    <div class="flex items-center gap-3 mb-4">
                        <div class="p-2 rounded-lg bg-indigo-900/40 border border-indigo-700/40">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-indigo-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-slate-100 group-hover:text-cyan-200 transition-colors">mersenne.ca</h3>
                    </div>
                    <p class="text-slate-300 mb-4 text-sm">Large software mirror for GIMPS.</p>
                    <a href="https://download.mersenne.ca/" target="_blank" class="inline-flex items-center gap-1 text-cyan-400 hover:text-cyan-300 group-hover:underline transition-all">
                        Visit mersenne.ca
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 opacity-0 group-hover:opacity-100 transform translate-x-0 group-hover:translate-x-1 transition-all" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                        </svg>
                    </a>
                </div>
                
                <!-- mersenne.org Card -->
                <div class="p-6 bg-slate-900/70 rounded-xl shadow-lg border border-slate-700/50 hover:shadow-cyan-900/10 hover:border-slate-600/70 transition-all duration-300 group">
                    <div class="flex items-center gap-3 mb-4">
                        <div class="p-2 rounded-lg bg-cyan-900/40 border border-cyan-700/40">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-cyan-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M9 19l3 3m0 0l3-3m-3 3V10" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-slate-100 group-hover:text-cyan-200 transition-colors">mersenne.org</h3>
                    </div>
                    <p class="text-slate-300 mb-4 text-sm">Official GIMPS downloads.</p>
                    <a href="https://www.mersenne.org/download/" target="_blank" class="inline-flex items-center gap-1 text-cyan-400 hover:text-cyan-300 group-hover:underline transition-all">
                        Visit mersenne.org
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 opacity-0 group-hover:opacity-100 transform translate-x-0 group-hover:translate-x-1 transition-all" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                        </svg>
                    </a>
                </div>
                
                <!-- PrimeSearch Github Card -->
                <div class="p-6 bg-slate-900/70 rounded-xl shadow-lg border border-slate-700/50 hover:shadow-cyan-900/10 hover:border-slate-600/70 transition-all duration-300 group">
                    <div class="flex items-center gap-3 mb-4">
                        <div class="p-2 rounded-lg bg-slate-800/60 border border-slate-700/40">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-slate-300" viewBox="0 0 24 24" fill="currentColor">
                                <path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-slate-100 group-hover:text-cyan-200 transition-colors">PrimeSearch Github</h3>
                    </div>
                    <p class="text-slate-300 mb-4 text-sm">Source code for multiple GIMPS programs.</p>
                    <a href="https://github.com/primesearch" target="_blank" class="inline-flex items-center gap-1 text-cyan-400 hover:text-cyan-300 group-hover:underline transition-all">
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