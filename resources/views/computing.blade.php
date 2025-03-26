@extends('layout')

@section('title', 'Computing')

@section('content')
    <!-- List of Computing Links -->
    <section id="mersenne-primes" class="max-w-6xl mx-auto mb-16">
        <div class="p-6 rounded-xl bg-white/5 backdrop-blur-sm border border-purple-500/20">
            <h2 class="text-3xl font-bold text-purple-100 mb-8 text-center">Computing</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Google Colab Card -->
                <div class="p-6 bg-white/10 rounded-lg shadow-md border border-purple-500/20 hover:shadow-lg transition">
                    <h3 class="text-xl font-semibold text-purple-100 mb-2">Google Colab</h3>
                    <p class="text-purple-300 mb-4">Find primes online for free with Google Colab.</p>
                    <a href="https://github.com/tdulcet/Distributed-Computing-Scripts" target="_blank" class="text-purple-400 hover:text-purple-300 underline">
                        Visit Google Colab
                    </a>
                </div>
                <!-- Official GIMPS Software Card -->
                <div class="p-6 bg-white/10 rounded-lg shadow-md border border-purple-500/20 hover:shadow-lg transition">
                    <h3 class="text-xl font-semibold text-purple-100 mb-2">Official GIMPS Software</h3>
                    <p class="text-purple-300 mb-4">Download the official GIMPS software.</p>
                    <a href="https://mersenne.org/download" target="_blank" class="text-purple-400 hover:text-purple-300 underline">
                        Visit Official GIMPS Software
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection