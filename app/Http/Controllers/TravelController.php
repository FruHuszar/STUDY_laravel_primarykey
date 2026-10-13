<?php

namespace App\Http\Controllers;

use App\Models\Travel;
use Illuminate\Http\Request;

class TravelController extends Controller
{
    public function index()
    {
        return Travel::all();
    }

    public function show($user_id, $flight_id)
    {
        $travel = Travel::where('user_id', $user_id)
            ->where('flight_id', $flight_id)
            ->get();
        return $travel[0];
    }

    public function store(Request $request)
    {
        $travel = new Travel();
        $travel->fill($request->all());
        $travel->save();
        return $travel;
    }

    public function update(Request $request, $user_id, $flight_id)
    {
        $travel = $this->show($user_id, $flight_id);
        $travel->fill($request->all());
        $travel->save();
        return $travel;
    }

    public function destroy($user_id, $flight_id)
    {
        $travel = $this->show($user_id, $flight_id);
        $travel->delete();
    }
}