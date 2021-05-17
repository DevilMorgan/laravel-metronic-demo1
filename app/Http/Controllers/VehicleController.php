<?php

namespace App\Http\Controllers;

use App\Http\DataTables\VehicleDataTable;
use App\Models\Vehicle;

class VehicleController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function getIndex(VehicleDataTable $vehicleDataTable)
    {
        return $vehicleDataTable->render('vehicles.index');
    }

    public function getCreate()
    {
        return view('vehicles.create');
    }

    public function postCreate()
    {
        request()->validate(Vehicle::rules());

        Vehicle::query()->create(request()->all());

        return response()->json([
            'dismiss_modal' => true,
            'reload_table' => true,
        ]);
    }

    public function getShow(Vehicle $vehicle)
    {
        return view('vehicles.show', compact('vehicle'));
    }

    public function getEdit(Vehicle $vehicle)
    {
        return view('vehicles.edit', compact('vehicle'));
    }

    public function patchEdit(Vehicle $vehicle)
    {
        request()->validate(Vehicle::rules($vehicle));

        $vehicle->update(request()->all());

        return response()->json([
            'dismiss_modal' => true,
            'reload_table' => true,
        ]);
    }

    public function deleteDestroy(Vehicle $vehicle)
    {
        $vehicle->forceDelete();

        return response()->json([
            'reload_table' => true,
        ]);
    }
}
