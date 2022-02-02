<li
    class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200 @if(\Illuminate\Support\Facades\Route::currentRouteName() == $route) text-gray-800  dark:text-gray-200 @endif"
>
    <a class="w-full" href="{{ route($route) }}">{{ $name }}</a>
</li>
