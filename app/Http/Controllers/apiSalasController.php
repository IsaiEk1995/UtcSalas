<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Sala;

class apiSalasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
         $sala=Sala::all();
         return $sala;
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
        $sala=new Sala;
        $sala->id_espacio=$request->get('id_espacio');
        $sala->nombre=$request->get('nombre');
        $sala->cupo=$request->get('cupo');
        $sala->save();
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
         $sala=Sala::find($id);
        return $sala;
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
        $sala=Sala::find($id);
        $sala->id_espacio=$request->get('id_departamento');
        $sala->nombre=$request->get('nombre');
        $sala->cupo=$request->get('cupo');
        $sala->update();
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
        return Sala::destroy($id);
    }
}
