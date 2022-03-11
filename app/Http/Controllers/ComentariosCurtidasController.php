<?php

namespace App\Http\Controllers;

use App\Models\Comentario;
use App\Models\ComentariosCurtida;
use Illuminate\Http\Request;

class ComentariosCurtidasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        $comentario_id = $request->comentario_id;
        $ja_curtido = ComentariosCurtida::where('comentario_id',$comentario_id)->where('user_id',auth()->user()->id)->first();
        if($ja_curtido){
            $ja_curtido->delete();
            return response()->json(Comentario::find($comentario_id)->curtidas->count(),201);
        }
        $curtida = ComentariosCurtida::create([
            'comentario_id' =>  $comentario_id,
            'user_id'   =>  auth()->user()->id
        ]);
        return response()->json(Comentario::find($comentario_id)->curtidas->count(),200);
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
    }
}
