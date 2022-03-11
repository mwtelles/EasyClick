<?php

use App\Models\Config;
use App\Models\Video;

function videos_banner(){
    $config = Config::where('name','videos_banner')->first();
    $videos = [];
    if($config){
        $videos_config = json_decode($config->status);
        if ($videos_config) {
            foreach ($videos_config as $video) {
                $video = Video::find($video);
                if($video){
                    $videos[] = $video;
                }
            }
        }
    }
    return $videos;
}

function videos_recentes(){
    $videos = Video::whereDate('created_at','>=',\Carbon\Carbon::now()->subDay())->orderByDesc('created_at')->get();
    if(count($videos) <= 6){
        return Video::orderByDesc('created_at')->limit(6)->get();
    }
    return $videos;
}

function video_mais_visualizado(){
    $video = \App\Models\Visualizacao::selectRaw('video_id, count(video_id) as count')->groupBy('video_id')->orderByRaw('count DESC')->first();
    return $video->video_id??null;
}

function videos_mais_visualizado($limite = null){
    return \App\Models\Visualizacao::
    selectRaw('video_id, count(video_id) as count')->groupByRaw('video_id')->orderByRaw('count DESC')->when($limite, function($q) use ($limite){
        return $q->limit($limite);
    })->get();
}

function videos_mais_curtidos($limite = null){
    return \App\Models\Curtida::selectRaw('video_id, count(video_id) as count')->groupByRaw('video_id')->orderByRaw('count DESC')->when($limite, function($q) use ($limite){
        return $q->limit($limite);
    })->get();
}

function notifications(){
    return auth()->user()->unreadNotifications()->take(5)->get();
}
