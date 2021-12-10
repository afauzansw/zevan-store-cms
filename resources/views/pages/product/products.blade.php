<x-app-layout title="products">
    <!-- Page Title -->
    <x-page-title title="products"/>
    <!-- New Table -->
    <x-table.table :headers="['Name', 'Type', 'Price', 'Quantity', 'Action']">
        @forelse($products as $product)
            <tr class="text-gray-700 dark:text-gray-400">
                <x-table.td> {{ $product->name }} </x-table.td>
                <x-table.td> {{ $product->type }} </x-table.td>
                <x-table.td> {{ $product->price }} </x-table.td>
                <x-table.td> {{ $product->quantity }} </x-table.td>
                <x-table.td>

                </x-table.td>
            </tr>
        @empty
            <p>No data to show.</p>
        @endforelse
    </x-table.table>
</x-app-layout>
