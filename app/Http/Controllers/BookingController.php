<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Booking;
class BookingController extends Controller
{
    
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
    public function store(Request $request)
    { 
        $input = $request->all();
        $cust = User::find($input['customer_id'])->customer;
        $customer_id= $cust->id;

         $user = Booking::create([
            'price' => $input['price']/100,
            'arival' => $input['arival'],
            'departure' => $input['departure'],
            'message' => $input['message'],
            'numberofroomtype1' => $input['numberofroomtype1'],
            'numberofroomtype2' => $input['numberofroomtype2'],
            'numberofroomtype3' => $input['numberofroomtype3'],
            'hotel_id' => $input['hotel_id'],
            'customer_id'=>$customer_id,
        ]);
       
        $bookingId = $user->id;
        return response()->json([
            'status' => true,
            'message' => "Registation Success",
            'id'=>$bookingId,
          
        ]);
    }
}