<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>products</title>
</head>

<body class="bg-gray-100">

    <header class="bg-gray-900 text-white shadow-md fixed w-full">
        <div class="max-w-7xl mx-auto px-6 py-4 flex items-center justify-between">


            <div class="flex items-center gap-3">
                <div class="w-10 h-10 flex items-center justify-center rounded-full bg-yellow-500 text-gray-900 font-bold">
                    TS
                </div>
                <div>
                    <h1 class="text-xl font-semibold">Tifawin-Souk</h1>
                    <p class="text-sm text-gray-300">product Management</p>
                </div>
            </div>


            <nav class="flex gap-4">
                <a href="{{ route('products.index') }}"
                    class="px-3 py-2 rounded-md hover:bg-gray-800 transition">
                    products
                </a>

                <a href="{{ route('products.create') }}"
                    class="px-3 py-2 rounded-md bg-yellow-500 text-gray-900 hover:bg-yellow-400 transition">
                    + Add product
                </a>
            </nav>

        </div>
    </header>

    <div class="overflow-y-auto p-10 ">
        <table class="min-w-full bg-white border border-gray-200 shadow-md rounded-lg mt-12">
            <thead class="bg-gray-100">
                <tr>

                    <th class="px-6 py-3 text-left text-sm font-medium text-gray-700 uppercase">REFERENCE</th>
                    <th class="px-6 py-3 text-left text-sm font-medium text-gray-700 uppercase">Name</th>
                    <th class="px-6 py-3 text-left text-sm font-medium text-gray-700 uppercase">Description</th>
                    <th class="px-6 py-3 text-left text-sm font-medium text-gray-700 uppercase">price</th>
                    <th class="px-6 py-3 text-left text-sm font-medium text-gray-700 uppercase">stock</th>

                    <th class="px-6 py-3 text-left text-sm font-medium text-gray-700 uppercase">Actions</th>
                </tr>
            </thead>

            <tbody class="divide-y divide-gray-200">
                @foreach($products as $product)
                <tr class="hover:bg-gray-50">
                    <td class="px-6 py-4 text-sm text-gray-900">{{ $product->reference }}</td>
                    <td class="px-6 py-4 text-sm text-gray-900">{{ $product->name }}</td>
                    <td class="px-6 py-4 text-sm text-gray-900">{{ $product->description }}</td>
                    <td class="px-6 py-4 text-sm text-gray-900">{{ $product->price }}</td>
                    <td class="px-6 py-4 text-sm text-gray-900">{{ $product->stock }}</td>


                    <td class="px-6 py-4">
                        <div class="flex gap-2">

                            <a href="{{ route('products.show', $product) }}"
                                class="bg-yellow-500 hover:bg-yellow-600 px-3 py-1 rounded text-white text-sm">
                                View
                            </a>

                            <a href="{{ route('products.edit', $product) }}"
                                class="bg-green-500 hover:bg-green-600 px-3 py-1 rounded text-white text-sm">
                                Edit
                            </a>

                            <form action="{{ route('products.destroy', $product) }}" method="POST"
                                onsubmit="return confirm('Are you sure?')">
                                @csrf
                                @method('DELETE')
                                <button
                                    type="submit"
                                    class="bg-red-500 hover:bg-red-600 px-3 py-1 rounded text-white text-sm">
                                    Delete
                                </button>
                            </form>

                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</body>

</html>