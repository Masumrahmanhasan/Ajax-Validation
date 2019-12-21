<?php

namespace App\Http\Controllers;

use App\Vehicle;
use Kdion4891\Lac\Traits\LacController;

class VehicleController extends Controller
{
    use LacController;

    public function __construct()
    {
        $this->model = new Vehicle;
        $this->middleware('auth');
    }
}
