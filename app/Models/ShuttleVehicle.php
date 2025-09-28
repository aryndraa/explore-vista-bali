<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

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
