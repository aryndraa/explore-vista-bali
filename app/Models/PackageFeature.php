<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @property int $id
 * @property int $package_id
 * @property string $name
 * @property int $is_include
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Package $package
 * @method static \Database\Factories\PackageFeatureFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PackageFeature newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PackageFeature newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PackageFeature query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PackageFeature whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PackageFeature whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PackageFeature whereIsInclude($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PackageFeature whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PackageFeature wherePackageId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PackageFeature whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class PackageFeature extends Model
{
    /** @use HasFactory<\Database\Factories\PackageFeatureFactory> */
    use HasFactory;

    protected $fillable = [
        'package_id',
        "name",
        'is_include'
    ];

    public function package(): BelongsTo
    {
        return $this->belongsTo(Package::class);
    }
}
