<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Link_post extends Model
{
    use HasFactory;


    public function links(): HasMany
    {
        return $this->hasMany(Tag::class);
    }

    public function posts(): HasMany
    {
        return $this->hasMany(Post::class);
    }
}
