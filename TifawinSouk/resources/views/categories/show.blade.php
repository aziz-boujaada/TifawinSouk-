<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">
    <title>Category Details</title>
</head>

<body class="bg-gray-100">

    <div class="flex items-center justify-center min-h-screen p-4">
        <div class="w-full max-w-3xl bg-white rounded-2xl p-8 shadow-2xl">

            <h2 class="text-3xl font-bold text-gray-800 mb-6 text-center border-b pb-4">Category Details</h2>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 text-gray-700 mb-6">
                <div>
                    <span class="font-semibold text-gray-900">Category Name:</span>
                    <span class="text-gray-600">{{ $category->name }}</span>
                </div>
                <div>
                    <span class="font-semibold text-gray-900">Slug:</span>
                    <span class="text-gray-600">{{ $category->slug }}</span>
                </div>
                <div class="sm:col-span-2">
                    <span class="font-semibold text-gray-900">Description:</span>
                    <p class="text-gray-600 mt-1">{{ $category->description ?? 'No description' }}</p>
                </div>
            </div>

            <h3 class="text-xl font-semibold text-gray-800 mb-4">Products in this Category</h3>

            @forelse($products as $product)
            <div class="bg-white p-4 rounded-xl shadow-md mb-3 flex justify-between items-center hover:shadow-xl transition">
                <div>
                    <p class="font-semibold text-gray-800"><i class="fa-solid fa-box-open mr-2 text-yellow-500"></i>{{ $product->name }}</p>
                    <p class="text-gray-600 mt-1">Price: <span class="font-medium text-gray-800">${{ $product->price }}</span></p>
                    <p class="text-gray-600 mt-1">Stock: <span class="font-medium text-gray-800">{{ $product->stock }}</span></p>
                </div>
                <a href="{{ route('products.show', $product) }}" class="text-yellow-600 hover:text-yellow-700 text-2xl">
                    <i class="fa-regular fa-eye"></i>
                </a>
            </div>
            @empty
            <p class="bg-red-600 p-3 rounded-lg shadow-md text-white mt-4 text-center">
                There are no products in <span class="font-bold text-gray-100">{{ $category->name }}</span>
            </p>
            @endforelse

            <div class="mt-6 text-center">
                <a href="{{ route('categories.index') }}" class="inline-block px-6 py-2 rounded-xl bg-gray-800 text-white hover:bg-gray-700 transition font-medium">
                    Back to Categories
                </a>
            </div>

        </div>
    </div>

</body>

</html>
