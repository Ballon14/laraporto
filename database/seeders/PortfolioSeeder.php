<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Portfolio;
use App\Models\Skill;
use App\Models\Experience;

class PortfolioSeeder extends Seeder
{
    public function run()
    {
        // Portfolio Projects
        Portfolio::create([
            'title' => 'Todo App Sederhana',
            'description' => 'Aplikasi todo list sederhana yang dibuat dengan Laravel dan MongoDB. Fitur CRUD lengkap dengan validasi form.',
            'github_url' => 'https://github.com/yourusername/todo-app',
            'live_url' => 'https://todo-app-demo.herokuapp.com',
            'technologies' => ['Laravel', 'MongoDB', 'Tailwind CSS', 'JavaScript'],
            'category' => 'Web Application',
            'featured' => true,
            'order' => 1
        ]);

        Portfolio::create([
            'title' => 'Calculator App',
            'description' => 'Kalkulator sederhana dengan interface yang menarik. Dibuat untuk belajar JavaScript dan DOM manipulation.',
            'github_url' => 'https://github.com/yourusername/calculator',
            'live_url' => 'https://calculator-demo.netlify.app',
            'technologies' => ['HTML', 'CSS', 'JavaScript', 'Bootstrap'],
            'category' => 'Web Application',
            'featured' => false,
            'order' => 2
        ]);

        Portfolio::create([
            'title' => 'Weather Dashboard',
            'description' => 'Dashboard cuaca yang menampilkan informasi cuaca real-time. Menggunakan API OpenWeatherMap.',
            'github_url' => 'https://github.com/yourusername/weather-app',
            'live_url' => 'https://weather-dashboard.vercel.app',
            'technologies' => ['React', 'Node.js', 'OpenWeatherMap API', 'Chart.js'],
            'category' => 'Web Application',
            'featured' => true,
            'order' => 3
        ]);

        Portfolio::create([
            'title' => 'Portfolio Website',
            'description' => 'Website portfolio pribadi dengan tema programmer yang sedang belajar. Responsive design dan animasi menarik.',
            'github_url' => 'https://github.com/yourusername/portfolio',
            'live_url' => 'https://my-portfolio.vercel.app',
            'technologies' => ['Laravel', 'MongoDB', 'Tailwind CSS', 'Alpine.js'],
            'category' => 'Web Application',
            'featured' => true,
            'order' => 4
        ]);

        // Skills
        Skill::create([
            'name' => 'Laravel',
            'category' => 'Backend',
            'level' => 75,
            'icon' => 'fab fa-laravel',
            'description' => 'Framework PHP yang powerful untuk web development',
            'order' => 1
        ]);

        Skill::create([
            'name' => 'MongoDB',
            'category' => 'Database',
            'level' => 70,
            'icon' => 'fas fa-database',
            'description' => 'NoSQL database yang fleksibel',
            'order' => 2
        ]);

        Skill::create([
            'name' => 'JavaScript',
            'category' => 'Frontend',
            'level' => 80,
            'icon' => 'fab fa-js-square',
            'description' => 'Bahasa pemrograman untuk web yang dinamis',
            'order' => 3
        ]);

        Skill::create([
            'name' => 'React',
            'category' => 'Frontend',
            'level' => 65,
            'icon' => 'fab fa-react',
            'description' => 'Library JavaScript untuk UI yang interaktif',
            'order' => 4
        ]);

        Skill::create([
            'name' => 'Tailwind CSS',
            'category' => 'Frontend',
            'level' => 85,
            'icon' => 'fas fa-palette',
            'description' => 'Framework CSS utility-first',
            'order' => 5
        ]);

        Skill::create([
            'name' => 'Node.js',
            'category' => 'Backend',
            'level' => 60,
            'icon' => 'fab fa-node-js',
            'description' => 'Runtime JavaScript di server-side',
            'order' => 6
        ]);

        Skill::create([
            'name' => 'Git',
            'category' => 'Tools',
            'level' => 75,
            'icon' => 'fab fa-git-alt',
            'description' => 'Version control system',
            'order' => 7
        ]);

        Skill::create([
            'name' => 'Docker',
            'category' => 'Tools',
            'level' => 50,
            'icon' => 'fab fa-docker',
            'description' => 'Containerization platform',
            'order' => 8
        ]);

        // Experience
        Experience::create([
            'title' => 'Junior Web Developer',
            'company' => 'Startup Lokal',
            'description' => 'Mengembangkan aplikasi web menggunakan Laravel dan MongoDB. Belajar banyak tentang best practices dan teamwork.',
            'start_date' => '2023-01-01',
            'end_date' => '2023-12-31',
            'current' => false,
            'technologies' => ['Laravel', 'MongoDB', 'JavaScript', 'Git'],
            'order' => 1
        ]);

        Experience::create([
            'title' => 'Freelance Web Developer',
            'company' => 'Self-Employed',
            'description' => 'Mengambil proyek freelance untuk mengasah skill dan menambah pengalaman. Fokus pada pengembangan aplikasi web sederhana.',
            'start_date' => '2022-06-01',
            'end_date' => null,
            'current' => true,
            'technologies' => ['Laravel', 'React', 'Tailwind CSS', 'MongoDB'],
            'order' => 2
        ]);

        Experience::create([
            'title' => 'Student Developer',
            'company' => 'Universitas',
            'description' => 'Belajar programming dan mengembangkan proyek-proyek kecil untuk tugas kuliah. Fokus pada fundamental programming.',
            'start_date' => '2021-09-01',
            'end_date' => '2022-05-31',
            'current' => false,
            'technologies' => ['PHP', 'JavaScript', 'HTML', 'CSS'],
            'order' => 3
        ]);
    }
}
