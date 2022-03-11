<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Notifications\Notification;

class IndexController extends Controller
{
    public function home()
    {
        $data['top10_videos_de_categoria'] = Categoria::whereHas('videos')->limit(10)->get();
        return view('home', $data);
    }

    public function videos(Request $request)
    {
        $search = null;
        $videos = Video::all();
        if($request->search){
            $videos = Video::where('titulo','LIKE','%'.$request->search.'%')
                ->whereHas('user',function($q) use ($request){
                    return $q->orWhere('name','LIKE','%'.$request->search.'%');
                })->get();
        }
        return view('videos',[
            'videos'=>$videos
        ]);
    }

    public function video(Video $video)
    {
        if (auth()->check()) {
            $last_view = $video->visualizacoes()->where('user_id', auth()->user()->id)->orderByDesc('created_at')->first();
            if($last_view){
                if (now()->subMinutes(5)->toDateTime() > $last_view->created_at) {//Se a ultima visualizacao do usuario foi em mais de 5 minutos
                    $video->visualizacoes()->create(['user_id' => auth()->user()->id]);
                }
            }else{
                $video->visualizacoes()->create(['user_id' => auth()->user()->id]);
            }

            $notifications = auth()->user()->unreadNotifications->where('data.video_id',$video->id);

            foreach($notifications as $n){
                $n->markAsRead();
            }
        } else {
            $video->visualizacoes()->create();
        }

        return view('video', [
            'video' => $video,
            'comentarios'=>$video->comentarios()->orderBy('created_at','ASC')->paginate(6)
        ]);
    }
}
