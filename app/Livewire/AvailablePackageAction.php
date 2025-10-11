<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination;

class AvailablePackageAction extends Component
{
    use WithPagination;

    public function render()
    {
        return view('livewire.available-package-action');
    }
}
