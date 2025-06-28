<x-layouts.app>
    <!-- Hero Section -->
    <x-hero />

    <!-- About Section -->
    <x-about />

    <!-- Skills Section -->
    <x-skills :skills="$skills" />

    <!-- Experience Section -->
    <section id="experience" class="py-20 relative">
        <div class="container mx-auto px-4">
            <div class="max-w-6xl mx-auto">
                <!-- Section Header -->
                <div class="text-center mb-16" data-aos="fade-up">
                    <h2 class="text-4xl md:text-5xl font-bold mb-4">
                        <span class="gradient-text">Experience</span>
                        <span class="text-light">& Journey</span>
                    </h2>
                    <div class="w-24 h-1 bg-gradient-to-r from-primary to-secondary mx-auto mb-6"></div>
                    <p class="text-xl text-gray-300 max-w-2xl mx-auto">
                        My professional journey and learning experiences
                    </p>
                </div>

                <!-- Timeline -->
                <div class="relative">
                    <!-- Timeline Line -->
                    <div class="absolute left-4 md:left-1/2 transform md:-translate-x-1/2 top-0 bottom-0 w-1 bg-gradient-to-b from-primary to-secondary rounded-full"></div>

                    @foreach($experiences as $experience)
                    <div class="relative mb-12" data-aos="fade-up" data-aos-delay="{{ $loop->index * 200 }}">
                        <!-- Timeline Dot -->
                        <div class="absolute left-4 md:left-1/2 transform md:-translate-x-1/2 w-6 h-6 bg-gradient-to-br from-primary to-secondary rounded-full border-4 border-dark z-10 shadow-lg"></div>

                        <!-- Content -->
                        <div class="ml-16 md:ml-0 md:w-5/12 {{ $loop->even ? 'md:ml-auto' : '' }}">
                            <div class="glass-effect rounded-2xl p-6 hover-lift shadow-xl border border-primary/20">
                                <div class="flex justify-between items-start mb-4">
                                    <div>
                                        <h3 class="text-xl font-bold text-primary mb-1">{{ $experience->title }}</h3>
                                        <p class="text-secondary font-semibold">{{ $experience->company }}</p>
                                    </div>
                                    <div class="text-right">
                                        <p class="text-sm text-gray-400">
                                            {{ $experience->start_date->format('M Y') }} -
                                            @if($experience->current)
                                                <span class="text-green-400">Present</span>
                                            @else
                                                {{ $experience->end_date->format('M Y') }}
                                            @endif
                                        </p>
                                    </div>
                                </div>

                                <p class="text-gray-300 mb-4 leading-relaxed">{{ $experience->description }}</p>

                                @if($experience->technologies)
                                <div class="flex flex-wrap gap-2">
                                    @foreach($experience->technologies as $tech)
                                    <span class="bg-dark/80 border border-primary/20 px-3 py-1 rounded-full text-sm text-light">{{ $tech }}</span>
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
    <section id="projects" class="py-20 bg-gray-900 relative">
        <div class="container mx-auto px-4">
            <div class="max-w-6xl mx-auto">
                <!-- Section Header -->
                <div class="text-center mb-16" data-aos="fade-up">
                    <h2 class="text-4xl md:text-5xl font-bold mb-4">
                        <span class="gradient-text">Featured</span>
                        <span class="text-light">Projects</span>
                    </h2>
                    <div class="w-24 h-1 bg-gradient-to-r from-primary to-secondary mx-auto mb-6"></div>
                    <p class="text-xl text-gray-300 max-w-2xl mx-auto">
                        Some of the projects I've worked on during my learning journey
                    </p>
                </div>

                <!-- Projects Grid -->
                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                    @foreach($portfolios as $portfolio)
                    <div class="group" data-aos="fade-up" data-aos-delay="{{ $loop->index * 200 }}">
                        <div class="glass-effect rounded-2xl overflow-hidden hover-lift shadow-xl border border-primary/20">
                            <!-- Project Image -->
                            <div class="relative h-48 bg-gradient-to-br from-primary to-secondary overflow-hidden">
                                <div class="absolute inset-0 flex items-center justify-center">
                                    <i class="fas fa-code text-6xl text-white opacity-50 group-hover:scale-110 transition-transform duration-300"></i>
                                </div>
                                <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-50 transition-all duration-300 flex items-center justify-center">
                                    <div class="opacity-0 group-hover:opacity-100 transition-opacity duration-300 space-x-4">
                                        @if($portfolio->github_url)
                                        <a href="{{ $portfolio->github_url }}" target="_blank" class="bg-white text-dark p-3 rounded-full hover:bg-primary transition-colors duration-300 shadow-lg">
                                            <i class="fab fa-github"></i>
                                        </a>
                                        @endif
                                        @if($portfolio->live_url)
                                        <a href="{{ $portfolio->live_url }}" target="_blank" class="bg-white text-dark p-3 rounded-full hover:bg-secondary transition-colors duration-300 shadow-lg">
                                            <i class="fas fa-external-link-alt"></i>
                                        </a>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <!-- Project Info -->
                            <div class="p-6">
                                <h3 class="text-xl font-bold text-primary mb-2">{{ $portfolio->title }}</h3>
                                <p class="text-gray-300 mb-4 leading-relaxed">{{ $portfolio->description }}</p>

                                @if($portfolio->technologies)
                                <div class="flex flex-wrap gap-2 mb-4">
                                    @foreach($portfolio->technologies as $tech)
                                    <span class="bg-dark/80 border border-primary/20 px-2 py-1 rounded text-xs text-light">{{ $tech }}</span>
                                    @endforeach
                                </div>
                                @endif

                                <div class="flex gap-2">
                                    @if($portfolio->github_url)
                                    <a href="{{ $portfolio->github_url }}" target="_blank" class="flex-1 bg-dark/80 border border-primary/20 hover:bg-primary hover:text-dark px-4 py-2 rounded-lg text-sm text-center transition-colors duration-300 shadow-md">
                                        <i class="fab fa-github mr-1"></i>GitHub
                                    </a>
                                    @endif
                                    @if($portfolio->live_url)
                                    <a href="{{ $portfolio->live_url }}" target="_blank" class="flex-1 bg-gradient-to-r from-primary to-secondary hover:from-secondary hover:to-primary text-dark px-4 py-2 rounded-lg text-sm text-center font-semibold transition-all duration-300 shadow-md">
                                        <i class="fas fa-external-link-alt mr-1"></i>Live Demo
                                    </a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>

                <!-- View All Projects Button -->
                <div class="text-center mt-12" data-aos="fade-up">
                    <a href="#" class="inline-flex items-center px-8 py-4 bg-gradient-to-r from-primary to-secondary text-dark font-bold rounded-full hover:shadow-lg transition-all duration-300 hover-lift">
                        <i class="fas fa-rocket mr-2"></i>
                        View All Projects
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-20 relative">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto">
                <!-- Section Header -->
                <div class="text-center mb-16" data-aos="fade-up">
                    <h2 class="text-4xl md:text-5xl font-bold mb-4">
                        <span class="gradient-text">Get In</span>
                        <span class="text-light">Touch</span>
                    </h2>
                    <div class="w-24 h-1 bg-gradient-to-r from-primary to-secondary mx-auto mb-6"></div>
                    <p class="text-xl text-gray-300 max-w-2xl mx-auto">
                        Let's discuss your next project or just have a coffee chat about coding!
                    </p>
                </div>

                <div class="grid lg:grid-cols-2 gap-12">
                    <!-- Contact Info -->
                    <div data-aos="fade-right">
                        <div class="glass-effect rounded-2xl p-8 shadow-xl border border-primary/20">
                            <h3 class="text-2xl font-bold text-primary mb-6">
                                <i class="fas fa-envelope mr-3"></i>
                                Let's Connect
                            </h3>

                            <div class="space-y-6">
                                <div class="flex items-center">
                                    <div class="w-12 h-12 bg-gradient-to-r from-primary to-secondary rounded-lg flex items-center justify-center mr-4 shadow-md">
                                        <i class="fas fa-envelope text-white"></i>
                                    </div>
                                    <div>
                                        <h4 class="font-semibold text-light">Email</h4>
                                        <p class="text-gray-300">your.email@example.com</p>
                                    </div>
                                </div>

                                <div class="flex items-center">
                                    <div class="w-12 h-12 bg-gradient-to-r from-primary to-secondary rounded-lg flex items-center justify-center mr-4 shadow-md">
                                        <i class="fas fa-map-marker-alt text-white"></i>
                                    </div>
                                    <div>
                                        <h4 class="font-semibold text-light">Location</h4>
                                        <p class="text-gray-300">Indonesia</p>
                                    </div>
                                </div>

                                <div class="flex items-center">
                                    <div class="w-12 h-12 bg-gradient-to-r from-primary to-secondary rounded-lg flex items-center justify-center mr-4 shadow-md">
                                        <i class="fas fa-clock text-white"></i>
                                    </div>
                                    <div>
                                        <h4 class="font-semibold text-light">Availability</h4>
                                        <p class="text-gray-300">Available for projects</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Social Links -->
                            <div class="mt-8">
                                <h4 class="font-semibold text-light mb-4">Follow Me</h4>
                                <div class="flex space-x-4">
                                    <a href="https://github.com/yourusername" target="_blank" class="w-12 h-12 bg-dark/80 border border-primary/20 hover:bg-primary hover:text-dark rounded-lg flex items-center justify-center transition-colors duration-300 shadow-md">
                                        <i class="fab fa-github text-xl"></i>
                                    </a>
                                    <a href="https://linkedin.com/in/yourusername" target="_blank" class="w-12 h-12 bg-dark/80 border border-secondary/20 hover:bg-secondary hover:text-dark rounded-lg flex items-center justify-center transition-colors duration-300 shadow-md">
                                        <i class="fab fa-linkedin text-xl"></i>
                                    </a>
                                    <a href="https://twitter.com/yourusername" target="_blank" class="w-12 h-12 bg-dark/80 border border-accent/20 hover:bg-accent hover:text-dark rounded-lg flex items-center justify-center transition-colors duration-300 shadow-md">
                                        <i class="fab fa-twitter text-xl"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Contact Form -->
                    <div data-aos="fade-left">
                        <div class="glass-effect rounded-2xl p-8 shadow-xl border border-primary/20">
                            <h3 class="text-2xl font-bold text-primary mb-6">
                                <i class="fas fa-paper-plane mr-3"></i>
                                Send Message
                            </h3>

                            <form class="space-y-6">
                                <div class="grid md:grid-cols-2 gap-4">
                                    <div>
                                        <label class="block text-light font-semibold mb-2">Name</label>
                                        <input type="text" class="w-full px-4 py-3 bg-dark/80 border border-primary/20 rounded-lg text-light placeholder-gray-400 focus:outline-none focus:border-primary transition-colors duration-300" placeholder="Your name">
                                    </div>
                                    <div>
                                        <label class="block text-light font-semibold mb-2">Email</label>
                                        <input type="email" class="w-full px-4 py-3 bg-dark/80 border border-secondary/20 rounded-lg text-light placeholder-gray-400 focus:outline-none focus:border-secondary transition-colors duration-300" placeholder="your@email.com">
                                    </div>
                                </div>

                                <div>
                                    <label class="block text-light font-semibold mb-2">Subject</label>
                                    <input type="text" class="w-full px-4 py-3 bg-dark/80 border border-accent/20 rounded-lg text-light placeholder-gray-400 focus:outline-none focus:border-accent transition-colors duration-300" placeholder="Project inquiry">
                                </div>

                                <div>
                                    <label class="block text-light font-semibold mb-2">Message</label>
                                    <textarea rows="5" class="w-full px-4 py-3 bg-dark/80 border border-primary/20 rounded-lg text-light placeholder-gray-400 focus:outline-none focus:border-primary transition-colors duration-300 resize-none" placeholder="Tell me about your project..."></textarea>
                                </div>

                                <button type="submit" class="w-full px-8 py-4 bg-gradient-to-r from-primary to-secondary text-dark font-bold rounded-lg hover:shadow-lg transition-all duration-300 hover-lift">
                                    <i class="fas fa-paper-plane mr-2"></i>
                                    Send Message
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-layouts.app>
