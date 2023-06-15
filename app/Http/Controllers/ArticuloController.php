<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Articulo;

class ArticuloController extends Controller
{
    public function __construct()
    {
       $this->middleware('auth');
    }
    /** 
     * Display a listing of the resource.
     */
    public function index()
    {
        $articulos = Articulo::all();
        return view('articulo.index')->with('articulos', $articulos);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('articulo.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $articulos = new Articulo();

        
        $articulos->sector = $request->get('sector');
        $articulos->iddeposito = $request->get('iddeposito');
        $articulos->idcomputadora = $request->get('idcomputadora');
        $articulos->direccionip = $request->get('direccionip');
        $articulos->sistemaoperativo = $request->get('sistemaoperativo');
        $articulos->disco = $request->get('disco');
        $articulos->memoria = $request->get('memoria');
        $articulos->microprocesador = $request->get('microprocesador');
        $articulos->anotaciones = $request->get('anotaciones');

        $articulos->save();
        return redirect('/articulos');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $articulo = Articulo::find($id);
        return view('articulo.edit')->with('articulo', $articulo);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $articulo = Articulo::find($id);

        
        $articulo->sector = $request->get('sector');
        $articulo->iddeposito = $request->get('iddeposito');
        $articulo->idcomputadora = $request->get('idcomputadora');
        $articulo->direccionip = $request->get('direccionip');
        $articulo->sistemaoperativo = $request->get('sistemaoperativo');
        $articulo->disco = $request->get('disco');
        $articulo->memoria = $request->get('memoria');
        $articulo->microprocesador = $request->get('microprocesador');
        $articulo->anotaciones = $request->get('anotaciones');

        $articulo->save();
        return redirect('/articulos');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $articulo = Articulo::find($id);
        $articulo->delete();
        return redirect('/articulos');
    }
}

