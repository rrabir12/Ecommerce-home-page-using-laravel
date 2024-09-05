<?php

namespace App\View\Components;

use App\Models\cardDetails;
use Illuminate\View\Component;

class featured extends Component
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
    // {
    //     $cards = cardDetails::all();
    //     return view('components.featured',compact('cards'));
    // }
    // public function firstSection()
{
    $firstSixCards = cardDetails::take(6)->get();
    return view('components.featured', compact('firstSixCards'));
}
}
