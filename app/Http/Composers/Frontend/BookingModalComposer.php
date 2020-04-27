<?php

namespace App\Http\Composers\Frontend;

use Illuminate\View\View;
use App\Models\Service\LbService;

/**
 * Class BookingModalComposer.
 */
class BookingModalComposer
{
    /**
     * Bind data to the view.
     *
     * @param View $view
     */
    public function compose(View $view)
    {
        $view->with('lb_services', LbService::all());
    }
}
