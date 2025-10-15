<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

/**
 * @property int $id
 * @property int $tour_id
 * @property string $name
 * @property string $description
 * @property string $start_time
 * @property float $price
 * @property string|null $notes
 * @property int $is_active
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\PackageActivity> $activities
 * @property-read int|null $activities_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\TourBooking> $bookings
 * @property-read int|null $bookings_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\PackageDestination> $destinations
 * @property-read int|null $destinations_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\PackageFeature> $features
 * @property-read int|null $features_count
 * @property-read \Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection<int, \Spatie\MediaLibrary\MediaCollections\Models\Media> $media
 * @property-read int|null $media_count
 * @property-read \App\Models\Tour $tour
 * @method static \Database\Factories\PackageFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Package newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Package newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Package query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Package whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Package whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Package whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Package whereIsActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Package whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Package whereNotes($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Package wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Package whereStartTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Package whereTourId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Package whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Package extends Model implements HasMedia
{
    /** @use HasFactory<\Database\Factories\PackageFactory> */
    use HasFactory, InteractsWithMedia;

    protected $fillable = [
        'tour_id',
        'name',
        'description',
        'start_time',
        'price',
        'notes',
        'is_active'
    ];

    public function registerMediaCollections(): void
    {
        $this
            ->addMediaCollection('packages')
            ->useDisk('public');
    }


    public function registerMediaConversions(?Media $media = null): void
    {
        $this
            ->addMediaConversion('optimized')
            ->format('webp')
            ->quality(70)
            ->width(1280) 
            ->height(720) 
            ->sharpen(10)
            ->performOnCollections('packages')
            ->nonQueued(); 

         $this
            ->addMediaConversion('optimized')
            ->format('webp')
            ->quality(70)
            ->width(1280) 
            ->height(720) 
            ->sharpen(10)
            ->performOnCollections('cover')
            ->nonQueued(); 
    }

    public function tour(): BelongsTo
    {
        return $this->belongsTo(Tour::class);
    }

    public function destinations(): HasMany
    {
        return $this->hasMany(PackageDestination::class);
    }

    public function bookings(): HasMany
    {
        return $this->hasMany(TourBooking::class);
    }
}
