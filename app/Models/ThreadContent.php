<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ThreadContent extends Model
{
    protected $table = 'threadcontent';
    protected $primaryKey = 'id';

    public function thread(): BelongsTo
    {
        return $this->belongsTo(Thread::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(user::class);
    }

    // Methoden

    public function getCreatorName() 
    {
        return $this->user->name;
    }
}
