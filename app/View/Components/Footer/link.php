<?php

namespace App\View\Components\Footer;

use Illuminate\View\Component;

class link extends Component
{

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
        return view('components.footer.link');
    }
}
