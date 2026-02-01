<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">
    <script src="https://cdn.tailwindcss.com"></script>

    <title>Document</title>
</head>

<body>
    <x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Dashboard
            </h2>
        </x-slot>

        <div class="flex min-h-screen bg-gray-800">


            <!-- <aside class="w-64 bg-gray-900 text-white p-6">
                <h1 class="text-2xl font-bold mb-10 flex items-center gap-2">
                    <i class="fa-solid fa-store"></i>
                    TifawinSouk
                </h1>

                <nav class="flex flex-col gap-4 w-[25%]">

                    <a href="{{ route('dashboard') }}"
                        class="flex items-center  justify-around gap-6 bg-gray-800 hover:bg-gray-700 px-4 py-2 rounded transition">
                        <i class="fa-solid fa-house"></i>
                        Dashboard
                    </a>

                    <a href="{{ route('products.index') }}"
                        class="flex items-center justify-around  gap-6 bg-gray-800 hover:bg-gray-700 px-4 py-2 rounded transition">
                        <i class="fa-solid fa-box"></i>
                        Products
                    </a>

                    <a href="{{ route('categories.index') }}"
                        class="flex items-center justify-around  gap-6 bg-gray-800 hover:bg-gray-700 px-4 py-2 rounded transition">
                        <i class="fa-solid fa-tags"></i>
                        Categories
                    </a>

                </nav>
            </aside> -->

            @include('components.dashboard-sidebar')

            <main class="flex-1 p-10">


                <div class="bg-white p-6 rounded-xl shadow mb-8">
                    <h3 class="text-xl font-semibold text-gray-800 flex items-center gap-2">
                        <i class="fa-solid fa-circle-check text-green-500"></i>
                        Welcome back!
                    </h3>
                    <p class="text-gray-500 mt-1">
                        You are logged in successfully.
                    </p>
                </div>

                <div class="flex  gap-6 mt-6">


                    <div class="flex items-center justify-between bg-red-400 text-white p-6 rounded-xl shadow-lg w-full md:w-1/2 hover:scale-105 transition-transform duration-300">
                        <div>
                            <h4 class="text-lg flex items-center gap-2">
                                <i class="fa-solid fa-box"></i>
                                Products
                            </h4>
                            <p class="text-4xl font-bold mt-2">
                                {{ $productsCount }}
                            </p>
                        </div>

                        <i class="fa-solid fa-box text-6xl opacity-30"></i>
                    </div>


                    <div class="flex items-center justify-between bg-purple-500 text-white p-6 rounded-xl shadow-lg w-full md:w-1/2 hover:scale-105 transition-transform duration-300">
                        <div>
                            <h4 class="text-lg flex items-center gap-2">
                                <i class="fa-solid fa-tags"></i>
                                Categories
                            </h4>
                            <p class="text-4xl font-bold mt-2">
                                {{ $categoriesCount }}
                            </p>
                        </div>

                        <i class="fa-solid fa-tags text-6xl opacity-30"></i>
                    </div>


                    <div class="flex items-center justify-between bg-green-500 text-white p-6 rounded-xl shadow-lg w-full md:w-1/2 hover:scale-105 transition-transform duration-300">
                        <div>
                            <h4 class="text-lg flex items-center gap-2">
                                <i class="fa-solid fa-users"></i>
                                Users
                            </h4>
                            <p class="text-4xl font-bold mt-2">
                                {{ $usersCount }}
                            </p>
                        </div>

                        <i class="fa-solid fa-users text-6xl opacity-30"></i>
                    </div>

                </div>



            </main>
        </div>
    </x-app-layout>

</body>

</html>