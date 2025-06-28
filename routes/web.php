<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Models\Skill;
use App\Models\Experience;
use App\Models\Portfolio;

Route::get('/', function () {
    $skills = Skill::all();
    $experiences = Experience::all();
    $portfolios = Portfolio::all();
    return view('portfolio.index', compact('skills', 'experiences', 'portfolios'));
});

Route::get('/dashboard', function () {
    $portfolios = App\Models\Portfolio::orderBy('order', 'asc')->paginate(5, ['*'], 'portfolio_page');
    $skills = App\Models\Skill::orderBy('order', 'asc')->paginate(5, ['*'], 'skill_page');
    $experiences = App\Models\Experience::orderBy('start_date', 'desc')->paginate(5, ['*'], 'experience_page');
    return view('dashboard', compact('portfolios', 'skills', 'experiences'));
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Admin CRUD routes
    Route::resource('admin/portfolio', App\Http\Controllers\Admin\PortfolioController::class, ['as' => 'admin']);
    Route::resource('admin/skill', App\Http\Controllers\Admin\SkillController::class, ['as' => 'admin']);
    Route::resource('admin/experience', App\Http\Controllers\Admin\ExperienceController::class, ['as' => 'admin']);
});

require __DIR__.'/auth.php';
