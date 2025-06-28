<?php

namespace App\Models;

use MongoDB\Laravel\Eloquent\Model;
use MongoDB\Laravel\Eloquent\SoftDeletes;

class Portfolio extends Model
{
    use SoftDeletes;

    protected $connection = 'mongodb';
    protected $collection = 'portfolios';

    protected $fillable = [
        'title',
        'description',
        'image',
        'github_url',
        'live_url',
        'technologies',
        'category',
        'featured',
        'order'
    ];

    protected $casts = [
        'technologies' => 'array',
        'featured' => 'boolean',
        'order' => 'integer'
    ];
}
