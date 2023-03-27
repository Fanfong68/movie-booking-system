<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Booking;
use Illuminate\Support\Facades\Auth;

class BookingController extends Controller
{
    public function submit_info(Request $request){
        $data=$request->input();
        return view('/select_seat',['data'=>$data]);
    }

    public function add_booking(Request $request){
        $booking = new Booking;
        $booking->movieid = $request->movieS;
        $booking->userid =  Auth::user()->id;
        $booking->locationid = $request->cinemaS;
        $booking->timeid = $request->timeS;
        $booking->date = $request->dateS;
        $booking->seat = $request->seatS;
        $booking->save();
        return view('/bookings_history');
    }
}
