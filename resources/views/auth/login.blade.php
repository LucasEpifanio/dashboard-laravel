<x-guest-layout>

    <h2>Bem vindo</h2>
    <p class="text-gray-400 dark:text-gray-400">Bem-vindo de volta! Por favor insira seus dados</p>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required
                autofocus autocomplete="username" placeholder="Digite seu endereço de e-mail" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Senha')" />

            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                autocomplete="current-password" placeholder="Digite sua senha" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="infocampo">
                <div>
                <input id="remember_me" type="checkbox"
                    class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                    name="remember">
                <span class="ms-2 text-sm text-gray-300 dark:text-gray-300">{{ __('Relembre-me') }}</span>
                </div>
                <div class="esqueceusenha">
                    <a class="hover:no-underline text-sm text-gray-300 dark:text-gray-300 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
                        href="{{ route('password.request') }}">
                        {{ __('Esqueceu sua senha?') }}
                    </a>
                </div>
            </label>
        </div>

        <div class="flex items-center justify-between mt-8 mb-3">
            @if (Route::has('password.request'))
            <div>
                <a id="criarconta" class="hover:no-underline text-md text-gray-300 dark:text-gray-300 hover:text-gray-100 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 dark:focus:ring-offset-gray-800"
                    href="{{ route('register') }}">
                    {{ __('Criar Conta') }}
                </a>
            </div>
            @endif

            <x-primary-button class="ms-3">
                {{ __('Login') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>

<link rel="stylesheet" href="{{ asset("./storage/assets/styles/login/login.css")}}">
