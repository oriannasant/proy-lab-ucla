<?php

namespace App\Http\Controllers;
use App\Models\User;
//use Illuminate\Http\Request;
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
       // $users = User::all();
        //return view('usuario.registration')->with('users',$users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $users = User::all();
        return view('usuario.registration')->with('users',$users);
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
        
        return redirect('welcomeAdmin')->with('datos','REGISTRO GUARDADO');
 
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
    }
}