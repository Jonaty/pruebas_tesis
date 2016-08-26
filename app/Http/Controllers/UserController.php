<?php

namespace App\Http\Controllers;

use DB;

use App\User;

use Illuminate\Database\Eloquent\Collection;

//use Illuminate\Support\Collection;

use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function consultar()
    {
       //$users = DB::select(SELECT nombre from users where id = 1);

      //$users = DB::table('users')->where('id', 1)->value('email');

      //$users = DB::table('users')->where('id', 1)->first();

      //$users = DB::table('users')->orderBy('nombre')->get();

      //$nombres = DB::table('users')->pluck('nombre', 'apellido');


   // DB::table('users')->orderBy('nombre')->chunk(4, function($users) {
       
   //     foreach($users as $user)
   //     {
   //      echo $user->nombre . " " . $user->apellido . "<br>";
   //     }

   //     return false;
   //  });

   // $users = DB::table('users')->where([['direccion', 'Manzanillo'], ['direccion', 'like', 'M%']])->count();

   //$users = DB::table('users')->max('telefono');

   //$users = DB::table('users')->select('nombre', 'apellido')->where('direccion', 'Manzanillo')->get();

  //$users = DB::table('users')->distinct('direccion')->orderBy('nombre')->get();

      //$users = DB::table('users')->distinct('direccion')->get();

      // $query = DB::table('users')->select('nombre');

      // $users = $query->addSelect('edad')->get();

      // $users = DB::table('users')
      //                ->select(DB::raw('count(nombre) as nombre'))
      //                ->groupBy('direccion')
      //                ->get();

      // $first = DB::table('users')
      //       ->where('direccion', 'Manzanillo');

      // $users = DB::table('users')
      //       ->where('id', '=', 1)
      //       ->union($first)
      //       ->get();

      // $users = DB::table('users')->where([['direccion', '=', 'Manzanillo'],
      //                                    ['id', '>=', '1'],
      //                                    ['nombre', 'like', 'N%']])->get();

      // $users = DB::table('users')
      //               ->where('id', '=', 3)
      //               ->orWhere('nombre', 'Jhon')
      //               ->get();


// $users = DB::table('users')
//                     ->whereBetween('id', [2, 7])->get();

      // $users = DB::table('users')
      //               ->whereNotBetween('id', [2, 5])
      //               ->get();

      // $users = DB::table('users')
      //               ->whereNotIn('id', [1, 2, 3])
      //               ->get();

      // $users = DB::table('users')
      //               ->whereNull('updated_at')
      //               ->get();

      // $users = DB::table('users')
      //           ->whereDate('created_at', '2016-08-23')
      //           ->get();

      // $users = DB::table('users')
      //           ->whereYear('created_at', '=', '2016')
      //           ->get();

      // $users = DB::table('users')
      //           ->whereColumn('nombre', 'apellido')
      //           ->get();

      // $users = DB::table('users')
      //           ->whereColumn('updated_at', '>', 'created_at')
      //           ->get();

      // $users = DB::table('users')
      //           ->whereColumn([
      //               ['nombre', '<>', 'apellido'],
      //               ['updated_at', '>', 'created_at']
      //           ])->get();

      // $users = DB::table('users')
      //       ->where('direccion', '=', 'Manzanillo')
      //       ->orWhere(function ($query) {
      //           $query->where('updated_at', '>', 'created_at')
      //                 ->where('nombre', '<>', 'apellido');
      //       })
      //       ->get();

      // $users = DB::table('users')
      //       ->whereExists(function ($query) {
      //           $query->select(DB::raw(1))
      //                 ->from('orders')
      //                 ->whereRaw('orders.user_id = users.id');
      //       })
      //       ->get();


// $users = DB::table('users')
//                 ->where('options->language', 'en')
//                 ->get();

      // $users = DB::table('users')
      //           ->orderBy('nombre')
      //           ->get();

      // $users = DB::table('users')
      //           ->inRandomOrder()
      //           ->first();

      // $users = DB::table('users')
      //           ->groupBy('direccion')
      //           ->having('id', '>', 2)
      //           ->get();

      // $users = DB::table('orders')
      //           ->select('department', DB::raw('SUM(price) as total_sales'))
      //           ->groupBy('department')
      //           ->havingRaw('SUM(price) > 2500')
      //           ->get();

//      DB::table('users')->insert(

//     [
    
//     'nombre' => 'Naty',
//     'apellido' => 'Grunge',
//     'direccion' => 'Manzanillo',
//     'telefono' => '34322',
//     'email' => 'naty@hotmail.com'
//     ]
// );

      // DB::table('users')
      //       ->where('id', 10)
      //       ->update(['nombre' => 'Totoro']);

      // DB::table('users')->increment('telefono');

      // DB::table('users')->where('id', '=', 1)->delete();

      // $users = DB::table('users')->where('id', '>=', 2)->sharedLock()->get();

      //$users = User::all();

      // $users = User::where('id', '3')->get();

      // $users = User::pluck('nombre');

      // $users = DB::table('users')->pluck('nombre');

      // $users = User::whereBetween('id', [2,6])->get();


       // $users = User::collect('users')->all();

//    User::orderBy('nombre', 'desc')->chunk(4, function ($users) {
//     foreach ($users as $user) {
//         echo "<li>" . $user->nombre . "</li>" . "<br>";
//     }

//     return false;
// });


//     foreach (User::orderBy('nombre', 'desc')->where('direccion', 'Manzanillo')->cursor() as $user) 
//     {
//     echo $user->nombre . " " . $user->apellido . "<br>";
// }

      // $users = User::find(2);

      // $users = User::where('id', 2)->first();

      $users = User::find([2, 3, 4]);

    return view('user.consultar', compact('users'));
    }
}





















































