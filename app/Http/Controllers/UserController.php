<?php

namespace App\Http\Controllers;

use DB;

use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function consultar()
    {
       //$users = DB::select(SELECT nombre from users where id = 1);

    	//$users = DB::table('users')->where('id', 1)->value('nombre');

    	$users = DB::table('users')->where('id', 1)->first();

    	//$users = DB::table('users')->get();



       return view('user.consultar', ['users' => $users]);
    }
}
