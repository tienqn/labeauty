<?php

namespace App\Models\Slider\Traits\Scope;

/**
 * Class SliderScope.
 */
trait SliderScope
{
    /**
     * @param $query
     *
     * @return mixed
     */
    public function scopeShowHome($query)
    {
        return $query->where('show', 'true');
	}
}
