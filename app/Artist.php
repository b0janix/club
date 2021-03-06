<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    public function events()
    {
        return $this->hasMany(Event::class);
    }
}
