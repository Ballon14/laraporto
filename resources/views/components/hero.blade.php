<section id="home" class="min-h-screen flex items-center justify-center relative overflow-hidden">
    <!-- Background Elements -->
    <div class="absolute inset-0 overflow-hidden">
        <!-- Animated Background -->
        <div class="absolute inset-0 bg-gradient-to-br from-dark via-darker to-dark"></div>

        <!-- Floating Code Elements -->
        <div class="absolute top-20 left-10 text-primary opacity-20 floating" style="animation-delay: 0s;">
            <div class="code-font text-sm">&lt;div&gt;</div>
        </div>
        <div class="absolute top-40 right-20 text-accent opacity-20 floating" style="animation-delay: 1s;">
            <div class="code-font text-sm">function()</div>
        </div>
        <div class="absolute bottom-40 left-20 text-secondary opacity-20 floating" style="animation-delay: 2s;">
            <div class="code-font text-sm">{ }</div>
        </div>
        <div class="absolute bottom-20 right-10 text-primary opacity-20 floating" style="animation-delay: 3s;">
            <div class="code-font text-sm">&lt;/div&gt;</div>
        </div>

        <!-- Grid Pattern -->
        <div class="absolute inset-0 opacity-10">
            <div class="absolute inset-0" style="background-image: radial-gradient(circle, var(--primary) 1px, transparent 1px); background-size: 50px 50px;"></div>
        </div>
    </div>

    <!-- Main Content -->
    <div class="container mx-auto px-4 relative z-10">
        <div class="text-center max-w-4xl mx-auto">
            <!-- Avatar/Profile Image -->
            <div class="mb-8" data-aos="fade-down" data-aos-delay="200">
                <div class="w-36 h-36 mx-auto mb-6 relative bg-gradient-to-br from-primary to-secondary rounded-full flex items-center justify-center shadow-2xl pulse-glow" style="box-shadow: 0 0 60px 10px var(--primary), 0 0 120px 20px var(--secondary);">
                    <i class="fas fa-user-astronaut text-white text-5xl"></i>
                </div>
                <div class="absolute left-1/2 transform -translate-x-1/2 -bottom-2 w-10 h-10 bg-secondary rounded-full flex items-center justify-center shadow-lg">
                    <i class="fas fa-code text-white text-lg"></i>
                </div>
            </div>

            <!-- Main Title -->
            <div class="mb-6" data-aos="fade-up" data-aos-delay="400">
                <h1 class="text-5xl md:text-7xl font-bold mb-4 text-shadow">
                    <span class="gradient-text">Programmer</span>
                    <br>
                    <span class="text-light">Gabut</span>
                </h1>
                <div class="code-font text-xl md:text-2xl text-primary mb-4">
                    <span class="typing-animation">const status = "Still Learning";</span>
                </div>
            </div>

            <!-- Subtitle -->
            <div class="mb-8" data-aos="fade-up" data-aos-delay="600">
                <p class="text-xl md:text-2xl text-gray-300 leading-relaxed">
                    "Masih belajar coding, tapi udah berani bikin portfolio 😅"
                    <br>
                    <span class="text-primary">Full Stack Developer</span> •
                    <span class="text-accent">Problem Solver</span> •
                    <span class="text-secondary">Coffee Addict</span>
                </p>
            </div>

            <!-- Stats -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-12" data-aos="fade-up" data-aos-delay="800">
                <div class="glass-effect rounded-lg p-6 hover-lift shadow-lg">
                    <div class="text-3xl font-bold text-primary mb-2">
                        <span x-data="{ count: 0 }" x-init="setInterval(() => { if(count < 100) count++ }, 20)" x-text="count">0</span>+
                    </div>
                    <div class="text-gray-300">Cups of Coffee</div>
                </div>
                <div class="glass-effect rounded-lg p-6 hover-lift shadow-lg">
                    <div class="text-3xl font-bold text-accent mb-2">
                        <span x-data="{ count: 0 }" x-init="setInterval(() => { if(count < 50) count++ }, 30)" x-text="count">0</span>+
                    </div>
                    <div class="text-gray-300">Projects Completed</div>
                </div>
                <div class="glass-effect rounded-lg p-6 hover-lift shadow-lg">
                    <div class="text-3xl font-bold text-secondary mb-2">
                        <span x-data="{ count: 0 }" x-init="setInterval(() => { if(count < 1000) count += 10 }, 10)" x-text="count">0</span>+
                    </div>
                    <div class="text-gray-300">Bugs Fixed</div>
                </div>
            </div>

            <!-- CTA Buttons -->
            <div class="flex flex-col sm:flex-row gap-4 justify-center" data-aos="fade-up" data-aos-delay="1000">
                <a href="#projects" class="group relative px-8 py-4 bg-gradient-to-r from-primary to-secondary text-dark font-bold rounded-full hover-lift overflow-hidden shadow-lg">
                    <span class="relative z-10 flex items-center justify-center">
                        <i class="fas fa-rocket mr-2"></i>
                        View Projects
                    </span>
                    <div class="absolute inset-0 bg-gradient-to-r from-secondary to-primary transform scale-x-0 group-hover:scale-x-100 transition-transform duration-300 origin-left opacity-30"></div>
                </a>

                <a href="#contact" class="group relative px-8 py-4 border-2 border-primary text-primary font-bold rounded-full hover-lift overflow-hidden shadow-lg">
                    <span class="relative z-10 flex items-center justify-center">
                        <i class="fas fa-envelope mr-2"></i>
                        Get In Touch
                    </span>
                    <div class="absolute inset-0 bg-primary transform scale-x-0 group-hover:scale-x-100 transition-transform duration-300 origin-left opacity-20"></div>
                </a>
            </div>

            <!-- Scroll Indicator -->
            <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2" data-aos="fade-up" data-aos-delay="1200">
                <div class="flex flex-col items-center text-gray-400">
                    <span class="text-sm mb-2">Scroll Down</span>
                    <div class="w-6 h-10 border-2 border-primary rounded-full flex justify-center">
                        <div class="w-1 h-3 bg-primary rounded-full mt-2 animate-bounce"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Interactive Code Terminal -->
    <div class="absolute bottom-8 right-8 w-80 h-48 code-bg rounded-lg p-4 opacity-80 hidden lg:block shadow-2xl" data-aos="fade-left" data-aos-delay="1400">
        <div class="flex items-center mb-3">
            <div class="flex space-x-2">
                <div class="w-3 h-3 bg-primary rounded-full"></div>
                <div class="w-3 h-3 bg-secondary rounded-full"></div>
                <div class="w-3 h-3 bg-accent rounded-full"></div>
            </div>
            <span class="text-gray-400 text-sm ml-3">terminal</span>
        </div>
        <div class="space-y-1 text-sm">
            <div class="text-gray-400">$ <span class="text-primary">whoami</span></div>
            <div class="text-light">programmer-gabut</div>
            <div class="text-gray-400">$ <span class="text-primary">status</span></div>
            <div class="text-light">learning...</div>
            <div class="text-gray-400">$ <span class="text-primary">motivation</span></div>
            <div class="text-light">high</div>
        </div>
    </div>
</section>
