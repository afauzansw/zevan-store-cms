<li class="relative px-6 py-3">
    @if(Route::currentRouteName() == $pageTitle)
        <span class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg" aria-hidden="true"></span>
    @endif
    <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200 @if(Route::currentRouteName() == $pageTitle) text-gray-800  dark:text-gray-100 @endif"
       href="{{ route('dashboard') }}">
        <i class="fas fa-home w-4 h-4 absolute"></i>
        <span class="ml-8 capitalize">{{ $pageTitle }}</span>
    </a>
</li>
