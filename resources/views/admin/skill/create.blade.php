@extends('admin.portfolio.layout')
@section('content')
<h1 class="text-2xl font-bold gradient-text mb-8">Tambah Skill</h1>
@if($errors->any())
    <div class="mb-4 bg-red-500/20 border border-red-500 text-red-400 rounded-lg px-4 py-2">
        {{ $errors->first() }}
    </div>
@endif
<form method="POST" action="{{ route('admin.skill.store') }}" class="space-y-6">
    @csrf
    <div>
        <label class="block text-light font-semibold mb-2">Nama Skill</label>
        <input type="text" name="name" value="{{ old('name') }}" class="w-full px-4 py-3 bg-dark border border-primary/30 rounded-lg text-light placeholder-gray-400 focus:outline-none focus:border-primary transition-colors duration-300" required>
    </div>
    <div>
        <label class="block text-light font-semibold mb-2">Level (1-100)</label>
        <input type="number" name="level" value="{{ old('level') }}" min="1" max="100" class="w-full px-4 py-3 bg-dark border border-primary/30 rounded-lg text-light placeholder-gray-400 focus:outline-none focus:border-primary transition-colors duration-300" required>
    </div>
    <div>
        <label class="block text-light font-semibold mb-2">Kategori</label>
        <select name="category" class="w-full px-4 py-3 bg-dark border border-primary/30 rounded-lg text-light focus:outline-none focus:border-primary transition-colors duration-300" required>
            <option value="">Pilih Kategori</option>
            <option value="Programming Language" {{ old('category') == 'Programming Language' ? 'selected' : '' }}>Programming Language</option>
            <option value="Framework" {{ old('category') == 'Framework' ? 'selected' : '' }}>Framework</option>
            <option value="Database" {{ old('category') == 'Database' ? 'selected' : '' }}>Database</option>
            <option value="Tools" {{ old('category') == 'Tools' ? 'selected' : '' }}>Tools</option>
            <option value="Other" {{ old('category') == 'Other' ? 'selected' : '' }}>Other</option>
        </select>
    </div>
    <div>
        <label class="block text-light font-semibold mb-2">Urutan</label>
        <input type="number" name="order" value="{{ old('order', 0) }}" min="0" class="w-full px-4 py-3 bg-dark border border-primary/30 rounded-lg text-light placeholder-gray-400 focus:outline-none focus:border-primary transition-colors duration-300">
    </div>
    <div class="flex gap-4 mt-8">
        <button type="submit" class="px-8 py-3 bg-gradient-to-r from-primary to-secondary text-dark font-bold rounded-lg hover:shadow-lg transition-all duration-300 hover:scale-105">
            <i class="fas fa-save mr-2"></i>Simpan
        </button>
        <a href="{{ route('admin.skill.index') }}" class="px-8 py-3 bg-dark border border-primary/30 text-primary font-bold rounded-lg hover:bg-primary hover:text-dark transition-all duration-300 hover:scale-105">
            <i class="fas fa-arrow-left mr-2"></i>Kembali
        </a>
    </div>
</form>
@endsection
