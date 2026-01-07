<x-layouts.app>
    <!-- Hero Section -->
    <x-hero />

    <!-- About Section -->
    <x-about />

    <!-- Skills Section -->
    <x-skills :skills="$skills" />

    <!-- Experience Section -->
    <section id="experience" class="py-24 relative overflow-hidden">
        <!-- Section Divider -->
        <div class="section-divider w-1/2 mb-20"></div>

        <div class="container mx-auto px-4">
            <div class="max-w-6xl mx-auto">
                <!-- Section Header -->
                <div class="text-center mb-16" data-aos="fade-up">
                    <h2 class="text-4xl md:text-6xl font-bold mb-4">
                        <span class="gradient-text">Experience</span>
                        <span class="text-light">& Journey</span>
                    </h2>
                    <div
                        class="w-24 h-1 bg-gradient-to-r from-primary via-secondary to-accent mx-auto mb-6 rounded-full">
                    </div>
                    <p class="text-xl text-gray-300 max-w-2xl mx-auto">
                        My professional journey and learning experiences
                    </p>
                </div>

                <!-- Timeline -->
                <div class="relative">
                    <!-- Animated Timeline Line -->
                    <div class="absolute left-4 md:left-1/2 transform md:-translate-x-1/2 top-0 bottom-0 w-1 bg-gradient-to-b from-primary via-secondary to-accent rounded-full shadow-lg"
                        style="box-shadow: 0 0 20px var(--primary);"></div>

                    @foreach ($experiences as $experience)
                        <div class="relative mb-16" data-aos="fade-up" data-aos-delay="{{ $loop->index * 150 }}">
                            <!-- Timeline Dot with Glow -->
                            <div
                                class="absolute left-4 md:left-1/2 transform md:-translate-x-1/2 w-8 h-8 bg-gradient-to-br from-primary to-secondary rounded-full border-4 border-dark z-10 pulse-glow flex items-center justify-center">
                                <div class="w-2 h-2 bg-white rounded-full"></div>
                            </div>

                            <!-- Year Badge -->
                            <div class="absolute left-14 md:left-1/2 transform md:translate-x-8 -top-2 hidden md:block">
                                <span
                                    class="px-3 py-1 bg-primary/20 border border-primary/30 rounded-full text-sm text-primary font-mono">
                                    {{ $experience->start_date->format('Y') }}
                                </span>
                            </div>

                            <!-- Content Card -->
                            <div class="ml-16 md:ml-0 md:w-5/12 {{ $loop->even ? 'md:ml-auto md:pl-16' : 'md:pr-16' }}">
                                <div
                                    class="glass-effect rounded-3xl p-6 hover-lift card-shine border border-primary/20 tilt-3d group">
                                    <div class="flex justify-between items-start mb-4">
                                        <div>
                                            <h3
                                                class="text-xl font-bold text-primary mb-1 group-hover:text-secondary transition-colors">
                                                {{ $experience->title }}</h3>
                                            <p class="text-secondary font-semibold flex items-center gap-2">
                                                <i class="fas fa-building text-xs"></i>
                                                {{ $experience->company }}
                                            </p>
                                        </div>
                                        <div class="text-right">
                                            <p class="text-sm text-gray-400 font-mono">
                                                {{ $experience->start_date->format('M Y') }} -
                                                @if ($experience->current)
                                                    <span
                                                        class="text-green-400 font-semibold flex items-center gap-1 inline-flex">
                                                        <span
                                                            class="w-2 h-2 bg-green-400 rounded-full animate-pulse"></span>
                                                        Present
                                                    </span>
                                                @else
                                                    {{ $experience->end_date->format('M Y') }}
                                                @endif
                                            </p>
                                        </div>
                                    </div>

                                    <p class="text-gray-300 mb-4 leading-relaxed">{{ $experience->description }}</p>

                                    @if ($experience->technologies)
                                        <div class="flex flex-wrap gap-2">
                                            @foreach ($experience->technologies as $tech)
                                                <span
                                                    class="bg-gradient-to-r from-primary/10 to-secondary/10 border border-primary/20 px-3 py-1 rounded-full text-sm text-light hover:border-primary/50 transition-colors">{{ $tech }}</span>
                                            @endforeach
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <!-- Projects Section -->
    <section id="projects" class="py-24 relative overflow-hidden">
        <!-- Section Divider -->
        <div class="section-divider w-1/2 mb-20"></div>

        <div class="container mx-auto px-4">
            <div class="max-w-6xl mx-auto">
                <!-- Section Header -->
                <div class="text-center mb-16" data-aos="fade-up">
                    <h2 class="text-4xl md:text-6xl font-bold mb-4">
                        <span class="gradient-text">Featured</span>
                        <span class="text-light">Projects</span>
                    </h2>
                    <div
                        class="w-24 h-1 bg-gradient-to-r from-primary via-secondary to-accent mx-auto mb-6 rounded-full">
                    </div>
                    <p class="text-xl text-gray-300 max-w-2xl mx-auto">
                        Some of the projects I've worked on during my learning journey
                    </p>
                </div>

                <!-- Projects Grid -->
                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                    @foreach ($portfolios as $portfolio)
                        <div class="group" data-aos="fade-up" data-aos-delay="{{ $loop->index * 100 }}">
                            <div
                                class="glass-effect rounded-3xl overflow-hidden hover-lift card-shine border border-primary/20 tilt-3d h-full flex flex-col">
                                <!-- Project Image -->
                                <div
                                    class="relative h-52 bg-gradient-to-br from-primary via-secondary to-accent overflow-hidden">
                                    <!-- Animated Background Pattern -->
                                    <div class="absolute inset-0 opacity-30">
                                        <div class="absolute inset-0"
                                            style="background-image: radial-gradient(circle, rgba(255,255,255,0.1) 1px, transparent 1px); background-size: 20px 20px;">
                                        </div>
                                    </div>

                                    <div class="absolute inset-0 flex items-center justify-center">
                                        <div class="relative">
                                            <div
                                                class="w-20 h-20 rounded-2xl bg-white/10 backdrop-blur flex items-center justify-center group-hover:scale-110 transition-transform duration-500">
                                                <i class="fas fa-code text-4xl text-white"></i>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Hover Overlay -->
                                    <div
                                        class="absolute inset-0 bg-gradient-to-t from-dark via-dark/50 to-transparent opacity-0 group-hover:opacity-100 transition-all duration-500 flex items-end justify-center pb-6">
                                        <div class="flex gap-3">
                                            @if ($portfolio->github_url)
                                                <a href="{{ $portfolio->github_url }}" target="_blank"
                                                    class="w-12 h-12 bg-white/90 backdrop-blur rounded-xl flex items-center justify-center text-dark hover:bg-primary hover:text-white transition-all duration-300 transform translate-y-4 group-hover:translate-y-0 shadow-lg">
                                                    <i class="fab fa-github text-xl"></i>
                                                </a>
                                            @endif
                                            @if ($portfolio->live_url)
                                                <a href="{{ $portfolio->live_url }}" target="_blank"
                                                    class="w-12 h-12 bg-white/90 backdrop-blur rounded-xl flex items-center justify-center text-dark hover:bg-secondary hover:text-white transition-all duration-300 transform translate-y-4 group-hover:translate-y-0 delay-75 shadow-lg">
                                                    <i class="fas fa-external-link-alt text-xl"></i>
                                                </a>
                                            @endif
                                        </div>
                                    </div>
                                </div>

                                <!-- Project Info -->
                                <div class="p-6 flex-1 flex flex-col">
                                    <h3
                                        class="text-xl font-bold text-primary mb-2 group-hover:text-secondary transition-colors">
                                        {{ $portfolio->title }}</h3>
                                    <p class="text-gray-300 mb-4 leading-relaxed flex-1">
                                        {{ Str::limit($portfolio->description, 100) }}</p>

                                    @if ($portfolio->technologies)
                                        <div class="flex flex-wrap gap-2 mb-4">
                                            @foreach (array_slice($portfolio->technologies, 0, 4) as $tech)
                                                <span
                                                    class="bg-gradient-to-r from-primary/10 to-secondary/10 border border-primary/20 px-2 py-1 rounded-lg text-xs text-light">{{ $tech }}</span>
                                            @endforeach
                                            @if (count($portfolio->technologies) > 4)
                                                <span
                                                    class="text-xs text-gray-400">+{{ count($portfolio->technologies) - 4 }}</span>
                                            @endif
                                        </div>
                                    @endif

                                    <div class="flex gap-3 mt-auto">
                                        @if ($portfolio->github_url)
                                            <a href="{{ $portfolio->github_url }}" target="_blank"
                                                class="flex-1 bg-dark/50 border border-primary/30 hover:bg-primary hover:border-primary hover:text-dark px-4 py-2.5 rounded-xl text-sm text-center transition-all duration-300 font-medium">
                                                <i class="fab fa-github mr-2"></i>Code
                                            </a>
                                        @endif
                                        @if ($portfolio->live_url)
                                            <a href="{{ $portfolio->live_url }}" target="_blank"
                                                class="flex-1 bg-gradient-to-r from-primary to-secondary text-dark px-4 py-2.5 rounded-xl text-sm text-center font-semibold glow-button">
                                                <i class="fas fa-external-link-alt mr-2"></i>Demo
                                            </a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <!-- View All Projects Button -->
                <div class="text-center mt-16" data-aos="fade-up">
                    <a href="https://github.com/Ballon14" target="_blank"
                        class="inline-flex items-center gap-3 px-10 py-4 bg-gradient-to-r from-primary to-secondary text-dark font-bold rounded-full glow-button group">
                        <i class="fab fa-github text-xl group-hover:rotate-12 transition-transform"></i>
                        View All Projects on GitHub
                        <i class="fas fa-arrow-right group-hover:translate-x-2 transition-transform"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-24 relative overflow-hidden">
        <!-- Section Divider -->
        <div class="section-divider w-1/2 mb-20"></div>

        <div class="container mx-auto px-4">
            <div class="max-w-5xl mx-auto">
                <!-- Section Header -->
                <div class="text-center mb-16" data-aos="fade-up">
                    <h2 class="text-4xl md:text-6xl font-bold mb-4">
                        <span class="gradient-text">Get In</span>
                        <span class="text-light">Touch</span>
                    </h2>
                    <div
                        class="w-24 h-1 bg-gradient-to-r from-primary via-secondary to-accent mx-auto mb-6 rounded-full">
                    </div>
                    <p class="text-xl text-gray-300 max-w-2xl mx-auto">
                        Let's discuss your next project or just have a coffee chat about coding!
                    </p>
                </div>

                <div class="grid lg:grid-cols-5 gap-8">
                    <!-- Contact Info -->
                    <div class="lg:col-span-2" data-aos="fade-right" data-aos-delay="200">
                        <div class="glass-effect rounded-3xl p-8 card-shine border border-primary/20 h-full">
                            <h3 class="text-2xl font-bold text-primary mb-8 flex items-center">
                                <div
                                    class="w-10 h-10 bg-gradient-to-r from-primary to-secondary rounded-xl flex items-center justify-center mr-3 shadow-lg">
                                    <i class="fas fa-envelope text-white"></i>
                                </div>
                                Let's Connect
                            </h3>

                            <div class="space-y-6">
                                <a href="mailto:iqbaldev.site@gmail.com"
                                    class="flex items-center group hover:translate-x-2 transition-transform duration-300">
                                    <div
                                        class="w-14 h-14 bg-gradient-to-br from-primary/20 to-primary/10 rounded-2xl flex items-center justify-center mr-4 group-hover:scale-110 transition-transform border border-primary/20">
                                        <i class="fas fa-envelope text-primary text-xl"></i>
                                    </div>
                                    <div>
                                        <h4 class="font-semibold text-light">Email</h4>
                                        <p class="text-gray-400 text-sm">iqbaldev.site@gmail.com</p>
                                    </div>
                                </a>

                                <div class="flex items-center group">
                                    <div
                                        class="w-14 h-14 bg-gradient-to-br from-secondary/20 to-secondary/10 rounded-2xl flex items-center justify-center mr-4 border border-secondary/20">
                                        <i class="fas fa-map-marker-alt text-secondary text-xl"></i>
                                    </div>
                                    <div>
                                        <h4 class="font-semibold text-light">Location</h4>
                                        <p class="text-gray-400 text-sm">Indonesia</p>
                                    </div>
                                </div>

                                <div class="flex items-center group">
                                    <div
                                        class="w-14 h-14 bg-gradient-to-br from-green-500/20 to-green-500/10 rounded-2xl flex items-center justify-center mr-4 border border-green-500/20">
                                        <i class="fas fa-clock text-green-400 text-xl"></i>
                                    </div>
                                    <div>
                                        <h4 class="font-semibold text-light">Availability</h4>
                                        <p class="text-green-400 text-sm flex items-center gap-2">
                                            <span class="w-2 h-2 bg-green-400 rounded-full animate-pulse"></span>
                                            Open for projects
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!-- Social Links -->
                            <div class="mt-10">
                                <h4 class="font-semibold text-light mb-4">Follow Me</h4>
                                <div class="flex gap-3">
                                    <a href="https://github.com/Ballon14" target="_blank"
                                        class="w-12 h-12 glass-effect rounded-xl flex items-center justify-center hover:bg-primary hover:text-dark transition-all duration-300 border border-primary/20 hover:border-primary group">
                                        <i
                                            class="fab fa-github text-xl group-hover:scale-125 transition-transform"></i>
                                    </a>
                                    <a href="https://linkedin.com/in/yourusername" target="_blank"
                                        class="w-12 h-12 glass-effect rounded-xl flex items-center justify-center hover:bg-blue-500 hover:text-white transition-all duration-300 border border-blue-500/20 hover:border-blue-500 group">
                                        <i
                                            class="fab fa-linkedin text-xl group-hover:scale-125 transition-transform"></i>
                                    </a>
                                    <a href="https://twitter.com/yourusername" target="_blank"
                                        class="w-12 h-12 glass-effect rounded-xl flex items-center justify-center hover:bg-sky-400 hover:text-white transition-all duration-300 border border-sky-400/20 hover:border-sky-400 group">
                                        <i
                                            class="fab fa-twitter text-xl group-hover:scale-125 transition-transform"></i>
                                    </a>
                                    <a href="https://instagram.com/yourusername" target="_blank"
                                        class="w-12 h-12 glass-effect rounded-xl flex items-center justify-center hover:bg-pink-500 hover:text-white transition-all duration-300 border border-pink-500/20 hover:border-pink-500 group">
                                        <i
                                            class="fab fa-instagram text-xl group-hover:scale-125 transition-transform"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Contact Form -->
                    <div class="lg:col-span-3" data-aos="fade-left" data-aos-delay="400">
                        <div class="glass-effect rounded-3xl p-8 card-shine border border-primary/20">
                            <h3 class="text-2xl font-bold text-primary mb-8 flex items-center">
                                <div
                                    class="w-10 h-10 bg-gradient-to-r from-primary to-secondary rounded-xl flex items-center justify-center mr-3 shadow-lg">
                                    <i class="fas fa-paper-plane text-white"></i>
                                </div>
                                Send Message
                            </h3>

                            <form class="space-y-6" x-data="{
                                name: '',
                                email: '',
                                subject: '',
                                message: '',
                                sending: false,
                                sent: false
                            }"
                                @submit.prevent="sending = true; setTimeout(() => { sending = false; sent = true; }, 2000)">
                                <div class="grid md:grid-cols-2 gap-5">
                                    <div class="relative">
                                        <input type="text" x-model="name" required
                                            class="w-full px-5 py-4 bg-dark/50 border border-primary/20 rounded-xl text-light placeholder-transparent focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary/20 transition-all duration-300 peer"
                                            placeholder="Your name" id="name">
                                        <label for="name"
                                            class="absolute left-5 -top-2.5 bg-dark px-2 text-sm text-primary transition-all peer-placeholder-shown:top-4 peer-placeholder-shown:text-gray-400 peer-placeholder-shown:text-base peer-focus:-top-2.5 peer-focus:text-sm peer-focus:text-primary">Name</label>
                                    </div>
                                    <div class="relative">
                                        <input type="email" x-model="email" required
                                            class="w-full px-5 py-4 bg-dark/50 border border-secondary/20 rounded-xl text-light placeholder-transparent focus:outline-none focus:border-secondary focus:ring-2 focus:ring-secondary/20 transition-all duration-300 peer"
                                            placeholder="Your email" id="email">
                                        <label for="email"
                                            class="absolute left-5 -top-2.5 bg-dark px-2 text-sm text-secondary transition-all peer-placeholder-shown:top-4 peer-placeholder-shown:text-gray-400 peer-placeholder-shown:text-base peer-focus:-top-2.5 peer-focus:text-sm peer-focus:text-secondary">Email</label>
                                    </div>
                                </div>

                                <div class="relative">
                                    <input type="text" x-model="subject" required
                                        class="w-full px-5 py-4 bg-dark/50 border border-accent/20 rounded-xl text-light placeholder-transparent focus:outline-none focus:border-accent focus:ring-2 focus:ring-accent/20 transition-all duration-300 peer"
                                        placeholder="Subject" id="subject">
                                    <label for="subject"
                                        class="absolute left-5 -top-2.5 bg-dark px-2 text-sm text-accent transition-all peer-placeholder-shown:top-4 peer-placeholder-shown:text-gray-400 peer-placeholder-shown:text-base peer-focus:-top-2.5 peer-focus:text-sm peer-focus:text-accent">Subject</label>
                                </div>

                                <div class="relative">
                                    <textarea x-model="message" rows="5" required
                                        class="w-full px-5 py-4 bg-dark/50 border border-primary/20 rounded-xl text-light placeholder-transparent focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary/20 transition-all duration-300 resize-none peer"
                                        placeholder="Your message" id="message"></textarea>
                                    <label for="message"
                                        class="absolute left-5 -top-2.5 bg-dark px-2 text-sm text-primary transition-all peer-placeholder-shown:top-4 peer-placeholder-shown:text-gray-400 peer-placeholder-shown:text-base peer-focus:-top-2.5 peer-focus:text-sm peer-focus:text-primary">Message</label>
                                </div>

                                <button type="submit"
                                    class="w-full px-8 py-4 bg-gradient-to-r from-primary to-secondary text-dark font-bold rounded-xl glow-button flex items-center justify-center gap-3 disabled:opacity-50 transition-all duration-300"
                                    :disabled="sending || sent">
                                    <template x-if="!sending && !sent">
                                        <span class="flex items-center gap-2">
                                            <i class="fas fa-paper-plane"></i>
                                            Send Message
                                        </span>
                                    </template>
                                    <template x-if="sending">
                                        <span class="flex items-center gap-2">
                                            <i class="fas fa-circle-notch animate-spin"></i>
                                            Sending...
                                        </span>
                                    </template>
                                    <template x-if="sent">
                                        <span class="flex items-center gap-2">
                                            <i class="fas fa-check"></i>
                                            Message Sent!
                                        </span>
                                    </template>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-layouts.app>
