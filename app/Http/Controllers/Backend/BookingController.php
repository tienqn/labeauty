<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\Booking\ManageBookingRequest;
use App\Http\Requests\Backend\Booking\UpdateBookingRequest;
use App\Repositories\Backend\BookingRepository;
use App\Models\Booking\LbBooking;

/**
 * Class BookingController.
 */
class BookingController extends Controller
{
    /**
     * @var BookingRepository
     */
    protected $bookingRepository;

    /**
     * BookingController constructor.
     *
     * @param BookingRepository $bookingRepository
     */
    public function __construct(BookingRepository $bookingRepository)
    {
        $this->bookingRepository = $bookingRepository;
    }

    /**
     * @param ManageBookingRequest $request
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(ManageBookingRequest $request)
    {
        return view('backend.booking.index')
            ->withBookings($this->bookingRepository->getPaginated(10, 'id', 'asc'));
    }

    /**
     * @param ManageBookingRequest $request
     * @param LbBooking         $booking
     *
     * @return mixed
     */
    public function show(ManageBookingRequest $request, LbBooking $booking)
    {
		if (!$booking->is_read) {
			$booking->is_read = true;
			$booking->save();
		}

        return view('backend.booking.show')
            ->withBooking($booking->load('service'))
			->withIsActive(true);
    }

    /**
     * @param UpdateBookingRequest $request
     * @param LbBooking              $user
     *
     * @throws \App\Exceptions\GeneralException
     * @throws \Throwable
     * @return mixed
     */
    public function update(UpdateBookingRequest $request, LbBooking $booking)
    {
        $this->bookingRepository->update($booking, $request->only(
            'status'
        ));

        return redirect()->route('admin.booking.index')->withFlashSuccess(__('alerts.backend.booking.updated'));
    }
}
