<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/forum', function () {
    $basepath = "my/onyx/public";
    return view('forum/forumOverview', ["path"=>$basepath]);
});
