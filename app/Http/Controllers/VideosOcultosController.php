<?php

namespace App\Http\Controllers;

use App\Models\VideosOculto;
use Illuminate\Http\Request;

class VideosOcultosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('ocultados.index',[
            'videos_ocultos' => auth()->user()->videos_ocultos
        ]);
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
        $video_oculto = VideosOculto::where('video_id',$request->video_id)->where('user_id',auth()->user()->id)->first();
        if(!$video_oculto){
            $video_oculto = VideosOculto::create([
                'video_id'  =>  $request->video_id,
                'user_id'   =>  auth()->user()->id
            ]);
            return response()->json($video_oculto,200);
        }

        $video_oculto->delete();
        return response()->json($video_oculto,201);
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
