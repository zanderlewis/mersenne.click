@extends('layout')

@section('title', 'Join')

@section('content')
    <!-- List of Join Links -->
    <section id="mersenne-primes" class="max-w-6xl mx-auto mb-16">
        <div class="p-6 rounded-xl bg-white/5 backdrop-blur-sm border border-purple-500/20">
            <h2 class="text-3xl font-bold text-purple-100 mb-8 text-center">Join Projects</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- GIMPS Card -->
                <div class="p-6 bg-white/10 rounded-lg shadow-md border border-purple-500/20 hover:shadow-lg transition">
                    <h3 class="text-xl font-semibold text-purple-100 mb-2">GIMPS</h3>
                    <p class="text-purple-300 mb-4">Join GIMPS to search for Mersenne primes.</p>
                    <a href="https://www.mersenne.org/gettingstarted/" target="_blank" class="text-purple-400 hover:text-purple-300 underline">
                        Visit GIMPS
                    </a>
                </div>
                <!-- OBD Card -->
                <div class="p-6 bg-white/10 rounded-lg shadow-md border border-purple-500/20 hover:shadow-lg transition">
                    <h3 class="text-xl font-semibold text-purple-100 mb-2">OBD</h3>
                    <p class="text-purple-300 mb-4">Join Operation Billion Digits (OBD).</p>
                    <a href="https://www.mersenne.ca/obd" target="_blank" class="text-purple-400 hover:text-purple-300 underline">
                        Visit OBD
                    </a>
                </div>
                <!-- ODM Card -->
                <div class="p-6 bg-white/10 rounded-lg shadow-md border border-purple-500/20 hover:shadow-lg transition">
                    <h3 class="text-xl font-semibold text-purple-100 mb-2">ODM</h3>
                    <p class="text-purple-300 mb-4">Join Operation Double Mersennes (ODM).</p>
                    <a href="http://www.doublemersennes.org" target="_blank" class="text-purple-400 hover:text-purple-300 underline">
                        Visit ODM
                    </a>
                </div>
                <!-- Operation Kibibit Card -->
                <div class="p-6 bg-white/10 rounded-lg shadow-md border border-purple-500/20 hover:shadow-lg transition">
                    <h3 class="text-xl font-semibold text-purple-100 mb-2">Operation Kibibit</h3>
                    <p class="text-purple-300 mb-4">Join the Factorization of RSA-1024.</p>
                    <a href="https://www.mersenneforum.org/node/45" target="_blank" class="text-purple-400 hover:text-purple-300 underline">
                        Visit Operation Kibibit
                    </a>
                </div>
                <!-- XYYXF Project Card -->
                <div class="p-6 bg-white/10 rounded-lg shadow-md border border-purple-500/20 hover:shadow-lg transition">
                    <h3 class="text-xl font-semibold text-purple-100 mb-2">XYYXF Project</h3>
                    <p class="text-purple-300 mb-4">Join the search for primes of y^x - x^y.</p>
                    <a href="https://www.mersenneforum.org/node/63" target="_blank" class="text-purple-400 hover:text-purple-300 underline">
                        Visit XYYXF Project
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection