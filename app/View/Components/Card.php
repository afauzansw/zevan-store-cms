<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Card extends Component
{
    public $icon;
    public $color;
    public $cardTitle;
    public $dataValue;

    /**
     * Create a new component instance.
     */
    public function __construct($icon, $color, $cardTitle, $dataValue)
    {
        $this->icon = $icon;
        $this->color = $color;
        $this->cardTitle = $cardTitle;
        $this->dataValue = $dataValue;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render()
    {
        return view('components.card');
    }
}
