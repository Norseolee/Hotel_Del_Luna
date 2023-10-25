<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guest extends Model
{
    use HasFactory;

    protected $primaryKey = 'guest_id';

    public function invoice_guests()
    {
        return $this->hasMany(Invoice_guest::class);
    }

    public function reserved_room()
    {
        return $this->hasMany(Reserved_room::class);
    }

    public function reservation()
    {
        return $this->belongsTo(Reservation::class);
    }
}