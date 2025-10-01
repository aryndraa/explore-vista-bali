<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Package> $packages
 * @property-read int|null $packages_count
 * @method static \Database\Factories\TourFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Tour newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Tour newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Tour onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Tour query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Tour whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Tour whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Tour whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Tour whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Tour whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Tour withTrashed(bool $withTrashed = true)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Tour withoutTrashed()
 * @mixin \Eloquent
 */
class Tour extends Model
{
    /** @use HasFactory<\Database\Factories\TourFactory> */
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name'
    ];

    public function packages()
    {
        return $this->hasMany(Package::class);
    }
}
