<?php

namespace App\Http\Controllers\Web\Vehicle;

use App\Http\Controllers\Controller;
use App\Models\Vehicle;
use Illuminate\Http\Request;

class VehicleController extends Controller
{
    public function index() 
    {
        return view('services.vehicle-rent');
    }
}
