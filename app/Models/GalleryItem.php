<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
use Spatie\Translatable\HasTranslations;

class GalleryItem extends Model
{
    use HasTranslations;
    use HasSlug;

    public $translatable = ['title', 'short_content', 'content'];

    protected $fillable = [
        'gallery_id',
        'slug',
        'title',
        'short_content',
        'image',

    ];

    public function getSlugOptions() : SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('title')
            ->saveSlugsTo('slug');
    }
}
