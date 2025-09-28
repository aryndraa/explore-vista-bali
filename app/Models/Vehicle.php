<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Vehicle extends Model implements HasMedia
{
    /** @use HasFactory<\Database\Factories\VehicleFactory> */
    use HasFactory, InteractsWithMedia;

    protected $fillable = [
        'name',
        'type',
        'person',
        'price_per_day',
        'is_active',
    ];

    public function shuttle(): HasMany
    {
        return $this->hasMany(Shuttle::class);
    }
}
