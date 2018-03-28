<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dream extends Model
{
    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function toArray()
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'body' => $this->body,
        ];
    }
}
