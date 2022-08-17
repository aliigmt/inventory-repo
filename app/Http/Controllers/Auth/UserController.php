<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use App\Models\User;

class UserController extends Controller
{
    public function Index(){
        return view('Auth.user');
    }

 public function Store(Request $request){
    $request->validate([
        'name' => 'required',
        'email' => 'required|email|unique:users',
        'password' => 'required|min:6',
        'mobile' => 'required',
    ]);
    $data = $request->all();
    $check = $this->create($data);
     
     return redirect("dashboard")->withSuccess('You have signed-in');
       
 }

 public function create(array $data)
 {
   return User::create([
     'name' => $data['name'],
     'email' => $data['email'],
     'mobile' => $data['mobile'],
     'password' => Crypt::encryptString($data['password'])
   ]);
 } 

public function login(){
    return view('Auth.login');
}

public function customLogin(Request $request){
    return $request->all();
    $request->validate([
        'email' => 'required',
        'password' => 'required',
    ]);

    $credentials = $request->only('email', 'password');
    if (Auth::attempt($credentials)) {
        return redirect()->intended('dashboard')
                    ->withSuccess('Signed in');
    }
    return redirect("login")->withSuccess('Login details are not valid');
}

public function dashboard()
{
    if(Auth::check()){
        return view('welcome');
    }
    return redirect("login")->withSuccess('You are not allowed to access');
}

public function signOut() {
    Session::flush();
    Auth::logout();

    return Redirect('login');
}

}
