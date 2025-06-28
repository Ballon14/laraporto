@extends('admin.portfolio.layout')
@section('content')
<h1 class="text-2xl font-bold gradient-text mb-8">Edit Portfolio</h1>
@if($errors->any())
    <div class="mb-4 bg-red-500/20 border border-red-500 text-red-400 rounded-lg px-4 py-2">
        {{ $errors->first() }}
    </div>
@endif
<form method="POST" action="{{ route('admin.portfolio.update', $portfolio->_id) }}" class="space-y-6">
    @csrf
    @method('PUT')
    <div>
        <label class="block text-light font-semibold mb-2">Judul</label>
        <input type="text" name="title" value="{{ old('title', $portfolio->title) }}" class="w-full px-4 py-3 bg-dark border border-primary/30 rounded-lg text-light placeholder-gray-400 focus:outline-none focus:border-primary transition-colors duration-300" required>
    </div>
    <div>
        <label class="block text-light font-semibold mb-2">Deskripsi</label>
        <textarea name="description" rows="4" class="w-full px-4 py-3 bg-dark border border-primary/30 rounded-lg text-light placeholder-gray-400 focus:outline-none focus:border-primary transition-colors duration-300 resize-none" required>{{ old('description', $portfolio->description) }}</textarea>
    </div>
    <div class="grid md:grid-cols-2 gap-6">
        <div>
            <label class="block text-light font-semibold mb-2">GitHub URL</label>
            <input type="url" name="github_url" value="{{ old('github_url', $portfolio->github_url) }}" class="w-full px-4 py-3 bg-dark border border-primary/30 rounded-lg text-light placeholder-gray-400 focus:outline-none focus:border-primary transition-colors duration-300">
        </div>
        <div>
            <label class="block text-light font-semibold mb-2">Live URL</label>
            <input type="url" name="live_url" value="{{ old('live_url', $portfolio->live_url) }}" class="w-full px-4 py-3 bg-dark border border-primary/30 rounded-lg text-light placeholder-gray-400 focus:outline-none focus:border-primary transition-colors duration-300">
        </div>
    </div>
    <div>
        <label class="block text-light font-semibold mb-2">Teknologi (pisahkan dengan koma)</label>
        <input type="text" name="technologies" value="{{ old('technologies', implode(', ', $portfolio->technologies ?? [])) }}" class="w-full px-4 py-3 bg-dark border border-primary/30 rounded-lg text-light placeholder-gray-400 focus:outline-none focus:border-primary transition-colors duration-300" placeholder="Laravel, MongoDB, Tailwind CSS">
    </div>
    <div class="grid md:grid-cols-2 gap-6">
        <div>
            <label class="block text-light font-semibold mb-2">Kategori</label>
            <input type="text" name="category" value="{{ old('category', $portfolio->category) }}" class="w-full px-4 py-3 bg-dark border border-primary/30 rounded-lg text-light placeholder-gray-400 focus:outline-none focus:border-primary transition-colors duration-300">
        </div>
        <div>
            <label class="block text-light font-semibold mb-2">Urutan</label>
            <input type="number" name="order" value="{{ old('order', $portfolio->order) }}" class="w-full px-4 py-3 bg-dark border border-primary/30 rounded-lg text-light placeholder-gray-400 focus:outline-none focus:border-primary transition-colors duration-300">
        </div>
    </div>
    <div class="flex items-center gap-3">
        <input type="checkbox" name="featured" id="featured" class="form-checkbox h-5 w-5 text-primary rounded focus:ring-primary" {{ old('featured', $portfolio->featured) ? 'checked' : '' }}>
        <label for="featured" class="text-light font-semibold">Featured Project</label>
    </div>
    <div class="flex gap-4 mt-8">
        <button type="submit" class="px-8 py-3 bg-gradient-to-r from-primary to-secondary text-dark font-bold rounded-lg hover:shadow-lg transition-all duration-300 hover:scale-105">
            <i class="fas fa-save mr-2"></i>Simpan
        </button>
        <a href="{{ route('admin.portfolio.index') }}" class="px-8 py-3 bg-dark border border-primary/30 text-primary font-bold rounded-lg hover:bg-primary hover:text-dark transition-all duration-300 hover:scale-105">
            <i class="fas fa-arrow-left mr-2"></i>Kembali
        </a>
    </div>
</form>
@endsection
