<li class="relative px-6 py-3">
    @if(Route::currentRouteName() == $pageTitle.'.index')
        <span class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg" aria-hidden="true"></span>
    @endif
    <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200 @if(Route::currentRouteName() == $pageTitle.'.index') text-gray-800  dark:text-gray-200 @endif"
       href="{{ route($pageTitle.'.index') }}">
        <i class="fas fa-{{ $icon }} w-4 h-4 absolute"></i>
        <span class="ml-8 capitalize">{{ $pageTitle }}</span>
    </a>
</li>
