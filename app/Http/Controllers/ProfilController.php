<?php

namespace App\Http\Controllers;

use App\Models\Thread;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;

class ProfilController extends Controller
{
    public function profile(): View
    {
        if (Auth::check()) {
            return view('profile.main', []);
        } else {
            redirect('/');
        }
    }
}