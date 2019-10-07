<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{


  public function index()
  {
//    $users = User::all();

    $users = DB::table('users')->get();
    //dd($users);
    $title='Listado de usuarios';

    return view('users.index',compact('title','users'));
  }

  public function show($id)
  {
    $usernumber=$id;
    $title='Listado de usuarios';
    return view('userdetail',compact('title','usernumber'));
    //return "Mostrando detalle del usuario: {$id}";
  }

  public function create()
  {
    return view('createuser');
  }

}
