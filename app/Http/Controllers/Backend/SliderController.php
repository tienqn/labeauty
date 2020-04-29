<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\Slider\ManageSliderRequest;
use App\Http\Requests\Backend\Slider\UpdateSliderRequest;
use App\Repositories\Backend\SliderRepository;
use App\Models\Slider\LbSlider;
use Illuminate\Http\Request;

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
     * @param ManageSliderRequest $request
     * @param LbSlider         $booking
     *
     * @return mixed
     */
    public function show(ManageSliderRequest $request, LbSlider $slider)
    {

        return view('backend.slider.show')
            ->withSlider($slider)
			->withIsSliderActive(true);
    }

    /**
     * @param UpdateSliderRequest $request
     * @param LbSlider              $slider
     *
     * @throws \App\Exceptions\GeneralException
     * @throws \Throwable
     * @return mixed
     */
    public function update(UpdateSliderRequest $request, LbSlider $slider)
    {
        $this->sliderRepository->update($slider, $request->all());
		if ($request->ajax()) {
			return response()->json(true);
		}

        return redirect()->route('admin.slider.index')->withFlashSuccess(__('alerts.backend.slider.updated'));
    }

    /**
     * @param UpdateSliderRequest $request
     * @param LbSlider              $slider
     *
     * @throws \App\Exceptions\GeneralException
     * @throws \Throwable
     * @return mixed
     */
    public function updateBanner(Request $request, LbSlider $slider)
    {

		$validator = \Illuminate\Support\Facades\Validator::make($request->all(), [
			'background' => 'dimensions:width=1920,height=900',
		]);

		if ($validator->fails()) {    
			return response()->json([
				'error' => true,
				'message' => 'Banner phải có tỉ lệ chính xác 1920 X 900'
			]);
		}

		$imageName = time() . '_' . $request->background->getClientOriginalName();

		$request->background->move(public_path('theme/img'), $imageName);

		$slider->background = 'theme/img/' . $imageName;
		$slider->save();
		
		return response()->json([
			'error' => false,
			]);
    }

    /**
     * @param ManageSliderRequest $request
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showHome(ManageSliderRequest $request)
    {
        return view('backend.slider.show_home')
            ->withSliders($this->sliderRepository->getPaginatedShowHome(10, 'id', 'asc'))
			->withIsSliderActive(true);
    }

    /**
     * @param Request $request
     *
     * @throws \App\Exceptions\GeneralException
     * @throws \Throwable
     * @return mixed
     */
    public function updateOrder(Request $request)
    {
        $this->sliderRepository->updateOrder($request->except(['_token']));

        return redirect()->route('admin.slider.show_home')->withFlashSuccess(__('Sắp xếp banner thành công.'));
    }
}
