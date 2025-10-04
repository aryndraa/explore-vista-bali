<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @property int $id
 * @property int $shuttle_id
 * @property string $customer_name
 * @property string $customer_phone
 * @property string $customer_email
 * @property string $booking_date
 * @property string $pickup_time
 * @property int $people_amount
 * @property string $from
 * @property string $to
 * @property int $vehicle_id
 * @property int|null $package_id
 * @property string|null $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\ShuttleBookingFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ShuttleBooking newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ShuttleBooking newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ShuttleBooking query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ShuttleBooking whereBookingDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ShuttleBooking whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ShuttleBooking whereCustomerEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ShuttleBooking whereCustomerName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ShuttleBooking whereCustomerPhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ShuttleBooking whereFrom($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ShuttleBooking whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ShuttleBooking wherePackageId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ShuttleBooking wherePeopleAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ShuttleBooking wherePickupTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ShuttleBooking whereShuttleId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ShuttleBooking whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ShuttleBooking whereTo($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ShuttleBooking whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ShuttleBooking whereVehicleId($value)
 * @mixin \Eloquent
 */
class ShuttleBooking extends Model
{
    /** @use HasFactory<\Database\Factories\ShuttleBookingFactory> */
    use HasFactory;

    protected $fillable = [
        'shuttle_id',
        'customer_name',
        'customer_phone',
        'customer_email',
        'booking_date',
        'pickup_time',
        'people_amount',
        'from',
        'to',
        'vehicle_id',
        'package_id',
        'status',
        'agent_id'
    ];

    public function shuttle(): BelongsTo
    {
        return $this->belongsTo(Shuttle::class);
    }

    public function vehicle(): BelongsTo
    {
        return $this->belongsTo(Vehicle::class);
    }

    public function agent(): BelongsTo
    {
        return $this->belongsTo(Agent::class);
    }
}
