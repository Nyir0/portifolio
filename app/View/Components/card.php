<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class card extends Component
{
    /**
     * Create a new component instance.
     */

    public $title;
    public $description;
    public $empresa;

    public function __construct($title, $description, $empresa)
    {
        $this->title = $title;
        $this->description = $description;
        $this->empresa = $empresa;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.card');
    }
}
