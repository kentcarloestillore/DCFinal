<?php

namespace App\Http\Controllers;
use App\Models\Trip_detail;

use Illuminate\Http\Request;

class TripDetailController extends Controller
{
    public function index() {
        return inertia('Trip/Index', [
            'trips' => Trip_detail::orderBy('id')->get(),
            'flash' => [
                'success' => session('success')
            ]
        ]);
    }

    public function create(){
        return inertia('Trip/Create');
    }

    public function store(Request $request){
        $field = $request->validate([
            'port_departed' => 'required',
            'port_arrived'  => 'required',
            'date_departed' => 'required|date',
            'date_arrived'  => 'required|date'
        ]);
        $save = Trip_detail::create($request->all());
        return redirect('/trips')->with('success', 'Trip added successfully!');
    }

    public function show(Trip_detail $trip){
        return inertia('Trip/Edit', [
            'trip' => $trip
        ]);
    }

    public function update(Request $request, Trip_detail $trip){
        $fields = $request->validate([
            'port_departed' =>'required',
            'port_arrived'  =>'required',
            'date_departed' =>'required',
            'date_arrived'  =>'required'
        ]);

        $trip->update($fields);

        return redirect('/trips');
    }

    public function destroy(Trip_detail $trip){
        $trip->delete();
        return redirect('/trips');
    }
}
