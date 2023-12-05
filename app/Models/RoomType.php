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
 * @property int $max_capacity
 * @property float $price
 * @property string|null $description
 * @property string $view
 * @property string $bath_amenitites
 * @property string $sqm
 * @property string $layout
 *
 * @package App\Models
 */
class RoomType extends Model
{
	protected $table = 'room_types';
	protected $primaryKey = 'room_type_id';
	public $timestamps = false;

	protected $casts = [
		'max_capacity' => 'int',
		'price' => 'float'
	];

	protected $fillable = [
		'max_capacity',
		'price',
		'description',
		'view',
		'bath_amenitites',
		'sqm',
		'layout'
	];
}
