<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Academico;
use App\Http\Requests\AcademicoStoreRequest;
use App\Http\Requests\AcademicoUpdateRequest;

class AcademicoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $academicos = Academico::orderBy('id','DESC')->paginate();

        return view('academicos.index',compact('academicos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('academicos.create');


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AcademicoStoreRequest $request)
    {
        $academico = Academico::create($request->all());

        return redirect()->route('academicos.index');

        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $academico = Academico::find($id);

        return view('academicos.show',compact('academico'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $academico =Academico::find($id);
        return view('academicos.edit', compact('academico'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AcademicoUpdateRequest $request, $id)
    {
        $academico = Academico::find($id);

        $academico>fill($request->all()->save());

        return redirect()->route('academicos.edit',$academico->id)
            ->with('info','Academico editado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        ////  
        Academico::find($id)->delete();

        return back()->with('info','Elimiando correctamente');
    }
}
