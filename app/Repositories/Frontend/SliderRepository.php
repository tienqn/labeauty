<?php

namespace App\Repositories\Frontend;

use App\Models\Slider\LbSlider;
use Illuminate\Support\Facades\DB;
use App\Repositories\BaseRepository;

/**
 * Class SliderRepository.
 */
class SliderRepository extends BaseRepository
{
    /**
     * SliderRepository constructor.
     *
     * @param  LbSlider  $model
     */
    public function __construct(LbSlider $model)
    {
        $this->model = $model;
	}
	
    public function getForHome()
    {
		return $this->model
			->where('show', 'true', '=')
			->orderBy('order', 'desc')
			->get();
    }
}
