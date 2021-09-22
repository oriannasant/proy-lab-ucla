<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\LoginRequest;

class RegisterController extends Controller
{
    
    public function register(){
        return view('registration');
    }

    public function registerUser(LoginRequest $request){
        $user = new User;
      
        $username = $request -> get('username');
        $query = User::where('username','=',$username)->get();

        if($query->count() !=0){
            return back()->withErrors(['username'=>'El nombre de usuario ya existe'])->withInput([request('username')]);
        
        }else {
            $password = $request->get('password');
            $confi_password = $request->get('confirmationPassword');
            $validateSpaceUsername =$request->get('username');
            
            $validatedSpaceUsername = preg_replace("/[[:space:]]/","",trim($validateSpaceUsername));
            
           
            if($validateSpaceUsername == $validatedSpaceUsername){
                if($password == $confi_password){
               
                    $user->username =$request->username;
                    $user->name =$request->name;
                    $user->surname =$request->surname;
                    $user->identification =$request->identification;
                    $user->telephone =$request->telephone;
                    $user->email =$request->email;
                    $user->password = bcrypt($request->password);
                    
            //role
            //program
            //status
                    $user->save();
                    return redirect()->route('user.login')->with('datos','REGISTRO GUARDADO');

                }else {
                return back()->withErrors(['confirmationPassword'=>'Passwords do not match'])->withInput([request('confirmationPassword')]);
                        }
             }else{
                return back()->withErrors(['username'=>'The user must not have blank spaces'])->withInput([request('username')]);
            }
            
        }
        
    }
}
