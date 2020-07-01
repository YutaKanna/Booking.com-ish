<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;

class RoomType extends Model
{
    use SoftDeletes;

    public $table = 'room_types';

    public function rooms()
    {
        return $this->hasMany(Room::class, 'room_type_id', 'id');
    }
}
