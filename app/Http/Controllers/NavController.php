<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Admin_user;
class NavController extends Controller
{
      public function navbar(){
          $data= ['LoggedUserInfo'=> Admin_user::where('id','=',session('LoggedUser'))->first()];
          return view('admin.inc.nav', $data);
      }
}
