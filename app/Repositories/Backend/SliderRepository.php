<?php

namespace App\Repositories\Backend;

use App\Models\Slider\LbSlider;
use Illuminate\Support\Facades\DB;
use App\Repositories\BaseRepository;
use Illuminate\Pagination\LengthAwarePaginator;

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

    /**
     * @param int    $paged
     * @param string $orderBy
     * @param string $sort
     *
     * @return mixed
     */
    public function getPaginated($paged = 25, $orderBy = 'created_at', $sort = 'desc'): LengthAwarePaginator
    {
        return $this->model
            // ->orderBy('is_read', $sort)
            // ->orderBy('booking_date', $sort)
            // ->orderBy('booking_time', $sort)
            ->paginate($paged);
    }

    /**
     * @param LbSlider  $slider
     * @param array $data
     *
     * @throws GeneralException
     * @throws \Exception
     * @throws \Throwable
     * @return LbSlider
     */
    public function update(LbSlider $slider, array $data): LbSlider
    {
		return DB::transaction(function () use ($slider, $data) {
			if (isset($data['is_show'])) {

				if ($slider->update([
					'show' => $data['is_show'] ? 'false' : 'true'
				])) {
	
					return $slider;
				}
			}

			if (isset($data['text_position'])) {

				if ($slider->update([
					'text_position' => $data['text_position']
				])) {
	
					return $slider;
				}
			}

            throw new GeneralException(__('exceptions.backend.access.slider.update_error'));
        });
    }

    /**
     * @param int    $paged
     * @param string $orderBy
     * @param string $sort
     *
     * @return mixed
     */
    public function getPaginatedShowHome($paged = 25, $orderBy = 'created_at', $sort = 'desc'): LengthAwarePaginator
    {
        return $this->model
			->showHome()
			->orderBy('order', 'desc')
            // ->orderBy('is_read', $sort)
            // ->orderBy('booking_date', $sort)
            // ->orderBy('booking_time', $sort)
            ->paginate($paged);
    }

    /**
     * @param LbSlider  $slider
     * @param array $data
     *
     * @throws GeneralException
     * @throws \Exception
     * @throws \Throwable
     * @return LbSlider
     */
    public function updateOrder(array $data)
    {
		return DB::transaction(function () use ($data) {

			foreach ($data as $key => $value) {
				$id = explode("_", $key)[1];

				$slider = $this->getById($id);
				$slider->order = $value;
				$slider->save();
			}
        });
    }
}
