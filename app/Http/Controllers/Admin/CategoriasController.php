<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $categorias = Categoria::paginate(10);
        return view('admin.categorias.index',['categorias'=>$categorias]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.categorias.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $categoria = new Categoria();
        $categoria->fill($request->all());
        $categoria->save();
        return redirect()->route('admin.categorias.index');
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
    public function edit(Categoria $categoria)
    {
        return view('admin.categorias.edit',['categoria'=>$categoria]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Categoria $categoria)
    {
        $categoria->fill($request->all());
        $categoria->save();
        return redirect()->route('admin.categorias.edit',$categoria)->with('success','Categoria editada com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Categoria $cat
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy(Categoria $categoria)
    {
        $categoria->videos()->withoutGlobalScopes()->delete();
        $categoria->delete();
        return redirect()->route('admin.categorias.index');
    }
}
