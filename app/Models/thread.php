<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Collection as SupportCollection;

class Thread extends Model
{
    protected $table = 'thread';
    protected $primaryKey = 'id';

    // Relationen
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function comments(): HasMany
    {
        return $this->hasMany(ThreadContent::class, 'thread_id');
    }

    public function tags(): HasMany
    {
        return $this->hasMany(tags::class, 'thread_id');
    }

    // Methoden
    public function getCreatorName()
    {
        return $this->user->name;
    }

    public function getThreadContent(): Collection
    {
        return $this->comments()->get();
    }

    public function getCommentCount(): int
    {
        $comments = $this->comments()->get();
        return count($comments);
    }

    public function getTags(): Collection
    {
        return $this->tags()->get();
    }

}
