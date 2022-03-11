@extends('layouts.app',['banner'=>false,'nav'=>'position-relative'])

<style>
    .row .menu-canal {
        padding: 10px !important;;
        cursor: pointer !important;;
    }

    .row .menu-canal h5 {
        font-size: 20px !important;;
        font-weight: 400 !important;;
    }

    .row .menu-canal:hover, .row.menu-canal.show {
        background: var(--iq-primary) !important;
    }

    .row .menu-canal:hover > h5 i, .row.menu-canal.show > h5 i {
        color: white !important;
    }
</style>
@section('content')
    <!-- MainContent -->
    <section class="container-fluid">
        <div class="row">
            <img id="capa-canal" src="{{$user->capa_canal_src}}" height="500"
                 style="width:100%; object-fit: cover">
        </div>
        <div class="row" id="hero-canal-user">
            <div class="container mt-4 mb-4 main-content-canal">
                <div class="pic-canal-user">
                    <img src="{{$user->imagem_perfil}}" class="img-fluid avatar-90 rounded-circle border-user">
                </div>
                <div class="content-channel-user col-lg-10">
                    <div class="name-and-subscribes">
                        <h6 class="title-canal-user"><a href="/" tabindex="0">{{$user->name}}</a></h6>
                        <span class="info-video" style="font-weight: 500;">{{$user->inscritos()->count()}} {{($user->inscritos()->count() > 1)?'Inscritos':'Inscrito'}}</span>
                    </div>
                    <div class="subscribe">
                    @if(auth()->check() && auth()->user()->inscritos()->where('inscrito_id',auth()->user()->id)->first())
                        <div>
                            <button class="btn btn-default inscrever" data-video="{{auth()->user()->id}}">Inscrito
                            </button>
                        </div>
                    @else
                        <div>
                            <button class="btn btn-danger inscrever" data-video="{{auth()->user()->id}}">Inscrever-se
                            </button>
                        </div>
                    @endif
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="container mt-4 mb-4 content-video-channel">
            </div>
        </div>
        <div class="row">
            @foreach($user->videos_canal as $video)
                <div class="col-lg-3 col-l-3 col-md-6 col-sm-12 col-xs-12">
                    <ul class="list-inline  ">
                        @include('components.video_card',['video'=>$video])
                    </ul>
                </div>
            @endforeach
        </div>
        <!--<div class="container">
            <div class="row">
                <div class=" ml-5col-12 col-md-3 col-lg-3 mt-5 mb-5 nav nav-tabs d-block " style="border-bottom: none!important" id="nav-tab"
                     role="tablist">
                    <div class="row">
                        <div class="iq-main-header d-flex align-items-center justify-content-between">
                            <h4 class="main-title"><i class="ri-video-line text-primary"></i> {{$user->name}}</h4>
                        </div>
                    </div>
                    <a class="row menu-canal " id="menu-envios-tab" data-toggle="tab" href="#menu-envios">
                        <h5 class="border-danger"><i class="ri-video-fill text-primary  "></i> Envios </h5>
                    </a>
                </div>
                <div class="tab-content col-12 col-md-9 col-lg-9 mt-5 mb-5">
                    <div class="tab-pane fade in show active" id="menu-envios">
                        <div class="row">
                            @foreach($user->videos as $video)
                                <div class="col-12 col-lg-6 col-md-6">
                                    <ul class="list-inline  ">
                                        @include('components.video_card',['video'=>$video])
                                    </ul>
                                </div>
                            @endforeach
                        </div>

                    </div>
                </div>
            </div>
        </div> -->
    </section>
@endsection
