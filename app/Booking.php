<?php

namespace App;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    public function customer()
    {
        return $this->belongsTo(Customer::class, 'customer_id')->withTrashed();
    }

    public function room()
    {
        return $this->belongsTo(Room::class, 'room_id')->withTrashed();
    }
}
