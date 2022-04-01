<x-app-layout title="Products">

    <!-- Page Title -->
    <x-page-title title="Products"/>

    <!-- New Table -->
    <x-table.table :headers="['Name', 'Type', 'Price', 'Quantity', 'Action']"
                   :pagination="$products">
        @forelse($products as $product)
            <tr class="text-gray-700 dark:text-gray-400">
                <x-table.td> {{ $product->name }} </x-table.td>
                <x-table.td> {{ $product->type }} </x-table.td>
                <x-table.td> Rp {{ number_format($product->price, 0, ',', '.') }} </x-table.td>
                <x-table.td> {{ number_format($product->quantity, 0, ',', '.') }} </x-table.td>
                <x-table.td>
                    <form action="{{ route('products.destroy', $product->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <a href="{{ route('products.show', $product->id) }}">
                            <ion-icon name="eye-outline"></ion-icon>
                        </a>
                        <a href="{{ route('products.edit', $product->id) }}" class="ml-1">
                            <ion-icon name="create-outline"></ion-icon>
                        </a>
                        <button class="ml-1">
                            <ion-icon name="trash-outline"></ion-icon>
                        </button>
                    </form>
                </x-table.td>
            </tr>
        @empty
            <td colspan="5" class="px-4 py-3 text-gray-700 dark:text-gray-400">No data to show.</td>
        @endforelse
    </x-table.table>

</x-app-layout>
