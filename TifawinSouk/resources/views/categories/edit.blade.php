<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Category</title>

   
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

    <div class="min-h-screen flex items-center justify-center">
        <div class="w-full max-w-lg bg-white p-6 rounded-xl shadow-lg">

            <h2 class="text-2xl font-semibold text-gray-800 mb-6 text-center">
                Edit Category
            </h2>

            <form action="{{ route('categories.update', $category) }}" method="POST" class="space-y-4">
                @csrf
                @method('PUT')

               
                <div>
                    <label class="block text-gray-700 font-medium mb-1">
                        Category Name
                    </label>
                    <input
                        type="text"
                        name="name"
                        value="{{  $category->name }}"
                        class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-gray-700 focus:outline-none"
                        placeholder="Category Name..."
                    >
                </div>

               
                <div>
                    <label class="block text-gray-700 font-medium mb-1">
                        Description
                    </label>
                    <input
                        type="text"
                        name="description"
                        value="{{ $category->description }}"
                        class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-gray-700 focus:outline-none"
                        placeholder="Category Description..."
                    >
                </div>

               
                <div class="flex justify-between items-center pt-4">
                    <a href="{{ route('categories.index') }}"
                       class="text-gray-600 hover:underline">
                        ⬅ Back
                    </a>

                    <button
                        type="submit"
                        class="px-6 py-2 bg-gray-800 text-white rounded-lg hover:bg-gray-700 transition">
                        Update Category
                    </button>
                </div>

            </form>
        </div>
    </div>

</body>
</html>