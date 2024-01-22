<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Amenity extends Model
{
    protected $table = 'amenities';
    protected $primaryKey = 'amenities_id';

    use HasFactory;

    protected $fillable = [
        'room_type_id',
        'amenities_type',
        'amenities_list',
    ];

    public function roomType()
    {
        return $this->belongsTo(RoomType::class, 'room_type_id');
    }
}
