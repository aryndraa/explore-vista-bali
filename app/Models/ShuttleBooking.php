<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShuttleBooking extends Model
{
    /** @use HasFactory<\Database\Factories\ShuttleBookingFactory> */
    use HasFactory;

    protected $fillable = [
        'shuttle_id',
        'customer_name',
        'customer_phone',
        'customer_email',
        'booking_date',
        'pickup_time',
        'people_amount',
        'from',
        'to',
        'vehicle_id',
        'package_id',
        'status',
    ];
}
