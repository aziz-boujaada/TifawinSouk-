<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">
    <title>Document</title>
</head>

<body>
    <div class="flex items-center justify-center min-h-screen bg-gray-100">
        <div class="w-full max-w-xl bg-white rounded-xl p-6 shadow-lg">

            <h2 class="text-2xl font-semibold text-gray-800 mb-4 text-center">
                Category Details
            </h2>

            <div class="space-y-3 text-gray-700">
                <p>
                    <span class="font-medium text-gray-900">Category Name:</span>
                    {{ $category->name }}
                </p>

                <p>
                    <span class="font-medium text-gray-900">Slug:</span>
                    {{ $category->slug }}
                </p>

                <p class="leading-relaxed">
                    <span class="font-medium text-gray-900">Description:</span>
                    {{ $category->description ?? 'No description' }}
                </p>
            </div>

            <!-- list of product foreach category -->
            <div class="mt-6 text-center">
                <span class=" text-center text-md font-bold text-gray-600"> Products of this Category</span>
                @forelse($products as $product)

                <div class="bg-gray-100 p-2 rounded-md shadow-lg mt-2 flex justify-between gap-4">
                    <p><span class="mt-6 text-center text-md font-bold text-gray-600">Product Name :</span> {{$product->name}}</p>
                    <p><span class="mt-6 text-center text-md font-bold text-gray-600">Price :</span> {{$product->price}}</p>
                    <p><span class="mt-6 text-center text-md font-bold text-gray-600">Stock : </span> {{$product->stock}}</p>
                    <a href="{{route ('products.show' , $product)}}" class="text-yellow-600"><i class="fa-regular fa-eye"></i></a>
                </div>

                @empty
                <p class="bg-red-600 p-2 rounded-md shadow-lg text-white mt-4">There is no product in  <span class="text-gray-800 font-bold text-md">{{$category->name}}</span></p>

                @endforelse
            </div>

            <div class="mt-6 text-center">
                <a href="{{ route('categories.index') }}"
                    class="inline-block px-5 py-2 rounded-lg bg-gray-800 text-white hover:bg-gray-700 transition">
                    ⬅ Back to categories
                </a>
            </div>

        </div>
    </div>
</body>

</html>