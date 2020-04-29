<?php

namespace App\Models\Slider\Traits\Attribute;

/**
 * Trait SliderAttribute.
 */
trait SliderAttribute
{
    /**
     * @param 
     */
    public function getBackgroundImageAttribute()
    {
		return '<img style=\'width:100%\' src=' . asset($this->background) . ' />';
	}
	
	public function getTextPositionLabelAttribute()
	{
		$text_position = $this->text_position;

		if ($text_position == 'right') {

			return '<span class="badge badge-primary">phải</span>';
		}

		return '<span class="badge badge-success">trái</span>';
	}

	public function getShowLabelAttribute()
	{
		$show = $this->show;

		return $show;
	}
}
