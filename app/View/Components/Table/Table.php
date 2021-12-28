<?php

namespace App\View\Components\Table;

use Illuminate\View\Component;

class Table extends Component
{
    /**
     * Headers of table.
     *
     * @var
     */
    public $headers;

    /**
     * Pagination of data.
     *
     * @var
     */
    public $pagination;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(array $headers, $pagination)
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
