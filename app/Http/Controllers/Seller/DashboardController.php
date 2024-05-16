<?php

namespace App\Http\Controllers\Seller;

use App\Http\Controllers\Controller;
use App\Models\User;

class DashboardController extends Controller
{
      public function index() {
        return view('seller.dashboard');
      }

      public function users(){
        $users = User::all();
        return view('seller.users', compact('users'));
      }

      public function view_user($id){
        $user = User::find($id);
        return view('seller.view-user', compact('user'));
      }
}
