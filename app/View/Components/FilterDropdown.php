<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class FilterDropdown extends Component
{
    public $title;
    public $options;

    public function __construct($title, $options = [])
    {
        $this->title = $title;
        $this->options = $options;
    }

    public function render()
    {
        return view('components.filter-dropdown');
    }
}
