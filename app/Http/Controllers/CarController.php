<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function index()
    {
        $car = Car::all();
        return response()->json($car);
    }

    public function store(Request $request)
    {
        Car::create(
            [
                'name' => $request->name,
                'model' => $request->model,
                'immatricule' => $request->immatricule,
            ]
        );
        return response()->json('Réussi');
    }

    public function update(Request $request)
    {
        Car::where('id', 1)->update([
            'name' => $request->name,
            'model' => $request->model,
            'immatricule' => $request->immatricule,
        ]);
        return response()->json('Modification réussi');
    }

    public function delete()
    {
        Car::destroy(1);
        return response()->json('Suppression réussi');
    }
}
