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
    <link
        href="https://fonts.googleapis.com/css2?family=Fira+Code:wght@300;400;500;600;700&family=Inter:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <!-- Alpine.js -->
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <!-- AOS Animation -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <style>
        :root {
            --primary: #a259ff;
            /* Neon Purple */
            --secondary: #00e0ff;
            /* Neon Blue */
            --accent: #4ecdc4;
            /* Teal */
            --pink: #ff6b9d;
            /* Hot Pink */
            --orange: #ff9f43;
            /* Warm Orange */
            --dark: #0a0a0a;
            --darker: #030303;
            --light: #f8f9fa;
            --code-bg: #1a1a2e;
        }

        * {
            scroll-behavior: smooth;
        }

        /* Custom Cursor */
        body {
            font-family: 'Inter', sans-serif;
            background: var(--darker);
            color: var(--light);
            overflow-x: hidden;
            cursor: none;
        }

        .cursor-dot {
            width: 8px;
            height: 8px;
            background: var(--primary);
            border-radius: 50%;
            position: fixed;
            pointer-events: none;
            z-index: 99999;
            mix-blend-mode: difference;
            transition: transform 0.1s ease;
        }

        .cursor-outline {
            width: 40px;
            height: 40px;
            border: 2px solid var(--secondary);
            border-radius: 50%;
            position: fixed;
            pointer-events: none;
            z-index: 99998;
            transition: all 0.15s ease-out;
            mix-blend-mode: difference;
        }

        .cursor-outline.hover {
            transform: scale(1.5);
            border-color: var(--primary);
            background: rgba(162, 89, 255, 0.1);
        }

        /* Aurora Background */
        .aurora-bg {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -2;
            overflow: hidden;
        }

        .aurora-bg::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background:
                radial-gradient(ellipse at 20% 80%, rgba(162, 89, 255, 0.15) 0%, transparent 50%),
                radial-gradient(ellipse at 80% 20%, rgba(0, 224, 255, 0.12) 0%, transparent 50%),
                radial-gradient(ellipse at 40% 40%, rgba(78, 205, 196, 0.1) 0%, transparent 40%),
                radial-gradient(ellipse at 60% 60%, rgba(255, 107, 157, 0.08) 0%, transparent 40%);
            animation: aurora 20s ease-in-out infinite;
        }

        @keyframes aurora {

            0%,
            100% {
                transform: translate(0, 0) rotate(0deg);
            }

            25% {
                transform: translate(-5%, -5%) rotate(5deg);
            }

            50% {
                transform: translate(5%, 5%) rotate(-5deg);
            }

            75% {
                transform: translate(-3%, 3%) rotate(3deg);
            }
        }

        /* Floating Particles */
        .particles {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
            overflow: hidden;
            pointer-events: none;
        }

        .particle {
            position: absolute;
            width: 4px;
            height: 4px;
            background: var(--primary);
            border-radius: 50%;
            opacity: 0.6;
            animation: particle-float linear infinite;
            box-shadow: 0 0 10px var(--primary);
        }

        @keyframes particle-float {
            0% {
                transform: translateY(100vh) rotate(0deg);
                opacity: 0;
            }

            10% {
                opacity: 0.6;
            }

            90% {
                opacity: 0.6;
            }

            100% {
                transform: translateY(-100vh) rotate(720deg);
                opacity: 0;
            }
        }

        .code-font {
            font-family: 'Fira Code', monospace;
        }

        .gradient-bg {
            background: linear-gradient(135deg, rgba(102, 126, 234, 0.9) 0%, rgba(118, 75, 162, 0.9) 100%);
        }

        .gradient-text {
            background: linear-gradient(135deg, var(--primary), var(--secondary), var(--accent));
            background-size: 200% 200%;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            animation: gradient-shift 3s ease infinite;
        }

        @keyframes gradient-shift {

            0%,
            100% {
                background-position: 0% 50%;
            }

            50% {
                background-position: 100% 50%;
            }
        }

        .glass-effect {
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            box-shadow:
                0 8px 32px rgba(0, 0, 0, 0.3),
                inset 0 1px 0 rgba(255, 255, 255, 0.1);
        }

        .glass-effect:hover {
            background: rgba(255, 255, 255, 0.08);
            border-color: rgba(162, 89, 255, 0.3);
            box-shadow:
                0 12px 48px rgba(0, 0, 0, 0.4),
                0 0 30px rgba(162, 89, 255, 0.1),
                inset 0 1px 0 rgba(255, 255, 255, 0.15);
        }

        /* Animated Border Gradient */
        .animated-border {
            position: relative;
            background: var(--darker);
            border-radius: 1rem;
        }

        .animated-border::before {
            content: '';
            position: absolute;
            inset: -2px;
            border-radius: inherit;
            background: linear-gradient(45deg, var(--primary), var(--secondary), var(--accent), var(--pink), var(--primary));
            background-size: 300% 300%;
            animation: border-rotate 4s linear infinite;
            z-index: -1;
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .animated-border:hover::before {
            opacity: 1;
        }

        @keyframes border-rotate {
            0% {
                background-position: 0% 50%;
            }

            50% {
                background-position: 100% 50%;
            }

            100% {
                background-position: 0% 50%;
            }
        }

        .code-bg {
            background: var(--code-bg);
            color: var(--primary);
            font-family: 'Fira Code', monospace;
            border: 1px solid rgba(162, 89, 255, 0.2);
            box-shadow:
                0 0 30px rgba(162, 89, 255, 0.1),
                inset 0 0 60px rgba(0, 0, 0, 0.3);
        }

        .typing-animation {
            overflow: hidden;
            border-right: 3px solid var(--primary);
            white-space: nowrap;
            animation: typing 3.5s steps(40, end), blink-caret 0.75s step-end infinite;
        }

        @keyframes typing {
            from {
                width: 0;
            }

            to {
                width: 100%;
            }
        }

        @keyframes blink-caret {

            from,
            to {
                border-color: transparent;
            }

            50% {
                border-color: var(--primary);
            }
        }

        .skill-bar {
            background: linear-gradient(90deg, rgba(45, 55, 72, 0.5), rgba(45, 55, 72, 0.8));
            border-radius: 12px;
            overflow: hidden;
            position: relative;
            box-shadow: inset 0 2px 8px rgba(0, 0, 0, 0.3);
        }

        .skill-progress {
            background: linear-gradient(90deg, var(--primary), var(--secondary), var(--accent));
            background-size: 200% 100%;
            height: 100%;
            border-radius: 12px;
            transition: width 1.5s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
            animation: skill-gradient 3s ease infinite;
            box-shadow: 0 0 20px rgba(162, 89, 255, 0.5);
        }

        @keyframes skill-gradient {

            0%,
            100% {
                background-position: 0% 50%;
            }

            50% {
                background-position: 100% 50%;
            }
        }

        .skill-progress::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.4), transparent);
            animation: shimmer 2s infinite;
        }

        @keyframes shimmer {
            0% {
                transform: translateX(-100%);
            }

            100% {
                transform: translateX(100%);
            }
        }

        .floating {
            animation: floating 4s ease-in-out infinite;
        }

        @keyframes floating {

            0%,
            100% {
                transform: translateY(0px) rotate(0deg);
            }

            25% {
                transform: translateY(-8px) rotate(2deg);
            }

            50% {
                transform: translateY(-15px) rotate(0deg);
            }

            75% {
                transform: translateY(-8px) rotate(-2deg);
            }
        }

        .pulse-glow {
            animation: pulse-glow 2s ease-in-out infinite alternate;
        }

        @keyframes pulse-glow {
            from {
                box-shadow: 0 0 20px rgba(162, 89, 255, 0.4), 0 0 40px rgba(0, 224, 255, 0.2);
            }

            to {
                box-shadow: 0 0 40px rgba(162, 89, 255, 0.7), 0 0 80px rgba(0, 224, 255, 0.4);
            }
        }

        /* 3D Tilt Effect */
        .tilt-3d {
            transform-style: preserve-3d;
            transition: transform 0.3s ease;
        }

        .tilt-3d:hover {
            transform: perspective(1000px) rotateX(5deg) rotateY(-5deg) translateZ(20px);
        }

        /* Magnetic Hover */
        .magnetic-hover {
            transition: transform 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .hover-lift {
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .hover-lift:hover {
            transform: translateY(-8px) scale(1.02);
            box-shadow:
                0 25px 50px rgba(0, 0, 0, 0.4),
                0 0 40px rgba(162, 89, 255, 0.2);
        }

        /* Neon Glow Text */
        .neon-text {
            text-shadow:
                0 0 5px var(--primary),
                0 0 10px var(--primary),
                0 0 20px var(--primary),
                0 0 40px var(--secondary);
        }

        .text-shadow {
            text-shadow:
                0 2px 4px rgba(0, 0, 0, 0.5),
                0 0 20px rgba(162, 89, 255, 0.3);
        }

        .scroll-indicator {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 4px;
            background: rgba(51, 51, 51, 0.3);
            z-index: 9999;
        }

        .scroll-progress {
            height: 100%;
            background: linear-gradient(90deg, var(--primary), var(--secondary), var(--accent));
            background-size: 200% 100%;
            animation: gradient-shift 3s ease infinite;
            width: 0%;
            transition: width 0.1s ease;
            box-shadow: 0 0 10px var(--primary);
        }

        /* Glowing Button */
        .glow-button {
            position: relative;
            overflow: hidden;
            transition: all 0.3s ease;
        }

        .glow-button::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            width: 0;
            height: 0;
            background: radial-gradient(circle, rgba(255, 255, 255, 0.3) 0%, transparent 70%);
            transform: translate(-50%, -50%);
            transition: width 0.5s ease, height 0.5s ease;
        }

        .glow-button:hover::before {
            width: 300%;
            height: 300%;
        }

        .glow-button:hover {
            box-shadow: 0 0 30px rgba(162, 89, 255, 0.5), 0 0 60px rgba(0, 224, 255, 0.3);
        }

        /* Staggered Animation */
        .stagger-item {
            opacity: 0;
            transform: translateY(30px);
            animation: stagger-in 0.6s ease forwards;
        }

        @keyframes stagger-in {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Wave Animation for Footer */
        .wave-top {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 80px;
            overflow: hidden;
        }

        .wave-top svg {
            position: absolute;
            bottom: 0;
            width: 200%;
            height: 100%;
            animation: wave 8s linear infinite;
        }

        @keyframes wave {
            0% {
                transform: translateX(0);
            }

            100% {
                transform: translateX(-50%);
            }
        }

        /* Loading Screen Enhancement */
        .loading-gradient {
            background: linear-gradient(-45deg, var(--primary), var(--secondary), var(--accent), var(--pink));
            background-size: 400% 400%;
            animation: loading-gradient 3s ease infinite;
        }

        @keyframes loading-gradient {
            0% {
                background-position: 0% 50%;
            }

            50% {
                background-position: 100% 50%;
            }

            100% {
                background-position: 0% 50%;
            }
        }

        /* Section Divider */
        .section-divider {
            height: 1px;
            background: linear-gradient(90deg, transparent, var(--primary), var(--secondary), var(--primary), transparent);
            margin: 0 auto;
            opacity: 0.5;
        }

        /* Input Focus Glow */
        input:focus,
        textarea:focus {
            box-shadow: 0 0 20px rgba(162, 89, 255, 0.3);
        }

        /* Card Shine Effect */
        .card-shine {
            position: relative;
            overflow: hidden;
        }

        .card-shine::after {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: linear-gradient(45deg,
                    transparent 40%,
                    rgba(255, 255, 255, 0.05) 45%,
                    rgba(255, 255, 255, 0.1) 50%,
                    rgba(255, 255, 255, 0.05) 55%,
                    transparent 60%);
            transform: rotate(45deg) translateY(-100%);
            transition: transform 0.6s ease;
        }

        .card-shine:hover::after {
            transform: rotate(45deg) translateY(100%);
        }
    </style>
</head>

<body x-data="portfolioApp()" class="relative">
    <!-- Aurora Background -->
    <div class="aurora-bg"></div>

    <!-- Floating Particles -->
    <div class="particles" id="particles"></div>

    <!-- Custom Cursor -->
    <div class="cursor-dot" id="cursor-dot"></div>
    <div class="cursor-outline" id="cursor-outline"></div>

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
    <button x-show="showBackToTop" x-transition @click="scrollToTop()"
        class="fixed bottom-8 right-8 bg-gradient-to-r from-primary to-secondary text-white p-4 rounded-full shadow-lg hover:shadow-xl transition-all duration-300 z-50 hover-lift glow-button">
        <i class="fas fa-arrow-up"></i>
    </button>

    <!-- Loading Screen -->
    <div x-show="loading" x-transition class="fixed inset-0 z-[9999] flex items-center justify-center loading-gradient">
        <div class="text-center">
            <div class="w-24 h-24 mx-auto mb-6 relative">
                <div class="absolute inset-0 rounded-full border-4 border-white/20"></div>
                <div class="absolute inset-0 rounded-full border-4 border-white border-t-transparent animate-spin">
                </div>
                <div class="absolute inset-2 rounded-full border-4 border-white/30 border-b-transparent animate-spin"
                    style="animation-direction: reverse; animation-duration: 1.5s;"></div>
                <div class="absolute inset-0 flex items-center justify-center">
                    <i class="fas fa-code text-white text-2xl"></i>
                </div>
            </div>
            <div class="code-font text-2xl mb-4 text-white">
                <span class="typing-animation">Loading Portfolio...</span>
            </div>
            <div class="flex justify-center gap-2">
                <div class="w-3 h-3 bg-white rounded-full animate-bounce" style="animation-delay: 0s;"></div>
                <div class="w-3 h-3 bg-white rounded-full animate-bounce" style="animation-delay: 0.2s;"></div>
                <div class="w-3 h-3 bg-white rounded-full animate-bounce" style="animation-delay: 0.4s;"></div>
            </div>
        </div>
    </div>

    <script>
        // Custom Cursor
        const cursorDot = document.getElementById('cursor-dot');
        const cursorOutline = document.getElementById('cursor-outline');

        if (cursorDot && cursorOutline) {
            let mouseX = 0,
                mouseY = 0;
            let outlineX = 0,
                outlineY = 0;

            document.addEventListener('mousemove', (e) => {
                mouseX = e.clientX;
                mouseY = e.clientY;
                cursorDot.style.left = mouseX + 'px';
                cursorDot.style.top = mouseY + 'px';
            });

            function animateCursor() {
                outlineX += (mouseX - outlineX) * 0.15;
                outlineY += (mouseY - outlineY) * 0.15;
                cursorOutline.style.left = outlineX + 'px';
                cursorOutline.style.top = outlineY + 'px';
                requestAnimationFrame(animateCursor);
            }
            animateCursor();

            // Hover effect on interactive elements
            document.querySelectorAll('a, button, input, textarea, .hover-lift').forEach(el => {
                el.addEventListener('mouseenter', () => cursorOutline.classList.add('hover'));
                el.addEventListener('mouseleave', () => cursorOutline.classList.remove('hover'));
            });

            // Hide cursor on mobile
            if ('ontouchstart' in window) {
                cursorDot.style.display = 'none';
                cursorOutline.style.display = 'none';
                document.body.style.cursor = 'auto';
            }
        }

        // Particle Generation
        function createParticles() {
            const particlesContainer = document.getElementById('particles');
            if (!particlesContainer) return;

            const colors = ['#a259ff', '#00e0ff', '#4ecdc4', '#ff6b9d'];
            const particleCount = 30;

            for (let i = 0; i < particleCount; i++) {
                const particle = document.createElement('div');
                particle.className = 'particle';
                particle.style.left = Math.random() * 100 + '%';
                particle.style.background = colors[Math.floor(Math.random() * colors.length)];
                particle.style.animationDuration = (Math.random() * 15 + 10) + 's';
                particle.style.animationDelay = Math.random() * 10 + 's';
                particle.style.width = (Math.random() * 4 + 2) + 'px';
                particle.style.height = particle.style.width;
                particle.style.boxShadow = `0 0 ${Math.random() * 15 + 5}px ${particle.style.background}`;
                particlesContainer.appendChild(particle);
            }
        }
        createParticles();

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
                    this.initTiltEffect();
                },

                hideLoading() {
                    setTimeout(() => {
                        this.loading = false;
                    }, 1500);
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
                            link.classList.remove('text-primary', 'nav-link-active');
                            if (link.getAttribute('href') === '#' + current) {
                                link.classList.add('text-primary', 'nav-link-active');
                            }
                        });
                    });
                },

                initAOS() {
                    AOS.init({
                        duration: 800,
                        easing: 'ease-out-cubic',
                        once: true,
                        offset: 50,
                        anchorPlacement: 'top-bottom'
                    });
                },

                initTiltEffect() {
                    document.querySelectorAll('.tilt-3d').forEach(el => {
                        el.addEventListener('mousemove', (e) => {
                            const rect = el.getBoundingClientRect();
                            const x = e.clientX - rect.left;
                            const y = e.clientY - rect.top;
                            const centerX = rect.width / 2;
                            const centerY = rect.height / 2;
                            const rotateX = (y - centerY) / 10;
                            const rotateY = (centerX - x) / 10;
                            el.style.transform =
                                `perspective(1000px) rotateX(${rotateX}deg) rotateY(${rotateY}deg) translateZ(10px)`;
                        });
                        el.addEventListener('mouseleave', () => {
                            el.style.transform = 'perspective(1000px) rotateX(0) rotateY(0) translateZ(0)';
                        });
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
