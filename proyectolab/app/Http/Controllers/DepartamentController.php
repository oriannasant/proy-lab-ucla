<?php

namespace App\Http\Controllers;

use App\Http\Requests\DepartamentRequest;
use App\Models\Departament;
class DepartamentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $departaments = Departament::all();
  
        return view('departamento.registrationdepartament')->with('departaments',$departaments);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('partament.createdepartament');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DepartamentRequest $request)
    {
        //
        
        $departaments = new Departament();
        $departaments->name_departament = $request->get('name_departament');
        $departaments->descrip_departament = $request->get('descrip_departament');
        $departaments->status = $request->get('status');
        $departaments->save();
        
        return redirect('/departaments')->with('success','Departamento Registrado con Exito');
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
        $departament = Departament::find($id);
        return view('departamento.editdepartament')->with('departament',$departament);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(DepartamentRequest $request, $id)
    {
        //
        $departament = Departament::find($id);
        $departament->name_departament = $request->get('name_departament');
        $departament->descrip_departament = $request->get('descrip_departament');
        $departament->status = $request->get('status');
        $departament->save();
        

        return redirect('/departaments')->with('success','Departamento Actualizado con Exito');
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
        $departament = Departament::find($id);       
        $departament->delete();
        
     
        return redirect('/departaments')->with('success','Registro Borrado');
    }
}
