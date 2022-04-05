<?php

namespace App\View\Components\Table;

use Illuminate\View\Component;

class Table extends Component
{
    public $headers;
    public $pagination;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(array $headers, $pagination = null)
    {
        $this->headers = $headers;
        $this->pagination = $pagination;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.table.table');
    }
}
