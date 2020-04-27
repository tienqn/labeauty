<?php

namespace App\Repositories\Frontend;

use App\Models\Booking\LbBooking;
use Illuminate\Support\Facades\DB;
use App\Repositories\BaseRepository;

/**
 * Class BookingRepository.
 */
class BookingRepository extends BaseRepository
{
    /**
     * BookingRepository constructor.
     *
     * @param  LbBooking  $model
     */
    public function __construct(LbBooking $model)
    {
        $this->model = $model;
    }

    /**
     * @param array $data
     *
     * @throws \Exception
     * @throws \Throwable
     * @return \Illuminate\Database\Eloquent\Model|mixed
     */
    public function create(array $data)
    {
		dd($data);
        return DB::transaction(function () use ($data) {
            $service = $this->model::create([
                'service_id' => $data['service_id'],
                'booking_date' => $data['booking_date'],
				'booking_time' => $data['booking_time'],
				'name' => $data['name'],
				'email' => $data['email'],
				'phone_number' => $data['phone_number'],
				'request' => $data['request'],
                'is_read' => false
            ]);

            // Return the service object
            return $service;
        });
    }
}
