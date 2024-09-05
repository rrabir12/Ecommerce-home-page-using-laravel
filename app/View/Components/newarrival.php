<?php

namespace App\View\Components;

use App\Models\cardDetails;
use Illuminate\View\Component;

class newarrival extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        // return view('components.newarrival');

        $nextSixCards = cardDetails::skip(6)->take(6)->get();
        return view('components.newarrival', compact('nextSixCards'));
    }
}
