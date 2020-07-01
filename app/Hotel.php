<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Hotel extends Model
{
    public function rooms()
    {
        return $this->hasMany(Room::class, 'hotel_id', 'id');
    }
}
