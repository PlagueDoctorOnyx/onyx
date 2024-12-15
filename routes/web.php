<?php

use App\Models\Thread;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/forum', function () {
    return view('forum/forumOverview');
});

Route::get('/forum/stories', function () {
    return view('forum/forumStories', [
        'data' => Thread::get()
    ]);
});
