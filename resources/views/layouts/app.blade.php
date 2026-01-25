<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Seblak POS</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles()
</head>
<body class="flex h-screen bg-gray-50 font-sans">
    <!-- Left Sidebar -->
    <aside class="w-52 bg-blue-600 text-white flex flex-col p-4 gap-6 shadow-lg">
        <h2 class="text-xl font-bold tracking-tight">Seblak POS</h2>
        <nav class="flex flex-col gap-2">
            <div class="flex items-center gap-3">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-soup"><path d="M12 21a9 9 0 0 0 9-9H3a9 9 0 0 0 9 9Z"/><path d="M7 21h10"/><path d="M19.5 12 22 6"/><path d="M16.25 3c.27.1.8.53.75 1.36-.06.83-.93 1.2-1 2.02-.05.78.34 1.24.73 1.62"/><path d="M11.25 3c.27.1.8.53.74 1.36-.05.83-.93 1.2-.98 2.02-.06.78.33 1.24.72 1.62"/><path d="M6.25 3c.27.1.8.53.75 1.36-.06.83-.93 1.2-1 2.02-.05.78.34 1.24.74 1.62"/></svg>
                <a href="{{ route('ingredients') }}" 
                    class="block w-full text-left px-3 py-2 rounded-lg transition duration-200 hover:bg-blue-500 hover:bg-opacity-50">Ingredients</a>
            </div>
            <div class="flex items-center gap-3">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-glass-water"><path d="M5.116 4.104A1 1 0 0 1 6.11 3h11.78a1 1 0 0 1 .994 1.105L17.19 20.21A2 2 0 0 1 15.2 22H8.8a2 2 0 0 1-2-1.79z"/><path d="M6 12a5 5 0 0 1 6 0 5 5 0 0 0 6 0"/></svg>
                <a href="{{ route('drinks') }}"
                    class="block w-full text-left px-3 py-2 rounded-lg transition duration-200 hover:bg-blue-500 hover:bg-opacity-50">Drinks</a>
            </div>
        </nav>
    </aside>

    <!-- Main Content -->
    <main class="flex-1 p-6 overflow-y-auto bg-white">
        @yield('content')
    </main>

    <!-- Right Order Summary Panel -->
    <livewire:order-summary />
    @livewireScripts()
</body>
</html>