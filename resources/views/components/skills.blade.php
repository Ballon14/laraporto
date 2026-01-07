<section id="skills" class="py-24 relative overflow-hidden">
    <!-- Section Divider -->
    <div class="section-divider w-1/2 mb-20"></div>

    <div class="container mx-auto px-4">
        <div class="max-w-6xl mx-auto">
            <!-- Section Header -->
            <div class="text-center mb-16" data-aos="fade-up">
                <h2 class="text-4xl md:text-6xl font-bold mb-4">
                    <span class="gradient-text">Skills</span>
                    <span class="text-light">& Expertise</span>
                </h2>
                <div class="w-24 h-1 bg-gradient-to-r from-primary via-secondary to-accent mx-auto mb-6 rounded-full">
                </div>
                <p class="text-xl text-gray-300 max-w-2xl mx-auto">
                    Technologies and tools I've been learning and working with
                </p>
            </div>

            <!-- Skills Grid -->
            <div class="grid lg:grid-cols-2 gap-8">
                @foreach ($skills->groupBy('category') as $category => $categorySkills)
                    <div data-aos="fade-up" data-aos-delay="{{ $loop->index * 150 }}">
                        <div class="glass-effect rounded-3xl p-8 hover-lift card-shine border border-primary/20 h-full">
                            <h3 class="text-2xl font-bold text-primary mb-8 flex items-center">
                                <div
                                    class="w-10 h-10 bg-gradient-to-r from-primary to-secondary rounded-xl flex items-center justify-center mr-3 shadow-lg">
                                    <i class="fas fa-layer-group text-white"></i>
                                </div>
                                {{ $category }}
                            </h3>
                            <div class="space-y-6">
                                @foreach ($categorySkills as $skill)
                                    <div class="skill-item group relative" x-data="{ isVisible: false, showTooltip: false }"
                                        x-intersect="isVisible = true">
                                        <div class="flex justify-between items-center mb-3">
                                            <div class="flex items-center space-x-4">
                                                <div
                                                    class="w-12 h-12 bg-gradient-to-br from-primary/20 to-secondary/20 rounded-xl flex items-center justify-center shadow-md group-hover:scale-110 transition-transform duration-300 border border-primary/20">
                                                    <i
                                                        class="{{ $skill->icon ?? 'fas fa-code' }} text-xl text-primary"></i>
                                                </div>
                                                <div>
                                                    <span
                                                        class="font-semibold text-light text-lg block">{{ $skill->name }}</span>
                                                    @if ($skill->level < 70)
                                                        <span class="text-xs text-yellow-400 flex items-center gap-1">
                                                            <span
                                                                class="w-1.5 h-1.5 bg-yellow-400 rounded-full animate-pulse"></span>
                                                            Learning
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="text-right">
                                                <span
                                                    class="text-2xl font-bold gradient-text">{{ $skill->level }}%</span>
                                            </div>
                                        </div>

                                        <!-- Enhanced Progress Bar -->
                                        <div class="skill-bar h-3 rounded-full">
                                            <div class="skill-progress rounded-full relative"
                                                :style="isVisible ? `width: ${@js($skill->level)}%` : 'width: 0%'">
                                                <!-- Animated End Dot -->
                                                <div class="absolute right-0 top-1/2 transform -translate-y-1/2 w-4 h-4 bg-white rounded-full shadow-lg"
                                                    style="box-shadow: 0 0 10px var(--primary);"></div>
                                            </div>
                                        </div>

                                        @if ($skill->description)
                                            <div
                                                class="mt-2 text-sm text-gray-400 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                                {{ $skill->description }}
                                            </div>
                                        @endif
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Technologies Overview -->
            <div class="mt-16" data-aos="fade-up" data-aos-delay="300">
                <h3 class="text-2xl font-bold text-center mb-10 text-light">
                    <i class="fas fa-tools text-primary mr-2"></i>
                    Tools & Technologies
                </h3>

                <div class="flex flex-wrap justify-center gap-4">
                    @php
                        $techIcons = [
                            ['name' => 'Laravel', 'icon' => 'fab fa-laravel', 'color' => 'text-red-500'],
                            ['name' => 'PHP', 'icon' => 'fab fa-php', 'color' => 'text-indigo-400'],
                            ['name' => 'JavaScript', 'icon' => 'fab fa-js', 'color' => 'text-yellow-400'],
                            ['name' => 'React', 'icon' => 'fab fa-react', 'color' => 'text-cyan-400'],
                            ['name' => 'Node.js', 'icon' => 'fab fa-node-js', 'color' => 'text-green-500'],
                            ['name' => 'Python', 'icon' => 'fab fa-python', 'color' => 'text-blue-400'],
                            ['name' => 'Git', 'icon' => 'fab fa-git-alt', 'color' => 'text-orange-500'],
                            ['name' => 'Docker', 'icon' => 'fab fa-docker', 'color' => 'text-blue-500'],
                            ['name' => 'HTML5', 'icon' => 'fab fa-html5', 'color' => 'text-orange-600'],
                            ['name' => 'CSS3', 'icon' => 'fab fa-css3-alt', 'color' => 'text-blue-600'],
                        ];
                    @endphp

                    @foreach ($techIcons as $index => $tech)
                        <div class="group relative" data-aos="zoom-in" data-aos-delay="{{ $index * 50 }}">
                            <div
                                class="w-16 h-16 glass-effect rounded-2xl flex items-center justify-center hover-lift border border-white/10 hover:border-primary/30 transition-all duration-300">
                                <i
                                    class="{{ $tech['icon'] }} text-3xl {{ $tech['color'] }} group-hover:scale-125 transition-transform duration-300"></i>
                            </div>
                            <div
                                class="absolute -bottom-8 left-1/2 transform -translate-x-1/2 opacity-0 group-hover:opacity-100 transition-opacity duration-300 whitespace-nowrap">
                                <span
                                    class="text-xs text-gray-400 bg-dark/80 px-2 py-1 rounded">{{ $tech['name'] }}</span>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    .skill-item {
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }

    .skill-item:hover {
        transform: translateX(5px);
    }
</style>
