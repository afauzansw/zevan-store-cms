<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Card extends Component
{
    /**
     * Card icon color
     *
     * @var
     */
    public $color;

    /**
     * Card title
     *
     * @var
     */
    public $cardTitle;

    /**
     * Card data value
     *
     * @var
     */
    public $dataValue;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($color, $cardTitle, $dataValue)
    {
        $this->color = $color;
        $this->cardTitle = $cardTitle;
        $this->dataValue = $dataValue;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.card');
    }
}
