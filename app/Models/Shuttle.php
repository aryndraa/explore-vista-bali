<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

/**
 * @property int $id
 * @property string $name
 * @property string $description
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection<int, \Spatie\MediaLibrary\MediaCollections\Models\Media> $media
 * @property-read int|null $media_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\ShuttleVehicle> $vehicles
 * @property-read int|null $vehicles_count
 * @method static \Database\Factories\ShuttleFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Shuttle newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Shuttle newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Shuttle onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Shuttle query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Shuttle whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Shuttle whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Shuttle whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Shuttle whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Shuttle whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Shuttle whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Shuttle withTrashed(bool $withTrashed = true)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Shuttle withoutTrashed()
 * @mixin \Eloquent
 */
class Shuttle extends Model implements HasMedia
{
    /** @use HasFactory<\Database\Factories\ShuttleFactory> */
    use HasFactory, SoftDeletes, InteractsWithMedia;

    protected $fillable = [
        'name',
        'description',
    ];

    public function vehicles(): HasMany
    {
        return $this->hasMany(ShuttleVehicle::class);
    }
}
