<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @property int $id
 * @property int $shuttle_id
 * @property int $vehicle_id
 * @property float|null $start_price
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Shuttle $shuttle
 * @property-read \App\Models\Vehicle $vehicle
 * @method static \Database\Factories\ShuttleVehicleFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ShuttleVehicle newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ShuttleVehicle newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ShuttleVehicle query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ShuttleVehicle whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ShuttleVehicle whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ShuttleVehicle whereShuttleId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ShuttleVehicle whereStartPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ShuttleVehicle whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ShuttleVehicle whereVehicleId($value)
 * @mixin \Eloquent
 */
class ShuttleVehicle extends Model
{
    /** @use HasFactory<\Database\Factories\ShuttleVehicleFactory> */
    use HasFactory;

    protected $fillable = [
        'shuttle_id',
        'vehicle_id',
        'start_price',
    ];

    public function vehicle(): BelongsTo
    {
        return $this->belongsTo(Vehicle::class);
    }

    public function shuttle(): BelongsTo
    {
        return $this->belongsTo(Shuttle::class);
    }
}
