<div
    class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800"
>
    <i class="fa-solid fa-{{ $icon }} w-5 h-5 p-3 mr-4 text-{{ $color }}-500 bg-{{ $color }}-100 rounded-full dark:text-{{ $color }}-100 dark:bg-{{ $color }}-500"></i>

    <div>
        <p
            class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400"
        >
            {{ $cardTitle }}
        </p>
        <p
            class="text-lg font-semibold text-gray-700 dark:text-gray-200"
        >
            {{ $dataValue }}
        </p>
    </div>
</div>
