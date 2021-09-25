<?php

namespace App\Http\Controllers;
use App\Models\Pensum;
use Illuminate\Http\Request;

class PensumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        //return 'Vista index()';
        $pensums = Pensum::all();
        //return view('registrationpensum')->with('pensums',$pensums);
        return view('pensum.registrationpensum')->with('pensums',$pensums);
    
    }

    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('pensum.createpensum');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $pensums = new Pensum();
        $pensums->id_program = $request->get('id_program');
        $pensums->descrip_pensum = $request->get('descrip_pensum');
        $pensums->date = $request->get('date');
        $pensums->status = $request->get('status');
        $pensums->save();
        //return redirect()->route('pensum.registerpensum')->with('success','REGISTRO GUARDADO');
        return redirect('/pensums')->with('success','Pensum Registrado con Exito');
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
        $pensum = Pensum::find($id);
        return view('pensum.editpensum')->with('pensum',$pensum);
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $pensum = Pensum::find($id);
        $pensum->id_program = $request->get('id_program');
        $pensum->descrip_pensum = $request->get('descrip_pensum');
        $pensum->date = $request->get('date');
        $pensum->status = $request->get('status');
        $pensum->save();


       // return redirect()->route('pensum.registerpensum')->with('success','REGISTRO ACTUALIZADO');
       
        return redirect('/pensums')->with('success','Pensum Actualizado con Exito');
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
        $pensum = Pensum::find($id);       
        $pensum->delete();
        //return redirect()->route('pensum.registerpensum')->with('success','REGISTRO BORRADO');
     
        return redirect('/pensums')->with('success','Registro Borrado');
    }
}
