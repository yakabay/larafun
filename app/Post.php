<?php

namespace App;

class Post extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function addComment($body)
    {
        Comment::create([
            'body' => $body,
            'post_id' => $this->id,
            'user_id' =>auth()->id()
        ]);
    }
}
