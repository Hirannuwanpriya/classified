<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Advertisement extends Model
{
    protected $fillable = [
        'title',
        'content',
        'opening_hours',
        'location',
        'website_url',
        'status',
        'published_at',
        'modified_at'
    ];

    //cast
    protected $casts = [
        'published_at' => 'datetime',
        'modified_at' => 'datetime',
        'status' => 'integer'
    ];
}
