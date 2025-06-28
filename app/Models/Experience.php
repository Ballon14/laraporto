<?php

namespace App\Models;

use MongoDB\Laravel\Eloquent\Model;

class Experience extends Model
{
    protected $connection = 'mongodb';
    protected $collection = 'experiences';

    protected $fillable = [
        'title',
        'company',
        'description',
        'start_date',
        'end_date',
        'current',
        'technologies',
        'order'
    ];

    protected $casts = [
        'technologies' => 'array',
        'current' => 'boolean',
        'start_date' => 'date',
        'end_date' => 'date',
        'order' => 'integer'
    ];
}
