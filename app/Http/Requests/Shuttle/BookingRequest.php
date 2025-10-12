<?php

namespace App\Http\Requests\Shuttle;

use Illuminate\Foundation\Http\FormRequest;

class BookingRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'customer_name' => 'required|string|max:255',
            'customer_phone' => 'required|string|max:20',
            'customer_email' => 'required|email|max:255',
            'booking_date' => 'required|date|after_or_equal:today',
            'pickup_time' => 'required|date_format:H:i',
            'people_amount' => 'required|integer|min:1',
            'from' => 'required|string|max:255',
            'to'   => 'required|string|max:255',
            'vehicle_id' => 'required|exists:vehicles,id',
        ];
    }
}
