<?php

namespace App\Http\Controllers;
use App\Models\Pensum;
//use Illuminate\Http\Request;
use App\Http\Requests\PensumRequest;
class PensumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
       
        //cargar los pensums segun programa ya que el usuario que ingrese
        //no puede ver los pensums de otros progrmas que no sea el de el
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
    public function store(PensumRequest $request)
    {
        //
        $pensums = new Pensum();
        
        if($request->hasFile('archivo')){
            
            $file = $request->file('archivo');
            $namefile = "pdf_".time().".".$file->guessExtension();
            $ruta = public_path("pdf/".$namefile);

            if($file->guessExtension() == "pdf"){
                copy($file, $ruta);
                $pensums->id_program = $request->get('id_program');
                $pensums->descrip_pensum = $request->get('descrip_pensum');
                $pensums->date = $request->get('date');
                $pensums->status = $request->get('status');
                $pensums->pdf = $namefile;
                $pensums->save();
                return redirect('/pensums')->with('success','Pensum Registrado con Exito');
            }else{
                return redirect('/pensums')->with('dato-error','No se registro un archivo en formato pdf');
                //dd("no es un pdf");
            }
        }
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
    public function update(PensumRequest $request, $id)
    {
        //
        $pensum = Pensum::find($id);
        $pensum->id_program = $request->get('id_program');
        $pensum->descrip_pensum = $request->get('descrip_pensum');
        $pensum->date = $request->get('date');
        $pensum->status = $request->get('status');

        if($request->hasFile('archivo')){
            
            $file = $request->file('archivo');
            $namefile = "pdf_".time().".".$file->guessExtension();
            $ruta = public_path("pdf/".$namefile);

            if($file->guessExtension() == "pdf"){
                copy($file, $ruta);
                $pensum->pdf = $namefile;
                $pensum->save();
                return redirect('/pensums')->with('success','Pensum Actualizado con Exito');        
                
            }else{
                return redirect('/pensums')->with('dato-error','No se registro un archivo en formato pdf');
                //dd("no es un pdf");
            }
        }
        $pensum->save();
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
