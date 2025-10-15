<?php

namespace App\Livewire;

use App\Models\Package;
use App\Models\Place;
use App\Models\Tour;
use Livewire\Component;
use Livewire\WithPagination;

class AvailablePackageAction extends Component
{
    use WithPagination;

     public $type = []; 
    public $place = []; 

    public $tourTypes = [];
    public $destinations = [];

    public function updatingPlace()
    {
        $this->resetPage();
    }

    public function updatingType()
    {
        $this->resetPage();
    }

    public function mount()
    {
        // Load tour types dari database
        $this->tourTypes = Tour::select('id', 'name')
            ->get()
            ->map(function ($tour) {
                return [
                    'id' => $tour->name,
                    'label' => $tour->name
                ];
            })
            ->toArray();

        // Load destinations dari database
        $this->destinations = Place::select('id', 'name')
            ->get()
            ->map(function ($destination) {
                return [
                    'id' => $destination->name,
                    'label' => $destination->name
                ];
            })
            ->toArray();
    }

    public function render()
    {        
        $packages = Package::with(['tour', 'media', 'destinations'])
            ->when(!empty($this->type), function ($query) {
                $query->whereHas('tour', function ($q) {
                    $q->whereIn('name', $this->type); 
                });
            })
           ->when($this->place, function ($query) {
                $query->whereHas('destinations.place', function ($q) {
                    $q->whereIn('name', (array) $this->place);
                });
            })
            ->where('is_active', true)
            ->get();

        return view('livewire.available-package-action', [
            'packages' => $packages
        ]);
    }
}
