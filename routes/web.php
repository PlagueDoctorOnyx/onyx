<?php

use App\Http\Controllers\ForumController;
use App\Http\Controllers\ProfileController;
use App\Models\Thread;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

$currentUser = Auth::id();

Route::get('/', function () {
    return view('welcome');
});

// Forum
Route::get('/forum', function () {
    return view('forum/forumOverview');
});

Route::get('/forum/stories', function () {
    return view('forum/forumStories', [
        'data' => Thread::get()
    ]);
});

Route::controller(ForumController::class)->group(function () {
    Route::get('/forum/stories/{id}', 'showStory');
});


// Profil
Route::get('/profile', function () {
    return view('');
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
