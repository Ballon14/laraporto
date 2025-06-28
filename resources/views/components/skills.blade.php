<section id="skills" class="py-20 bg-gray-900 relative">
    <div class="container mx-auto px-4">
        <div class="max-w-6xl mx-auto">
            <!-- Section Header -->
            <div class="text-center mb-16" data-aos="fade-up">
                <h2 class="text-4xl md:text-5xl font-bold mb-4">
                    <span class="gradient-text">Skills</span>
                    <span class="text-light">& Expertise</span>
                </h2>
                <div class="w-24 h-1 bg-gradient-to-r from-primary to-accent mx-auto mb-6"></div>
                <p class="text-xl text-gray-300 max-w-2xl mx-auto">
                    Technologies and tools I've been learning and working with
                </p>
            </div>

            <!-- Skills Grid -->
            <div class="grid lg:grid-cols-2 gap-12">
                @foreach($skills->groupBy('category') as $category => $categorySkills)
                <div data-aos="fade-up" data-aos-delay="{{ $loop->index * 200 }}">
                    <div class="glass-effect rounded-2xl p-8 hover-lift shadow-lg">
                        <h3 class="text-2xl font-bold text-primary mb-6 flex items-center">
                            <i class="fas fa-layer-group mr-3"></i>
                            {{ $category }}
                        </h3>
                        <div class="space-y-6">
                            @foreach($categorySkills as $skill)
                            <div class="skill-item group relative" x-data="{ isVisible: false }" x-intersect="isVisible = true">
                                <div class="flex justify-between items-center mb-2">
                                    <div class="flex items-center space-x-3">
                                        <div class="w-10 h-10 bg-gradient-to-r from-primary to-accent rounded-lg flex items-center justify-center shadow-md">
                                            <i class="{{ $skill->icon ?? 'fas fa-code' }} text-white text-lg"></i>
                                        </div>
                                        <span class="font-semibold text-light text-lg">{{ $skill->name }}</span>
                                        @if($skill->level < 70)
                                            <span class="ml-2 px-2 py-1 text-xs rounded-full bg-yellow-400 text-dark font-bold animate-pulse">Learning</span>
                                        @endif
                                    </div>
                                    <span class="text-sm text-gray-400 font-mono">{{ $skill->level }}%</span>
                                </div>
                                <div class="skill-bar h-4 rounded-full overflow-hidden bg-gray-800">
                                    <div
                                        class="skill-progress h-4 rounded-full bg-gradient-to-r from-primary to-accent shadow-md transition-all duration-1000"
                                        :style="isVisible ? `width: ${@js($skill->level)}%` : 'width: 0%'"
                                    ></div>
                                </div>
                                @if($skill->description)
                                <div class="absolute left-0 top-full mt-2 w-max max-w-xs bg-gray-800 text-gray-200 text-xs rounded-lg shadow-lg px-4 py-2 opacity-0 group-hover:opacity-100 transition-opacity duration-300 z-20">
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

            <!-- Skill Categories Overview -->
            {{--
            <div class="mt-16" data-aos="fade-up">
                <h3 class="text-2xl font-bold text-center mb-8 text-light">
                    <i class="fas fa-chart-pie text-primary mr-2"></i>
                    Skills Overview
                </h3>
                <div class="grid md:grid-cols-4 gap-6">
                    <div class="glass-effect rounded-lg p-6 text-center hover-lift">
                        <div class="text-4xl mb-4">
                            <i class="fab fa-html5 text-orange-500"></i>
                        </div>
                        <h4 class="text-lg font-semibold text-light mb-2">Frontend</h4>
                        <p class="text-gray-400">HTML, CSS, JavaScript, React</p>
                        <div class="mt-4">
                            <div class="w-full bg-gray-700 rounded-full h-2">
                                <div class="bg-gradient-to-r from-orange-500 to-red-500 h-2 rounded-full" style="width: 85%"></div>
                            </div>
                        </div>
                    </div>
                    <div class="glass-effect rounded-lg p-6 text-center hover-lift">
                        <div class="text-4xl mb-4">
                            <i class="fab fa-php text-blue-500"></i>
                        </div>
                        <h4 class="text-lg font-semibold text-light mb-2">Backend</h4>
                        <p class="text-gray-400">PHP, Laravel, Node.js</p>
                        <div class="mt-4">
                            <div class="w-full bg-gray-700 rounded-full h-2">
                                <div class="bg-gradient-to-r from-blue-500 to-purple-500 h-2 rounded-full" style="width: 80%"></div>
                            </div>
                        </div>
                    </div>
                    <div class="glass-effect rounded-lg p-6 text-center hover-lift">
                        <div class="text-4xl mb-4">
                            <i class="fas fa-database text-green-500"></i>
                        </div>
                        <h4 class="text-lg font-semibold text-light mb-2">Database</h4>
                        <p class="text-gray-400">MySQL, MongoDB, Redis</p>
                        <div class="mt-4">
                            <div class="w-full bg-gray-700 rounded-full h-2">
                                <div class="bg-gradient-to-r from-green-500 to-teal-500 h-2 rounded-full" style="width: 75%"></div>
                            </div>
                        </div>
                    </div>
                    <div class="glass-effect rounded-lg p-6 text-center hover-lift">
                        <div class="text-4xl mb-4">
                            <i class="fas fa-tools text-yellow-500"></i>
                        </div>
                        <h4 class="text-lg font-semibold text-light mb-2">Tools</h4>
                        <p class="text-gray-400">Git, Docker, VS Code</p>
                        <div class="mt-4">
                            <div class="w-full bg-gray-700 rounded-full h-2">
                                <div class="bg-gradient-to-r from-yellow-500 to-orange-500 h-2 rounded-full" style="width: 70%"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            --}}
        </div>
    </div>
</section>

<style>
    .skill-item {
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        position: relative;
    }
    .skill-item:hover {
        transform: translateY(-2px) scale(1.01);
        z-index: 10;
    }
    .skill-bar {
        background: #2d3748;
        border-radius: 10px;
        overflow: hidden;
        position: relative;
        height: 16px;
    }
    .skill-progress {
        background: linear-gradient(90deg, var(--primary), var(--accent));
        height: 100%;
        border-radius: 10px;
        transition: width 1.5s cubic-bezier(0.4, 0, 0.2, 1);
        position: relative;
    }
    .skill-progress::after {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
        animation: shimmer 2s infinite;
    }
    @keyframes shimmer {
        0% { transform: translateX(-100%); }
        100% { transform: translateX(100%); }
    }
</style>
