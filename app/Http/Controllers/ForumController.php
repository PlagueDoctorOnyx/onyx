<?php

namespace App\Http\Controllers;

use App\Models\Thread;
use App\Models\ThreadContent;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class ForumController extends Controller
{
    public function showStory(int $id): View
    {
        return view('forum.forumContent', [
            'content' => Thread::find($id),
        ]);
    }

    public function likes()
    {
        
    }
}
