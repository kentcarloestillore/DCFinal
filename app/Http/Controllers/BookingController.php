<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\Trip_detail;

class BookingController extends Controller
{
    public function index() {
        return inertia('Bookings/Index', [
            'bookings' => Booking::with('trip')->orderBy('id')->get(),
            'flash' => [
                'success' => session('success')
            ]
        ]);
    }

    public function show(Booking $booking){
        $booking->load('trip');
        return inertia('Bookings/Edit',[
            'trips'      =>Trip_detail::orderBy('id')->get(),
            'booking'   =>$booking
        ]);
    }

    public function create(){
        return inertia('Bookings/Create',[
            'trips' => Trip_detail::orderBy('id')->get()
        ]);
    }

    public function store(Request $request){
        $field = $request->validate([
            'name'          => 'required',
            'trip_id'       => 'required|numeric',
            'description'   => 'required',
            'date'          => 'required|date',
            'weight'        => 'required|numeric',
            'price'         => 'required|numeric'
        ]);
        $save = Booking::create($request->all());
        return redirect('/bookings')->with('success', 'Booking added successfully!');
    }

    public function update(Request $request, Booking $booking){
        $fields = $request->validate([
            'name'          => 'required',
            'trip_id'       => 'required',
            'description'   => 'required',
            'date'          => 'required|date',
            'weight'        => 'required|numeric',
            'price'         => 'required|numeric'
        ]);

        $booking->update($fields);

        return redirect('/bookings');
    }

    public function destroy(Booking $booking){
        $booking->delete();
        return redirect('/bookings');
    }

}
