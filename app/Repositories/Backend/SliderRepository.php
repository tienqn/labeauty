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
     * @param int    $paged
     * @param string $orderBy
     * @param string $sort
     *
     * @return mixed
     */
    public function getWaitingPaginated($paged = 25, $orderBy = 'created_at', $sort = 'desc'): LengthAwarePaginator
    {
        return $this->model
            ->with('service')
            ->waiting()
            ->orderBy('is_read', $sort)
            ->orderBy('booking_date', $sort)
            ->orderBy('booking_time', $sort)
            ->paginate($paged);
    }

    /**
     * @param int    $paged
     * @param string $orderBy
     * @param string $sort
     *
     * @return mixed
     */
    public function getCalledPaginated($paged = 25, $orderBy = 'created_at', $sort = 'desc'): LengthAwarePaginator
    {
        return $this->model
            ->with('service')
            ->called()
            ->orderBy('is_read', $sort)
            ->orderBy('booking_date', $sort)
            ->orderBy('booking_time', $sort)
            ->paginate($paged);
    }

    /**
     * @param int    $paged
     * @param string $orderBy
     * @param string $sort
     *
     * @return mixed
     */
    public function getProcessingPaginated($paged = 25, $orderBy = 'created_at', $sort = 'desc'): LengthAwarePaginator
    {
        return $this->model
            ->with('service')
            ->processing()
            ->orderBy('is_read', $sort)
            ->orderBy('booking_date', $sort)
            ->orderBy('booking_time', $sort)
            ->paginate($paged);
    }

    /**
     * @param int    $paged
     * @param string $orderBy
     * @param string $sort
     *
     * @return mixed
     */
    public function getCompletedPaginated($paged = 25, $orderBy = 'created_at', $sort = 'desc'): LengthAwarePaginator
    {
        return $this->model
            ->with('service')
            ->completed()
            ->orderBy('is_read', $sort)
            ->orderBy('booking_date', $sort)
            ->orderBy('booking_time', $sort)
            ->paginate($paged);
    }

    /**
     * @param int    $paged
     * @param string $orderBy
     * @param string $sort
     *
     * @return mixed
     */
    public function getRejectPaginated($paged = 25, $orderBy = 'created_at', $sort = 'desc'): LengthAwarePaginator
    {
        return $this->model
            ->with('service')
            ->reject()
            ->orderBy('is_read', $sort)
            ->orderBy('booking_date', $sort)
            ->orderBy('booking_time', $sort)
            ->paginate($paged);
    }

    /**
     * @param LbBooking  $booking
     * @param array $data
     *
     * @throws GeneralException
     * @throws \Exception
     * @throws \Throwable
     * @return LbBooking
     */
    public function update(LbBooking $booking, array $data): LbBooking
    {
		return DB::transaction(function () use ($booking, $data) {
            if ($booking->update([
                'status' => $data['status']
            ])) {

                return $booking;
            }

            throw new GeneralException(__('exceptions.backend.access.booking.update_error'));
        });
    }
}
