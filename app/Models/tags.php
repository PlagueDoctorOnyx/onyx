<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class tags extends Model
{
    protected $table = 'tags';
    protected $primaryKey = 'id';

    public function thread(): BelongsTo
    {
        return $this->belongsTo(Thread::class);
    }

    // Methoden

    public function getCountOfUses(): int
    {
        return count($this->thread()->get());
    }
}
