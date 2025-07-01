<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class LinkStatistic extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = ['link_id', 'ip_address', 'created_at'];

    public function link(): BelongsTo
    {
        return $this->belongsTo(Link::class);
    }
}
