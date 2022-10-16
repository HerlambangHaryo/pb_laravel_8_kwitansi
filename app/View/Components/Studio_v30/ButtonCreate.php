<?php

namespace App\View\Components\Studio_v30;

use Illuminate\View\Component;

class ButtonCreate extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $content;

    public function __construct($content)
    {
        //
        $this->content = $content;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.studio_v30.button-create');
    }
}
