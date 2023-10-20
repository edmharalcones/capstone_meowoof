<x-guest-layout>
    <!-- Session Status -->
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />
            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>
        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>
        <div class="flex items-center justify-end mt-4">
            <x-primary-button class="ml-3" id="loginButton">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
    <script>
        const rememberMeCheckbox = document.getElementById('remember_me');
        const usernameInput = document.getElementById('email');
        const passwordInput = document.getElementById('password');

        if (localStorage.getItem('rememberMe') === 'true') {
            rememberMeCheckbox.checked = true;
            const savedUsername = localStorage.getItem('username');
            const savedPassword = localStorage.getItem('password');
            if (savedUsername) {
                usernameInput.value = savedUsername;
                passwordInput.value = savedPassword;
            }
        }
        document.getElementById('loginButton').addEventListener('click', function () {

            if (rememberMeCheckbox.checked) {
                localStorage.setItem('rememberMe', 'true');
                localStorage.setItem('username', usernameInput.value);
                localStorage.setItem('password', passwordInput.value);
            } else {
                localStorage.removeItem('rememberMe');
                localStorage.removeItem('username');
                localStorage.removeItem('password');
            }

        });
    </script>
</x-guest-layout>
