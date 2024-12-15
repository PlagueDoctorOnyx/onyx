<?php

use App\Http\Controllers\ForumController;
use App\Models\Thread;
use Illuminate\Support\Facades\Route;


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
    return view('profile/main');
});


