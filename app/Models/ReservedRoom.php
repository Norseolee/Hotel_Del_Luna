<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
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
	use HasFactory;

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

    public function reservation()
    {
        return $this->belongsTo(Reservation::class);
    }

    public function guest()
    {
        return $this->belongsTo(Guest::class);
    }

    public function room()
    {
        return $this->belongsTo(Room::class);
    }
}
