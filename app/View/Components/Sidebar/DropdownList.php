<?php

namespace App\View\Components\Sidebar;

use Illuminate\View\Component;

class DropdownList extends Component
{
    /**
     * Name of dropdown list.
     * @var
     */
    public $name;

    /**
     * Name of dropdown list.
     * @var
     */
    public $icon;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($name, $icon)
    {
        $this->name = $name;
        $this->icon = $icon;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.sidebar.dropdown-list');
    }
}
