<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css', 'resources/js/app.js')
</head>
<body class="flex h-screen bg-gray-100">
    <aside class="w-52 bg-sky-400 text-white flex flex-col p-4 gap-6">
        <h2>Menu</h2>
        <nav class="flex flex-col gap-4">
                <a href="{{ route('ingredients') }}" 
                    class="hover:bg-white hover:opacity-70 px-3 py-2 rounded-lg transcition duration-300 hover:text-sky-400">Ingredients</a>
                <a href="{{ route('drinks') }}"
                    class="hover:bg-white hover:opacity-70 px-3 py-2 rounded-lg transcition duration-300 hover:text-sky-400">Drinks</a>
        </nav>
    </aside>

    <div>
        @yield('content')
    </div>

    <aside class="w-52 bg-sky-400 text-white flex flex-col p-4 gap-6">
        <nav class="flex flex-col">
            <h2>Right Sidebar</h2>
            <h2>total harga adalah</h2>
        </nav>
    </aside>
    
</body>
</html>