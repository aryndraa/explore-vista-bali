<x-mail::message>
{{-- Logo --}}
<div style="text-align:center; margin-bottom: 20px;">
    <img src="{{ asset('images/logo.png') }}" alt="{{ config('app.name') }}" style="height: 60px;">
</div>

{{-- Header --}}
# Hello {{ $booking->agent->name }},

You have been assigned to handle the following **Tour**:

{{-- Booking Details --}}
<div style="background-color:#f9fafb; border:1px solid #e5e7eb; padding:12px; border-radius:8px; margin:20px 0;">
    <ul>
        <li><strong>Booking ID:</strong> {{ $booking->id }}</li>
        <li><strong>Package:</strong> {{ $booking->package->name }}</li>
        <li><strong>Customer Name:</strong> {{ $booking->customer_name ?? '-' }}</li>
        <li><strong>Customer Contact:</strong> {{ $booking->customer_phone ?? '-' }}</li>
        <li><strong>Tour Date:</strong> {{ $booking->booking_date ?? '-' }}</li>
        <li><strong>Amount of People:</strong> {{ $booking->people_amount ?? '-' }}</li>
    </ul>
</div>

@php
    $phone = preg_replace('/[^0-9]/', '', $booking->customer_phone ?? '');
    $message = urlencode("Hello {$booking->customer_name}, I am the agent assigned for booking #{$booking->id}.");
    $waUrl = "https://wa.me/{$phone}?text={$message}";
@endphp

{{-- WhatsApp Button --}}
<x-mail::button :url="$waUrl" color="success">
📲 Contact Customer via WhatsApp
</x-mail::button>

<hr style="margin:30px 0; border:none; border-top:1px solid #e5e7eb;">

Thank you,<br>
**{{ config('app.name') }}**
</x-mail::message>
