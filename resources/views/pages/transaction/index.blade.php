<x-app-layout title="Transactions">

    <!-- Page Title -->
    <x-page-title title="Transaction List"/>

    <!-- New Table -->
    <x-table.table :headers="['Number', 'Name', 'Email', 'Phone Number', 'Pay Amount', 'Address', 'Status', 'Action']"
                   :pagination="$transactions">
        @forelse($transactions as $transaction)
            <tr class="text-gray-700 dark:text-gray-400">
                <x-table.td> {{ $transaction->number }} </x-table.td>
                <x-table.td> {{ $transaction->name }} </x-table.td>
                <x-table.td> {{ $transaction->email }} </x-table.td>
                <x-table.td> {{ $transaction->phone_number }} </x-table.td>
                <x-table.td> {{ $transaction->pay_amount }} </x-table.td>
                <x-table.td> {{ $transaction->address }}, </br> {{ $transaction->city }}, {{ $transaction->province }}, {{ $transaction->zip_code }}</x-table.td>
                <x-table.td>

                    <div
                        class="relative text-gray-600"
                    >
                        <form action="{{ route('transactions.status', $transaction->id) }}"
                              method="POST">
                            @csrf
                            @method('PUT')
                            <select name="status"
                                    class="block w-40 p-2 mt-1 rounded-lg text-sm bg-gray-100 text-{{ $transaction->status_color }}-600 dark:text-{{ $transaction->status_color }}-200 dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                                @foreach(\App\Models\Transaction::status as $key => $value)
                                    <option class="text-gray-600 dark:text-gray-300"
                                            @if( $transaction->status == $value) {{ 'selected' }} @endif
                                            value="{{ $value }}"
                                    >
                                        {{ $value }}
                                    </option>
                                @endforeach
                            </select>
                            <button
                                class="absolute inset-y-0 right-0 px-4 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-r-md active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple"
                            >
                                Save
                            </button>
                        </form>
                    </div>

                </x-table.td>
                <x-table.td>
                    <form action="{{ route('transactions.destroy', $transaction->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <a href="{{ route('transactions.show', $transaction->id) }}">
                            <ion-icon name="eye-outline"></ion-icon>
                        </a>
                        <button class="ml-1">
                            <ion-icon name="trash-outline"></ion-icon>
                        </button>
                    </form>
                </x-table.td>
            </tr>
        @empty
            <td colspan="8" class="px-4 py-3 text-gray-700 dark:text-gray-400">No data to show.</td>
        @endforelse
    </x-table.table>

</x-app-layout>
