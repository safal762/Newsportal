<x-guest-layout>
    <div class="max-w-md mx-auto">
        <!-- Title -->
        <div class="text-center mb-10">
            <h2 class="text-3xl font-bold text-gray-900 dark:text-white">
                {{ __('Create your account') }}
            </h2>
           
        </div>

        <form method="POST" action="{{ route('register') }}" class="space-y-7">
            @csrf

            <!-- Name -->
            <div>
                <x-input-label for="name" :value="__('Full Name')" class="text-gray-700 dark:text-gray-300 font-medium" />
                <x-text-input
                    id="name"
                    class="block mt-2 w-full px-4 py-3.5 text-lg rounded-xl border-0 bg-gray-50/70 dark:bg-white/5 backdrop-blur-sm focus:ring-4 focus:ring-purple-500/30 focus:bg-white dark:focus:bg-gray-800/50 transition-all duration-300 placeholder-gray-400"
                    type="text"
                    name="name"
                    :value="old('name')"
                    required
                    autofocus
                    autocomplete="name"
                    placeholder="John Doe"
                />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>

            <!-- Email Address -->
            <div>
                <x-input-label for="email" :value="__('Email Address')" class="text-gray-700 dark:text-gray-300 font-medium" />
                <x-text-input
                    id="email"
                    class="block mt-2 w-full px-4 py-3.5 text-lg rounded-xl border-0 bg-gray-50/70 dark:bg-white/5 backdrop-blur-sm focus:ring-4 focus:ring-purple-500/30 focus:bg-white dark:focus:bg-gray-800/50 transition-all duration-300 placeholder-gray-400"
                    type="email"
                    name="email"
                    :value="old('email')"
                    required
                    autocomplete="username"
                    placeholder="john@example.com"
                />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div>
                <x-input-label for="password" :value="__('Password')" class="text-gray-700 dark:text-gray-300 font-medium" />
                <x-text-input
                    id="password"
                    class="block mt-2 w-full px-4 py-3.5 text-lg rounded-xl border-0 bg-gray-50/70 dark:bg-white/5 backdrop-blur-sm focus:ring-4 focus:ring-purple-500/30 focus:bg-white dark:focus:bg-gray-800/50 transition-all duration-300"
                    type="password"
                    name="password"
                    required
                    autocomplete="new-password"
                    placeholder="Create a strong password"
                />
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Confirm Password -->
            <div>
                <x-input-label for="password_confirmation" :value="__('Confirm Password')" class="text-gray-700 dark:text-gray-300 font-medium" />
                <x-text-input
                    id="password_confirmation"
                    class="block mt-2 w-full px-4 py-3.5 text-lg rounded-xl border-0 bg-gray-50/70 dark:bg-white/5 backdrop-blur-sm focus:ring-4 focus:ring-purple-500/30 focus:bg-white dark:focus:bg-gray-800/50 transition-all duration-300"
                    type="password"
                    name="password_confirmation"
                    required
                    autocomplete="new-password"
                    placeholder="Type it again"
                />
                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>

            <!-- Submit Button + Login Link -->
            <div class="pt-6 space-y-5">
                <x-primary-button class="w-full justify-center py-4 px-6 text-lg font-semibold rounded-xl bg-gradient-to-r from-purple-600 to-cyan-500 hover:from-purple-700 hover:to-cyan-600 focus:ring-4 focus:ring-purple-500/30 shadow-lg hover:shadow-xl transform hover:-translate-y-0.5 transition-all duration-300">
                    {{ __('Create Account') }}
                </x-primary-button>

                <div class="text-center">
                    <span class="text-sm text-gray-600 dark:text-gray-400">
                        {{ __('Already have an account?') }}
                        <a href="{{ route('login') }}"
                           class="font-semibold text-purple-600 dark:text-purple-400 hover:text-purple-700 dark:hover:text-purple-300 underline-offset-4 hover:underline transition">
                            {{ __('Log in') }}
                        </a>
                    </span>
                </div>
            </div>
        </form>

        <!-- Optional: Terms & Privacy (recommended for production) -->
        <div class="mt-8 text-center text-xs text-gray-500 dark:text-gray-500">
            By creating an account, you agree to our
            <a href="#" class="underline hover:text-gray-700 dark:hover:text-gray-300">Terms</a> and
            <a href="#" class="underline hover:text-gray-700 dark:hover:text-gray-300">Privacy Policy</a>.
        </div>
    </div>
</x-guest-layout>