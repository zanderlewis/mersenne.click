@extends('layout')

@section('title', 'List')

@section('content')
    <!-- Mersenne Prime Table -->
    <section id="mersenne-primes" class="max-w-6xl mx-auto mb-16">
        <div class="p-6 rounded-xl bg-white/5 backdrop-blur-sm border border-purple-500/20">
            <h2 class="text-3xl font-bold text-purple-100 mb-4">Mersenne Primes</h2>
            <table class="min-w-full bg-white/5 text-purple-100">
                <thead>
                    <tr>
                        <th class="py-2 px-4 border-b border-purple-500/20">Rank</th>
                        <th class="py-2 px-4 border-b border-purple-500/20">Prime</th>
                        <th class="py-2 px-4 border-b border-purple-500/20">Digits</th>
                        <th class="py-2 px-4 border-b border-purple-500/20">Discovered By</th>
                        <th class="py-2 px-4 border-b border-purple-500/20">Year</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($primes as $prime)
                        <tr class="clickable-row" data-href="/?n={{ $prime['exponent'] }}">
                            @if (isset($prime['maybe']))
                                <td class="py-2 px-4 border-b text-red-500 border-purple-500/20 text-center">{{ $prime['rank'] }}</td>
                            @else
                                <td class="py-2 px-4 border-b border-purple-500/20 text-center">{{ $prime['rank'] }}</td>
                            @endif
                            <td class="py-2 px-4 border-b border-purple-500/20 text-center">2<sup>{{ number_format(intval($prime['exponent'])) }}</sup> - 1</td>
                            <td class="py-2 px-4 border-b border-purple-500/20 text-center">{{ number_format(intval($prime['digits'])) }}</td>
                            <td class="py-2 px-4 border-b border-purple-500/20 text-center">{{ $prime['discovered_by'] }}</td>
                            <td class="py-2 px-4 border-b border-purple-500/20 text-center">
                                @php
                                    $date = str_replace('*', '<span class="text-red-500">*</span>', $prime['date']);
                                @endphp
                                {!! $date !!}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <p class="text-sm text-red-500 mt-4">* May be changed due to new discoveries.</p>
        </div>
    </section>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const rows = document.querySelectorAll('.clickable-row');
            rows.forEach(row => {
                row.addEventListener('click', function() {
                    window.location.href = this.dataset.href;
                });
            });
        });
    </script>

    <style>
        .clickable-row {
            cursor: pointer;
        }
    </style>
@endsection