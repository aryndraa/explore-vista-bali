<?php

namespace App\Http\Controllers\Web\Contact;

use App\Http\Controllers\Controller;
use App\Models\Link;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $address = Link::where('name', 'address')->value('url') ?? '#';
        $email =  Link::where('name', 'email')->value('url') ?? '#';
        $phone =  Link::where('name', 'wa')->value('url') ?? '#';
        $formattedNumber = $this->formatPhone($phone);

        return view('contact', [
            'address' => $address,
            'email' => $email,
            'phone' => $formattedNumber 
        ]);
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
}
