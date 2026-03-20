<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PageSeo extends Model
{
    use HasFactory;

    protected $fillable = [
        'page_path',
        'seo_title',
        'seo_description',
        'og_title',
        'og_description',
        'og_image',
    ];
}
