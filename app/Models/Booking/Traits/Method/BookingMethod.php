<?php

namespace App\Models\Booking\Traits\Method;

/**
 * Trait BookingMethod.
 */
trait BookingMethod
{
    /**
     * @return mixed
     */
    public function hasNotService()
    {
		if (is_null($this->service) ) {
			return true;
		}

        return false;
    }
}
