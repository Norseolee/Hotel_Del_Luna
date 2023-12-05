<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ReservedRoom
 * 
 * @property int $reserved_room_id
 * @property int $room_id
 * @property int $guest_id
 * @property int $reservation_id
 *
 * @package App\Models
 */
class ReservedRoom extends Model
{
	protected $table = 'reserved_rooms';
	protected $primaryKey = 'reserved_room_id';
	public $timestamps = false;

	protected $casts = [
		'room_id' => 'int',
		'guest_id' => 'int',
		'reservation_id' => 'int'
	];

	protected $fillable = [
		'room_id',
		'guest_id',
		'reservation_id'
	];
}
