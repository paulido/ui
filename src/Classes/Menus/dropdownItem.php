<?php

namespace Paulido\Ui\Classes\Menus;

use Illuminate\View\Component;

class dropdownItem extends Component
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
        return view('ui.menus.dropdown-item');
    }
}
