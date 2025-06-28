<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Portfolio - Programmer Gabut yang Lagi Belajar' }}</title>

    <!-- Meta Tags -->
    <meta name="description" content="Portfolio programmer yang sedang belajar dengan semangat tinggi">
    <meta name="keywords" content="programmer, portfolio, laravel, mongodb, web development">
    <meta name="author" content="Programmer Gabut">

    <!-- Open Graph -->
    <meta property="og:title" content="Portfolio - Programmer Gabut">
    <meta property="og:description" content="Portfolio programmer yang sedang belajar">
    <meta property="og:type" content="website">

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="/favicon.ico">

    <!-- CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Fira+Code:wght@300;400;500;600;700&family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Alpine.js -->
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <!-- AOS Animation -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <style>
        :root {
            --primary: #a259ff; /* Neon Purple */
            --secondary: #00e0ff; /* Neon Blue */
            --accent: #4ecdc4; /* Teal */
            --dark: #0a0a0a;
            --darker: #050505;
            --light: #f8f9fa;
            --code-bg: #1e1e1e;
        }

        * {
            scroll-behavior: smooth;
        }

        body {
            font-family: 'Inter', sans-serif;
            background: var(--dark);
            color: var(--light);
            overflow-x: hidden;
        }

        .code-font {
            font-family: 'Fira Code', monospace;
        }

        .gradient-bg {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }

        .gradient-text {
            background: linear-gradient(135deg, var(--primary), var(--accent));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .glass-effect {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        .code-bg {
            background: var(--code-bg);
            color: var(--primary);
            font-family: 'Fira Code', monospace;
            border: 1px solid #333;
        }

        .typing-animation {
            overflow: hidden;
            border-right: 2px solid var(--primary);
            white-space: nowrap;
            animation: typing 3.5s steps(40, end), blink-caret 0.75s step-end infinite;
        }

        @keyframes typing {
            from { width: 0; }
            to { width: 100%; }
        }

        @keyframes blink-caret {
            from, to { border-color: transparent; }
            50% { border-color: var(--primary); }
        }

        .skill-bar {
            background: #2d3748;
            border-radius: 10px;
            overflow: hidden;
            position: relative;
        }

        .skill-progress {
            background: linear-gradient(90deg, var(--primary), var(--accent));
            height: 8px;
            border-radius: 10px;
            transition: width 1.5s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
        }

        .skill-progress::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.3), transparent);
            animation: shimmer 2s infinite;
        }

        @keyframes shimmer {
            0% { transform: translateX(-100%); }
            100% { transform: translateX(100%); }
        }

        .floating {
            animation: floating 3s ease-in-out infinite;
        }

        @keyframes floating {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
        }

        .pulse-glow {
            animation: pulse-glow 2s ease-in-out infinite alternate;
        }

        @keyframes pulse-glow {
            from { box-shadow: 0 0 20px rgba(0, 255, 136, 0.3); }
            to { box-shadow: 0 0 30px rgba(0, 255, 136, 0.6); }
        }

        .hover-lift {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .hover-lift:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3);
        }

        .text-shadow {
            text-shadow: 0 2px 4px rgba(0, 0, 0, 0.3);
        }

        .scroll-indicator {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 3px;
            background: #333;
            z-index: 9999;
        }

        .scroll-progress {
            height: 100%;
            background: linear-gradient(90deg, var(--primary), var(--accent));
            width: 0%;
            transition: width 0.1s ease;
        }
    </style>
</head>
<body x-data="portfolioApp()" class="relative">
    <!-- Scroll Progress Indicator -->
    <div class="scroll-indicator">
        <div class="scroll-progress" x-ref="scrollProgress"></div>
    </div>

    <!-- Navigation -->
    <x-navigation />

    <!-- Main Content -->
    <main class="pt-20">
        {{ $slot }}
    </main>

    <!-- Footer -->
    <x-footer />

    <!-- Back to Top Button -->
    <button
        x-show="showBackToTop"
        x-transition
        @click="scrollToTop()"
        class="fixed bottom-8 right-8 bg-gradient-to-r from-primary to-accent text-white p-4 rounded-full shadow-lg hover:shadow-xl transition-all duration-300 z-50 hover-lift"
    >
        <i class="fas fa-arrow-up"></i>
    </button>

    <!-- Loading Screen -->
    <div x-show="loading" x-transition class="fixed inset-0 bg-dark z-[9999] flex items-center justify-center">
        <div class="text-center">
            <div class="code-font text-2xl mb-4 text-primary">
                <span class="typing-animation">Loading Portfolio...</span>
            </div>
            <div class="w-16 h-16 border-4 border-primary border-t-transparent rounded-full animate-spin mx-auto"></div>
        </div>
    </div>

    <script>
        function portfolioApp() {
            return {
                loading: true,
                showBackToTop: false,
                currentSection: 'home',

                init() {
                    this.hideLoading();
                    this.initScrollProgress();
                    this.initScrollSpy();
                    this.initAOS();
                },

                hideLoading() {
                    setTimeout(() => {
                        this.loading = false;
                    }, 2000);
                },

                initScrollProgress() {
                    window.addEventListener('scroll', () => {
                        const scrollTop = window.pageYOffset;
                        const docHeight = document.body.offsetHeight - window.innerHeight;
                        const scrollPercent = (scrollTop / docHeight) * 100;

                        this.$refs.scrollProgress.style.width = scrollPercent + '%';
                        this.showBackToTop = scrollTop > 300;
                    });
                },

                initScrollSpy() {
                    const sections = document.querySelectorAll('section[id]');
                    const navLinks = document.querySelectorAll('nav a[href^="#"]');

                    window.addEventListener('scroll', () => {
                        let current = '';
                        sections.forEach(section => {
                            const sectionTop = section.offsetTop;
                            const sectionHeight = section.clientHeight;
                            if (window.pageYOffset >= sectionTop - 200) {
                                current = section.getAttribute('id');
                            }
                        });

                        navLinks.forEach(link => {
                            link.classList.remove('text-primary');
                            if (link.getAttribute('href') === '#' + current) {
                                link.classList.add('text-primary');
                            }
                        });
                    });
                },

                initAOS() {
                    AOS.init({
                        duration: 1000,
                        easing: 'ease-in-out',
                        once: true,
                        offset: 100
                    });
                },

                scrollToTop() {
                    window.scrollTo({
                        top: 0,
                        behavior: 'smooth'
                    });
                },

                scrollToSection(sectionId) {
                    const element = document.getElementById(sectionId);
                    if (element) {
                        element.scrollIntoView({
                            behavior: 'smooth',
                            block: 'start'
                        });
                    }
                }
            }
        }
    </script>
</body>
</html>
