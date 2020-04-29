<?php

namespace App\Models\Service;

use App\Models\Slider\Traits\Relationship\SliderRelationship;
use App\Models\Slider\Traits\Method\SliderMethod;
use App\Models\Slider\Traits\Attribute\SliderAttribute;
use App\Models\Slider\Traits\Scope\SliderScope;
use Illuminate\Database\Eloquent\Model;

class LbSlider extends Model
{
	use SliderRelationship,
		SliderMethod,
		SliderAttribute,
		SliderScope;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'lb_sliders';
}