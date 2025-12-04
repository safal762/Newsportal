<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600|inter:400,500,600,700&display=swap" rel="stylesheet" />

    <!-- Scripts & Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <!-- Optional: Add some nice fade-in animation -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            document.querySelector('.content-card')?.classList.add('opacity-100', 'translate-y-0');
        });
    </script>
</head>

<body class="font-sans antialiased bg-gradient-to-br from-slate-50 via-white to-slate-100 dark:from-gray-900 dark:via-gray-800 dark:to-black text-gray-900 dark:text-gray-100 min-h-screen flex items-center justify-center px-4">
    
    <div class="absolute inset-0 -z-10 overflow-hidden">
        <div class="absolute -top-40 -right-40 w-80 h-80 bg-purple-400/30 rounded-full blur-3xl"></div>
        <div class="absolute -bottom-40 -left-40 w-96 h-96 bg-cyan-400/20 rounded-full blur-3xl"></div>
    </div>

    <div class="w-full max-w-md">
        <!-- Logo -->
        <div class="flex justify-center mb-10">
            
        </div>

        <!-- Main Card with Glassmorphism Effect -->
        <div class="content-card backdrop-blur-xl bg-white/80 dark:bg-gray-900/90 border border-white/20 dark:border-gray-700/50 rounded-2xl shadow-2xl p-8 transition-all duration-700 opacity-0 -translate-y-6">
            
            <!-- Optional Top Accent Bar -->
            <div class="h-1 w-20 bg-gradient-to-r from-purple-500 to-cyan-500 rounded-full mb-8 mx-auto"></div>

            <!-- Slot Content (Login, Register, etc.) -->
            <div class="space-y-6">
                {{ $slot }}
            </div>
        </div>

        <!-- Footer (optional) -->
        <div class="mt-8 text-center text-sm text-gray-500 dark:text-gray-400">
            &copy; {{ date('Y') }} tatokhabar. nepal
        </div>
    </div>
</body>
</html>