<?php

namespace App\Http\Controllers\Frontend\Booking;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\Frontend\BookingRepository;

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
     * HomeController constructor.
     *
     * @param BookingRepository $bookingRepository
     */
    public function __construct(BookingRepository $bookingRepository)
    {
        $this->bookingRepository = $bookingRepository;
	}
	
	/**
	 * bookAppoinment
	 */
	public function book(Request $request)
	{
		dd(1);
        // $this->bookingRepository->create($request->only(
        //     'service_id',
        //     'booking_date',
        //     'booking_time',
        //     'name',
        //     'email',
        //     'phone_number',
        //     'request'
        // ));

		// return response()->json(true);
	}
}
