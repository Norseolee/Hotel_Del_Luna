<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoomGallary extends Model
{
    protected $table = 'room_gallary';
    protected $primaryKey = 'room_gallary_id';
    public $timestamps = false;

    protected $fillable = [
        'room_type_id',
        'room_picture',
    ];

    // Define the relationship to room_type
    public function roomType()
    {
        return $this->belongsTo(RoomType::class, 'room_type_id');
    }
}
