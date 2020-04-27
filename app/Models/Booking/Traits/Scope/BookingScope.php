<?php

namespace App\Models\Booking\Traits\Scope;

/**
 * Class BookingScope.
 */
trait BookingScope
{
    /**
     * @param $query
     *
     * @return mixed
     */
    public function scopeWaiting($query)
    {
        return $query->where('status', 'waiting');
	}
	
    /**
     * @param $query
     *
     * @return mixed
     */
    public function scopeCalled($query)
    {
        return $query->where('status', 'called');
	}
	
    /**
     * @param $query
     *
     * @return mixed
     */
    public function scopeProcessing($query)
    {
        return $query->where('status', 'processing');
	}
	
    /**
     * @param $query
     *
     * @return mixed
     */
    public function scopeCompleted($query)
    {
        return $query->where('status', 'completed');
	}
	
    /**
     * @param $query
     *
     * @return mixed
     */
    public function scopeReject($query)
    {
        return $query->where('status', 'reject');
	}
}
