<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Booking;
class BookingController extends Controller
{
    //
    public function index()
    {
        $bookings = Booking::all();
        return response()->json($bookings);
    }
    public function count()
    {
        $count = Booking::all()->count();
        return response()->json($count);
    }
}