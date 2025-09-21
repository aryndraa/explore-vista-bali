<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Package extends Model
{
    /** @use HasFactory<\Database\Factories\PackageFactory> */
    use HasFactory;

    protected $fillable = [
        'tour_id',
        'name',
        'description',
        'start_time',
        'price',
        'notes'
    ];

    public function tour()
    {
        return $this->belongsTo(Tour::class);
    }

    public function features (): HasMany
    {
        return $this->hasMany(PackageFeature::class);
    }

    public function activities(): HasMany
    {
        return $this->hasMany(PackageActivity::class);
    }

    public function bookings(): HasMany
    {
        return $this->hasMany(TourBooking::class);
    }
}
