<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    use HasFactory;

    // define fillable array
    protected $fillable = [
        'name',
        'dob',
        'biography',
        'image',
    ];
}
