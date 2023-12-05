<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class RestaurantGallary
 * 
 * @property int $restaurant_gallaries_id
 * @property int $restaurant_id
 * @property string $picture
 *
 * @package App\Models
 */
class RestaurantGallary extends Model
{
	protected $table = 'restaurant_gallaries';
	protected $primaryKey = 'restaurant_gallaries_id';
	public $timestamps = false;

	protected $casts = [
		'restaurant_id' => 'int'
	];

	protected $fillable = [
		'restaurant_id',
		'picture'
	];
}
