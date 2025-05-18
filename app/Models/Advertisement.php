<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Advertisement extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'category_id',
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

    //boot
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            // set slug using title value
            $model->slug = strtolower(str_replace(' ', '-', $model->title));
        });

        static::updating(function ($model) {
            $model->slug = strtolower(str_replace(' ', '-', $model->title));
        });
    }

    //relation with advertisement category
    public function category()
    {
        return $this->belongsTo(AdvertisementCategory::class, 'category_id');
    }
}
