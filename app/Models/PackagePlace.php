<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @property-read \App\Models\Package|null $package
 * @property-read \App\Models\Place|null $place
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PackagePlace newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PackagePlace newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PackagePlace query()
 * @mixin \Eloquent
 */
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

    public function place(): BelongsTo
    {
        return $this->belongsTo(Place::class);
    }
}
