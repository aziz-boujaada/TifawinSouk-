<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>

<body>
    <div class="flex items-center justify-center min-h-screen bg-gray-100">
        <div class="w-full max-w-xl bg-white rounded-xl p-6 shadow-lg">

            <h2 class="text-2xl font-semibold text-gray-800 mb-4 text-center">
                Products Details
            </h2>

            <div class="space-y-3 text-gray-700 ">
                <div>
                    <p>
                        <span class="font-medium text-gray-900">Product Name:</span>
                        {{ $product->name }}
                    </p>

                    <p>
                        <span class="font-medium text-gray-900">Description:</span>
                        {{ $product->description }}
                    </p>

                    <p class="leading-relaxed">
                        <span class="font-medium text-gray-900">Price:</span>
                        {{ $product->price }}
                    </p>

                    <p class="leading-relaxed">
                        <span class="font-medium text-gray-900">Stock:</span>
                        {{ $product->stock }}
                    </p>
                </div>
                <div>
                    <img src="{{$product->image_path}}" alt="{{$product->name}} image" class="rounded-lg shadow-lg">
                </div>
            </div>

            <div class="mt-6 text-center">
                <a href="{{ route('products.index') }}"
                    class="inline-block px-5 py-2 rounded-lg bg-gray-800 text-white hover:bg-gray-700 transition">
                    ⬅ Back to products
                </a>
            </div>

        </div>
    </div>
</body>

</html>