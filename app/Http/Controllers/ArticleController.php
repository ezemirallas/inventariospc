<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
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
        $articles = Article::all();
        return view('article.index')->with('articles', $articles);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('article.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $articles = new Article();

        
        $articles->idcomputadora = $request->get('idcomputadora');
        $articles->nombretecnico = $request->get('nombretecnico');
        $articles->detalleservice = $request->get('detalleservice');
        $articles->fechaentrada = $request->get('fechaentrada');
        $articles->fechasalida = $request->get('fechasalida');
       
        $articles->save();
        return redirect('/articles');
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
        $article = Article::find($id);
        return view('article.edit')->with('article', $article);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $article = Article::find($id);

        
        $article->idcomputadora = $request->get('idcomputadora');
        $article->nombretecnico = $request->get('nombretecnico');
        $article->detalleservice = $request->get('detalleservice');
        $article->fechaentrada = $request->get('fechaentrada');
        $article->fechasalida = $request->get('fechasalida');
       
        $article->save();
        return redirect('/articles');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $article = Article::find($id);
        $article->delete();
        return redirect('/articles');
    }
}

