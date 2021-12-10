<?php

namespace App\Http\Controllers;

use App\Models\salones;
use Illuminate\Http\Request;


class SalonesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos['salones']=salones::paginate(5);
        return view('salones.index',$datos);
      
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('salones.create');
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
        $datosSalones = request()->except('_token');
        Salones::insert($datosSalones);
        return response()->json($datosSalones);
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\salones  $salones
     * @return \Illuminate\Http\Response
     */
    public function show(salones $salones)
    {
        //
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\salones  $salones
     * @return \Illuminate\Http\Response
     */
    public function edit(salones $salones)
    {
        //
        return view ('salones.edit');
       
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\salones  $salones
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, salones $salones)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\salones  $salones
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Salones::destroy($id);
        return redirect('salones');
    }
}
