<?php

namespace App\View\Components;

use App\Models\Link;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Footer extends Component
{

    public $number;
    public $formattedNumber;
    public $address;
    public $instagram;

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->number = Link::where('name', 'wa')->value('url') ?? '#';
        $this->address = Link::where('name', 'address')->value('url') ?? "#";
        $this->instagram = Link::where('name', 'instagram')->value('url') ?? "#";
        $this->formattedNumber = $this->formatPhone($this->number);
    }

    private function formatPhone(string $number): string
    {
        // Ambil hanya angka
        $digits = preg_replace('/\D/', '', $number);

        // Jika nomor diawali 0 → ubah ke +62
        if (str_starts_with($digits, '0')) {
            $digits = '62' . substr($digits, 1);
        }

        // Tambahkan tanda + di depan
        $formatted = '+' . $digits;

        // Format biar lebih enak dibaca (opsional)
        $formatted = preg_replace('/(\+62)(\d{3})(\d{4})(\d+)/', '$1 $2-$3-$4', $formatted);

        return $formatted;
    }


    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.partials.footer', [
            'number' => $this->number,
            'formattedNumber' => $this->formattedNumber,
            'address' => $this->address,
            'instagram' => $this->instagram,
        ]);
    }
}
