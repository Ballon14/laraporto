<x-filament-widgets::widget>
    <x-filament::section>
        <div
            class="relative overflow-hidden rounded-xl bg-gradient-to-r from-violet-600 via-purple-600 to-indigo-600 p-6">
            <!-- Decorative circles -->
            <div class="absolute -top-10 -right-10 w-40 h-40 bg-white/10 rounded-full blur-2xl"></div>
            <div class="absolute -bottom-10 -left-10 w-32 h-32 bg-cyan-400/20 rounded-full blur-2xl"></div>

            <div class="relative flex items-center justify-between">
                <div>
                    <h2 class="text-2xl font-bold text-white mb-2">
                        👋 Selamat Datang di Laraporto Admin!
                    </h2>
                    <p class="text-purple-100 text-sm max-w-lg">
                        Kelola portfolio, skills, dan experience Anda dengan mudah. Panel admin modern dengan Filament.
                    </p>

                    <div class="flex flex-wrap gap-3 mt-4">
                        <a href="{{ route('filament.admin.resources.portfolios.index') }}"
                            class="inline-flex items-center gap-2 px-4 py-2 bg-white/20 hover:bg-white/30 rounded-lg text-white text-sm font-medium transition backdrop-blur">
                            <x-heroicon-o-briefcase class="w-4 h-4" />
                            Kelola Portfolio
                        </a>
                        <a href="{{ route('filament.admin.resources.skills.index') }}"
                            class="inline-flex items-center gap-2 px-4 py-2 bg-white/20 hover:bg-white/30 rounded-lg text-white text-sm font-medium transition backdrop-blur">
                            <x-heroicon-o-code-bracket class="w-4 h-4" />
                            Kelola Skills
                        </a>
                        <a href="/" target="_blank"
                            class="inline-flex items-center gap-2 px-4 py-2 bg-cyan-400 hover:bg-cyan-300 rounded-lg text-gray-900 text-sm font-medium transition">
                            <x-heroicon-o-eye class="w-4 h-4" />
                            Lihat Portfolio
                        </a>
                    </div>
                </div>

                <div class="hidden lg:block">
                    <div class="w-24 h-24 bg-white/20 rounded-2xl flex items-center justify-center backdrop-blur">
                        <x-heroicon-o-rocket-launch class="w-12 h-12 text-white" />
                    </div>
                </div>
            </div>
        </div>
    </x-filament::section>
</x-filament-widgets::widget>
