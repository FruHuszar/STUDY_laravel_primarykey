<?php

namespace App\Http\Controllers;

use App\Models\Airline;
use Illuminate\Http\Request;

class AirlineController extends Controller
{
    public function index()
    {
        return Airline::all();
    }

    public function show($id)
    {
        return Airline::find($id);
    }

    public function store(Request $request)
    {
        $airline = new Airline();
        $airline->fill($request->all());
        $airline->save();
        return $airline;
    }

    public function update(Request $request, $id)
    {
        $airline = Airline::find($id);
        $airline->fill($request->all());
        $airline->save();
        return $airline;
    }

    public function destroy($id)
    {
        Airline::find($id)->delete();
    }
}