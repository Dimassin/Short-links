<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Link extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'original_url', 'short_url'];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function linkStatistics(): HasMany
    {
        return $this->hasMany(LinkStatistic::class);
    }

    public function getShortUrl(): string
    {
        return url($this->short_url);
    }


}
