<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PackagePlace extends Model
{
    /** @use HasFactory<\Database\Factories\PackagePlaceFactory> */
    use HasFactory;

    protected $fillable = [
        'package_id',
        'place_id'
    ];

    public function package(): BelongsTo 
    {
        return $this->belongsTo(Package::class);
    }

    public function places(): BelongsTo
    {
        return $this->belongsTo(Place::class);
    }
}
