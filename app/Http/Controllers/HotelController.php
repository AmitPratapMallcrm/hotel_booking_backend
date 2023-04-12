<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Hotel;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
class HotelController extends Controller
{
    public function store(Request $request)
    {
        $input = $request->all();
        Hotel::create([
            'hotel_name' => $input['name'],
        'email'=> $input['email'],
        'location'=> $input['district'],
        'availability'=> $input['available'],
        'phonenumber'=> $input['number'],
        'availroom'=> $input['availroom'],
        'wifi'=> $input['wifi'],
        'user_id'=> $input['userId']
        ]);
        return response()->json([
            'status' => true,
            'message' => "Registation Success"
        ]);
    }
    public function hotellist()
    {
        $post = DB::table('hotels')->simplepaginate(2);
        $pageCount= count(Hotel::all())/2;
    	return response()->json(
            ['paginate'=>$post,
            'page_count'=>ceil($pageCount)
            ]
        );
//   $hotels = DB::table('hotels')->paginate(6);
//   $pageCount= count(Hotel::all())/6;
//   return response()->json([
//                'status' => true,
//                'message' => "Success",
//                'users' => $hotels,
//                'page_count'=>ceil($pageCount)
//            ]);
    }
   public function hotelbyid($id)
   {
    $hotels = DB::table('hotels')->where('id' , $id )->get();
    return response()->json($hotels);
   }
}