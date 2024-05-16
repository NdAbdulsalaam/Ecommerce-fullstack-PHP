<?php

namespace App\Http\Controllers\Seller;

use Illuminate\Validation\Rules;
use App\Http\Controllers\Controller;
use illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;

class UserProfileContoller extends Controller
{
    public function view($id){
        $user = User::find($id);
        return view('seller.view-profile', compact('user'));
      }

      public function edit($id){
        $user = User::find($id);
        return view('seller.edit-profile', compact('user'));
      }

      public function update($id, Request $request){

        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'username' => ['required', 'string', 'max:255'],
            'role' => ['required', 'string', 'max:255'],
        ]);

        $update = User::findOrFail($id);

        $update->name = $request->input('name');
        $update->username = $request->input('username');
        $update->role = $request->input('role');

        $update->update($request->all());

        return redirect()->back()->with('success', 'User profile updated successfully!');
        // $update->email = $request->input('email');
      }
    public function addstaff(){
        return view('/admin/add-staff');
      }

      public function store(Request $request){
        $request->validate([
            'fname' => 'required|max:255',
            'lname' => 'required|max:255',
            'role' => 'required|max:255',
            'position' => 'required|max:255',
            'office' => 'required|max:255',
            'age' => 'required|max:255',
            'startdate' => 'required|max:255',
            'salary' => 'required|max:255',
            'email' => 'required|email|unique:users',
        ]);

        $addstaff = new User();
        $addstaff->name = $request->input('fname'). ' ' . $request->input('lname');
        $addstaff->role = $request->input('role');
        $addstaff->position = $request->input('position');
        $addstaff->office = $request->input('office');
        $addstaff->age = $request->input('age');
        $addstaff->startdate = $request->input('startdate');
        $addstaff->salary = $request->input('salary');
        $addstaff->email = $request->input('email');
        $addstaff->password = Hash::make($request->input('lname'));
        $addstaff->save();

        return redirect()->back()->with('success', 'Staff added successfully!');
      }

}

