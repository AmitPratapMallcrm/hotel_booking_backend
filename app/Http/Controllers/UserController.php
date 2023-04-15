<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function userbyid($id)
    {
     $users = DB::table('users')->where('id' , $id )->get();
     return response()->json($users);
    }
}
