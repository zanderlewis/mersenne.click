@extends('layout')

@section('title', 'Software')

@section('content')
    <!-- List of Software Mirrors -->
    <section id="mersenne-primes" class="max-w-6xl mx-auto mb-16">
        <div class="p-6 rounded-xl bg-white/5 backdrop-blur-sm border border-purple-500/20">
            <h2 class="text-3xl font-bold text-purple-100 mb-8 text-center">Software Mirrors</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- mersenne.ca Card -->
                <div class="p-6 bg-white/10 rounded-lg shadow-md border border-purple-500/20 hover:shadow-lg transition">
                    <h3 class="text-xl font-semibold text-purple-100 mb-2">mersenne.ca</h3>
                    <p class="text-purple-300 mb-4">Large software mirror for GIMPS.</p>
                    <a href="https://download.mersenne.ca/" target="_blank" class="text-purple-400 hover:text-purple-300 underline">
                        Visit mersenne.ca
                    </a>
                </div>
                <!-- mersenne.org Card -->
                <div class="p-6 bg-white/10 rounded-lg shadow-md border border-purple-500/20 hover:shadow-lg transition">
                    <h3 class="text-xl font-semibold text-purple-100 mb-2">mersenne.org</h3>
                    <p class="text-purple-300 mb-4">Official GIMPS downloads.</p>
                    <a href="https://www.mersenne.org/download/" target="_blank" class="text-purple-400 hover:text-purple-300 underline">
                        Visit mersenne.org
                    </a>
                </div>
                <!-- PrimeSearch Github Card -->
                <div class="p-6 bg-white/10 rounded-lg shadow-md border border-purple-500/20 hover:shadow-lg transition">
                    <h3 class="text-xl font-semibold text-purple-100 mb-2">PrimeSearch Github</h3>
                    <p class="text-purple-300 mb-4">Source code for multiple GIMPS programs.</p>
                    <a href="https://github.com/primesearch" target="_blank" class="text-purple-400 hover:text-purple-300 underline">
                        Visit PrimeSearch Github
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection