<?php

namespace App\Http\Controllers\Seller;

use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
      public function index() {
        return view('seller.dashboard');
      }

      public function users(){
        $sellers = Seller::all();
        return view('admin.staffs', compact('sellers'));
      }
}
