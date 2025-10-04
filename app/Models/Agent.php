<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Agent extends Model implements HasMedia
{
    /** @use HasFactory<\Database\Factories\AgentFactory> */
    use HasFactory, InteractsWithMedia;

    protected $fillable = [
        'name',
        'email',
        'phone',
    ];

    public function tourBooking()
    {
        return $this->hasMany(TourBooking::class);
    }

    public function shuttleBooking(): HasMany
    {
        return $this->hasMany(ShuttleBooking::class);
    }
}
