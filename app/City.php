<?php

namespace App;

class City extends Model
{
    public function dreams()
    {
        return $this->hasMany(Dream::class);
    }

    public function toArray()
    {
        return [
            'name' => $this->name,
            'dreams' => $this->dreams,
            'dreamsCount' => $this->dreams->count(),
        ];
    }
}
