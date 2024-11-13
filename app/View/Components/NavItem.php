<?php

namespace App\View\Components;

use Illuminate\View\Component;

class NavItem extends Component
{
    public $route;
    public $text;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($route, $text)
    {
        $this->route = $route;
        $this->text = $text;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.nav-item');
    }
}