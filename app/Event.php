<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    public function artist()
    {
        return $this->belongsTo(Artist::class);
    }

    public function eventTables()
    {
        return $this->hasMany(EventTable::class);
    }
}
