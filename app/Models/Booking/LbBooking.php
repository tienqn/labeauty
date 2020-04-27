<?php

namespace App\Models\Booking;

use Illuminate\Database\Eloquent\Model;
use App\Models\Booking\Traits\Relationship\BookingRelationship;
use App\Models\Booking\Traits\Method\BookingMethod;
use App\Models\Booking\Traits\Attribute\BookingAttribute;
use App\Models\Booking\Traits\Scope\BookingScope;

class LbBooking extends Model
{
	use BookingRelationship,
		BookingMethod,
		BookingAttribute,
		BookingScope;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'lb_bookings';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'service_id',
        'booking_date',
        'booking_time',
        'name',
        'email',
        'phone_number',
        'request',
        'is_read',
        'status'
    ];
}