<nav x-data="{ mobileMenuOpen: false, scrolled: false }" x-init="window.addEventListener('scroll', () => { scrolled = window.scrollY > 50 })"
    :class="scrolled ? 'bg-dark/90 backdrop-blur-xl shadow-2xl border-b border-primary/20' : 'bg-transparent'"
    class="fixed top-0 left-0 right-0 z-50 transition-all duration-500">
    <div class="container mx-auto px-4">
        <div class="flex items-center justify-between h-20">
            <!-- Logo -->
            <a href="#home" class="flex items-center space-x-3 group">
                <div
                    class="w-12 h-12 bg-gradient-to-r from-primary to-secondary rounded-xl flex items-center justify-center pulse-glow shadow-lg group-hover:scale-110 transition-transform duration-300">
                    <i class="fas fa-code text-white text-xl"></i>
                </div>
                <div class="code-font text-2xl font-bold">
                    <span class="text-primary group-hover:text-secondary transition-colors">&lt;</span>
                    <span class="text-light">Dev</span>
                    <span class="text-primary group-hover:text-secondary transition-colors">/&gt;</span>
                </div>
            </a>

            <!-- Desktop Navigation -->
            <div class="hidden lg:flex items-center space-x-2">
                <a href="#home"
                    class="nav-link text-light hover:text-primary transition-all duration-300 font-medium px-4 py-2 rounded-xl hover:bg-primary/10">
                    <i class="fas fa-home mr-2 text-sm"></i>Home
                </a>
                <a href="#about"
                    class="nav-link text-light hover:text-primary transition-all duration-300 font-medium px-4 py-2 rounded-xl hover:bg-primary/10">
                    <i class="fas fa-user mr-2 text-sm"></i>About
                </a>
                <a href="#skills"
                    class="nav-link text-light hover:text-primary transition-all duration-300 font-medium px-4 py-2 rounded-xl hover:bg-primary/10">
                    <i class="fas fa-tools mr-2 text-sm"></i>Skills
                </a>
                <a href="#experience"
                    class="nav-link text-light hover:text-primary transition-all duration-300 font-medium px-4 py-2 rounded-xl hover:bg-primary/10">
                    <i class="fas fa-briefcase mr-2 text-sm"></i>Experience
                </a>
                <a href="#projects"
                    class="nav-link text-light hover:text-primary transition-all duration-300 font-medium px-4 py-2 rounded-xl hover:bg-primary/10">
                    <i class="fas fa-rocket mr-2 text-sm"></i>Projects
                </a>
                <a href="#contact"
                    class="nav-link text-light hover:text-primary transition-all duration-300 font-medium px-4 py-2 rounded-xl hover:bg-primary/10">
                    <i class="fas fa-envelope mr-2 text-sm"></i>Contact
                </a>

                <!-- Admin Dropdown -->
                <div class="relative ml-2" x-data="{ open: false }">
                    <button @click="open = !open" type="button"
                        class="flex items-center gap-2 px-4 py-2 rounded-xl bg-gradient-to-r from-primary/10 to-secondary/10 border border-primary/30 text-primary font-medium hover:border-primary transition-all duration-300">
                        <i class="fas fa-user-shield text-sm"></i>
                        <span class="hidden xl:inline">Admin</span>
                        <svg class="w-4 h-4 transition-transform duration-300" :class="open ? 'rotate-180' : ''"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div x-show="open" x-transition:enter="transition ease-out duration-200"
                        x-transition:enter-start="opacity-0 transform -translate-y-2"
                        x-transition:enter-end="opacity-100 transform translate-y-0"
                        x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100"
                        x-transition:leave-end="opacity-0" @click.away="open = false"
                        class="absolute right-0 mt-2 w-48 glass-effect rounded-xl shadow-2xl py-2 border border-primary/20 overflow-hidden">
                        <a href="/admin"
                            class="flex items-center gap-3 px-4 py-3 text-gray-300 hover:bg-primary hover:text-dark transition-all duration-200">
                            <i class="fas fa-tachometer-alt w-4"></i>Dashboard
                        </a>
                        <a href="/admin/portfolios"
                            class="flex items-center gap-3 px-4 py-3 text-gray-300 hover:bg-primary hover:text-dark transition-all duration-200">
                            <i class="fas fa-briefcase w-4"></i>Portfolio
                        </a>
                        <a href="/admin/skills"
                            class="flex items-center gap-3 px-4 py-3 text-gray-300 hover:bg-primary hover:text-dark transition-all duration-200">
                            <i class="fas fa-tools w-4"></i>Skills
                        </a>
                        <a href="/admin/experiences"
                            class="flex items-center gap-3 px-4 py-3 text-gray-300 hover:bg-primary hover:text-dark transition-all duration-200">
                            <i class="fas fa-user-clock w-4"></i>Experience
                        </a>
                    </div>
                </div>
            </div>

            <!-- Mobile Menu Button -->
            <button @click="mobileMenuOpen = !mobileMenuOpen"
                class="lg:hidden p-3 rounded-xl bg-gradient-to-r from-primary to-secondary hover:shadow-lg transition-all duration-300">
                <i x-show="!mobileMenuOpen" class="fas fa-bars text-white text-lg"></i>
                <i x-show="mobileMenuOpen" class="fas fa-times text-white text-lg"></i>
            </button>
        </div>

        <!-- Mobile Menu -->
        <div x-show="mobileMenuOpen" x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0 transform -translate-y-4"
            x-transition:enter-end="opacity-100 transform translate-y-0"
            x-transition:leave="transition ease-in duration-200"
            x-transition:leave-start="opacity-100 transform translate-y-0"
            x-transition:leave-end="opacity-0 transform -translate-y-4"
            class="lg:hidden glass-effect rounded-2xl mt-4 mb-4 p-4 border border-primary/20">
            <div class="flex flex-col space-y-2">
                <a href="#home" @click="mobileMenuOpen = false"
                    class="flex items-center gap-3 px-4 py-3 rounded-xl text-light hover:bg-primary/10 hover:text-primary transition-all duration-300">
                    <i class="fas fa-home w-5"></i>Home
                </a>
                <a href="#about" @click="mobileMenuOpen = false"
                    class="flex items-center gap-3 px-4 py-3 rounded-xl text-light hover:bg-primary/10 hover:text-primary transition-all duration-300">
                    <i class="fas fa-user w-5"></i>About
                </a>
                <a href="#skills" @click="mobileMenuOpen = false"
                    class="flex items-center gap-3 px-4 py-3 rounded-xl text-light hover:bg-primary/10 hover:text-primary transition-all duration-300">
                    <i class="fas fa-tools w-5"></i>Skills
                </a>
                <a href="#experience" @click="mobileMenuOpen = false"
                    class="flex items-center gap-3 px-4 py-3 rounded-xl text-light hover:bg-primary/10 hover:text-primary transition-all duration-300">
                    <i class="fas fa-briefcase w-5"></i>Experience
                </a>
                <a href="#projects" @click="mobileMenuOpen = false"
                    class="flex items-center gap-3 px-4 py-3 rounded-xl text-light hover:bg-primary/10 hover:text-primary transition-all duration-300">
                    <i class="fas fa-rocket w-5"></i>Projects
                </a>
                <a href="#contact" @click="mobileMenuOpen = false"
                    class="flex items-center gap-3 px-4 py-3 rounded-xl text-light hover:bg-primary/10 hover:text-primary transition-all duration-300">
                    <i class="fas fa-envelope w-5"></i>Contact
                </a>

                <div class="border-t border-primary/20 pt-4 mt-2">
                    <p class="text-gray-500 text-xs uppercase tracking-wider mb-2 px-4">Admin Panel</p>
                    <a href="/admin" @click="mobileMenuOpen = false"
                        class="flex items-center gap-3 px-4 py-3 rounded-xl text-primary hover:bg-primary/10 transition-all duration-300">
                        <i class="fas fa-tachometer-alt w-5"></i>Dashboard
                    </a>
                    <a href="/admin/portfolios" @click="mobileMenuOpen = false"
                        class="flex items-center gap-3 px-4 py-3 rounded-xl text-primary hover:bg-primary/10 transition-all duration-300">
                        <i class="fas fa-briefcase w-5"></i>Portfolio
                    </a>
                    <a href="/admin/skills" @click="mobileMenuOpen = false"
                        class="flex items-center gap-3 px-4 py-3 rounded-xl text-primary hover:bg-primary/10 transition-all duration-300">
                        <i class="fas fa-tools w-5"></i>Skills
                    </a>
                    <a href="/admin/experiences" @click="mobileMenuOpen = false"
                        class="flex items-center gap-3 px-4 py-3 rounded-xl text-primary hover:bg-primary/10 transition-all duration-300">
                        <i class="fas fa-user-clock w-5"></i>Experience
                    </a>
                </div>
            </div>
        </div>
    </div>
</nav>

<style>
    .nav-link {
        position: relative;
    }

    .nav-link::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 50%;
        width: 0;
        height: 2px;
        background: linear-gradient(90deg, var(--primary), var(--secondary));
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        transform: translateX(-50%);
        border-radius: 2px;
    }

    .nav-link:hover::after,
    .nav-link.nav-link-active::after {
        width: 60%;
    }

    .nav-link-active {
        color: var(--primary) !important;
        background: rgba(162, 89, 255, 0.1);
    }

    /* Custom scrollbar */
    ::-webkit-scrollbar {
        width: 10px;
        background: transparent;
    }

    ::-webkit-scrollbar-track {
        background: var(--darker);
    }

    ::-webkit-scrollbar-thumb {
        background: linear-gradient(180deg, var(--primary), var(--secondary));
        border-radius: 10px;
        border: 2px solid var(--darker);
    }

    ::-webkit-scrollbar-thumb:hover {
        background: linear-gradient(180deg, var(--secondary), var(--primary));
    }

    html {
        scrollbar-width: thin;
        scrollbar-color: var(--primary) var(--darker);
    }
</style>
