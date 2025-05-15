@extends('layout')

@section('title', 'Computing')

@section('content')
    <!-- List of Computing Links -->
    <section id="mersenne-primes" class="max-w-6xl mx-auto mb-12">
        <div class="p-6 sm:p-8 rounded-2xl bg-slate-800/60 backdrop-blur-md border border-slate-700/70 shadow-xl">
            <h2 class="text-3xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-indigo-300 to-cyan-300 mb-8 text-center">Computing</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Google Colab Card -->
                <div class="p-6 bg-slate-900/70 rounded-xl shadow-lg border border-slate-700/50 hover:shadow-cyan-900/10 hover:border-slate-600/70 transition-all duration-300 group">
                    <div class="flex items-center gap-3 mb-4">
                        <div class="p-2 rounded-lg bg-indigo-900/40 border border-indigo-700/40">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-indigo-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-slate-100 group-hover:text-cyan-200 transition-colors">Google Colab</h3>
                    </div>
                    <p class="text-slate-300 mb-4 text-sm">Find primes online for free with Google Colab.</p>
                    <a href="https://github.com/tdulcet/Distributed-Computing-Scripts" target="_blank" class="inline-flex items-center gap-1 text-cyan-400 hover:text-cyan-300 group-hover:underline transition-all">
                        Visit Google Colab
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 opacity-0 group-hover:opacity-100 transform translate-x-0 group-hover:translate-x-1 transition-all" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                        </svg>
                    </a>
                </div>
                
                <!-- Official GIMPS Software Card -->
                <div class="p-6 bg-slate-900/70 rounded-xl shadow-lg border border-slate-700/50 hover:shadow-cyan-900/10 hover:border-slate-600/70 transition-all duration-300 group">
                    <div class="flex items-center gap-3 mb-4">
                        <div class="p-2 rounded-lg bg-cyan-900/40 border border-cyan-700/40">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-cyan-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-slate-100 group-hover:text-cyan-200 transition-colors">Official GIMPS Software</h3>
                    </div>
                    <p class="text-slate-300 mb-4 text-sm">Download the official GIMPS software.</p>
                    <a href="https://mersenne.org/download" target="_blank" class="inline-flex items-center gap-1 text-cyan-400 hover:text-cyan-300 group-hover:underline transition-all">
                        Visit Official GIMPS Software
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 opacity-0 group-hover:opacity-100 transform translate-x-0 group-hover:translate-x-1 transition-all" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection