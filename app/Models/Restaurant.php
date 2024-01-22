<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Restaurant
 *
 * @property int $restaurant_id
 * @property string $restaurant_name
 * @property string|null $time_open
 * @property string|null $time_close
 * @property string|null $restaurant_type
 * @property string|null $contact_email
 * @property string|null $contact_number
 * @property string $description
 * @property string|null $location
 * @property string $picture
 *
 * @package App\Models
 */
class Restaurant extends Model
{
	protected $table = 'restaurants';
	protected $primaryKey = 'restaurant_id';
	public $timestamps = false;

	protected $fillable = [
		'restaurant_name',
		'time_open',
		'time_close',
		'restaurant_type',
		'contact_email',
		'contact_number',
		'description',
		'location',
		'picture'
	];
}
