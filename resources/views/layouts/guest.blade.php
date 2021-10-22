{{--<!DOCTYPE html>--}}
{{--<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">--}}
{{--    <head>--}}
{{--        <meta charset="utf-8">--}}
{{--        <meta name="viewport" content="width=device-width, initial-scale=1">--}}
{{--        <meta name="csrf-token" content="{{ csrf_token() }}">--}}

{{--        <title>{{ config('app.name', 'Laravel') }}</title>--}}

{{--        <!-- Fonts -->--}}
{{--        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">--}}

{{--        <!-- Styles -->--}}
{{--        <link rel="stylesheet" href="{{ mix('css/app.css') }}">--}}

{{--        <!-- Scripts -->--}}
{{--        <script src="{{ mix('js/app.js') }}" defer></script>--}}
{{--    </head>--}}
{{--    <body>--}}
{{--        <div class="font-sans text-gray-900 antialiased">--}}
{{--            {{ $slot }}--}}
{{--        </div>--}}
{{--    </body>--}}
{{--</html>--}}

<!DOCTYPE html>
<html :class="{ 'theme-dark': dark }" x-data="data()" lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login - Windmill Dashboard</title>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap"
        rel="stylesheet"
    />
    <link rel="stylesheet" href="../assets/css/tailwind.output.css" />
    <script
        src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"
        defer
    ></script>
    <script src="../assets/js/init-alpine.js"></script>
</head>
<body>
<div class="flex items-center min-h-screen p-6 bg-gray-50 dark:bg-gray-900">
    <div
        class="flex-1 h-full max-w-4xl mx-auto overflow-hidden bg-white rounded-lg shadow-xl dark:bg-gray-800"
    >
        {{ $slot }}
    </div>
</div>
</body>
</html>
