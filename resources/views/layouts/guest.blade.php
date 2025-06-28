<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <style>
            body {
                background: #181c24;
                min-height: 100vh;
                font-family: 'Figtree', 'Inter', sans-serif;
            }
            .auth-card {
                background: #23283a;
                border: 1.5px solid #3a3f5a;
                border-radius: 1.2rem;
                box-shadow: 0 4px 32px 0 #000a  ;
                padding: 2.5rem 2rem 2rem 2rem;
                max-width: 400px;
                margin: 2rem auto;
            }
            .auth-logo {
                display: flex;
                justify-content: center;
                align-items: center;
                margin-bottom: 1.5rem;
            }
            .auth-logo svg {
                width: 60px;
                height: 60px;
                border-radius: 50%;
                background: linear-gradient(135deg, #7f5af0 60%, #2cb67d 100%);
                box-shadow: 0 0 16px #7f5af0cc;
                padding: 10px;
            }
            .auth-title {
                color: #fff;
                font-size: 1.5rem;
                font-weight: 700;
                text-align: center;
                margin-bottom: 1.5rem;
            }
            .auth-input {
                background: #23283a;
                border: 1.5px solid #3a3f5a;
                color: #fff;
                border-radius: 0.7rem;
                padding: 0.75rem 1rem;
                margin-bottom: 1rem;
                width: 100%;
                font-size: 1rem;
                transition: border 0.2s;
            }
            .auth-input:focus {
                border-color: #7f5af0;
                outline: none;
            }
            .auth-btn {
                background: linear-gradient(90deg, #7f5af0, #2cb67d);
                color: #fff;
                border: none;
                border-radius: 0.7rem;
                padding: 0.75rem 1rem;
                font-weight: 600;
                font-size: 1rem;
                width: 100%;
                margin-top: 0.5rem;
                box-shadow: 0 2px 8px #7f5af055;
                transition: background 0.2s;
            }
            .auth-btn:hover {
                background: linear-gradient(90deg, #2cb67d, #7f5af0);
            }
            .auth-link {
                color: #7f5af0;
                text-decoration: underline;
                font-size: 0.95rem;
            }
            .auth-link:hover {
                color: #2cb67d;
            }
            .auth-error {
                background: #ff2e63cc;
                color: #fff;
                border-radius: 0.5rem;
                padding: 0.75rem 1rem;
                margin-bottom: 1rem;
                text-align: center;
                font-size: 0.98rem;
            }
        </style>
    </head>
    <body>
        <div class="flex flex-col min-h-screen justify-center items-center">
            <div class="auth-card">
                <div class="auth-logo">
                    <!-- Random SVG Logo -->
                    <svg viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="30" cy="30" r="28" fill="#23283a" stroke="#7f5af0" stroke-width="4"/>
                        <rect x="18" y="18" width="24" height="24" rx="8" fill="#2cb67d"/>
                        <circle cx="30" cy="30" r="7" fill="#7f5af0"/>
                        <path d="M30 23v7l5 5" stroke="#fff" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
                {{ $slot }}
            </div>
        </div>
    </body>
</html>
