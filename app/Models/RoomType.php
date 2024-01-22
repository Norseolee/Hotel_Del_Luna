<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class RoomType
 *
 * @property int $room_type_id
 * @property string|null $description
 * @property string $intro_description
 *
 * @package App\Models
 */
class RoomType extends Model
{
	protected $table = 'room_types';
	protected $primaryKey = 'room_type_id';
	public $timestamps = false;

	protected $fillable = [
		'room_name',
		'intro_description',
		'description',
		'terms_and_condition',

	];

	public function room()
    {
        return $this->belongsTo(Room::class);
    }

    public function amenities()
    {
        return $this->hasMany(Amenity::class, 'room_type_id');
    }

    public function keyFeatures()
    {
        return $this->hasMany(KeyFeature::class, 'room_type_id');
    }

    public function roomGallery()
    {
        return $this->hasMany(RoomGallary::class, 'room_type_id');
    }
}
