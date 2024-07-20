<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Symfony\Component\HttpFoundation\RedirectResponse;

class AuthController extends Controller
{
    public function login(){
        return view('auth.login');
    }

    public function logout(Request $request): RedirectResponse
{
    Auth::logout();
 
    $request->session()->invalidate();
 
    $request->session()->regenerateToken();
 
    return redirect('/');
}

 public function register (){
   return view('auth.register') ;
 }

public function register_store(Request $request){
$users=User::create ([
    'name'=>$request->name,
    'email'=>$request->email,
    'password'=>$request->password,
]);

 return redirect('/');
  }

  public function authenticate(Request $request)
  {
      $credentials = $request->validate([
          'email' => ['required', 'email'],
          'password' => ['required'],
      ]);
  }
}
