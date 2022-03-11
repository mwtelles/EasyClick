<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VisualizacaoController extends Controller
{
    public function index(Request $request){
        $visualizados = auth()->user()->visualizados()
            ->when($request->order,function($q) use ($request){
                return $q->orderBy('created_at',$request->order);
            })->orderBy('created_at','DESC')->get();
        return view('historico.index',[
            'visualizados'=>$visualizados
        ]);
    }
}
