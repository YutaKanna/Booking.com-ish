<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Room extends Model
{
    public $table = 'rooms';

    public function roomType()
    {
        return $this->belongsTo(RoomType::class, 'room_type_id');
    }

     public function hotel()
    {
        return $this->belongsTo(Hotel::class, 'hotel_id');
    }
}
