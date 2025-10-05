<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @property int $id
 * @property int $package_id
 * @property string $customer_name
 * @property string $customer_phone
 * @property string $customer_email
 * @property string $booking_date
 * @property int $people_amount
 * @property string|null $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Package $package
 * @method static \Database\Factories\TourBookingFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TourBooking newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TourBooking newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TourBooking query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TourBooking whereBookingDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TourBooking whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TourBooking whereCustomerEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TourBooking whereCustomerName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TourBooking whereCustomerPhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TourBooking whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TourBooking wherePackageId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TourBooking wherePeopleAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TourBooking whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TourBooking whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class TourBooking extends Model
{
    /** @use HasFactory<\Database\Factories\TourBookingFactory> */
    use HasFactory;

    protected $fillable = [
        'package_id',
        'customer_name',
        'customer_phone',
        'customer_email',
        'address',
        'booking_date',
        'people_amount',
        'status',
        'agent_id'
    ];

    public function package(): BelongsTo
    {
        return $this->belongsTo(Package::class);
    }

    public function agent(): BelongsTo
    {
        return $this->belongsTo(Agent::class);
    }
}
