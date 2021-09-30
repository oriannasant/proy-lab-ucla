<?php

namespace App\Http\Controllers;

use App\Models\Program;
//use Illuminate\Http\Request;
use App\Http\Requests\ProgramRequest;

class ProgramController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $programs = Program::all();
  
        return view('program.registrationprogram')->with('programs',$programs);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('program.createprogram');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProgramRequest $request)
    {
        //
        $programs = new Program();
        $programs->name_program = $request->get('name_program');
        $programs->descrip_program = $request->get('descrip_program');
        $programs->status = $request->get('status');
        $programs->save();
        
        return redirect('/programs')->with('success','Programa Registrado con Exito');
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
        
        $program = Program::find($id);
        return view('program.editprogram')->with('program',$program);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProgramRequest $request, $id)
    {
        //
        $program = Program::find($id);
        $program->name_program = $request->get('name_program');
        $program->descrip_program = $request->get('descrip_program');
        $program->status = $request->get('status');
        $program->save();

        return redirect('/programs')->with('success','Programa Actualizado con Exito');
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
        
        $program = Program::find($id);       
        $program->delete();
        
     
        return redirect('/programs')->with('success','Registro Borrado');
    }
}
