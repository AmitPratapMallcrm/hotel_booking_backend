<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\User;

class CustomerController extends Controller
{
    public function customerbyid($id)
    {
     $users = DB::table('customers')->where('user_id' , $id )->get();
     return response()->json($users);
    }
    public function index()
    {
        $customer =Customer::all()->where('role_id' , 3 );
      //  $customer =User::all()->join('customers','customers.user_id','=','users.id');
        return response()->json($customer);
        // $customers = Customer::all();
        // return response()->json($customers);
    }
    public function count()
    {
        $count = Customer::all()->count();
        return response()->json($count);
    }
    public function destroy($id)
    {
        $customers = Customer::find($id);
        $customers->delete();
        return response()->json(' deleted!');
    }
    public function store(Request $request)
    {
        $input = $request->all();
         Customer::create([
            'location' => $input['location'],
            'phonenumber' => $input['phonenumber'],
            'addharnumber' => $input['addharnumber'],
            'user_id' =>$input['user_id'],
        ]);
      
        return response()->json([
            'status' => true,
            'message' => "Registation Success",
          
        ]);
    }
}
