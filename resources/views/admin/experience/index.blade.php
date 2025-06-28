@extends('admin.portfolio.layout')

@section('content')
<div class="admin-card">
    <div class="flex items-center justify-between mb-6">
        <h1 class="text-2xl font-bold gradient-text flex items-center"><i class="fas fa-user-clock mr-2"></i> Manajemen Experience</h1>
        <a href="{{ route('admin.experience.create') }}" class="admin-btn flex items-center gap-2"><i class="fas fa-plus"></i> Tambah Experience</a>
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
                    <th class="py-3 px-4 text-left">Posisi</th>
                    <th class="py-3 px-4 text-left">Perusahaan</th>
                    <th class="py-3 px-4 text-left">Tanggal Mulai</th>
                    <th class="py-3 px-4 text-left">Tanggal Selesai</th>
                    <th class="py-3 px-4 text-left">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse($experiences as $exp)
                <tr class="hover:bg-primary/10 transition">
                    <td class="py-2 px-4">{{ $loop->iteration }}</td>
                    <td class="py-2 px-4">{{ $exp->title }}</td>
                    <td class="py-2 px-4">{{ $exp->company }}</td>
                    <td class="py-2 px-4">{{ $exp->start_date }}</td>
                    <td class="py-2 px-4">{{ $exp->end_date ?? '-' }}</td>
                    <td class="py-2 px-4 flex gap-2">
                        <a href="{{ route('admin.experience.edit', $exp->_id) }}" class="text-blue-400 hover:text-blue-600 transition"><i class="fas fa-edit"></i> Edit</a>
                        <form action="{{ route('admin.experience.destroy', $exp->_id) }}" method="POST" onsubmit="return confirm('Yakin hapus experience ini?')" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-400 hover:text-red-600 transition"><i class="fas fa-trash"></i> Hapus</button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="6" class="py-4 text-center text-gray-400">Belum ada data experience.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
