<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room_type extends Model
{
    use HasFactory;

    protected $primaryKey = "room_type_id";

    public function room()
    {
        return $this->belongsTo(Room::class);
    }
}
