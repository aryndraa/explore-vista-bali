<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @property int $id
 * @property int $package_id
 * @property int $place_id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Package $package
 * @property-read \App\Models\Place $place
 * @method static \Database\Factories\PackageDestinationFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PackageDestination newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PackageDestination newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PackageDestination query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PackageDestination whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PackageDestination whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PackageDestination whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PackageDestination wherePackageId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PackageDestination wherePlaceId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PackageDestination whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class PackageDestination extends Model
{
    /** @use HasFactory<\Database\Factories\PackageDestinationFactory> */
    use HasFactory;

    protected $fillable = [
        'package_id',
        'place_id',
        'name'
    ];

     protected $casts = [
        'sort_order' => 'integer',
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
