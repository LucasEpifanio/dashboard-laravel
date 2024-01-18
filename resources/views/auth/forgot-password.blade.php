<x-guest-layout>
    <div class="mb-4 text-base text-gray-400 dark:text-gray-400">
        {{ __('Esqueceu sua senha? Sem problemas. Basta nos informar seu endereço de e-mail e enviaremos um e-mail com um link de redefinição de senha que permitirá que você escolha uma nova.') }}
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4 text-gray-400 dark:text-gray-400">
            <x-primary-button class="ms-3" >
                {{ __('Enviar link') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>

<link rel="stylesheet" href="{{ asset("./storage/assets/styles/login/login.css")}}">
