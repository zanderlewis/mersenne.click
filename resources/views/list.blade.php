@extends('layout')

@section('title', 'List')

@section('content')
    <!-- Mersenne Prime List -->
    <section id="mersenne-primes" class="max-w-6xl mx-auto mb-12">
        <div class="p-6 sm:p-8 rounded-2xl bg-slate-800/60 backdrop-blur-md border border-slate-700/70 shadow-xl">
            <h2 class="text-3xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-indigo-300 to-cyan-300 mb-8 text-center">Mersenne Primes</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach ($primes as $prime)
                    <div class="p-6 bg-slate-900/70 rounded-xl shadow-lg border border-slate-700/50 hover:shadow-cyan-900/10 hover:border-slate-600/70 transition-all duration-300 group">
                        <div class="flex justify-between items-start">
                            <h3 class="text-2xl font-semibold {{ isset($prime['maybe']) && $prime['maybe'] ? 'text-red-400' : 'text-slate-100' }} mb-3 group-hover:{{ isset($prime['maybe']) && $prime['maybe'] ? 'text-red-500' : 'text-cyan-200' }} transition-colors">
                                #{{ $prime['rank'] }}
                            </h3>
                            <span class="px-2 py-1 text-xs rounded-full bg-indigo-900/60 text-indigo-300 border border-indigo-700/50">M{{ $prime['exponent'] }}</span>
                        </div>
                        
                        <p class="text-slate-300 mb-3 text-sm">
                            <span class="font-medium text-slate-400">Prime:</span> 
                            <span class="font-mono">2<sup>{{ number_format(intval($prime['exponent'])) }}</sup> - 1</span>
                        </p>
                        
                        <p class="text-slate-300 mb-3 text-sm">
                            <span class="font-medium text-slate-400">Digits:</span> s
                            <span class="font-mono">{{ number_format(intval($prime['digits'])) }}</span>
                        </p>
                        
                        <p class="text-slate-300 mb-3 text-sm">
                            <span class="font-medium text-slate-400">Discovered By:</span> 
                            <span>{{ $prime['discovered_by'] }}</span>
                        </p>
                        
                        <p class="text-slate-300 mb-1 text-sm">
                            <span class="font-medium text-slate-400">Date:</span> 
                            @php
                                $date = str_replace('*', '<span class="text-red-400">*</span>', $prime['date']);
                            @endphp
                            <span>{!! $date !!}</span>
                        </p>
                        
                        <a href="/?n={{ $prime['exponent'] }}" class="mt-4 inline-flex items-center gap-1 text-cyan-400 hover:text-cyan-300 text-sm group-hover:underline transition-all">
                            View Details
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 opacity-0 group-hover:opacity-100 transform translate-x-0 group-hover:translate-x-1 transition-all" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                        </a>
                    </div>
                @endforeach
            </div>
            <p class="text-sm text-red-400 mt-6 flex items-center gap-1">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                <span>May be changed due to new discoveries.</span>
            </p>
        </div>
    </section>
@endsection