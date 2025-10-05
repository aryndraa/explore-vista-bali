<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @property int $id
 * @property int $package_id
 * @property string $name
 * @property float $additional_price
 * @property string $duration
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Package $package
 * @method static \Database\Factories\PackageActivityFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PackageActivity newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PackageActivity newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PackageActivity query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PackageActivity whereAdditionalPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PackageActivity whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PackageActivity whereDuration($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PackageActivity whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PackageActivity whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PackageActivity wherePackageId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PackageActivity whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class PackageActivity extends Model
{
    /** @use HasFactory<\Database\Factories\PackageActivityFactory> */
    use HasFactory;

    protected $fillable = [
        'package_id', 
        'name', 
        'duration', 
        'additional_price'
    ];

    public function package(): BelongsTo
    {
        return $this->belongsTo(Package::class);
    }
}
