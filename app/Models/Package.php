<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Package extends Model implements HasMedia
{
    /** @use HasFactory<\Database\Factories\PackageFactory> */
    use HasFactory, InteractsWithMedia;

    protected $fillable = [
        'tour_id',
        'name',
        'description',
        'start_time',
        'price',
        'notes',
        'is_active'
    ];

    public function tour(): BelongsTo
    {
        return $this->belongsTo(Tour::class);
    }

    public function places(): HasMany
    {
        return $this->hasMany(PackagePlace::class);
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
