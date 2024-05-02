<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }


    public function like_users()
    {
        return $this->belongsToMany(Like_user::class, "Like_user");
    }

    public function bookmark_users()
    {
        return $this->belongsToMany(Like_user::class, "Bookmark_user");
    }

    public function tag_posts()
    {
        return $this->belongsToMany(Like_user::class, "Tag_post");
    }

    public function link_posts()
    {
        return $this->belongsToMany(Like_user::class, "Link_post");
    }


    protected $fillable = ['image'];


}

