@extends('layout')

@section('title', 'Software')

@section('content')
    <!-- List of Software Mirrors -->
    <section id="mersenne-primes" class="max-w-6xl mx-auto mb-16">
        <div class="p-6 rounded-xl bg-white/5 backdrop-blur-sm border border-purple-500/20">
            <h2 class="text-3xl font-bold text-purple-100 mb-4">Software Mirrors</h2>
            <table class="min-w-full bg-white/5 text-purple-100">
                <thead>
                    <tr>
                        <th class="py-2 px-4 border-b border-purple-500/20">Name</th>
                        <th class="py-2 px-4 border-b border-purple-500/20">URL</th>
                        <th class="py-2 px-4 border-b border-purple-500/20">Description</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="clickable-row" data-href="https://download.mersenne.ca/">
                        <td class="py-2 px-4 border-b border-purple-500/20">mersenne.ca</td>
                        <td class="py-2 px-4 border-b border-purple-500/20">https://download.mersenne.ca/</td>
                        <td class="py-2 px-4 border-b border-purple-500/20">Large software mirror for GIMPS</td>
                    </tr>
                    <tr class="clickable-row" data-href="https://www.mersenne.org/download/">
                        <td class="py-2 px-4 border-b border-purple-500/20">mersenne.org</td>
                        <td class="py-2 px-4 border-b border-purple-500/20">https://mersenne.org/download/</td>
                        <td class="py-2 px-4 border-b border-purple-500/20">Official GIMPS downloads</td>
                    </tr>
                    <tr class="clickable-row" data-href="https://github.com/primesearch">
                        <td class="py-2 px-4 border-b border-purple-500/20">PrimeSearch Github</td>
                        <td class="py-2 px-4 border-b border-purple-500/20">https://github.com/primesearch</td>
                        <td class="py-2 px-4 border-b border-purple-500/20">Source Code for multiple GIMPS programs</td>
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