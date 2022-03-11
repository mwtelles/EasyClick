<?php

namespace App\Http\Controllers;

use App\Models\Video;
use App\Notifications\VideoCurtido;
use Illuminate\Http\Request;
use Illuminate\Notifications\Notification;

class CurtidasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $curtidas = auth()->user()->curtidas()
            ->when($request->order,function($q) use ($request){
                return $q->orderBy('created_at',$request->order);
            })->orderBy('created_at','DESC')->get();;
        return view('curtidos.index',[
            'curtidas'=>$curtidas
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
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        $video = Video::find($id);
        $curtida = $video->curtidas()->where('user_id',auth()->user()->id)->first();
        if($curtida){
            $curtida->delete();
            return response()->json($curtida,204);
        }
        $curtida = $video->curtidas()->create([
            'user_id'=>auth()->user()->id,
        ]);
        $video->user->notify(new VideoCurtido($curtida));
        return response()->json($curtida,200);
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
