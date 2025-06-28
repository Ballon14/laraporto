@extends('admin.portfolio.layout')

@section('content')
<div class="admin-card">
    <h1 class="text-3xl font-bold gradient-text mb-6 flex items-center"><i class="fas fa-tachometer-alt mr-3"></i> Dashboard</h1>
    <div class="bg-gradient-to-r from-primary to-secondary text-white rounded-lg px-6 py-4 shadow flex items-center gap-4 mb-8">
        <i class="fas fa-user-shield text-3xl"></i>
        <div>
            <div class="text-lg font-semibold mb-1">Selamat datang di Admin Panel!</div>
            <div class="text-sm text-light">Kamu sudah berhasil login sebagai admin. Silakan gunakan menu di atas untuk mengelola data Portfolio, Skill, dan Experience.</div>
        </div>
    </div>

    <div class="mb-10">
        <h2 class="text-xl font-bold gradient-text mb-4 flex items-center"><i class="fas fa-briefcase mr-2"></i> Portfolio</h2>
        <div class="overflow-x-auto">
            <table class="min-w-full bg-dark rounded-lg shadow text-light mb-2">
                <thead>
                    <tr class="bg-primary/80 text-white">
                        <th class="py-2 px-4 text-left">Judul</th>
                        <th class="py-2 px-4 text-left">Kategori</th>
                        <th class="py-2 px-4 text-left">Order</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($portfolios as $portfolio)
                    <tr class="hover:bg-primary/10 transition">
                        <td class="py-2 px-4">{{ $portfolio->title }}</td>
                        <td class="py-2 px-4">{{ $portfolio->category }}</td>
                        <td class="py-2 px-4">{{ $portfolio->order }}</td>
                    </tr>
                    @empty
                    <tr><td colspan="3" class="py-4 text-center text-gray-400">Belum ada data portfolio.</td></tr>
                    @endforelse
                </tbody>
            </table>
            <div class="mt-2">{{ $portfolios->links() }}</div>
        </div>
    </div>

    <div class="mb-10">
        <h2 class="text-xl font-bold gradient-text mb-4 flex items-center"><i class="fas fa-tools mr-2"></i> Skill</h2>
        <div class="overflow-x-auto">
            <table class="min-w-full bg-dark rounded-lg shadow text-light mb-2">
                <thead>
                    <tr class="bg-primary/80 text-white">
                        <th class="py-2 px-4 text-left">Nama Skill</th>
                        <th class="py-2 px-4 text-left">Level</th>
                        <th class="py-2 px-4 text-left">Kategori</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($skills as $skill)
                    <tr class="hover:bg-primary/10 transition">
                        <td class="py-2 px-4">{{ $skill->name }}</td>
                        <td class="py-2 px-4">{{ $skill->level }}</td>
                        <td class="py-2 px-4">{{ $skill->category }}</td>
                    </tr>
                    @empty
                    <tr><td colspan="3" class="py-4 text-center text-gray-400">Belum ada data skill.</td></tr>
                    @endforelse
                </tbody>
            </table>
            <div class="mt-2">{{ $skills->links() }}</div>
        </div>
    </div>

    <div class="mb-4">
        <h2 class="text-xl font-bold gradient-text mb-4 flex items-center"><i class="fas fa-user-clock mr-2"></i> Experience</h2>
        <div class="overflow-x-auto">
            <table class="min-w-full bg-dark rounded-lg shadow text-light mb-2">
                <thead>
                    <tr class="bg-primary/80 text-white">
                        <th class="py-2 px-4 text-left">Posisi</th>
                        <th class="py-2 px-4 text-left">Perusahaan</th>
                        <th class="py-2 px-4 text-left">Tanggal Mulai</th>
                        <th class="py-2 px-4 text-left">Tanggal Selesai</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($experiences as $exp)
                    <tr class="hover:bg-primary/10 transition">
                        <td class="py-2 px-4">{{ $exp->title }}</td>
                        <td class="py-2 px-4">{{ $exp->company }}</td>
                        <td class="py-2 px-4">{{ $exp->start_date }}</td>
                        <td class="py-2 px-4">{{ $exp->end_date ?? '-' }}</td>
                    </tr>
                    @empty
                    <tr><td colspan="4" class="py-4 text-center text-gray-400">Belum ada data experience.</td></tr>
                    @endforelse
                </tbody>
            </table>
            <div class="mt-2">{{ $experiences->links() }}</div>
        </div>
    </div>
</div>
@endsection
