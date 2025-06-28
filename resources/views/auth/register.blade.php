<x-guest-layout>
    <div class="auth-title">Register Admin</div>
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <input id="name" class="auth-input" type="text" name="name" value="{{ old('name') }}" required autofocus placeholder="Nama Lengkap">
        @error('name')<div class="auth-error">{{ $message }}</div>@enderror

        <input id="email" class="auth-input" type="email" name="email" value="{{ old('email') }}" required placeholder="Email">
        @error('email')<div class="auth-error">{{ $message }}</div>@enderror

        <input id="password" class="auth-input" type="password" name="password" required placeholder="Password">
        @error('password')<div class="auth-error">{{ $message }}</div>@enderror

        <input id="password_confirmation" class="auth-input" type="password" name="password_confirmation" required placeholder="Konfirmasi Password">
        @error('password_confirmation')<div class="auth-error">{{ $message }}</div>@enderror

        <button type="submit" class="auth-btn">Register</button>
    </form>
    <div class="mt-4 text-center">
        <a class="auth-link" href="{{ route('login') }}">Sudah punya akun? Login</a>
    </div>
</x-guest-layout>
