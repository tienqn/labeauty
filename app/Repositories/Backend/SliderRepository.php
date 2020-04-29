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
            // ->with('service')
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
            if ($slider->update([
                'show' => $data['is_show'] ? 'false' : 'true'
            ])) {

                return $slider;
            }

            throw new GeneralException(__('exceptions.backend.access.slider.update_error'));
        });
    }
}
