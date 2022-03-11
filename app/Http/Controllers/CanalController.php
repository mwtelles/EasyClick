<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class CanalController extends Controller
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index(){
        $videos = auth()->user()->videos()->paginate(4);
        return view('canal.index',[
            'videos'    =>  $videos
        ]);
    }

    /**
     * @param Request $request
     * @param User $perfil
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $perfil){
        $perfil = User::find($perfil);
        $validator = Validator::make($request->all(),[
            'capa_canal'=>'image',
        ]);
        if($validator->fails()){
            return redirect()->route('canal.index')->withErrors($validator);
        }
        if($request->hasFile('capa_canal')){
            if($perfil->capa_canal){
                Storage::delete('/public/'.$perfil->capa_canal);
            }
            $perfil->update([
                'capa_canal'    =>  $request->file('capa_canal')->store('users/canal/capa','public')
            ]);
        }

        return redirect()->route('canal.index');
    }

    public function detalhesVideo(Request $request,   $video){
        $video = Video::withoutGlobalScopes()->find($video);
        return view('canal.video.index',[
            'video' =>  $video
        ]);
    }

    public function show($user){
        $user = User::findOrFail($user);
        return view('canal.show',[
            'user'  =>  $user
        ]);
    }
}
