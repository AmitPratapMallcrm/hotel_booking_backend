<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    public function customerbyid($id)
    {
     $users = DB::table('customers')->where('user_id' , $id )->get();
     return response()->json($users);
    }
    public function index()
    {
        $customers = Customer::all();
        return response()->json($customers);
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
}
