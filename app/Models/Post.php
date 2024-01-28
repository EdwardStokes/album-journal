<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Post extends Model
{
    use HasFactory;

    // define fillable array
    protected $fillable = [
        'user_id',
        'album_id',
        'content',
    ];

    // cast created_at and updated_at
    protected $casts = [
        'created_at' => 'datetime:d-m-Y',
        'updated_at' => 'datetime:d-m-Y',
    ];

    // define album relationship
    public function album()
    {
        return $this->belongsTo(Album::class);
    }
}
