<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class VideosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.videos.index',['videos'=>Video::paginate(10)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.videos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $video = new Video();
        $video->fill($data);
        $video->img_thumb = $request->file('img_thumb')->store('thumbs','public');
        $video->video    = $request->file('video')->store('videos','public');

        if(auth()->user()->videos()->create($video->toArray())){
            return redirect()->route('videos.create')->with('success','Video cadastrado com sucesso!');
        }
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
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit(Video $video)
    {
        return view('admin.videos.edit',['video'=>$video]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Video $video)
    {
        $data = $request->all();
        if($request->hasFile('img_thumb')){
            if(file_exists($video->img_thumb)) unlink($video->img_thumb);
            $video->img_thumb = $request->file('img_thumb')->store('thumbs','public');
        }
        if($request->hasFile('video')){
            if(file_exists($video->video)) unlink($video->video);

            $video->video = $request->file('video')->store('videos','public');
        }
        $video->fill($data);

        if($video->save()){
            return redirect()->route('admin.videos.edit',['video'=>$video])->with('success','Video salvo com sucesso!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($video)
    {
        $video = Video::find($video);
        $video->delete();
        return redirect()->route('admin.videos.index');
    }

    public function all(Request $request){
        $videos = Video::where('titulo','like',"%{$request->search}%")->with([
            'user' => static function($q) use($request){
                return $q->orWhere('name','like',"%{$request->search}%");
            }
        ]);

        return response()->json(["results"=>$videos->get()]);
    }
}
