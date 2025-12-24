<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body>
    <header class="bg-amber-300 p-5 text-1xl uppercase">
        <nav class="flex justify-between items-center">
            <div class="left">
                <ul class="flex gap-8 items-center">
                    <a href="/"><li class="hover:text-amber-800 transition">home</li></a>
                    @foreach ($cat as $item)
                        <a href="{{ route('catogery.page', $item->slug) }}">
                            <li class="hover:text-amber-800 transition">{{ $item->title }}</li>
                        </a>
                    @endforeach
                </ul>
            </div>

            <!-- Search Form -->
            <div class="center">
                <form action="{{ route('search.news') }}" method="GET" class="flex items-center gap-2">
                    <input 
                        type="text" 
                        name="q" 
                        placeholder="Search..." 
                        class="px-4 py-2 rounded-lg text-black focus:outline-none focus:ring-2 focus:ring-amber-500"
                        required
                    >
                    <button 
                        type="submit"
                        class="bg-amber-600 hover:bg-amber-700 text-white px-4 py-2 rounded-lg transition"
                    >
                        Search
                    </button>
                </form>
            </div>

            <div class="right">
                <ul class="flex items-center">
                    <li>hello</li>
                </ul>
            </div>
        </nav>
    </header>
</body>
</html>