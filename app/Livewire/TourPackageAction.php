<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination;

class TourPackageAction extends Component
{
    use WithPagination;

    public function render()
    {
        return view('livewire.tour-package-action');
    }
}
