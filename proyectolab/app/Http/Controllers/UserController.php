<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;


class UserController extends Controller
{
    
    
public function login(Request $request){
            
           
        $data= request()->validate([
            'username' => 'required',
            'password'=> 'required'
        ],[
        'username.required'=>'Ingresar Usuario',
        'password.required'=>'Ingresar Contraseña',
        ]);
 
     $username = $request->get('username');
     
//buscar sentencias where con mas de un campo
     $query = User::where('username','=',$username)->get();
    
     
     if($query->count() !=0){
         
 
       //  $hashp = $query[0]->password;
        // $password = $request->get('password');
 
       //  if(password_verify($password,$hashp)){
                //si lo consigue y la contraseña es correcta
                //validar que tipo de rol tiene
                            $rol = $query[0]->role;
                                if($rol ==1){
                                //entra
                                    return view('welcomeAdmin');
                                }else{
                                    return view('welcome');
                                }
       //  }else {
       //      return back()->withErrors(['password'=>'Incorrecta contraseña'])->withInput([request('password')]);
       //  }
     }
         else {
             //no se consiguio el usuario en la base de datos
             return back()->withErrors(['username'=>'Incorrecto usuario'])->withInput([request('username')]);
         }
     
}
     
     
 
     public function logout(Request $request){
 
         Auth::logout();
         $request->session()->invalidate();
         $request->session()->regenerateToken();
         return redirect()->route('user.login');
     }
 
}
