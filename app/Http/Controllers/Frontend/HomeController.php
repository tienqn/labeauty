<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

/**
 * Class HomeController.
 */
class HomeController extends Controller
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
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('frontend.index');
	}
	
	/**
	 * bookAppoinment
	 */
	public function bookAppoinment(Request $request)
	{
        $this->bookingRepository->create($request->only(
            'service_id',
            'booking_date',
            'booking_time',
            'name',
            'email',
            'phone_number',
            'request'
        ));

		return response()->json(true);
	}
}
