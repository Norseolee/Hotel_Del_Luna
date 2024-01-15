<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticatableTrait;

class Guest extends Model implements Authenticatable
{
    use AuthenticatableTrait;

    protected $table = 'guests';
    protected $primaryKey = 'guest_id';
    public $timestamps = false;

    protected $hidden = [
        'password'
    ];

    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'password',
        'address'
    ];

}