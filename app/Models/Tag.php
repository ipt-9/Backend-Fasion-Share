<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;



    public function tag_posts()
    {
        return $this->belongsToMany(Like_user::class, "Tag_post");
    }
}
