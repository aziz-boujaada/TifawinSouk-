<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
    <title>users Management</title>
</head>
<body class="bg-gray-100">

    <header class="bg-gray-900 text-white shadow-md fixed w-full z-10">
        <div class="max-w-7xl mx-auto px-6 py-4 flex items-center justify-between">
            <div class="flex items-center gap-3">
                <div class="w-10 h-10 flex items-center justify-center rounded-full bg-yellow-500 text-white font-bold">
                    TS
                </div>
                <div>
                    <h1 class="text-xl font-semibold">Tifawin-Souk</h1>
                    <p class="text-sm text-gray-300">user Management</p>
                </div>
            </div>
        </div>
    </header>

    <div class="flex gap-6 pt-24 px-6">

        @include('components.dashboard-sidebar')

        <div class="flex-1">

           
            <div class="overflow-x-auto">
                <table class="min-w-full bg-gray-800 text-white border border-gray-200 shadow-md rounded-lg">
                    <thead class="bg-gray-700">
                        <tr>
                            <th class="px-6 py-3 text-left text-sm font-medium text-white uppercase">ID</th>
                            <th class="px-6 py-3 text-left text-sm font-medium text-white uppercase">USER Name</th>
                            <th class="px-6 py-3 text-left text-sm font-medium text-white uppercase">email</th>
                            <th class="px-6 py-3 text-left text-sm font-medium text-white uppercase">created At</th>
                           
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                        @foreach($users as $user)
                        <tr class="hover:bg-gray-700">
                            <td class="px-6 py-4 text-sm text-white">{{ $user->id }}</td>
                            <td class="px-6 py-4 text-sm text-white">{{ $user->name }}</td>
                            <td class="px-6 py-4 text-sm text-white">{{ $user->email }}</td>
                            <td class="px-6 py-4 text-sm text-white">{{ $user->created_at }}</td>
                           
                        </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>

        </div>
    </div>

</body>
</html>
