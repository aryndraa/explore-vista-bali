<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class TourBooking extends Model
{
    /** @use HasFactory<\Database\Factories\TourBookingFactory> */
    use HasFactory;

    protected $fillable = [
        'package_id',
        'customer_name',
        'customer_phone',
        'customer_email',
        'booking_date',
        'people_amount',
        'status',
    ];

    public function package(): BelongsTo
    {
        return $this->belongsTo(Package::class);
    }
}
