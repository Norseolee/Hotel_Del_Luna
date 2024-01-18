<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Room
 * 
 * @property int $room_id
 * @property int $room_number
 * @property string|null $room_name
 * @property string $status
 * @property int $room_type_id
 *
 * @package App\Models
 */
class Room extends Model
{
	protected $table = 'rooms';
	protected $primaryKey = 'room_id';
	public $timestamps = false;
	use HasFactory;

	protected $casts = [
		'room_number' => 'int',
		'room_type_id' => 'int'
	];

	protected $fillable = [
		'room_number',
		'room_name',
		'status',
		'room_type_id'
	];
}
