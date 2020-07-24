<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EventTable extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function table()
    {
        return $this->belongsTo(Table::class);
    }
    public function event()
    {
        return $this->belongsTo(Event::class);
    }
}
