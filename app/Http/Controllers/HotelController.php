<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Hotel;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
class HotelController extends Controller
{
    public function store(Request $request)
    {
        $input = $request->all();
       $user = Hotel::create([
        'phonenumber'=> $input['number'],
        'wifi'=> $input['wifi'],
        'availability'=> $input['avail'],
        'address'=> $input['address'],
        'location'=> $input['pincode'],
        'district'=> $input['district'],
        'numberofavailroom'=> $input['totalroom'],
        'hotelimage'=> $input['imglink'],
        'user_id'=> $input['userId'],
        
        ]);
        $insertedId = $user->id;
       

        return response()->json([
            'status' => true,
            'message' => "Registation Success",
            'id'=> $insertedId
        ]);
    }
    public function hotellist()
    {
        $post = DB::table('hotels')->select('hotels.id AS hotelid',"users.name","users.email","hotels.district","hotels.address","hotels.location","hotels.phonenumber","hotels.hotelimage","hotels.numberofavailroom")->join('users', 'users.id' , '=' ,'hotels.user_id')->simplepaginate(6);
        $pageCount= count(Hotel::all())/6;
    	return response()->json(
            ['paginate'=>$post,
            'page_count'=>ceil($pageCount)
            ]
        );

    }
   public function show($id)
    {
        $contact = Hotel::find($id);
        return response()->json($contact);
    }
   public function update(Request $request, $id)
    {
       $hotels = Hotel::find($id);
       $hotels->update($request->all());
       return response()->json('Hotel updated');
    }
   public function index()
    {
        
    $hotels = User::join('hotels', 'users.id', '=', 'hotels.user_id')
    ->select('users.*', 'hotels.*')
    ->get();    
    return response()->json($hotels);
        
    }
    public function count()
    {
        $count = Hotel::all()->count();
        return response()->json($count);
    }
    public function destroy($id)
    {
        $hotel = Hotel::findOrFail($id);
        $user = $hotel->user;
        
        if ($user) {
            $user->delete();
        }
        
        $hotel->delete();


        // $hotels = Hotel::find($id);
        // $hotels->delete();
        // return response()->json(' deleted!');
    }
    
    public function hotelbyid($id)
    {
       
    //  $users = DB::table('customers')->where('user_id' , $id )->get();
    //  return response()->json($users);
    $hotels = User::join('hotels', 'users.id', '=', 'hotels.user_id')
    ->select('users.*', 'hotels.*')->where('user_id' , $id )
    ->get();    
    return response()->json($hotels);
    }


}