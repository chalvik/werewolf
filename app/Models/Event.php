<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
use Spatie\Translatable\HasTranslations;

class Event extends Model
{
    use HasTranslations;
    use HasSlug;

    public $translatable = ['title', 'short_content', 'content'];

    protected $fillable = [
        'title',
        'short_content',
        'content',
        'slug',
        'image',
        'seo_title',
        'seo_keywords',
        'seo_description',
    ];

    public function getSlugOptions() : SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('title')
            ->saveSlugsTo('slug');
    }

    public function gallery(): BelongsTo
    {
        return  $this->belongsTo(Gallery::class);
    }
}
