<?php

namespace App\View\Components;

use Illuminate\View\Component;

class DivServicesSection extends Component
{
    public $mainDivClass;
    public $dataAosDelay;
    public $iconDivClass;
    public $h4;
    public $p;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($mainDivClass, $dataAosDelay, $iconDivClass, $h4, $p)
    {
        $this->mainDivClass = $mainDivClass;
        $this->dataAosDelay = $dataAosDelay;
        $this->iconDivClass = $iconDivClass;
        $this->h4 = $h4;
        $this->p = $p;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.div-services-section');
    }
}
