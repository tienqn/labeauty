<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\Booking\ManageBookingRequest;
use App\Repositories\Backend\BookingRepository;

/**
 * Class BookingStatusController.
 */
class BookingStatusController extends Controller
{
    /**
     * @var BookingRepository
     */
    protected $bookingRepository;

    /**
     * @param BookingRepository $bookingRepository
     */
    public function __construct(BookingRepository $bookingRepository)
    {
        $this->bookingRepository = $bookingRepository;
    }

    /**
     * @param ManageBookingRequest $request
     *
     * @return mixed
     */
    public function getWaiting(ManageBookingRequest $request)
    {
        return view('backend.booking.waiting')
            ->withBookings($this->bookingRepository->getWaitingPaginated(10, 'id', 'asc'));
    }

    /**
     * @param ManageBookingRequest $request
     *
     * @return mixed
     */
    public function getCalled(ManageBookingRequest $request)
    {
        return view('backend.booking.called')
            ->withBookings($this->bookingRepository->getCalledPaginated(10, 'id', 'asc'));
    }

    /**
     * @param ManageBookingRequest $request
     *
     * @return mixed
     */
    public function getProcessing(ManageBookingRequest $request)
    {
        return view('backend.booking.processing')
            ->withBookings($this->bookingRepository->getProcessingPaginated(10, 'id', 'asc'));
    }

    /**
     * @param ManageBookingRequest $request
     *
     * @return mixed
     */
    public function getCompleted(ManageBookingRequest $request)
    {
        return view('backend.booking.completed')
            ->withBookings($this->bookingRepository->getCompletedPaginated(10, 'id', 'asc'));
    }

    /**
     * @param ManageBookingRequest $request
     *
     * @return mixed
     */
    public function getReject(ManageBookingRequest $request)
    {
        return view('backend.booking.reject')
            ->withBookings($this->bookingRepository->getRejectPaginated(10, 'id', 'asc'));
    }
}
