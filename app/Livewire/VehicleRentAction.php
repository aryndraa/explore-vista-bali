<?php

namespace App\Livewire;

use App\Models\Link;
use App\Models\Vehicle;
use Livewire\Component;

class VehicleRentAction extends Component
{
    public $vehicleType = '';
    public $seatAmount = '';

    public $whatsappNumber;

    public function __construct()
    {
        $this->whatsappNumber = Link::query()
            ->where('name', 'wa')
            ->pluck('url')
            ->first(); 
    } 

    public function updateVehicleType()
    {
        $this->resetPage();
    }

    public function updateSeatAmount()
    {
        $this->resetPage();
    }

    public function getVehiclesProperty()
    {
        return Vehicle::query()
            ->where('is_active', true)
            ->when($this->vehicleType, fn ($query) =>
                $query->where('type', $this->vehicleType)
            )
            ->when($this->seatAmount, fn ($query) =>
                $query->where('person', $this->seatAmount)
            )
            ->latest()
            ->get();
    }

    public function getWhatsappLink($vehicle)
    {
        $message = "Hello, I would like to rent this vehicle:\n\n"
            . "*Vehicle:* {$vehicle->name}\n"
            . "*Type:* {$vehicle->type}\n"
            . "*Seat:* {$vehicle->person}\n"
            . "*Price:* {$vehicle->price_per_day}\n\n"
            . "Please confirm the availability. Thank you! 🙏";

        return "https://wa.me/{$this->whatsappNumber}?text=" . urlencode($message);
    }

    public function render()
    {
         return view('livewire.vehicle-rent-action', [
            'vehicles' => $this->vehicles,
        ]);
    }
}
