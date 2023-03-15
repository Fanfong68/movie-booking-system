<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class BookingController extends Controller
{
    public function submit_info(Request $request){
        return redirect('/dashboard');
    }
}
