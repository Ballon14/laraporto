<nav x-data="{ mobileMenuOpen: false }" class="fixed top-0 left-0 right-0 z-50 glass-effect shadow-lg backdrop-blur-lg border-b border-primary/30">
    <div class="container mx-auto px-4">
        <div class="flex items-center justify-between h-16">
            <!-- Logo -->
            <div class="flex items-center space-x-3">
                <div class="w-10 h-10 bg-gradient-to-r from-primary to-secondary rounded-lg flex items-center justify-center pulse-glow shadow-lg">
                    <i class="fas fa-code text-white text-lg"></i>
                </div>
                <div class="code-font text-2xl font-bold gradient-text drop-shadow-lg">
                    <span class="text-primary">&lt;</span>
                    <span class="text-light">Dev</span>
                    <span class="text-primary">/&gt;</span>
                </div>
            </div>

            <!-- Desktop Navigation -->
            <div class="hidden md:flex items-center space-x-8">
                <a href="#home" class="nav-link text-light hover:text-primary transition-colors duration-300 font-semibold text-lg">
                    <i class="fas fa-home mr-2"></i>Home
                </a>
                <a href="#about" class="nav-link text-light hover:text-primary transition-colors duration-300 font-semibold text-lg">
                    <i class="fas fa-user mr-2"></i>About
                </a>
                <a href="#skills" class="nav-link text-light hover:text-primary transition-colors duration-300 font-semibold text-lg">
                    <i class="fas fa-tools mr-2"></i>Skills
                </a>
                <a href="#experience" class="nav-link text-light hover:text-primary transition-colors duration-300 font-semibold text-lg">
                    <i class="fas fa-briefcase mr-2"></i>Experience
                </a>
                <a href="#projects" class="nav-link text-light hover:text-primary transition-colors duration-300 font-semibold text-lg">
                    <i class="fas fa-rocket mr-2"></i>Projects
                </a>
                <a href="#contact" class="nav-link text-light hover:text-primary transition-colors duration-300 font-semibold text-lg">
                    <i class="fas fa-envelope mr-2"></i>Contact
                </a>
                <!-- Admin Panel Dropdown -->
                <div class="relative" x-data="{ open: false }">
                    <button @click="open = !open" type="button" class="nav-link text-primary font-semibold text-lg flex items-center focus:outline-none">
                        <i class="fas fa-user-shield mr-2"></i>
                        <svg class="ml-1 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" /></svg>
                    </button>
                    <div x-show="open" @click.away="open = false" class="absolute left-0 mt-2 w-48 bg-white rounded-lg shadow-lg opacity-100 transition-opacity duration-200 z-50 border border-primary/20">
                        <a href="/admin/portfolio" class="block px-4 py-2 text-gray-700 hover:bg-primary hover:text-white rounded-t-lg transition-colors duration-200"><i class="fas fa-briefcase mr-2"></i>Portfolio</a>
                        <a href="/admin/skill" class="block px-4 py-2 text-gray-700 hover:bg-primary hover:text-white transition-colors duration-200"><i class="fas fa-tools mr-2"></i>Skill</a>
                        <a href="/admin/experience" class="block px-4 py-2 text-gray-700 hover:bg-primary hover:text-white rounded-b-lg transition-colors duration-200"><i class="fas fa-user-clock mr-2"></i>Experience</a>
                    </div>
                </div>
            </div>

            <!-- Theme Toggle & Mobile Menu Button -->
            <div class="flex items-center space-x-4">
                <!-- Mobile Menu Button -->
                <button
                    @click="mobileMenuOpen = !mobileMenuOpen"
                    class="md:hidden p-2 rounded-lg bg-gradient-to-r from-primary to-secondary hover:from-secondary hover:to-primary transition-colors duration-300 shadow-md"
                >
                    <i x-show="!mobileMenuOpen" class="fas fa-bars text-light"></i>
                    <i x-show="mobileMenuOpen" class="fas fa-times text-light"></i>
                </button>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div
            x-show="mobileMenuOpen"
            x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0 transform -translate-y-4"
            x-transition:enter-end="opacity-100 transform translate-y-0"
            x-transition:leave="transition ease-in duration-300"
            x-transition:leave-start="opacity-100 transform translate-y-0"
            x-transition:leave-end="opacity-0 transform -translate-y-4"
            class="md:hidden mt-4 pb-4 border-t border-primary/30"
        >
            <div class="flex flex-col space-y-4 pt-4">
                <a href="#home" @click="mobileMenuOpen = false" class="nav-link text-light hover:text-primary transition-colors duration-300 font-semibold text-lg">
                    <i class="fas fa-home mr-2"></i>Home
                </a>
                <a href="#about" @click="mobileMenuOpen = false" class="nav-link text-light hover:text-primary transition-colors duration-300 font-semibold text-lg">
                    <i class="fas fa-user mr-2"></i>About
                </a>
                <a href="#skills" @click="mobileMenuOpen = false" class="nav-link text-light hover:text-primary transition-colors duration-300 font-semibold text-lg">
                    <i class="fas fa-tools mr-2"></i>Skills
                </a>
                <a href="#experience" @click="mobileMenuOpen = false" class="nav-link text-light hover:text-primary transition-colors duration-300 font-semibold text-lg">
                    <i class="fas fa-briefcase mr-2"></i>Experience
                </a>
                <a href="#projects" @click="mobileMenuOpen = false" class="nav-link text-light hover:text-primary transition-colors duration-300 font-semibold text-lg">
                    <i class="fas fa-rocket mr-2"></i>Projects
                </a>
                <a href="#contact" @click="mobileMenuOpen = false" class="nav-link text-light hover:text-primary transition-colors duration-300 font-semibold text-lg">
                    <i class="fas fa-envelope mr-2"></i>Contact
                </a>
                <!-- Admin Panel Mobile -->
                <div class="flex flex-col space-y-1 pt-2">
                    <a href="/admin/portfolio" @click="mobileMenuOpen = false" class="nav-link text-primary font-semibold text-lg flex items-center"><i class="fas fa-briefcase mr-2"></i>Admin Portfolio</a>
                    <a href="/admin/skill" @click="mobileMenuOpen = false" class="nav-link text-primary font-semibold text-lg flex items-center"><i class="fas fa-tools mr-2"></i>Admin Skill</a>
                    <a href="/admin/experience" @click="mobileMenuOpen = false" class="nav-link text-primary font-semibold text-lg flex items-center"><i class="fas fa-user-clock mr-2"></i>Admin Experience</a>
                </div>
            </div>
        </div>
    </div>
