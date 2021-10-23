<a class="text-lg font-bold text-gray-800 dark:text-gray-200" href="{{ route('dashboard') }}">
    <img class="h-9 ml-6 mt-4" src="{{ asset('assets/img/app-logo.png') }}">
</a>
<ul class="mt-6">
    <x-sidebar-item pageTitle="dashboard" icon="home"/>
    <x-sidebar-item pageTitle="products" icon="box"/>
    <x-sidebar-item pageTitle="transactions" icon="shopping-bag"/>
</ul>
