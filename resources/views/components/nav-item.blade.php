<li>
    @if (Route::has($route))
        <a href="{{ route($route) }}" class="px-3 py-2 rounded-md text-slate-300 hover:text-white hover:bg-slate-700/50 transition-all duration-200">{{ $text }}</a>
    @else
        <a href="#" class="px-3 py-2 rounded-md text-slate-300 hover:text-white hover:bg-slate-700/50 transition-all duration-200">{{ $text }}</a>
    @endif
</li>