<x-app-layout title="Transactions">

    <!-- Page Title -->
    <x-page-title title="Transactions"/>

    <!-- New Table -->
    <x-table.table :headers="['Number', 'Type', 'Price', 'Quantity', 'Action']"
                   :pagination="$products">
        @forelse($transactions as $transaction)
            <tr class="text-gray-700 dark:text-gray-400">
                <x-table.td> {{ $transaction->uuid }} </x-table.td>
                <x-table.td> {{ $transaction->name }} </x-table.td>
                <x-table.td> {{ $transaction->email }} </x-table.td>
                <x-table.td> {{ $transaction->phone_number }} </x-table.td>
                <x-table.td> {{ $transaction->transaction_total }} </x-table.td>
                <x-table.td> {{ $transaction->address }}, {{ $transaction->city }}, {{ $transaction->province }}, {{ $transaction->zip_code }}</x-table.td>
                <x-table.td> {{ $transaction->transaction_status }} </x-table.td>
                <x-table.td>
                    <form action="{{ route('products.destroy', $transaction->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <a href="{{ route('products.show', $transaction->id) }}">
                            <ion-icon name="eye-outline"></ion-icon>
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
