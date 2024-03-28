<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
    use HasFactory;

    public function link_posts()
    {
        return $this->belongsToMany(Like_user::class, "Link_post");
    }
}
