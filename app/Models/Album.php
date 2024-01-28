<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Album extends Model
{
    use HasFactory;

    // fillable array
    protected $fillable = [
        'title',
        'image',
        'release_date',
        'description',
    ];

    public function artist()
    {
        return $this->belongsTo(Artist::class);
    }

    public function posts(): HasMany
    {
        return $this->hasMany(Post::class);
    }
}
