@extends('layout')

@section('title', 'List')

@section('content')
    <!-- Mersenne Prime List -->
    <section id="mersenne-primes" class="max-w-6xl mx-auto mb-16">
        <div class="p-6 rounded-xl bg-white/5 backdrop-blur-sm border border-purple-500/20">
            <h2 class="text-3xl font-bold text-purple-100 mb-8 text-center">Mersenne Primes</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach ($primes as $prime)
                    <div class="p-6 bg-white/10 rounded-lg shadow-md border border-purple-500/20 hover:shadow-lg transition">
                        <h3 class="text-xl font-semibold text-purple-100 mb-2">
                            Rank: {{ $prime['rank'] }}
                        </h3>
                        <p class="text-purple-300 mb-2">
                            <span class="font-semibold">Prime:</span> 2<sup>{{ number_format(intval($prime['exponent'])) }}</sup> - 1
                        </p>
                        <p class="text-purple-300 mb-2">
                            <span class="font-semibold">Digits:</span> {{ number_format(intval($prime['digits'])) }}
                        </p>
                        <p class="text-purple-300 mb-2">
                            <span class="font-semibold">Discovered By:</span> {{ $prime['discovered_by'] }}
                        </p>
                        <p class="text-purple-300">
                            <span class="font-semibold">Year:</span> 
                            @php
                                $date = str_replace('*', '<span class="text-red-500">*</span>', $prime['date']);
                            @endphp
                            {!! $date !!}
                        </p>
                        <a href="/?n={{ $prime['exponent'] }}" class="block mt-4 text-purple-400 hover:text-purple-300 underline text-sm">
                            View Details
                        </a>
                    </div>
                @endforeach
            </div>
            <p class="text-sm text-red-500 mt-4">* May be changed due to new discoveries.</p>
        </div>
    </section>
@endsection