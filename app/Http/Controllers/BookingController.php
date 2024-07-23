<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Room;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class BookingController extends Controller
{
    public function index()
    {
        $booking = Booking::all();
        return response()->json($booking);
    }

    public function show($id)
    {
        $booking = Booking::find($id);
        return response()->json($booking);
    }

    public function store(Request $request)
    {
        DB::beginTransaction();

        try {
            $checkin_date = Carbon::now()->toDateString();

            $booking = Booking::create([
                'room_id' => $request->room_id,
                'customer_id' => $request->customer_id,
                'checkin_date' => $checkin_date,
                'total_price' => 0,
            ]);

            $room = Room::findOrFail($request->room_id);
            $room->status = 1;
            $room->save();

            DB::commit();

            return response()->json($booking, 201);
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json(['error' => $e->getMessage()], 500);
        }

    }

    public function update(Request $request, $id)
    {
        $booking = Booking::find($id);
        $booking->update($request->all());
        return response()->json($booking, 200);
    }

    public function destroy($id)
    {
        Booking::destroy($id);
        return response()->json(null, 204);
    }
}
