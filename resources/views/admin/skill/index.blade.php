@extends('admin.portfolio.layout')

@section('content')
<div class="admin-card">
    <div class="flex items-center justify-between mb-6">
        <h1 class="text-2xl font-bold gradient-text flex items-center"><i class="fas fa-tools mr-2"></i> Manajemen Skill</h1>
        <a href="{{ route('admin.skill.create') }}" class="admin-btn flex items-center gap-2"><i class="fas fa-plus"></i> Tambah Skill</a>
    </div>

    @if(session('success'))
        <div class="admin-success">{{ session('success') }}</div>
    @endif
    @if($errors->any())
        <div class="admin-error">{{ $errors->first() }}</div>
    @endif

    <div class="overflow-x-auto">
        <table class="min-w-full bg-dark rounded-lg shadow text-light mb-2">
            <thead>
                <tr class="bg-primary/80 text-white">
                    <th class="py-3 px-4 text-left">#</th>
                    <th class="py-3 px-4 text-left">Nama Skill</th>
                    <th class="py-3 px-4 text-left">Level</th>
                    <th class="py-3 px-4 text-left">Kategori</th>
                    <th class="py-3 px-4 text-left">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse($skills as $skill)
                <tr class="hover:bg-primary/10 transition">
                    <td class="py-2 px-4">{{ $loop->iteration }}</td>
                    <td class="py-2 px-4">{{ $skill->name }}</td>
                    <td class="py-2 px-4">{{ $skill->level }}</td>
                    <td class="py-2 px-4">{{ $skill->category }}</td>
                    <td class="py-2 px-4 flex gap-2">
                        <a href="{{ route('admin.skill.edit', $skill->_id) }}" class="text-blue-400 hover:text-blue-600 transition"><i class="fas fa-edit"></i> Edit</a>
                        <form action="{{ route('admin.skill.destroy', $skill->_id) }}" method="POST" onsubmit="return confirm('Yakin hapus skill ini?')" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-400 hover:text-red-600 transition"><i class="fas fa-trash"></i> Hapus</button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="5" class="py-4 text-center text-gray-400">Belum ada data skill.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
