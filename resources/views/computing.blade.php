@extends('layout')

@section('title', 'Computing')

@section('content')
    <!-- List of Computing Links -->
    <section id="mersenne-primes" class="max-w-6xl mx-auto mb-16">
        <div class="p-6 rounded-xl bg-white/5 backdrop-blur-sm border border-purple-500/20">
            <h2 class="text-3xl font-bold text-purple-100 mb-4">Computing</h2>
            <table class="min-w-full bg-white/5 text-purple-100">
                <thead>
                    <tr>
                        <th class="py-2 px-4 border-b border-purple-500/20">Name</th>
                        <th class="py-2 px-4 border-b border-purple-500/20">URL</th>
                        <th class="py-2 px-4 border-b border-purple-500/20">Description</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="clickable-row" data-href="https://github.com/tdulcet/Distributed-Computing-Scripts">
                        <td class="py-2 px-4 border-b border-purple-500/20">Google Colab</td>
                        <td class="py-2 px-4 border-b border-purple-500/20">
                            https://github.com/tdulcet/Distributed-Computing-Scripts/</td>
                        <td class="py-2 px-4 border-b border-purple-500/20">Find primes online for free with Google Colabs
                        </td>
                    </tr>
                    <tr class="clickable-row" data-href="https://mersenne.org/download">
                        <td class="py-2 px-4 border-b border-purple-500/20">Official</td>
                        <td class="py-2 px-4 border-b border-purple-500/20">https://mersenne.org/download/</td>
                        <td class="py-2 px-4 border-b border-purple-500/20">Official GIMPS software</td>
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
