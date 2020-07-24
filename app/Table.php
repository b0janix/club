<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Table extends Model
{
    public function eventTables()
    {
        return $this->hasMany(EventTable::class);
    }
}
