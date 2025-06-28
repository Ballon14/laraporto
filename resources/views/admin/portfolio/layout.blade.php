<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Portfolio</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <style>
        :root {
            --primary: #7f5af0;
            --secondary: #2cb67d;
            --accent: #4ecdc4;
            --dark: #181c24;
            --card: #23283a;
            --border: #3a3f5a;
            --light: #f8f9fa;
        }
        body {
            background: var(--dark);
            min-height: 100vh;
            font-family: 'Figtree', 'Inter', sans-serif;
        }
        .gradient-text {
            background: linear-gradient(90deg, var(--primary), var(--secondary));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        .admin-card {
            background: var(--card);
            border: 1.5px solid var(--border);
            border-radius: 1.2rem;
            box-shadow: 0 4px 32px 0 #000a;
            padding: 2.5rem 2rem 2rem 2rem;
        }
        .admin-logo {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-bottom: 1.5rem;
        }
        .admin-logo svg {
            width: 48px;
            height: 48px;
            border-radius: 50%;
            background: linear-gradient(135deg, var(--primary) 60%, var(--secondary) 100%);
            box-shadow: 0 0 16px var(--primary)cc;
            padding: 8px;
        }
        .admin-nav-link {
            color: #f8f9fa;
            padding: 0.5rem 1.2rem;
            border-radius: 0.5rem;
            font-weight: 600;
            display: inline-flex;
            align-items: center;
            transition: all 0.2s cubic-bezier(0.4,0,0.2,1);
            position: relative;
        }
        .admin-nav-link:hover {
            color: var(--primary);
            background: rgba(127,90,240,0.08);
        }
        .admin-nav-link-active {
            color: var(--primary);
            background: linear-gradient(90deg, var(--primary), var(--secondary), transparent 80%);
            box-shadow: 0 2px 12px 0 var(--primary), 0 0 8px 0 var(--secondary);
        }
        .admin-btn {
            background: linear-gradient(90deg, var(--primary), var(--secondary));
            color: #fff;
            border: none;
            border-radius: 0.7rem;
            padding: 0.75rem 1rem;
            font-weight: 600;
            font-size: 1rem;
            box-shadow: 0 2px 8px var(--primary)55;
            transition: background 0.2s;
        }
        .admin-btn:hover {
            background: linear-gradient(90deg, var(--secondary), var(--primary));
        }
        .admin-input {
            background: var(--card);
            border: 1.5px solid var(--border);
            color: #fff;
            border-radius: 0.7rem;
            padding: 0.75rem 1rem;
            margin-bottom: 1rem;
            width: 100%;
            font-size: 1rem;
            transition: border 0.2s;
        }
        .admin-input:focus {
            border-color: var(--primary);
            outline: none;
        }
        .admin-error {
            background: #ff2e63cc;
            color: #fff;
            border-radius: 0.5rem;
            padding: 0.75rem 1rem;
            margin-bottom: 1rem;
            text-align: center;
            font-size: 0.98rem;
        }
        .admin-success {
            background: #2cb67dcc;
            color: #fff;
            border-radius: 0.5rem;
            padding: 0.75rem 1rem;
            margin-bottom: 1rem;
            text-align: center;
            font-size: 0.98rem;
        }
    </style>
</head>
<body class="min-h-screen flex flex-col">
    <header class="w-full py-6 px-4 bg-dark/80 border-b border-primary/20 flex items-center justify-between">
        <div class="flex items-center gap-3">
            <div class="admin-logo">
                <!-- Random SVG Logo -->
                <svg viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="30" cy="30" r="28" fill="#23283a" stroke="#7f5af0" stroke-width="4"/>
                    <rect x="18" y="18" width="24" height="24" rx="8" fill="#2cb67d"/>
                    <circle cx="30" cy="30" r="7" fill="#7f5af0"/>
                    <path d="M30 23v7l5 5" stroke="#fff" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </div>
            <span class="text-2xl font-bold gradient-text">Admin Panel</span>
        </div>
        <div class="flex items-center gap-4">
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="admin-btn flex items-center gap-2"><i class="fas fa-sign-out-alt"></i> Log Out</button>
            </form>
            <a href="/" class="text-primary hover:underline font-semibold"><i class="fas fa-arrow-left mr-2"></i>Kembali ke Website</a>
        </div>
    </header>
    <!-- Admin Navbar -->
    <nav class="w-full bg-dark/90 border-b border-primary/10 shadow flex items-center justify-center space-x-6 py-2 sticky top-0 z-40">
        <a href="/dashboard" class="admin-nav-link {{ request()->is('dashboard') ? 'admin-nav-link-active' : '' }}"><i class="fas fa-tachometer-alt mr-1"></i> Dashboard</a>
        <a href="/admin/portfolio" class="admin-nav-link {{ request()->is('admin/portfolio*') ? 'admin-nav-link-active' : '' }}"><i class="fas fa-briefcase mr-1"></i> Portfolio</a>
        <a href="/admin/skill" class="admin-nav-link {{ request()->is('admin/skill*') ? 'admin-nav-link-active' : '' }}"><i class="fas fa-tools mr-1"></i> Skill</a>
        <a href="/admin/experience" class="admin-nav-link {{ request()->is('admin/experience*') ? 'admin-nav-link-active' : '' }}"><i class="fas fa-user-clock mr-1"></i> Experience</a>
    </nav>
    <main class="flex-1 w-full max-w-5xl mx-auto px-4 py-10">
        @yield('content')
    </main>
    <footer class="w-full py-6 text-center text-gray-400 text-sm border-t border-primary/20 bg-dark/80">
        &copy; {{ date('Y') }} Portfolio Admin. Made with <span class="text-primary">&hearts;</span>
    </footer>
</body>
</html>