</nav>

<style>
    .nav-link {
        position: relative;
        padding: 0.5rem 1rem;
        border-radius: 0.5rem;
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        overflow: hidden;
    }
    .nav-link::before {
        content: '';
        position: absolute;
        bottom: 0;
        left: 50%;
        width: 0;
        height: 2px;
        background: linear-gradient(90deg, var(--primary), var(--secondary));
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        transform: translateX(-50%);
    }
    .nav-link:hover::before, .nav-link.text-primary::before {
        width: 80%;
    }
    /* Enhanced active state for scrollspy */
    .nav-link-active {
        color: var(--primary) !important;
        background: linear-gradient(90deg, var(--primary), var(--secondary), transparent 80%);
        box-shadow: 0 2px 16px 0 var(--primary), 0 0 8px 0 var(--secondary);
        border-radius: 0.7rem;
        z-index: 2;
    }
    .nav-link-active::before {
        width: 80%;
        height: 3px;
        background: linear-gradient(90deg, var(--primary), var(--secondary));
        box-shadow: 0 0 8px var(--primary), 0 0 4px var(--secondary);
        opacity: 1;
        animation: nav-underline-glow 1.2s infinite alternate;
    }
    @keyframes nav-underline-glow {
        0% { box-shadow: 0 0 8px var(--primary), 0 0 4px var(--secondary); }
        100% { box-shadow: 0 0 16px var(--secondary), 0 0 8px var(--primary); }
    }
    /* Custom Scrollbar */
    ::-webkit-scrollbar {
        width: 10px;
        background: transparent;
    }
    ::-webkit-scrollbar-thumb {
        background: linear-gradient(135deg, var(--scrollbar-primary, #a259ff), var(--scrollbar-secondary, #00e0ff), var(--scrollbar-primary, #a259ff));
        border-radius: 8px;
        box-shadow: 0 0 8px var(--scrollbar-primary, #a259ff), 0 0 4px var(--scrollbar-secondary, #00e0ff);
        border: 2px solid rgba(255,255,255,0.1);
        background-size: 200% 200%;
        animation: scrollbar-gradient-move 2.5s linear infinite;
        transition: box-shadow 0.3s, background 0.3s;
    }
    ::-webkit-scrollbar-thumb:hover {
        background: linear-gradient(135deg, var(--scrollbar-secondary, #00e0ff), var(--scrollbar-primary, #a259ff), var(--scrollbar-secondary, #00e0ff));
        box-shadow: 0 0 24px var(--scrollbar-secondary, #00e0ff), 0 0 12px var(--scrollbar-primary, #a259ff);
        background-size: 200% 200%;
        animation: scrollbar-gradient-move 1.2s linear infinite;
    }
    ::-webkit-scrollbar-track {
        background: transparent;
    }
    @keyframes scrollbar-gradient-move {
        0% { background-position: 0% 50%; }
        100% { background-position: 100% 50%; }
    }
    /* For Firefox */
    html {
        scrollbar-width: thin;
        scrollbar-color: var(--scrollbar-primary, #a259ff) transparent;
    }
</style>
