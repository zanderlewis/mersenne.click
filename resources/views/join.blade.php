@extends('layout')

@section('title', 'Join')

@section('content')
    <!-- List of Join Links -->
    <section id="mersenne-primes" class="max-w-6xl mx-auto mb-16">
        <div class="p-6 rounded-xl bg-white/5 backdrop-blur-sm border border-purple-500/20">
            <h2 class="text-3xl font-bold text-purple-100 mb-4">Joins</h2>
            <table class="min-w-full bg-white/5 text-purple-100">
                <thead>
                    <tr>
                        <th class="py-2 px-4 border-b border-purple-500/20">Name</th>
                        <th class="py-2 px-4 border-b border-purple-500/20">URL</th>
                        <th class="py-2 px-4 border-b border-purple-500/20">Description</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="clickable-row" data-href="https://www.mersenne.org/gettingstarted/">
                        <td class="py-2 px-4 border-b border-purple-500/20">GIMPS</td>
                        <td class="py-2 px-4 border-b border-purple-500/20">https://mersenne.org/gettingstarted/</td>
                        <td class="py-2 px-4 border-b border-purple-500/20">Join GIMPS</td>
                    </tr>
                    <tr class="clickable-row" data-href="https://www.mersenne.ca/obd">
                        <td class="py-2 px-4 border-b border-purple-500/20">OBD</td>
                        <td class="py-2 px-4 border-b border-purple-500/20">https://mersenne.ca/obd/</td>
                        <td class="py-2 px-4 border-b border-purple-500/20">Join OBD (Operation Billion Digits)</td>
                    </tr>
                    <tr class="clickable-row" data-href="http:///www.doublemersennes.org">
                        <td class="py-2 px-4 border-b border-purple-500/20">ODM</td>
                        <td class="py-2 px-4 border-b border-purple-500/20">http://www.doublemersennes.org/</td>
                        <td class="py-2 px-4 border-b border-purple-500/20">Join ODM (Operation Double Mersennes)</td>
                    </tr>
                    <tr class="clickable-row" data-href="https://www.mersenneforum.org/node/45">
                        <td class="py-2 px-4 border-b border-purple-500/20">Operation Kibibit</td>
                        <td class="py-2 px-4 border-b border-purple-500/20">https://www.mersenneforum.org/node/45/</td>
                        <td class="py-2 px-4 border-b border-purple-500/20">Join the Factorization of RSA-1024</td>
                    </tr>
                    <tr class="clickable-row" data-href="https://www.mersenneforum.org/node/63">
                        <td class="py-2 px-4 border-b border-purple-500/20">XYYXF Project</td>
                        <td class="py-2 px-4 border-b border-purple-500/20">https://www.mersenneforum.org/node/63/</td>
                        <td class="py-2 px-4 border-b border-purple-500/20">Join the search for primes of y^x - x^y</td>
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
