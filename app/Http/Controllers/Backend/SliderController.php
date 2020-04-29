<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\Slider\ManageSliderRequest;
use App\Http\Requests\Backend\Slider\UpdateSliderRequest;
use App\Repositories\Backend\SliderRepository;
use App\Models\Slider\LbSlider;

/**
 * Class SliderController.
 */
class SliderController extends Controller
{
    /**
     * @var SliderRepository
     */
    protected $sliderRepository;

    /**
     * SliderController constructor.
     *
     * @param SliderRepository $sliderRepository
     */
    public function __construct(SliderRepository $sliderRepository)
    {
        $this->sliderRepository = $sliderRepository;
    }

    /**
     * @param ManageSliderRequest $request
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(ManageSliderRequest $request)
    {
        return view('backend.slider.index')
            ->withSliders($this->sliderRepository->getPaginated(10, 'id', 'asc'));
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
