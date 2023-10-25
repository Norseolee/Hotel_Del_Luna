<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;

    protected $primaryKey = "room_id"

    public function reserved_room()
    {
        return $this->hasMany(Reserved_room::class);
    }

    public function room_type()
    {
        return $this->hasMany(Room_type::class);
    }
}