<x-app-layout title="Products">
    <!-- Page Title -->
    <x-page-title title="Products"/>
    <!-- New Table -->
    <x-table.table :headers="['Name', 'Type', 'Price', 'Quantity', 'Action']">
        @forelse($products as $product)
            <tr class="text-gray-700 dark:text-gray-400">
                <x-table.td> {{ $product->name }} </x-table.td>
                <x-table.td> {{ $product->type }} </x-table.td>
                <x-table.td> {{ $product->price }} </x-table.td>
                <x-table.td> {{ $product->quantity }} </x-table.td>
                <x-table.td>
                    <form action="{{ route('products.destroy', $product->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button><ion-icon name="trash-outline"></ion-icon></button>
                    </form>
                </x-table.td>
            </tr>
        @empty
            <td colspan="5" class="px-4 py-3 text-gray-700 dark:text-gray-400">No data to show.</td>
        @endforelse
    </x-table.table>
    {{ $products->links() }}
</x-app-layout>
