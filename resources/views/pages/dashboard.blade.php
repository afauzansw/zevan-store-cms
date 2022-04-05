<x-app-layout title="Dashboard">

    <!-- Page Title -->
    <x-page-title title="Dashboard"/>

    <!-- Cards -->
    <div class="grid gap-6 mb-8 md:grid-cols-2 xl:grid-cols-4">

        <x-card icon="cart-arrow-down" color="orange" cardTitle="Total Transactions" dataValue="{{ $total_transaction }}"/>

        <x-card icon="money-check-alt" color="green" cardTitle="Account Balance" dataValue="Rp {{ number_format($total_pay_amount, '0', ',', '.') }}"/>

        <x-card icon="box" color="teal" cardTitle="Total Product" dataValue="{{ $total_product }}"/>

        <x-card icon="dolly" color="blue" cardTitle="Product Sold" dataValue="{{ $product_sold }}"/>

    </div>

    <!-- Charts -->
    <div class="grid gap-6 mb-8 md:grid-cols-2">
        <div
            class="min-w-0 p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800"
        >
            <h4 class="mb-4 font-semibold text-gray-800 dark:text-gray-300">
                Status
            </h4>
            <div>{{ $status->render() }}</div>
            <div
                class="flex justify-center mt-4 space-x-3 text-sm text-gray-600 dark:text-gray-400"
            >
                <!-- Chart legend -->
                <div class="flex items-center">
                    <span
                        class="inline-block w-3 h-3 mr-1 bg-yellow-600 rounded-full"
                    ></span>
                    <span>PENDING</span>
                </div>
                <div class="flex items-center">
                    <span
                        class="inline-block w-3 h-3 mr-1 bg-blue-600 rounded-full"
                    ></span>
                    <span>APPROVE</span>
                </div>
                <div class="flex items-center">
                    <span
                        class="inline-block w-3 h-3 mr-1 bg-purple-600 rounded-full"
                    ></span>
                    <span>SENDING</span>
                </div>
                <div class="flex items-center">
                    <span
                        class="inline-block w-3 h-3 mr-1 bg-green-600 rounded-full"
                    ></span>
                    <span>SUCCESS</span>
                </div>
                <div class="flex items-center">
                    <span
                        class="inline-block w-3 h-3 mr-1 bg-red-600 rounded-full"
                    ></span>
                    <span>FAILED</span>
                </div>
            </div>
        </div>
        <div
            class="min-w-0 p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800"
        >
            <h4 class="mb-4 font-semibold text-gray-800 dark:text-gray-300">
                Traffic
            </h4>
            <canvas id="line"></canvas>
            <div
                class="flex justify-center mt-4 space-x-3 text-sm text-gray-600 dark:text-gray-400"
            >
                <!-- Chart legend -->
                <div class="flex items-center">
                    <span
                        class="inline-block w-3 h-3 mr-1 bg-teal-600 rounded-full"
                    ></span>
                    <span>Organic</span>
                </div>
                <div class="flex items-center">
                    <span
                        class="inline-block w-3 h-3 mr-1 bg-purple-600 rounded-full"
                    ></span>
                    <span>Paid</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Table -->
    <h2
        class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200"
    >
        Transaction History
    </h2>
    <x-table.table :headers="['Number', 'Name', 'Phone Number', 'Pay Amount', 'Address', 'Status']">
        @forelse($transaction_history as $transaction)
            <tr class="text-gray-700 dark:text-gray-400">
                <x-table.td> {{ $transaction->number }} </x-table.td>
                <x-table.td> {{ $transaction->name }} </x-table.td>
                <x-table.td> {{ $transaction->phone_number }} </x-table.td>
                <x-table.td> {{ $transaction->pay_amount }} </x-table.td>
                <x-table.td> {{ $transaction->city }}</x-table.td>
                <x-table.td> {{ $transaction->status }} </x-table.td>
            </tr>
        @empty
            <td colspan="8" class="px-4 py-3 text-gray-700 dark:text-gray-400">No data to show.</td>
        @endforelse
    </x-table.table>
</x-app-layout>
