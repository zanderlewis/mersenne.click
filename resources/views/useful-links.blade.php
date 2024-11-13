@extends('layout')

@section('title', 'Links')

@section('content')
    <!-- List of Useful Links -->
    <section id="mersenne-primes" class="max-w-6xl mx-auto mb-16">
        <div class="p-6 rounded-xl bg-white/5 backdrop-blur-sm border border-purple-500/20">
            <h2 class="text-3xl font-bold text-purple-100 mb-4">Useful Links</h2>
            <table class="min-w-full bg-white/5 text-purple-100">
                <thead>
                    <tr>
                        <th class="py-2 px-4 border-b border-purple-500/20">Name</th>
                        <th class="py-2 px-4 border-b border-purple-500/20">URL</th>
                        <th class="py-2 px-4 border-b border-purple-500/20">Description</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="clickable-row" data-href="https://t5k.org/">
                        <td class="py-2 px-4 border-b border-purple-500/20">t5k.org (PrimePages)</td>
                        <td class="py-2 px-4 border-b border-purple-500/20">https://t5k.org/</td>
                        <td class="py-2 px-4 border-b border-purple-500/20">Information on prime numbers by Chris Caldwell (no longer maintained)</td>
                    </tr>
                    <tr class="clickable-row" data-href="https://www.mersenne.org">
                        <td class="py-2 px-4 border-b border-purple-500/20">mersenne.org</td>
                        <td class="py-2 px-4 border-b border-purple-500/20">https://mersenne.org/</td>
                        <td class="py-2 px-4 border-b border-purple-500/20">Home of GIMPS</td>
                    </tr>
                    <tr class="clickable-row" data-href="https://mersenneforum.org">
                        <td class="py-2 px-4 border-b border-purple-500/20">Mersenne Forums</td>
                        <td class="py-2 px-4 border-b border-purple-500/20">https://mersenneforum.org/</td>
                        <td class="py-2 px-4 border-b border-purple-500/20">Forums for Mersenne Primes and other stuff</td>
                    </tr>
                    <tr class="clickable-row" data-href="https://github.com/primesearch">
                        <td class="py-2 px-4 border-b border-purple-500/20">PrimeSearch Github</td>
                        <td class="py-2 px-4 border-b border-purple-500/20">https://github.com/primesearch</td>
                        <td class="py-2 px-4 border-b border-purple-500/20">Source Code for multiple GIMPS programs</td>
                    </tr>
                    <tr class="clickable-row" data-href="https://www.durable-science.net">
                        <td class="py-2 px-4 border-b border-purple-500/20">Durable Science, LLC</td>
                        <td class="py-2 px-4 border-b border-purple-500/20">https://durable-science.net</td>
                        <td class="py-2 px-4 border-b border-purple-500/20">Website of the finder of the world's largest prime</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const rows = document.querySelectorAll('.clickable-row');
            rows.forEach(row => {
                row.addEventListener('click', function() {
                    window.open(this.dataset.href, '_blank');
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