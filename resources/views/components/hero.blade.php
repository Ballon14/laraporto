<section id="home" class="min-h-screen flex items-center justify-center relative overflow-hidden">
    <!-- Background Elements -->
    <div class="absolute inset-0 overflow-hidden">
        <!-- Animated Background -->
        <div class="absolute inset-0 bg-gradient-to-br from-dark via-darker to-dark"></div>

        <!-- Floating Geometric Shapes -->
        <div class="absolute top-20 left-10 text-primary opacity-30 floating" style="animation-delay: 0s;">
            <div class="w-16 h-16 border-2 border-primary rounded-lg rotate-45"
                style="box-shadow: 0 0 20px var(--primary);"></div>
        </div>
        <div class="absolute top-40 right-20 text-secondary opacity-30 floating" style="animation-delay: 1s;">
            <div class="w-12 h-12 border-2 border-secondary rounded-full"
                style="box-shadow: 0 0 20px var(--secondary);"></div>
        </div>
        <div class="absolute bottom-40 left-20 text-accent opacity-30 floating" style="animation-delay: 2s;">
            <svg class="w-14 h-14" viewBox="0 0 50 50" style="filter: drop-shadow(0 0 10px var(--accent));">
                <polygon points="25,5 45,45 5,45" stroke="currentColor" stroke-width="2" fill="none" />
            </svg>
        </div>
        <div class="absolute bottom-20 right-10 text-pink opacity-30 floating" style="animation-delay: 3s;">
            <div class="w-10 h-10 border-2 border-pink rounded rotate-12" style="box-shadow: 0 0 15px #ff6b9d;"></div>
        </div>
        <div class="absolute top-1/3 left-1/4 text-primary opacity-20 floating" style="animation-delay: 0.5s;">
            <div class="code-font text-lg">&lt;div&gt;</div>
        </div>
        <div class="absolute bottom-1/3 right-1/4 text-secondary opacity-20 floating" style="animation-delay: 1.5s;">
            <div class="code-font text-lg">&lt;/div&gt;</div>
        </div>

        <!-- Grid Pattern -->
        <div class="absolute inset-0 opacity-5">
            <div class="absolute inset-0"
                style="background-image: radial-gradient(circle, var(--primary) 1px, transparent 1px); background-size: 60px 60px;">
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <div class="container mx-auto px-4 relative z-10">
        <div class="text-center max-w-4xl mx-auto">
            <!-- Avatar/Profile Image with 3D Tilt -->
            <div class="mb-10" data-aos="zoom-in" data-aos-delay="200">
                <div class="relative inline-block">
                    <div class="w-40 h-40 mx-auto mb-6 relative tilt-3d">
                        <!-- Outer Ring Animation -->
                        <div class="absolute -inset-4 rounded-full border-2 border-primary/30 animate-spin"
                            style="animation-duration: 8s;"></div>
                        <div class="absolute -inset-2 rounded-full border border-secondary/20 animate-spin"
                            style="animation-duration: 12s; animation-direction: reverse;"></div>

                        <!-- Main Avatar -->
                        <div
                            class="w-40 h-40 bg-gradient-to-br from-primary via-secondary to-accent rounded-full flex items-center justify-center shadow-2xl pulse-glow relative overflow-hidden">
                            <div class="absolute inset-0 bg-gradient-to-t from-transparent to-white/20"></div>
                            <i class="fas fa-user-astronaut text-white text-6xl drop-shadow-lg relative z-10"></i>
                        </div>
                    </div>

                    <!-- Status Badge -->
                    <div class="absolute -bottom-2 left-1/2 transform -translate-x-1/2 px-4 py-2 bg-gradient-to-r from-green-500 to-emerald-500 rounded-full flex items-center gap-2 shadow-lg"
                        style="box-shadow: 0 0 20px rgba(16, 185, 129, 0.5);">
                        <div class="w-2 h-2 bg-white rounded-full animate-pulse"></div>
                        <span class="text-white text-sm font-semibold">Available</span>
                    </div>
                </div>
            </div>

            <!-- Main Title with Morphing Effect -->
            <div class="mb-8" data-aos="fade-up" data-aos-delay="400">
                <h1 class="text-5xl md:text-7xl font-bold mb-6 text-shadow">
                    <span class="gradient-text neon-text">Programmer</span>
                    <br>
                    <span class="text-light">Gabut</span>
                </h1>

                <!-- Animated Tagline -->
                <div class="code-font text-xl md:text-2xl text-primary mb-4 h-8 flex items-center justify-center"
                    x-data="{
                        texts: ['const status = \"Still Learning\";', 'console.log(\"Hello World!\");'
                    , 'return motivation = \"High\";' , 'debug.coffee = true;' ], currentIndex: 0, displayText: '' ,
                    isTyping: true }" x-init="setInterval(() => {
                        displayText = '';
                        isTyping = true;
                        let text = texts[currentIndex];
                        let i = 0;
                        const typeInterval = setInterval(() => {
                            if (i < text.length) {
                                displayText += text[i];
                                i++;
                            } else {
                                clearInterval(typeInterval);
                                isTyping = false;
                                setTimeout(() => {
                                    currentIndex = (currentIndex + 1) % texts.length;
                                }, 2000);
                            }
                        }, 80);
                    }, 5000);
                    
                    // Initial typing
                    let text = texts[0];
                    let i = 0;
                    const initialInterval = setInterval(() => {
                        if (i < text.length) {
                            displayText += text[i];
                            i++;
                        } else {
                            clearInterval(initialInterval);
                            isTyping = false;
                        }
                    }, 80);">
                    <span x-text="displayText"></span>
                    <span class="animate-pulse" :class="isTyping ? '' : 'opacity-0'">|</span>
                </div>
            </div>

            <!-- Subtitle -->
            <div class="mb-10" data-aos="fade-up" data-aos-delay="600">
                <p class="text-lg md:text-xl text-gray-300 leading-relaxed mb-4">
                    "Masih belajar coding, tapi udah berani bikin portfolio 😅"
                </p>
                <div class="flex flex-wrap justify-center gap-3">
                    <span
                        class="px-4 py-2 bg-primary/10 border border-primary/30 rounded-full text-primary text-sm font-medium hover:bg-primary/20 transition-all duration-300">
                        <i class="fas fa-laptop-code mr-2"></i>Full Stack Developer
                    </span>
                    <span
                        class="px-4 py-2 bg-secondary/10 border border-secondary/30 rounded-full text-secondary text-sm font-medium hover:bg-secondary/20 transition-all duration-300">
                        <i class="fas fa-puzzle-piece mr-2"></i>Problem Solver
                    </span>
                    <span
                        class="px-4 py-2 bg-accent/10 border border-accent/30 rounded-full text-accent text-sm font-medium hover:bg-accent/20 transition-all duration-300">
                        <i class="fas fa-coffee mr-2"></i>Coffee Addict
                    </span>
                </div>
            </div>

            <!-- Stats with Enhanced Design -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-12" data-aos="fade-up" data-aos-delay="800">
                <div class="glass-effect rounded-2xl p-6 hover-lift card-shine border border-primary/20 group">
                    <div class="text-4xl font-bold mb-2 group-hover:scale-110 transition-transform duration-300">
                        <span class="gradient-text" x-data="{ count: 0 }" x-init="setInterval(() => { if (count < 100) count++ }, 15)"
                            x-text="count">0</span>
                        <span class="text-primary">+</span>
                    </div>
                    <div class="text-gray-300 flex items-center justify-center gap-2">
                        <i class="fas fa-coffee text-primary"></i>
                        Cups of Coffee
                    </div>
                </div>
                <div class="glass-effect rounded-2xl p-6 hover-lift card-shine border border-secondary/20 group">
                    <div class="text-4xl font-bold mb-2 group-hover:scale-110 transition-transform duration-300">
                        <span class="gradient-text" x-data="{ count: 0 }" x-init="setInterval(() => { if (count < 50) count++ }, 25)"
                            x-text="count">0</span>
                        <span class="text-secondary">+</span>
                    </div>
                    <div class="text-gray-300 flex items-center justify-center gap-2">
                        <i class="fas fa-folder-open text-secondary"></i>
                        Projects Completed
                    </div>
                </div>
                <div class="glass-effect rounded-2xl p-6 hover-lift card-shine border border-accent/20 group">
                    <div class="text-4xl font-bold mb-2 group-hover:scale-110 transition-transform duration-300">
                        <span class="gradient-text" x-data="{ count: 0 }" x-init="setInterval(() => { if (count < 1000) count += 8 }, 8)"
                            x-text="count">0</span>
                        <span class="text-accent">+</span>
                    </div>
                    <div class="text-gray-300 flex items-center justify-center gap-2">
                        <i class="fas fa-bug text-accent"></i>
                        Bugs Fixed
                    </div>
                </div>
            </div>

            <!-- CTA Buttons with Enhanced Effects -->
            <div class="flex flex-col sm:flex-row gap-4 justify-center" data-aos="fade-up" data-aos-delay="1000">
                <a href="#projects"
                    class="group relative px-8 py-4 bg-gradient-to-r from-primary to-secondary text-dark font-bold rounded-full hover-lift overflow-hidden glow-button">
                    <span class="relative z-10 flex items-center justify-center gap-2">
                        <i class="fas fa-rocket group-hover:animate-bounce"></i>
                        View Projects
                    </span>
                </a>

                <a href="#contact"
                    class="group relative px-8 py-4 border-2 border-primary text-primary font-bold rounded-full hover-lift overflow-hidden hover:bg-primary hover:text-dark transition-all duration-300">
                    <span class="relative z-10 flex items-center justify-center gap-2">
                        <i class="fas fa-envelope"></i>
                        Get In Touch
                    </span>
                </a>

                <a href="https://github.com/Ballon14" target="_blank"
                    class="group relative px-8 py-4 border-2 border-secondary text-secondary font-bold rounded-full hover-lift overflow-hidden hover:bg-secondary hover:text-dark transition-all duration-300">
                    <span class="relative z-10 flex items-center justify-center gap-2">
                        <i class="fab fa-github"></i>
                        GitHub
                    </span>
                </a>
            </div>

            <!-- Scroll Indicator -->
            <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2" data-aos="fade-up"
                data-aos-delay="1200">
                <div class="flex flex-col items-center text-gray-400 cursor-pointer hover:text-primary transition-colors duration-300"
                    onclick="document.getElementById('about').scrollIntoView({behavior: 'smooth'})">
                    <span class="text-sm mb-2 uppercase tracking-widest">Scroll Down</span>
                    <div class="w-6 h-10 border-2 border-current rounded-full flex justify-center p-1">
                        <div class="w-1.5 h-3 bg-current rounded-full animate-bounce"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Interactive Code Terminal -->
    <div class="absolute bottom-16 right-8 w-80 hidden xl:block" data-aos="fade-left" data-aos-delay="1400">
        <div class="code-bg rounded-2xl p-5 shadow-2xl border border-primary/20 hover-lift card-shine">
            <div class="flex items-center mb-4">
                <div class="flex space-x-2 mr-4">
                    <div class="w-3 h-3 bg-red-500 rounded-full hover:scale-125 transition-transform cursor-pointer">
                    </div>
                    <div
                        class="w-3 h-3 bg-yellow-500 rounded-full hover:scale-125 transition-transform cursor-pointer">
                    </div>
                    <div class="w-3 h-3 bg-green-500 rounded-full hover:scale-125 transition-transform cursor-pointer">
                    </div>
                </div>
                <span class="text-gray-400 text-sm font-mono">terminal</span>
            </div>
            <div class="space-y-2 text-sm" x-data="{
                lines: [
                    { cmd: 'whoami', result: 'programmer-gabut' },
                    { cmd: 'status', result: 'learning...' },
                    { cmd: 'motivation', result: 'maximum!' },
                    { cmd: 'coffee --level', result: '☕☕☕☕☕' }
                ],
                currentLine: 0
            }" x-init="setInterval(() => { currentLine = (currentLine + 1) % lines.length }, 3000)">
                <template x-for="(line, index) in lines" :key="index">
                    <div x-show="index === currentLine" x-transition:enter="transition ease-out duration-300"
                        x-transition:enter-start="opacity-0 transform translate-y-2"
                        x-transition:enter-end="opacity-100 transform translate-y-0">
                        <div class="text-gray-400">$ <span class="text-primary" x-text="line.cmd"></span></div>
                        <div class="text-light pl-2" x-text="line.result"></div>
                    </div>
                </template>
            </div>
        </div>
    </div>
</section>
