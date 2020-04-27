<?php

namespace App\Models\Booking\Traits\Relationship;

use App\Models\Service\LbService;

/**
 * Class BookingRelationship.
 */
trait BookingRelationship
{
    /**
     * @return mixed
     */
    public function service()
    {
        return $this->belongsTo(LbService::class);
    }
}
