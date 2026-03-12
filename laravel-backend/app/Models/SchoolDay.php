<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SchoolDay extends Model
{
    protected $fillable = ['date', 'attendance', 'holiday'];

    protected $casts = [
        'date'    => 'date',
        'holiday' => 'boolean',
    ];
}