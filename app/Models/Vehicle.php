<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

/**
 * @property int $id
 * @property string $name
 * @property int $person
 * @property float|null $price_per_day
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $type
 * @property int $is_active
 * @property-read \Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection<int, \Spatie\MediaLibrary\MediaCollections\Models\Media> $media
 * @property-read int|null $media_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Shuttle> $shuttle
 * @property-read int|null $shuttle_count
 * @method static \Database\Factories\VehicleFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Vehicle newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Vehicle newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Vehicle query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Vehicle whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Vehicle whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Vehicle whereIsActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Vehicle whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Vehicle wherePerson($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Vehicle wherePricePerDay($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Vehicle whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Vehicle whereUpdatedAt($value)
 * @mixin \Eloquent
 */
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

    public function shuttleBookings(): HasMany
    {
        return $this->hasMany(ShuttleBooking::class);
    }

    public function rentals(): HasMany
    {
        return $this->hasMany(VehicleRental::class);
    }
}
