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
            @if (Route::has('join'))
                <a href="{{ route('join') }}" class="text-purple-200 hover:text-purple-400">Join</a>
            @else
                <a href="#" class="text-purple-200 hover:text-purple-400">Join</a>
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
        <li>
            @if (Route::has('links'))
                <a href="{{ route('links') }}" class="text-purple-200 hover:text-purple-400">Useful Links</a>
            @else
                <a href="#" class="text-purple-200 hover:text-purple-400">Useful Links</a>
            @endif
        </li>
    </ul>
</nav>
