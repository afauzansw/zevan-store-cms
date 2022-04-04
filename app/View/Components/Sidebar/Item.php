<?php

namespace App\View\Components\Sidebar;

use Illuminate\View\Component;

class Item extends Component
{
    public $pageTitle;
    public $route;
    public $icon;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($pageTitle, $route, $icon)
    {
        $this->pageTitle = $pageTitle;
        $this->route = $route;
        $this->icon = $icon;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.sidebar\item');
    }
}
