@extends('admin.portfolio.layout')
@section('content')
<h1 class="text-2xl font-bold gradient-text mb-8">Tambah Experience</h1>
@if($errors->any())
    <div class="mb-4 bg-red-500/20 border border-red-500 text-red-400 rounded-lg px-4 py-2">
        {{ $errors->first() }}
    </div>
@endif
<form method="POST" action="{{ route('admin.experience.store') }}" class="space-y-6">
    @csrf
    <div>
        <label class="block text-light font-semibold mb-2">Posisi/Jabatan</label>
        <input type="text" name="title" value="{{ old('title') }}" class="w-full px-4 py-3 bg-dark border border-primary/30 rounded-lg text-light placeholder-gray-400 focus:outline-none focus:border-primary transition-colors duration-300" required>
    </div>
    <div>
        <label class="block text-light font-semibold mb-2">Perusahaan</label>
        <input type="text" name="company" value="{{ old('company') }}" class="w-full px-4 py-3 bg-dark border border-primary/30 rounded-lg text-light placeholder-gray-400 focus:outline-none focus:border-primary transition-colors duration-300" required>
    </div>
    <div>
        <label class="block text-light font-semibold mb-2">Deskripsi</label>
        <textarea name="description" rows="4" class="w-full px-4 py-3 bg-dark border border-primary/30 rounded-lg text-light placeholder-gray-400 focus:outline-none focus:border-primary transition-colors duration-300 resize-none" required>{{ old('description') }}</textarea>
    </div>
    <div class="grid md:grid-cols-2 gap-6">
        <div>
            <label class="block text-light font-semibold mb-2">Tanggal Mulai</label>
            <input type="date" name="start_date" value="{{ old('start_date') }}" class="w-full px-4 py-3 bg-dark border border-primary/30 rounded-lg text-light focus:outline-none focus:border-primary transition-colors duration-300" required>
        </div>
        <div>
            <label class="block text-light font-semibold mb-2">Tanggal Selesai</label>
            <input type="date" name="end_date" value="{{ old('end_date') }}" class="w-full px-4 py-3 bg-dark border border-primary/30 rounded-lg text-light focus:outline-none focus:border-primary transition-colors duration-300" id="endDate">
        </div>
    </div>
    <div class="flex items-center gap-3">
        <label for="current" class="block text-light font-semibold mb-2">Masih Bekerja/Sekarang</label>
        <input type="hidden" name="current" value="0">
        <input type="checkbox" id="current" name="current" value="1" class="mr-2 align-middle" {{ old('current') ? 'checked' : '' }}>
        <span class="text-light">Centang jika masih aktif di posisi ini</span>
    </div>
    <div class="flex gap-4 mt-8">
        <button type="submit" class="px-8 py-3 bg-gradient-to-r from-primary to-secondary text-dark font-bold rounded-lg hover:shadow-lg transition-all duration-300 hover:scale-105">
            <i class="fas fa-save mr-2"></i>Simpan
        </button>
        <a href="{{ route('admin.experience.index') }}" class="px-8 py-3 bg-dark border border-primary/30 text-primary font-bold rounded-lg hover:bg-primary hover:text-dark transition-all duration-300 hover:scale-105">
            <i class="fas fa-arrow-left mr-2"></i>Kembali
        </a>
    </div>
</form>

<script>
function toggleEndDate() {
    const currentCheckbox = document.getElementById('current');
    const endDateInput = document.getElementById('endDate');

    if (currentCheckbox.checked) {
        endDateInput.disabled = true;
        endDateInput.value = '';
    } else {
        endDateInput.disabled = false;
    }
}
</script>
@endsection
