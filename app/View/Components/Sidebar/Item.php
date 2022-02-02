<?php

namespace App\View\Components\Sidebar;

use Illuminate\View\Component;

class Item extends Component
{
    /**
     * Page title and route
     *
     * @var
     */
    public $pageTitle;

    /**
     * Icon sidebar list
     *
     * @var
     */
    public $icon;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($pageTitle, $icon)
    {
        $this->pageTitle = $pageTitle;
        $this->icon = $icon;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.sidebar.item');
    }
}
