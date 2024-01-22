<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KeyFeature extends Model
{
    use HasFactory;

    protected $table = 'key_features';
    protected $primaryKey = 'key_feature_id';

    protected $fillable = [
        'room_type_id',
        'key_feature_picture',
        'key_feature_description',
    ];

    public function roomType()
    {
        return $this->belongsTo(RoomType::class, 'room_type_id');
    }

}
