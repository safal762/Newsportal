<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-6 text-center" :status="session('status')" />
    <div class="text-center">
        <h1 class="text-2xl">Welcome Back!!</h1>
    </div>

    <form method="POST" action="{{ route('login') }}" class="space-y-7">
        @csrf

        <!-- Email Address -->
        <div class="relative">
            <x-input-label for="email" :value="__('Email')" class="text-gray-700 dark:text-gray-300 font-medium" />
            <x-text-input 
                id="email" 
                class="block mt-2 w-full px-4 py-3.5 text-lg rounded-xl border-0 bg-gray-50/70 dark:bg-white/5 backdrop-blur-sm focus:ring-4 focus:ring-purple-500/30 focus:bg-white dark:focus:bg-gray-800/50 transition-all duration-300" 
                type="email" 
                name="email" 
                :value="old('email')" 
                required 
                autofocus 
                autocomplete="username"
                placeholder="you@example.com"
            />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="relative">
            <x-input-label for="password" :value="__('Password')" class="text-gray-700 dark:text-gray-300 font-medium" />
            <x-text-input 
                id="password" 
                class="block mt-2 w-full px-4 py-3.5 text-lg rounded-xl border-0 bg-gray-50/70 dark:bg-white/5 backdrop-blur-sm focus:ring-4 focus:ring-purple-500/30 focus:bg-white dark:focus:bg-gray-800/50 transition-all duration-300" 
                type="password" 
                name="password" 
                required 
                autocomplete="current-password"
                placeholder="••••••••"
            />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me + Forgot Password -->
        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
            <label for="remember_me" class="flex items-center cursor-pointer group">
                <input 
                    id="remember_me" 
                    type="checkbox" 
                    name="remember" 
                    class="w-5 h-5 rounded-lg border-2 border-gray-300 dark:border-gray-600 text-purple-600 focus:ring-purple-500 focus:ring-offset-0 focus:ring-2 transition-all duration-200 group-hover:border-purple-400"
                >
                <span class="ml-3 text-sm font-medium text-gray-700 dark:text-gray-300">
                    {{ __('Remember me') }}
                </span>
            </label>

            @if (Route::has('password.request'))
                <a href="{{ route('password.request') }}" 
                   class="text-sm font-medium text-purple-600 dark:text-purple-400 hover:text-purple-700 dark:hover:text-purple-300 underline-offset-4 hover:underline transition-all">
                    {{ __('Forgot your password?') }}
                </a>
            @endif
        </div>

        <!-- Submit Button -->
        <div class="pt-4">
            <x-primary-button class="w-full justify-center py-4 px-6 text-lg font-semibold rounded-xl bg-gradient-to-r from-purple-600 to-cyan-500 hover:from-purple-700 hover:to-cyan-600 focus:ring-4 focus:ring-purple-500/30 shadow-lg hover:shadow-xl transform hover:-translate-y-0.5 transition-all duration-300">
                {{ __('Log in') }}
            </x-primary-button>
        </div>

        <!-- Optional: Social Divider or Register Link -->
        @if (Route::has('register'))
            <div class="text-center pt-6">
                <span class="text-sm text-gray-500 dark:text-gray-400">
                    {{ __("Don't have an account?") }}
                    <a href="{{ route('register') }}" 
                       class="font-semibold text-purple-600 dark:text-purple-400 hover:text-purple-700 dark:hover:text-purple-300 underline-offset-4 hover:underline">
                        {{ __('Sign up') }}
                    </a>
                </span>
            </div>
        @endif
    </form>
</x-guest-layout>