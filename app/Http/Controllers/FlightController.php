<?php

namespace App\Http\Controllers;

use App\Models\Flight;
use Illuminate\Http\Request;

class FlightController extends Controller
{
    public function index()
    {
        return Flight::all();
    }

    public function show($id)
    {
        return Flight::find($id);
    }

    public function store(Request $request)
    {
        $flight = new Flight();
        $flight->fill($request->all());
        $flight->save();
        return $flight;
    }

    public function update(Request $request, $id)
    {
        $flight = Flight::find($id);
        $flight->fill($request->all());
        $flight->save();
        return $flight;
    }

    public function destroy($id)
    {
        Flight::find($id)->delete();
    }
}