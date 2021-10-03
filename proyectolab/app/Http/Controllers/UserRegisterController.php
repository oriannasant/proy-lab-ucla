<?php

namespace App\Http\Controllers;
use App\Models\User;
//use App\Models\Rol;
use App\Models\Program;
use App\Http\Requests\LoginRequest;

class UserRegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $users = User::all();
       // $roles = Rol::all();
       $programs = Program::all();
        return view('usuario.listuser')
        ->with('users',$users)
        ->with('programs',$programs);
        //->with('roles',$roles)
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
       
     //  $roles = Rol::all();
       $programs = Program::all();
       return view('usuario.registration')->with('programs',$programs);
     //  ->with('roles',$roles)
       
    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(LoginRequest $request)
    {
        
        $users = new User();
        $users->username= $request -> get('username');
         $users->name =$request->get('name');
         $users->surname =$request->get('surname');
         $users->identification =$request->get('identification');
         $users->telephone =$request->get('telephone');
         $users->email =$request->get('email');
         $users->password = $request->get('password');
         $users->role =$request->get('role');
         $users->program =$request->get('program');
         $users->status =$request->get('status');
         $users->save();
        
        //return redirect('welcomeAdmin')->with('datos','REGISTRO GUARDADO');
        return redirect('/users')->with('success','REGISTRO GUARDADO');
 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $user = User::find($id);
        return view('usuario.edituser')->with('user',$user);
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(LoginRequest $request, $id)
    {
        //
        $user = User::find($id);
        $user->username= $request -> get('username');
        $user->name =$request->get('name');
        $user->surname =$request->get('surname');
        $user->identification =$request->get('identification');
        $user->telephone =$request->get('telephone');
        $user->email =$request->get('email');
        //$user->password = $request->get('password');
        $user->role =$request->get('role');
        $user->program =$request->get('program');
        $user->status =$request->get('status');
        $user->save();

       
        return redirect('/users')->with('success','Actualizado con Exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $user = User::find($id);       
        $user->delete();
        
        return redirect('/users')->with('success','Registro Borrado');
    }
}
