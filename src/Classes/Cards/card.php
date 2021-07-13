<?php

namespace Paulido\Components\Classes\Cards;

use Illuminate\View\Component;

class card extends Component
{
    public $title;
    public $btn;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($title, $btn)
    {

        $this->title = $title;
        $this->btn = $btn;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.cards.card');
    }
}
