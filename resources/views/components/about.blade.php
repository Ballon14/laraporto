<section id="about" class="py-24 relative overflow-hidden">
    <!-- Section Divider -->
    <div class="section-divider w-1/2 mb-20"></div>

    <div class="container mx-auto px-4">
        <div class="max-w-6xl mx-auto">
            <!-- Section Header -->
            <div class="text-center mb-16" data-aos="fade-up">
                <h2 class="text-4xl md:text-6xl font-bold mb-4">
                    <span class="gradient-text">About</span>
                    <span class="text-light">Me</span>
                </h2>
                <div class="w-24 h-1 bg-gradient-to-r from-primary via-secondary to-accent mx-auto mb-6 rounded-full">
                </div>
                <p class="text-xl text-gray-300 max-w-2xl mx-auto">
                    Get to know the programmer behind the code
                </p>
            </div>

            <div class="grid lg:grid-cols-2 gap-12 items-start">
                <!-- Left Column - Story -->
                <div data-aos="fade-right" data-aos-delay="200">
                    <div
                        class="glass-effect rounded-3xl p-8 hover-lift card-shine border border-primary/20 animated-border">
                        <h3 class="text-2xl font-bold text-primary mb-6 flex items-center">
                            <div
                                class="w-10 h-10 bg-gradient-to-r from-primary to-secondary rounded-lg flex items-center justify-center mr-3 shadow-lg">
                                <i class="fas fa-user-graduate text-white"></i>
                            </div>
                            My Story
                        </h3>

                        <div class="space-y-4 text-gray-300 leading-relaxed">
                            <p class="relative pl-4 border-l-2 border-primary/50">
                                Halo! Saya adalah seorang programmer yang sedang dalam tahap belajar.
                                Meskipun masih banyak yang belum tahu, tapi semangat belajar tetap tinggi!
                            </p>
                            <p class="relative pl-4 border-l-2 border-secondary/50">
                                Suka ngoding sambil minum kopi dan kadang begadang sampai pagi.
                                Percaya bahwa setiap bug adalah kesempatan untuk belajar sesuatu yang baru.
                            </p>
                            <p class="relative pl-4 border-l-2 border-accent/50">
                                Fokus pada pengembangan web full-stack dengan teknologi modern,
                                dan selalu mencari cara untuk membuat kode yang lebih bersih dan efisien.
                            </p>
                        </div>

                        <!-- Quick Stats -->
                        <div class="grid grid-cols-2 gap-4 mt-8">
                            <div
                                class="text-center p-5 bg-gradient-to-br from-primary/10 to-primary/5 rounded-2xl border border-primary/20 hover:border-primary/40 transition-all duration-300 group">
                                <div
                                    class="text-3xl font-bold text-primary mb-1 group-hover:scale-110 transition-transform">
                                    <span x-data="{ count: 0 }" x-init="setInterval(() => { if (count < 3) count++ }, 400)" x-text="count">0</span>+
                                </div>
                                <div class="text-sm text-gray-400">Years Learning</div>
                            </div>
                            <div
                                class="text-center p-5 bg-gradient-to-br from-secondary/10 to-secondary/5 rounded-2xl border border-secondary/20 hover:border-secondary/40 transition-all duration-300 group">
                                <div
                                    class="text-3xl font-bold text-secondary mb-1 group-hover:scale-110 transition-transform">
                                    <span x-data="{ count: 0 }" x-init="setInterval(() => { if (count < 10) count++ }, 150)" x-text="count">0</span>+
                                </div>
                                <div class="text-sm text-gray-400">Technologies</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Column - Code & Skills -->
                <div data-aos="fade-left" data-aos-delay="400">
                    <!-- Interactive Code Editor -->
                    <div class="code-bg rounded-3xl p-6 mb-8 hover-lift card-shine border border-primary/20">
                        <div class="flex items-center mb-4">
                            <div class="flex space-x-2 mr-4">
                                <div
                                    class="w-3 h-3 bg-red-500 rounded-full hover:scale-125 transition-transform cursor-pointer">
                                </div>
                                <div
                                    class="w-3 h-3 bg-yellow-500 rounded-full hover:scale-125 transition-transform cursor-pointer">
                                </div>
                                <div
                                    class="w-3 h-3 bg-green-500 rounded-full hover:scale-125 transition-transform cursor-pointer">
                                </div>
                            </div>
                            <span class="text-gray-400 text-sm flex items-center gap-2">
                                <i class="fab fa-js text-yellow-400"></i>
                                about-me.js
                            </span>
                        </div>

                        <div class="space-y-1.5 text-sm font-mono">
                            <div class="flex">
                                <span class="text-gray-500 w-8 text-right mr-4 select-none">1</span>
                                <span><span class="text-pink-400">const</span> <span
                                        class="text-blue-400">programmer</span> = {</span>
                            </div>
                            <div class="flex">
                                <span class="text-gray-500 w-8 text-right mr-4 select-none">2</span>
                                <span class="ml-4"><span class="text-green-400">name:</span> <span
                                        class="text-orange-300">'Programmer Gabut'</span>,</span>
                            </div>
                            <div class="flex">
                                <span class="text-gray-500 w-8 text-right mr-4 select-none">3</span>
                                <span class="ml-4"><span class="text-green-400">status:</span> <span
                                        class="text-orange-300">'Still Learning'</span>,</span>
                            </div>
                            <div class="flex">
                                <span class="text-gray-500 w-8 text-right mr-4 select-none">4</span>
                                <span class="ml-4"><span class="text-green-400">motivation:</span> <span
                                        class="text-orange-300">'Maximum!'</span>,</span>
                            </div>
                            <div class="flex">
                                <span class="text-gray-500 w-8 text-right mr-4 select-none">5</span>
                                <span class="ml-4"><span class="text-green-400">coffee:</span> <span
                                        class="text-purple-400">true</span>,</span>
                            </div>
                            <div class="flex">
                                <span class="text-gray-500 w-8 text-right mr-4 select-none">6</span>
                                <span class="ml-4"><span class="text-green-400">skills:</span> [</span>
                            </div>
                            <div class="flex">
                                <span class="text-gray-500 w-8 text-right mr-4 select-none">7</span>
                                <span class="ml-8"><span class="text-orange-300">'Laravel'</span>, <span
                                        class="text-orange-300">'MongoDB'</span>,</span>
                            </div>
                            <div class="flex">
                                <span class="text-gray-500 w-8 text-right mr-4 select-none">8</span>
                                <span class="ml-8"><span class="text-orange-300">'JavaScript'</span>, <span
                                        class="text-orange-300">'React'</span></span>
                            </div>
                            <div class="flex">
                                <span class="text-gray-500 w-8 text-right mr-4 select-none">9</span>
                                <span class="ml-4">]</span>
                            </div>
                            <div class="flex">
                                <span class="text-gray-500 w-8 text-right mr-4 select-none">10</span>
                                <span>};</span>
                            </div>
                        </div>
                    </div>

                    <!-- Personality Traits -->
                    <div class="grid grid-cols-2 gap-4">
                        <div
                            class="glass-effect rounded-2xl p-5 text-center hover-lift card-shine border border-primary/20 group">
                            <div
                                class="w-12 h-12 mx-auto mb-3 bg-gradient-to-br from-primary/20 to-primary/10 rounded-xl flex items-center justify-center group-hover:scale-110 transition-transform">
                                <i class="fas fa-lightbulb text-2xl text-primary"></i>
                            </div>
                            <div class="font-semibold text-light">Creative</div>
                            <div class="text-sm text-gray-400">Problem Solver</div>
                        </div>
                        <div
                            class="glass-effect rounded-2xl p-5 text-center hover-lift card-shine border border-secondary/20 group">
                            <div
                                class="w-12 h-12 mx-auto mb-3 bg-gradient-to-br from-secondary/20 to-secondary/10 rounded-xl flex items-center justify-center group-hover:scale-110 transition-transform">
                                <i class="fas fa-users text-2xl text-secondary"></i>
                            </div>
                            <div class="font-semibold text-light">Team Player</div>
                            <div class="text-sm text-gray-400">Collaborative</div>
                        </div>
                        <div
                            class="glass-effect rounded-2xl p-5 text-center hover-lift card-shine border border-accent/20 group">
                            <div
                                class="w-12 h-12 mx-auto mb-3 bg-gradient-to-br from-accent/20 to-accent/10 rounded-xl flex items-center justify-center group-hover:scale-110 transition-transform">
                                <i class="fas fa-rocket text-2xl text-accent"></i>
                            </div>
                            <div class="font-semibold text-light">Fast Learner</div>
                            <div class="text-sm text-gray-400">Adaptive</div>
                        </div>
                        <div
                            class="glass-effect rounded-2xl p-5 text-center hover-lift card-shine border border-pink/20 group">
                            <div
                                class="w-12 h-12 mx-auto mb-3 bg-gradient-to-br from-pink-500/20 to-pink-500/10 rounded-xl flex items-center justify-center group-hover:scale-110 transition-transform">
                                <i class="fas fa-heart text-2xl text-pink-400"></i>
                            </div>
                            <div class="font-semibold text-light">Passionate</div>
                            <div class="text-sm text-gray-400">Dedicated</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Fun Facts -->
            <div class="mt-20" data-aos="fade-up" data-aos-delay="200">
                <h3 class="text-2xl font-bold text-center mb-10 text-light">
                    <i class="fas fa-star text-primary mr-2"></i>
                    Fun Facts
                </h3>

                <div class="grid md:grid-cols-3 gap-6">
                    <div
                        class="glass-effect rounded-2xl p-8 text-center hover-lift card-shine border border-primary/20 group">
                        <div
                            class="w-16 h-16 mx-auto mb-4 bg-gradient-to-br from-primary/20 to-primary/10 rounded-2xl flex items-center justify-center group-hover:rotate-12 transition-transform duration-300">
                            <i class="fas fa-coffee text-3xl text-primary"></i>
                        </div>
                        <h4 class="text-lg font-semibold text-light mb-2">Coffee Addict</h4>
                        <p class="text-gray-400 text-sm">Can't code without coffee. It's not just a drink, it's a
                            lifestyle!</p>
                    </div>

                    <div
                        class="glass-effect rounded-2xl p-8 text-center hover-lift card-shine border border-secondary/20 group">
                        <div
                            class="w-16 h-16 mx-auto mb-4 bg-gradient-to-br from-secondary/20 to-secondary/10 rounded-2xl flex items-center justify-center group-hover:rotate-12 transition-transform duration-300">
                            <i class="fas fa-moon text-3xl text-secondary"></i>
                        </div>
                        <h4 class="text-lg font-semibold text-light mb-2">Night Owl</h4>
                        <p class="text-gray-400 text-sm">Best coding happens at 2 AM when the world is sleeping.</p>
                    </div>

                    <div
                        class="glass-effect rounded-2xl p-8 text-center hover-lift card-shine border border-accent/20 group">
                        <div
                            class="w-16 h-16 mx-auto mb-4 bg-gradient-to-br from-accent/20 to-accent/10 rounded-2xl flex items-center justify-center group-hover:rotate-12 transition-transform duration-300">
                            <i class="fas fa-bug text-3xl text-accent"></i>
                        </div>
                        <h4 class="text-lg font-semibold text-light mb-2">Bug Hunter</h4>
                        <p class="text-gray-400 text-sm">Finding bugs is like a treasure hunt. Every bug is a lesson
                            learned!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
