<?php

namespace App;

class City extends Model
{
    public function dreams()
    {
        return $this->hasMany(Dream::class);
    }


}
