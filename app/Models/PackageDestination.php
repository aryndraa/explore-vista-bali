<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PackageDestination extends Model
{
    /** @use HasFactory<\Database\Factories\PackageDestinationFactory> */
    use HasFactory;

    protected $fillable = [
        'package_id',
        'place_id',
        'name'
    ];

    public function package(): BelongsTo
    {
        return $this->belongsTo(Package::class);
    }

    public function place(): BelongsTo
    {
        return $this->belongsTo(Place::class);
    }
}
