<?php
// GuestInformation.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GuestInformation extends Model
{
    protected $table = 'guest_informations';
    protected $primaryKey = 'guest_info_id';
    public $timestamps = true;

    protected $fillable = [
        'guest_id',
        'address1',
        'address2',
        'state',
        'postal_code',
        'country',
        'phone_number',
        'gender',
        'date_of_birth',
    ];

    // Define a relationship with the Guest model
    public function guest()
    {
        return $this->belongsTo(Guest::class);
    }
}
