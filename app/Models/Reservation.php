<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $primaryKey = 'reservation_id'

    public function guest()
    {
        return $this->hasMany(Guest::class);
    }
    
    public function reserved_guest()
    {
        return $this->hasMany(Reserved_room::class);
    }

    public function invoice_guest()
    {
        return $this->hasMany(Invoice_guest::class);
    }
}