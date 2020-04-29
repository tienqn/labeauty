<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Repositories\Frontend\SliderRepository;
/**
 * Class HomeController.
 */
class HomeController extends Controller
{
    /**
     * @var SliderRepository
     */
    protected $sliderRepository;

    /**
     * HomeController constructor.
     *
     * @param SliderRepository $sliderRepository
     */
    public function __construct(SliderRepository $sliderRepository)
    {
        $this->sliderRepository = $sliderRepository;
	}
		
    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {
		return view('frontend.index')
			->withSliders($this->sliderRepository->getForHome());
	}
}
