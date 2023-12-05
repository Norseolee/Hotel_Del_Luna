<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class InvoiceGuest
 * 
 * @property int $invoice_guest_id
 * @property int $guest_id
 * @property int $reservation_id
 * @property float $invoice_amount
 * @property Carbon $ts_issued
 * @property Carbon|null $ts_paid
 * @property Carbon|null $ts_canceled
 *
 * @package App\Models
 */
class InvoiceGuest extends Model
{
	protected $table = 'invoice_guests';
	protected $primaryKey = 'invoice_guest_id';
	public $timestamps = false;

	protected $casts = [
		'guest_id' => 'int',
		'reservation_id' => 'int',
		'invoice_amount' => 'float',
		'ts_issued' => 'datetime',
		'ts_paid' => 'datetime',
		'ts_canceled' => 'datetime'
	];

	protected $fillable = [
		'guest_id',
		'reservation_id',
		'invoice_amount',
		'ts_issued',
		'ts_paid',
		'ts_canceled'
	];
}
