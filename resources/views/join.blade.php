@extends('layout')

@section('title', 'Join')

@section('content')
    <!-- List of Join Links -->
    <section id="mersenne-primes" class="max-w-6xl mx-auto mb-12">
        <div class="p-6 sm:p-8 rounded-2xl bg-slate-800/60 backdrop-blur-md border border-slate-700/70 shadow-xl">
            <h2 class="text-3xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-indigo-300 to-cyan-300 mb-8 text-center">Join Projects</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- GIMPS Card -->
                <div class="p-6 bg-slate-900/70 rounded-xl shadow-lg border border-slate-700/50 hover:shadow-cyan-900/10 hover:border-slate-600/70 transition-all duration-300 group">
                    <h3 class="text-xl font-semibold text-slate-100 mb-2 group-hover:text-cyan-200 transition-colors">GIMPS</h3>
                    <p class="text-slate-300 mb-4 text-sm">Join GIMPS to search for Mersenne primes.</p>
                    <a href="https://www.mersenne.org/gettingstarted/" target="_blank" class="inline-flex items-center gap-1 text-cyan-400 hover:text-cyan-300 group-hover:underline transition-all">
                        Visit GIMPS
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 opacity-0 group-hover:opacity-100 transform translate-x-0 group-hover:translate-x-1 transition-all" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                        </svg>
                    </a>
                </div>
                
                <!-- OBD Card -->
                <div class="p-6 bg-slate-900/70 rounded-xl shadow-lg border border-slate-700/50 hover:shadow-cyan-900/10 hover:border-slate-600/70 transition-all duration-300 group">
                    <h3 class="text-xl font-semibold text-slate-100 mb-2 group-hover:text-cyan-200 transition-colors">OBD</h3>
                    <p class="text-slate-300 mb-4 text-sm">Join Operation Billion Digits (OBD).</p>
                    <a href="https://www.mersenne.ca/obd" target="_blank" class="inline-flex items-center gap-1 text-cyan-400 hover:text-cyan-300 group-hover:underline transition-all">
                        Visit OBD
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 opacity-0 group-hover:opacity-100 transform translate-x-0 group-hover:translate-x-1 transition-all" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                        </svg>
                    </a>
                </div>
                
                <!-- ODM Card -->
                <div class="p-6 bg-slate-900/70 rounded-xl shadow-lg border border-slate-700/50 hover:shadow-cyan-900/10 hover:border-slate-600/70 transition-all duration-300 group">
                    <h3 class="text-xl font-semibold text-slate-100 mb-2 group-hover:text-cyan-200 transition-colors">ODM</h3>
                    <p class="text-slate-300 mb-4 text-sm">Join Operation Double Mersennes (ODM).</p>
                    <a href="http://www.doublemersennes.org" target="_blank" class="inline-flex items-center gap-1 text-cyan-400 hover:text-cyan-300 group-hover:underline transition-all">
                        Visit ODM
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 opacity-0 group-hover:opacity-100 transform translate-x-0 group-hover:translate-x-1 transition-all" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                        </svg>
                    </a>
                </div>
                
                <!-- Operation Kibibit Card -->
                <div class="p-6 bg-slate-900/70 rounded-xl shadow-lg border border-slate-700/50 hover:shadow-cyan-900/10 hover:border-slate-600/70 transition-all duration-300 group">
                    <h3 class="text-xl font-semibold text-slate-100 mb-2 group-hover:text-cyan-200 transition-colors">Operation Kibibit</h3>
                    <p class="text-slate-300 mb-4 text-sm">Join the Factorization of RSA-1024.</p>
                    <a href="https://www.mersenneforum.org/node/45" target="_blank" class="inline-flex items-center gap-1 text-cyan-400 hover:text-cyan-300 group-hover:underline transition-all">
                        Visit Operation Kibibit
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 opacity-0 group-hover:opacity-100 transform translate-x-0 group-hover:translate-x-1 transition-all" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                        </svg>
                    </a>
                </div>
                
                <!-- XYYXF Project Card -->
                <div class="p-6 bg-slate-900/70 rounded-xl shadow-lg border border-slate-700/50 hover:shadow-cyan-900/10 hover:border-slate-600/70 transition-all duration-300 group">
                    <h3 class="text-xl font-semibold text-slate-100 mb-2 group-hover:text-cyan-200 transition-colors">XYYXF Project</h3>
                    <p class="text-slate-300 mb-4 text-sm">Join the search for primes of y^x - x^y.</p>
                    <a href="https://www.mersenneforum.org/node/63" target="_blank" class="inline-flex items-center gap-1 text-cyan-400 hover:text-cyan-300 group-hover:underline transition-all">
                        Visit XYYXF Project
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 opacity-0 group-hover:opacity-100 transform translate-x-0 group-hover:translate-x-1 transition-all" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection