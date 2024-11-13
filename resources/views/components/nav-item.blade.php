<li>
    @if (Route::has($route))
        <a href="{{ route($route) }}" class="text-purple-200 hover:text-purple-400">{{ $text }}</a>
    @else
        <a href="#" class="text-purple-200 hover:text-purple-400">{{ $text }}</a>
    @endif
</li>