<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Reservation
 * 
 * @property int $reservation_id
 * @property Carbon $Check-In
 * @property Carbon $Check-Out
 * @property Carbon $ts_created
 * @property Carbon|null $ts_updated
 * @property float|null $discount_percent
 * @property float|null $total_price
 * @property int $guest_id
 *
 * @package App\Models
 */
class Reservation extends Model
{
	protected $table = 'reservations';
	protected $primaryKey = 'reservation_id';
	public $timestamps = false;

	protected $casts = [
		'Check-In' => 'datetime',
		'Check-Out' => 'datetime',
		'ts_created' => 'datetime',
		'ts_updated' => 'datetime',
		'discount_percent' => 'float',
		'total_price' => 'float',
		'guest_id' => 'int'
	];

	protected $fillable = [
		'Check-In',
		'Check-Out',
		'ts_created',
		'ts_updated',
		'discount_percent',
		'total_price',
		'guest_id'
	];
}
