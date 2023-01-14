<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\Facades\Auth;
use App\Models\users;

class authUser extends Controller
{

  public function signUp(Request $request)
  {
     $users = new users; 
     $users->email=$request->email; 
     $users->password=$request->pass;

     $users->save();
     return view('success');
  }

  public function logIn(Request $request)
  {
    if(!Auth::attempt(['email' => $request->email,'password' => $request->pass]))
    {
     return view('login');
    }
     return view('dashboard');
  }
  
  public function logOut()
  {
     Auth::logout();
     return redirect()->route('login');
  }

}

  
