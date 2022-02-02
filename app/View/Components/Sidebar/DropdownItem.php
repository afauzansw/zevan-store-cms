<?php

namespace App\View\Components\Sidebar;

use Illuminate\View\Component;

class DropdownItem extends Component
{
    /**
     * Link of item.
     *
     * @var
     */
    public $route;

    /**
     * Page name of item.
     * @var
     */
    public $name;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($route, $name)
    {
        $this->route = $route;
        $this->name = $name;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.sidebar.dropdown-item');
    }
}
