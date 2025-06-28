<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $portfolio->title }} - Portfolio Detail</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        .gradient-bg {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }
        .code-bg {
            background: #1a1a1a;
            color: #00ff00;
            font-family: 'Courier New', monospace;
        }
    </style>
</head>
<body class="bg-gray-900 text-white">
    <!-- Header -->
    <header class="gradient-bg py-8">
        <div class="container mx-auto px-4">
            <div class="text-center">
                <a href="{{ route('home') }}" class="inline-block mb-6 text-yellow-400 hover:text-yellow-300 transition duration-300">
                    <i class="fas fa-arrow-left mr-2"></i>Kembali ke Portfolio
                </a>
                <h1 class="text-4xl font-bold mb-2">{{ $portfolio->title }}</h1>
                <p class="text-xl text-gray-200">Detail Proyek</p>
            </div>
        </div>
    </header>

    <!-- Project Detail -->
    <section class="py-16">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto">
                <!-- Project Image -->
                <div class="bg-gradient-to-br from-blue-500 to-purple-600 h-64 rounded-lg mb-8 flex items-center justify-center">
                    <i class="fas fa-code text-8xl text-white opacity-50"></i>
                </div>

                <!-- Project Info -->
                <div class="bg-gray-800 rounded-lg p-8 mb-8">
                    <h2 class="text-2xl font-bold mb-4 text-yellow-400">Deskripsi Proyek</h2>
                    <p class="text-gray-300 leading-relaxed mb-6">{{ $portfolio->description }}</p>

                    @if($portfolio->technologies)
                    <div class="mb-6">
                        <h3 class="text-xl font-semibold mb-3 text-yellow-400">Teknologi yang Digunakan</h3>
                        <div class="flex flex-wrap gap-2">
                            @foreach($portfolio->technologies as $tech)
                            <span class="bg-gray-700 px-3 py-1 rounded-full text-sm">{{ $tech }}</span>
                            @endforeach
                        </div>
                    </div>
                    @endif

                    <!-- Links -->
                    <div class="flex gap-4">
                        @if($portfolio->github_url)
                        <a href="{{ $portfolio->github_url }}" target="_blank" class="bg-gray-700 hover:bg-gray-600 px-6 py-3 rounded-lg transition duration-300 flex items-center">
                            <i class="fab fa-github mr-2"></i>Lihat di GitHub
                        </a>
                        @endif
                        @if($portfolio->live_url)
                        <a href="{{ $portfolio->live_url }}" target="_blank" class="bg-yellow-400 hover:bg-yellow-300 text-gray-900 px-6 py-3 rounded-lg transition duration-300 flex items-center">
                            <i class="fas fa-external-link-alt mr-2"></i>Live Demo
                        </a>
                        @endif
                    </div>
                </div>

                <!-- Code Snippet -->
                <div class="bg-gray-800 rounded-lg p-8">
                    <h3 class="text-xl font-semibold mb-4 text-yellow-400">Snippet Kode (Contoh)</h3>
                    <div class="code-bg p-6 rounded-lg">
                        <div class="mb-2">
                            <span class="text-red-400">//</span>
                            <span class="text-gray-400">Ini adalah contoh kode dari proyek {{ $portfolio->title }}</span>
                        </div>
                        <div class="mb-2">
                            <span class="text-red-400">function</span>
                            <span class="text-blue-400">awesomeFeature</span>() {
                        </div>
                        <div class="ml-4 mb-2">
                            <span class="text-red-400">const</span>
                            <span class="text-blue-400">result</span> =
                            <span class="text-yellow-400">'Amazing!'</span>;
                        </div>
                        <div class="ml-4 mb-2">
                            <span class="text-red-400">return</span>
                            <span class="text-blue-400">result</span>;
                        </div>
                        <div>}</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="gradient-bg py-8">
        <div class="container mx-auto px-4 text-center">
            <p class="text-gray-200">
                <i class="fas fa-heart text-red-400 mr-2"></i>
                Dibuat dengan ❤️ oleh Programmer Gabut yang Lagi Belajar
            </p>
        </div>
    </footer>
</body>
</html>
