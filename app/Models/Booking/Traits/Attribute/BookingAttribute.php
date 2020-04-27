<?php

namespace App\Models\Booking\Traits\Attribute;

/**
 * Trait BookingAttribute.
 */
trait BookingAttribute
{
    /**
     * @param 
     */
    public function getBookingDateFormatAttribute()
    {
        return date("d-m-Y", strtotime($this->booking_date)); 
	}
	
    /**
     * @param 
     */
    public function getStatusLabelAttribute()
    {
		$statusBadge = null;

		switch ($this->status) {
			case "waiting":
				$statusBadge = '<span class="badge badge-primary">' . __('strings.backend.access.booking.status.waiting') . '</span>';
				break;
			case "called":
				$statusBadge = '<span class="badge badge-secondary">' . __('strings.backend.access.booking.status.called') . '</span>';
				break;
			case "processing":
				$statusBadge = '<span class="badge badge-success">' . __('strings.backend.access.booking.status.processing') . '</span>';
				break;
			case "completed":
				$statusBadge = '<span class="badge badge-warning">' . __('strings.backend.access.booking.status.completed') . '</span>';
				break;
			case "reject":
				$statusBadge = '<span class="badge badge-danger">' . __('strings.backend.access.booking.status.reject') . '</span>';
				break;
			default:
		}

		return $statusBadge;
    }
}
