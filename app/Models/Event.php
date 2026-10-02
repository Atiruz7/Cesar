<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Event extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'description',
        'video_url',
        'event_date',
        'is_active',
    ];

    protected $casts = [
        'event_date' => 'date',
        'is_active' => 'boolean',
    ];

    public function images(): HasMany
    {
        return $this->hasMany(EventImage::class)->orderBy('order');
    }

    public function getRouteKeyName(): string
    {
        return 'slug';
    }
}