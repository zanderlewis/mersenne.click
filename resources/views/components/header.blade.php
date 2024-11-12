<header class="py-12 bg-black bg-opacity-30 backdrop-filter backdrop-blur-lg border-b border-purple-500/40 rounded-b-2xl">
    <div class="container mx-auto px-6 pb-6">
        <h1 class="text-5xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-purple-400 to-pink-600">
            mersenne.click
        </h1>
        <p class="mt-4 text-lg text-purple-200 font-light">
            Centralized information on Mersenne Primes
        </p>
    </div>
    <nav class="container mx-auto px-6">
        <ul class="flex space-x-4">
            <li>
                @if (Route::has('index'))
                    <a href="{{ route('index') }}" class="text-purple-200 hover:text-purple-400">Home</a>
                @else
                    <a href="#" class="text-purple-200 hover:text-purple-400">Home</a>
                @endif
            </li>
            <li>
                @if (Route::has('list'))
                    <a href="{{ route('list') }}" class="text-purple-200 hover:text-purple-400">Found Primes</a>
                @else
                    <a href="#" class="text-purple-200 hover:text-purple-400">Found Primes</a>
                @endif
            </li>
            <li>
                @if (Route::has('mirrors'))
                    <a href="{{ route('mirrors') }}" class="text-purple-200 hover:text-purple-400">Software Mirrors</a>
                @else
                    <a href="#" class="text-purple-200 hover:text-purple-400">Software Mirrors</a>
                @endif
            </li>
        </ul>
    </nav>
</header>