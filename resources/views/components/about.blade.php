<section id="about" class="py-20 relative">
    <div class="container mx-auto px-4">
        <div class="max-w-6xl mx-auto">
            <!-- Section Header -->
            <div class="text-center mb-16" data-aos="fade-up">
                <h2 class="text-4xl md:text-5xl font-bold mb-4">
                    <span class="gradient-text">About</span>
                    <span class="text-light">Me</span>
                </h2>
                <div class="w-24 h-1 bg-gradient-to-r from-primary to-secondary mx-auto mb-6"></div>
                <p class="text-xl text-gray-300 max-w-2xl mx-auto">
                    Get to know the programmer behind the code
                </p>
            </div>

            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <!-- Left Column - Story -->
                <div data-aos="fade-right">
                    <div class="glass-effect rounded-2xl p-8 hover-lift shadow-xl border border-primary/20">
                        <h3 class="text-2xl font-bold text-primary mb-6 flex items-center">
                            <i class="fas fa-user-graduate mr-3"></i>
                            My Story
                        </h3>

                        <div class="space-y-4 text-gray-300 leading-relaxed">
                            <p>
                                Halo! Saya adalah seorang programmer yang sedang dalam tahap belajar.
                                Meskipun masih banyak yang belum tahu, tapi semangat belajar tetap tinggi!
                            </p>
                            <p>
                                Suka ngoding sambil minum kopi dan kadang begadang sampai pagi.
                                Percaya bahwa setiap bug adalah kesempatan untuk belajar sesuatu yang baru.
                            </p>
                            <p>
                                Fokus pada pengembangan web full-stack dengan teknologi modern,
                                dan selalu mencari cara untuk membuat kode yang lebih bersih dan efisien.
                            </p>
                        </div>

                        <!-- Quick Stats -->
                        <div class="grid grid-cols-2 gap-4 mt-8">
                            <div class="text-center p-4 bg-dark/80 rounded-lg border border-primary/10">
                                <div class="text-2xl font-bold text-primary mb-1">
                                    <span x-data="{ count: 0 }" x-init="setInterval(() => { if(count < 3) count++ }, 500)" x-text="count">0</span>+
                                </div>
                                <div class="text-sm text-gray-400">Years Learning</div>
                            </div>
                            <div class="text-center p-4 bg-dark/80 rounded-lg border border-secondary/10">
                                <div class="text-2xl font-bold text-secondary mb-1">
                                    <span x-data="{ count: 0 }" x-init="setInterval(() => { if(count < 10) count++ }, 200)" x-text="count">0</span>+
                                </div>
                                <div class="text-sm text-gray-400">Technologies</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Column - Code & Skills -->
                <div data-aos="fade-left">
                    <!-- Interactive Code Editor -->
                    <div class="code-bg rounded-2xl p-6 mb-8 hover-lift shadow-xl border border-primary/20">
                        <div class="flex items-center mb-4">
                            <div class="flex space-x-2 mr-4">
                                <div class="w-3 h-3 bg-primary rounded-full"></div>
                                <div class="w-3 h-3 bg-secondary rounded-full"></div>
                                <div class="w-3 h-3 bg-accent rounded-full"></div>
                            </div>
                            <span class="text-gray-400 text-sm">about-me.js</span>
                        </div>

                        <div class="space-y-2 text-sm">
                            <div>
                                <span class="text-red-400">const</span>
                                <span class="text-blue-400">programmer</span> = {
                            </div>
                            <div class="ml-4">
                                <span class="text-green-400">name:</span>
                                <span class="text-primary">'Programmer Gabut'</span>,
                            </div>
                            <div class="ml-4">
                                <span class="text-green-400">status:</span>
                                <span class="text-secondary">'Still Learning'</span>,
                            </div>
                            <div class="ml-4">
                                <span class="text-green-400">motivation:</span>
                                <span class="text-accent">'High'</span>,
                            </div>
                            <div class="ml-4">
                                <span class="text-green-400">coffee:</span>
                                <span class="text-secondary">'Essential'</span>,
                            </div>
                            <div class="ml-4">
                                <span class="text-green-400">skills:</span> [
                            </div>
                            <div class="ml-8">
                                <span class="text-primary">'Laravel'</span>,
                                <span class="text-primary">'MongoDB'</span>,
                            </div>
                            <div class="ml-8">
                                <span class="text-primary">'JavaScript'</span>,
                                <span class="text-primary">'React'</span>
                            </div>
                            <div class="ml-4">],</div>
                            <div class="ml-4">
                                <span class="text-green-400">getMotivated:</span>
                                <span class="text-red-400">function</span>() {
                            </div>
                            <div class="ml-8">
                                <span class="text-red-400">return</span>
                                <span class="text-secondary">'Keep coding!'</span>;
                            </div>
                            <div class="ml-4">}</div>
                            <div>};</div>
                        </div>
                    </div>

                    <!-- Personality Traits -->
                    <div class="grid grid-cols-2 gap-4">
                        <div class="glass-effect rounded-lg p-4 text-center hover-lift border border-primary/10">
                            <i class="fas fa-lightbulb text-2xl text-primary mb-2"></i>
                            <div class="font-semibold text-light">Creative</div>
                            <div class="text-sm text-gray-400">Problem Solver</div>
                        </div>
                        <div class="glass-effect rounded-lg p-4 text-center hover-lift border border-secondary/10">
                            <i class="fas fa-users text-2xl text-secondary mb-2"></i>
                            <div class="font-semibold text-light">Team Player</div>
                            <div class="text-sm text-gray-400">Collaborative</div>
                        </div>
                        <div class="glass-effect rounded-lg p-4 text-center hover-lift border border-accent/10">
                            <i class="fas fa-rocket text-2xl text-accent mb-2"></i>
                            <div class="font-semibold text-light">Fast Learner</div>
                            <div class="text-sm text-gray-400">Adaptive</div>
                        </div>
                        <div class="glass-effect rounded-lg p-4 text-center hover-lift border border-primary/10">
                            <i class="fas fa-heart text-2xl text-primary mb-2"></i>
                            <div class="font-semibold text-light">Passionate</div>
                            <div class="text-sm text-gray-400">Dedicated</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Fun Facts -->
            <div class="mt-16" data-aos="fade-up">
                <h3 class="text-2xl font-bold text-center mb-8 text-light">
                    <i class="fas fa-star text-primary mr-2"></i>
                    Fun Facts
                </h3>

                <div class="grid md:grid-cols-3 gap-6">
                    <div class="glass-effect rounded-lg p-6 text-center hover-lift border border-primary/10">
                        <div class="text-4xl mb-4">
                            <i class="fas fa-coffee text-primary"></i>
                        </div>
                        <h4 class="text-lg font-semibold text-light mb-2">Coffee Addict</h4>
                        <p class="text-gray-400">Can't code without coffee. It's not just a drink, it's a lifestyle!</p>
                    </div>

                    <div class="glass-effect rounded-lg p-6 text-center hover-lift border border-secondary/10">
                        <div class="text-4xl mb-4">
                            <i class="fas fa-moon text-secondary"></i>
                        </div>
                        <h4 class="text-lg font-semibold text-light mb-2">Night Owl</h4>
                        <p class="text-gray-400">Best coding happens at 2 AM when the world is sleeping.</p>
                    </div>

                    <div class="glass-effect rounded-lg p-6 text-center hover-lift border border-accent/10">
                        <div class="text-4xl mb-4">
                            <i class="fas fa-bug text-accent"></i>
                        </div>
                        <h4 class="text-lg font-semibold text-light mb-2">Bug Hunter</h4>
                        <p class="text-gray-400">Finding bugs is like a treasure hunt. Every bug is a lesson learned!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
