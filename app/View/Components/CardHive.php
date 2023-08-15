<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class CardHive extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $name,
        public string $temp,
        public string $humd,
        public string $pres,
        public string $peso
    )
    {}

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.cardHive');
    }
}
