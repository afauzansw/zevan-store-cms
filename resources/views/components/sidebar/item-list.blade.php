<a class="text-lg font-bold text-gray-800 dark:text-gray-200" href="{{ route('dashboard.index') }}">
    <img class="h-9 ml-6 mt-4" src="{{ asset('assets/img/app-logo.png') }}">
</a>
<ul class="mt-6">
    <x-sidebar.item pageTitle="dashboard" icon="home"/>
    <x-sidebar.dropdown-list name="Product" icon="box">
        <x-sidebar.dropdown-item name="Create Product" link="{{ route('products.create') }}"/>
        <x-sidebar.dropdown-item name="Product List" link="{{ route('products.index') }}"/>
    </x-sidebar.dropdown-list>
    {{--    <x-sidebar-item pageTitle="transactions" icon="shopping-bag"/>--}}
</ul>
