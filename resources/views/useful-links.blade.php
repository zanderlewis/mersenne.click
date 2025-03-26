@extends('layout')

@section('title', 'Links')

@section('content')
    <!-- List of Useful Links -->
    <section id="mersenne-primes" class="max-w-6xl mx-auto mb-16">
        <div class="p-6 rounded-xl bg-white/5 backdrop-blur-sm border border-purple-500/20">
            <h2 class="text-3xl font-bold text-purple-100 mb-8 text-center">Useful Links</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- t5k.org Card -->
                <div class="p-6 bg-white/10 rounded-lg shadow-md border border-purple-500/20 hover:shadow-lg transition">
                    <h3 class="text-xl font-semibold text-purple-100 mb-2">t5k.org (PrimePages)</h3>
                    <p class="text-purple-300 mb-4">Information on prime numbers by Chris Caldwell (no longer maintained).</p>
                    <a href="https://t5k.org/" target="_blank" class="text-purple-400 hover:text-purple-300 underline">
                        Visit t5k.org
                    </a>
                </div>
                <!-- mersenne.org Card -->
                <div class="p-6 bg-white/10 rounded-lg shadow-md border border-purple-500/20 hover:shadow-lg transition">
                    <h3 class="text-xl font-semibold text-purple-100 mb-2">mersenne.org</h3>
                    <p class="text-purple-300 mb-4">Home of GIMPS.</p>
                    <a href="https://www.mersenne.org" target="_blank" class="text-purple-400 hover:text-purple-300 underline">
                        Visit mersenne.org
                    </a>
                </div>
                <!-- mersenne.ca Card -->
                <div class="p-6 bg-white/10 rounded-lg shadow-md border border-purple-500/20 hover:shadow-lg transition">
                    <h3 class="text-xl font-semibold text-purple-100 mb-2">mersenne.ca</h3>
                    <p class="text-purple-300 mb-4">Detailed GIMPS stats and software.</p>
                    <a href="https://www.mersenne.ca" target="_blank" class="text-purple-400 hover:text-purple-300 underline">
                        Visit mersenne.ca
                    </a>
                </div>
                <!-- Mersenne Forums Card -->
                <div class="p-6 bg-white/10 rounded-lg shadow-md border border-purple-500/20 hover:shadow-lg transition">
                    <h3 class="text-xl font-semibold text-purple-100 mb-2">Mersenne Forums</h3>
                    <p class="text-purple-300 mb-4">Forums for Mersenne Primes and other topics.</p>
                    <a href="https://mersenneforum.org" target="_blank" class="text-purple-400 hover:text-purple-300 underline">
                        Visit Mersenne Forums
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
                <!-- Durable Science Card -->
                <div class="p-6 bg-white/10 rounded-lg shadow-md border border-purple-500/20 hover:shadow-lg transition">
                    <h3 class="text-xl font-semibold text-purple-100 mb-2">Durable Science, LLC</h3>
                    <p class="text-purple-300 mb-4">Website of the finder of the world's largest prime.</p>
                    <a href="https://www.durable-science.net" target="_blank" class="text-purple-400 hover:text-purple-300 underline">
                        Visit Durable Science
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection