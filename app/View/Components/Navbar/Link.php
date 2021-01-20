<?php

namespace App\View\Components\Navbar;

use Illuminate\View\Component;

class Link extends Component
{
    /**
     * @var string
     */
    public $to;

    /**
     * Create a new component instance.
     *
     * @param string $to
     */
    public function __construct(string $to)
    {
        $this->to = $to;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.navbar.link');
    }
}
