<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <div class="auth-title">Login Admin</div>
    @if(session('status'))
        <div class="auth-error">{{ session('status') }}</div>
    @endif
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <input id="email" class="auth-input" type="email" name="email" value="{{ old('email') }}" required autofocus placeholder="Email">
        @error('email')<div class="auth-error">{{ $message }}</div>@enderror

        <input id="password" class="auth-input" type="password" name="password" required placeholder="Password">
        @error('password')<div class="auth-error">{{ $message }}</div>@enderror

        <div class="flex items-center justify-between mb-4">
            <label class="flex items-center">
                <input type="checkbox" name="remember" class="mr-2">
                <span class="text-gray-300 text-sm">Remember me</span>
            </label>
            <a class="auth-link" href="{{ route('password.request') }}">Forgot password?</a>
        </div>
        <button type="submit" class="auth-btn">Login</button>
    </form>
</x-guest-layout>
