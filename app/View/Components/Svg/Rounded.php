<?php

namespace App\View\Components\Svg;

use Illuminate\View\Component;

class Rounded extends Component
{
    /**
     * @var string
     */
    public $color;

    /**
     * Create a new component instance.
     *
     * @param string $color
     */
    public function __construct(string $color)
    {
        $this->color = $color;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.svg.rounded');
    }
}
