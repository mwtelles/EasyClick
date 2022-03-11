@extends('layouts.app',['video_page'=>$video])

@section('content')
    <!-- MainContent -->
    <div class="main-content">
        <div class="content-video">
            <div class="row" style="margin-right: 0px; margin-left: 0px;">
                <div class="col-lg-8 col-l-8 col-sm-12 col-xs-12">
                    <div class="video-container iq-main-slider" style="padding-left: 10px;">
                        <video class="video d-block" controls controlsList="nodownload" preload="none" poster="{{\Illuminate\Support\Facades\Storage::url($video->img_thumb)}}">
                            <source src="{{\Illuminate\Support\Facades\Storage::url($video->video)}}" type="video/mp4">
                        </video>
                    </div>
                    <div class="movie-detail container-fluid" style="padding-left:10px!important;">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="video-content">
                                    <div class="title">
                                        <h1 class="title-video">
                                        {{$video->titulo}}
                                        </h1>
                                    </div>
                                    <div class="meta-video">
                                        <div class="visuazaliation">
                                            <span class="info-video" >{{$video->visualizacoes->count()}} Visualizações</span>
                                            <span class="info-video" >•</span>
                                            <span class="info-video">Postado em {{date('d/m/Y',strtotime($video->created_at))}}</span>
                                        </div>
                                        <div class="like-and-share">
                                            <div class="section-share-and-like share-icons music-play-lists">
                                                @if(auth()->check())
                                                    <div class="video-like" data-video="{{$video->id}}"><span
                                                            @if($video->curtidas()->where('user_id',auth()->user()->id)->first()) class="liked"
                                                            @endif id="span-like-{{$video->id}}"><i class="ri-heart-fill like-button"></i></span>
                                                    </div>@endif
                                                <div class="share">
                                                    <span class="share-button"><i class="ri-share-fill share-button-icon"></i></span>
                                                    <div class="share-box">
                                                        <div class="d-flex align-items-center">
                                                            <a href="https://www.facebook.com/sharer?u={{route('video.show',$video->code)}}" class="share-ico"><i class="ri-facebook-fill"></i></a>
                                                            <a href="javascript:void(0)" onclick="copyToClipboard('{{route('video.show',$video->code)}}')" class="share-ico"><i class="ri-links-fill"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                @if(auth()->check() && $video->user->inscritos()->where('inscrito_id',auth()->user()->id)->first())
                                                    <div>
                                                        <button class="btn btn-default inscrever" data-video="{{$video->id}}">Inscrito
                                                        </button>
                                                    </div>
                                                @else
                                                    <div>
                                                        <button class="btn btn-danger inscrever" data-video="{{$video->id}}">Inscrever-se
                                                        </button>
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="container-meta-video">
                                    <div class="content-creator-video">
                                        <div class="row description-video-creator">
                                            <div class="col-2">
                                                <img src="{{$video->user->imagem_perfil}}" class=" img-fluid avatar-40 rounded-circle">
                                            </div>
                                            <div class="col-10">
                                                <h6 class="iq-title"><a href="{{route('canal.show',$video->user)}}" tabindex="0">{{$video->user->name}}</a>
                                                </h6>
                                                <span class="info-video">{{$video->user->inscritos()->count()}} {{($video->user->inscritos()->count() > 1)?'Inscritos':'Inscrito'}}</span>
                                                <span class="info-video"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="content-description-video">
                                        <div class="description">
                                            <h1 style="white-space: pre-wrap;">{!!$video->descricao!!}</h1>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row" style="padding-left:10px;">
                            @include('components.comentarios.index')
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-l-4 col-sm-12 col-xs-12">
                    <section id="iq-favorites">
                        <div class="container-fluid">
                            <div class="block-space">
                                <div class="row">
                                    <div class="col-sm-12 overflow-hidden">
                                        <div class="iq-main-header d-flex align-items-center justify-content-between">
                                            <h4 class="main-title">Assista também</h4>
                                            <a href="{{route('videos')}}" class="text-primary">Ver tudo</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    @foreach($video->categoria->videos as $video)
                                    <div class="col-sm-12">

                                        <div class="suggestede-contens">
                                            <ul class="list-inline  pt-4 mb-0">

                                                    @include('components.video_card_vertical',['video'=>$video])


                                            </ul>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
@endsection
