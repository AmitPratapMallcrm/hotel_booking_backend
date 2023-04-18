<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Room;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RoomController extends Controller
{
    public function store(Request $request)
    {
        $input = $request->all();
        Room::create([
        'roomtype'=> 1,
        'price'=> $input['price1'],
        'numberofroom'=> $input['number1'],
        'facilities'=> $input['desc1'],
        'image'=> $input['img1'],
        'avail'=> $input['avail1'],
        'hotel_id'=> $input['hotel_id'],
        ]);
        Room::create([
            'roomtype'=> 2,
            'price'=> $input['price2'],
            'numberofroom'=> $input['number2'],
            'facilities'=> $input['desc2'],
            'image'=> $input['img2'],
            'avail'=> $input['avail2'],
            'hotel_id'=> $input['hotel_id'],
            ]);
            Room::create([
                'roomtype'=> 3,
                'price'=> $input['price3'],
                'numberofroom'=> $input['number3'],
                'facilities'=> $input['desc3'],
                'image'=> $input['img3'],
                'avail'=> $input['avail3'],
                'hotel_id'=> $input['hotel_id'],
                ]);
        return response()->json([
            'status' => true,
            'message' => "Registation Success"
        ]);

        
    }
    public function roombyid($id)
        {
            // $post = DB::table('hotels')->join('users', 'users.id' , '=' ,'hotels.user_id')->simplepaginate(6);
            // $pageCount= count(Hotel::all())/6;
            // return response()->json(
            //     ['paginate'=>$post,
            //     'page_count'=>ceil($pageCount)
            //     ]
            // );
         $rooms = DB::table('rooms')->where('hotel_id' , $id )->get();
         return response()->json($rooms);
        }
}
