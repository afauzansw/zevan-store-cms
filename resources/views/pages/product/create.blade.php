<x-app-layout title="Create Product">

    <!-- Page Title -->
    <x-page-title title="Create Product"/>

    <!-- Form Card -->
    <div class="px-6 py-5 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
        <form action="{{ route('products.store') }}" enctype="multipart/form-data" method="POST">
            @csrf

            <span class="text-gray-700 dark:text-gray-400">Product Image</span>

            <label class="block text-sm grid grid-cols-4 gap-4">
                @for($i = 4; $i > 0; $i--)
                    <input
                        class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                        type="file"
                        name="image"
                        value="{{ old('image') }}"
                    />
                @endfor
            </label>

            <label class="block mt-4 text-sm">
                <span class="text-gray-700 dark:text-gray-400">Product Name</span>
                <input
                    class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                    type="text"
                    name="name"
                    value="{{ old('name') }}"
                />
            </label>

            <label class="block mt-4 text-sm">
                <span class="text-gray-700 dark:text-gray-400">Product Type</span>
                <input
                    class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                    type="text"
                    name="type"
                    value="{{ old('type') }}"
                />
            </label>

            <label class="block mt-4 text-sm">
                <span class="text-gray-700 dark:text-gray-400">Description</span>
                <textarea
                    class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-textarea focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
                    rows="10"
                    id="description"
                    name="description"
                >{{ old('description') }}</textarea>
            </label>

            <label class="block mt-4 text-sm">
                <span class="text-gray-700 dark:text-gray-400">Product Price</span>
                <!-- focus-within sets the color for the icon when input is focused -->
                <div
                    class="relative text-gray-500 focus-within:text-purple-600 dark:focus-within:text-purple-400"
                >
                    <input
                        class="block w-full pl-10 mt-1 text-sm text-black dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray form-input"
                        type="number"
                        name="price"
                        value="{{ old('price') }}"
                    />
                    <div
                        class="absolute inset-y-0 flex items-center ml-3 pointer-events-none"
                    >
                        Rp
                    </div>
                </div>
            </label>

            <label class="block mt-4 text-sm">
                <span class="text-gray-700 dark:text-gray-400">Quantity</span>
                <input
                    class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                    type="number"
                    name="quantity"
                    value="{{ old('quantity') }}"
                />
            </label>

            <label class="block mt-4 text-sm">
                <button
                    class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple"
                    type="submit"
                >Create Product</button>
            </label>
        </form>
    </div>
</x-app-layout>
