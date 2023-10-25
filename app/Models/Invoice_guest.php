<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice_guest extends Model
{
    use HasFactory;

    protected $primaryKey = 'invoice_guest_id';

    public function guest()
    {
        return $this->belongsTo(Guest::class);
    }
    public function reservation()
    {
        return $this->belongsTo(Reservation::class);
    }
    
}