<!doctype html>
@php
    $video_page = isset($video_page)?$video_page:null;
    $banner = isset($banner)?$banner:true;
@endphp
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="CSRF_TOKEN" content="{{csrf_token()}}">
    <title>EzClick</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="/temp/frontend/images/favicon.ico"/>
<!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/temp/frontend/css/bootstrap.min.css"/>
    <!-- Typography CSS -->
    <link rel="stylesheet" href="/temp/frontend/css/typography.css">
    <!-- Style -->
    <link rel="stylesheet" href="/temp/frontend/css/style.css"/>
    <!-- Responsive -->
    <link rel="stylesheet" href="/temp/frontend/css/responsive.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
          integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>

</head>
<body>
<input type="hidden" id="csrf_token" value="{{csrf_token()}}">
<!-- loader Start -->
{{--<div id="loading">--}}
{{--    <div id="loading-center">--}}
{{--    </div>--}}
{{--</div>--}}
<!-- loader END -->

<!-- Header -->
<header id="main-header" class="@if(isset($nav)) {{$nav}} @endif"
        @if($video_page) style="position: relative!important" @endif>
    <div class="main-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <nav class="navbar navbar-expand-lg navbar-light p-0">
                        <a href="/temp/frontend/#" class="navbar-toggler c-toggler" data-toggle="collapse"
                           data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                           aria-expanded="false" aria-label="Toggle navigation">
                            <div class="navbar-toggler-icon" data-toggle="collapse">
                                <span class="navbar-menu-icon navbar-menu-icon--top"></span>
                                <span class="navbar-menu-icon navbar-menu-icon--middle"></span>
                                <span class="navbar-menu-icon navbar-menu-icon--bottom"></span>
                            </div>
                        </a>
                        <a class="navbar-brand" href="/">
                            <img class="img-fluid logo" src="/temp/frontend/images/logo.png"
                                 alt="streamit"/>
                        </a>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <div class="menu-main-menu-container">
                                <ul id="top-menu" class="navbar-nav d-flex">
                                    <li class="menu-item">
                                        <a href="{{route('index')}}">Home</a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="{{route('videos')}}">Vídeos</a>
                                    </li>
                                {{--                                    <li class="menu-item">--}}
                                {{--                                        <a href="/temp/frontend/show-category.html">Tv Shows</a>--}}
                                {{--                                    </li>--}}
                                <!-- <li class="menu-item">
                                       <a href="/temp/frontend/movie-category.html">Blog</a>
                                    </li> -->
                                    {{--                                    <li class="menu-item">--}}
                                    {{--                                        <a href="/temp/frontend/#">Pages</a>--}}
                                    {{--                                        <ul class="sub-menu">--}}
                                    {{--                                            <li class="menu-item"><a href="/temp/frontend/about-us.html">About Us</a></li>--}}
                                    {{--                                            <li class="menu-item "><a href="/temp/frontend/contact.html">Contact</a></li>--}}
                                    {{--                                            <li class="menu-item"><a href="/temp/frontend/faq.html">FAQ</a></li>--}}
                                    {{--                                            <li class="menu-item"><a href="/temp/frontend/privacy-policy.html">Privacy-Policy</a></li>--}}
                                    {{--                                            <li class="menu-item"><a href="/temp/frontend/#">Pricing</a>--}}
                                    {{--                                                <ul class="sub-menu">--}}
                                    {{--                                                    <li class="menu-item"><a href="/temp/frontend/pricing-plan-1.html">Pricing Plan 1</a></li>--}}
                                    {{--                                                    <li class="menu-item"><a href="/temp/frontend/pricing-plan-2.html">Pricing Plan 2</a></li>--}}
                                    {{--                                                </ul>--}}
                                    {{--                                            </li>--}}
                                    {{--                                        </ul>--}}
                                    {{--                                    </li>--}}
                                </ul>
                            </div>
                        </div>
                        <div class="mobile-more-menu">
                            <a href="javascript:void(0);" class="more-toggle" id="dropdownMenuButton"
                               data-toggle="more-toggle" aria-haspopup="true" aria-expanded="false">
                                <i class="ri-more-line"></i>
                            </a>
                            <div class="more-menu" aria-labelledby="dropdownMenuButton">
                                <div class="navbar-right position-relative">
                                    <ul class="d-flex align-items-center justify-content-end list-inline m-0">
                                        <li class="nav-item nav-icon">
                                            <a href="/temp/frontend/#" class="search-toggle device-search">
                                                <i class="ri-search-line"></i>
                                            </a>
                                            <div class="search-box iq-search-bar d-search">
                                                <form action="{{route('videos')}}" class="searchbox">
                                                    <div class="form-group position-relative">
                                                        <input type="text" name="search" class="text search-input font-size-12"
                                                               placeholder="Digite aqui para pesquisar...">
                                                        <i class="search-link ri-search-line"></i>
                                                    </div>
                                                </form>
                                            </div>
                                        </li>
                                        <li>
                                            <a href="{{route('videos.create')}}" class="video-add  position-relative">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24"
                                                     height="24">
                                                    <path fill="none" d="M0 0H24V24H0z"/>
                                                    <path
                                                        d="M16 4c.552 0 1 .448 1 1v4.2l5.213-3.65c.226-.158.538-.103.697.124.058.084.09.184.09.286v12.08c0 .276-.224.5-.5.5-.103 0-.203-.032-.287-.09L17 14.8V19c0 .552-.448 1-1 1H2c-.552 0-1-.448-1-1V5c0-.552.448-1 1-1h14zm-1 2H3v12h12V6zM8 8h2v3h3v2H9.999L10 16H8l-.001-3H5v-2h3V8zm13 .841l-4 2.8v.718l4 2.8V8.84z"
                                                        fill="var(--iq-body-text)"/>
                                                </svg>
                                            </a>
                                        </li>
                                        @if(auth()->check())
                                            <li class="nav-item nav-icon">
                                                @if(count(notifications()) > 0)
                                                    <a href="#" class="search-toggle" data-toggle="search-toggle">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="22"
                                                             height="22"
                                                             class="noti-svg">
                                                            <path fill="none" d="M0 0h24v24H0z"/>
                                                            <path
                                                                d="M18 10a6 6 0 1 0-12 0v8h12v-8zm2 8.667l.4.533a.5.5 0 0 1-.4.8H4a.5.5 0 0 1-.4-.8l.4-.533V10a8 8 0 1 1 16 0v8.667zM9.5 21h5a2.5 2.5 0 1 1-5 0z"/>
                                                        </svg>

                                                        <span class="bg-danger dots"></span>
                                                    </a>
                                                @endif

                                                @if(auth()->check())
                                                    <div class="iq-sub-dropdown">
                                                        <div class="iq-card shadow-none m-0">
                                                            <div class="iq-card-body">
                                                                @foreach(notifications() as $notification)
                                                                    <a href="{{route('video.show',\App\Models\Video::find($notification->data['video_id']))}}"
                                                                       class="iq-sub-card">
                                                                        <div class="media align-items-center">
                                                                            <img style="width: 100px;"
                                                                                 src="{{\Illuminate\Support\Facades\Storage::url(\App\Models\Video::find($notification->data['video_id'])->img_thumb)}}"
                                                                                 class="img-fluid mr-3"
                                                                                 alt="streamit"/>
                                                                            <div class="media-body">
                                                                                <h6 class="mb-0 ">{{\App\Models\User::find($notification->data['user_id'])->name}}</h6>
                                                                                <small class="font-size-12"> curtiu seu
                                                                                    vídeo</small>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                @endforeach
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endif
                                            </li>
                                            <li class="nav-item nav-icon">
                                                <a href="{{route('perfil.index')}}"
                                                   class="iq-user-dropdown search-toggle p-0 d-flex align-items-center"
                                                   data-toggle="search-toggle">
                                                    <img src="{{auth()->user()->imagem_perfil}}"
                                                         class="img-fluid avatar-40 rounded-circle" alt="user">
                                                </a>
                                                <div class="iq-sub-dropdown iq-user-dropdown">
                                                    <div class="iq-card shadow-none m-0">
                                                        <div class="iq-card-body p-0 pl-3 pr-3">
                                                            <a href="{{route('perfil.index')}}"
                                                               class="iq-sub-card setting-dropdown">
                                                                <div class="media align-items-center">
                                                                    <div class="right-icon">
                                                                        <i class="ri-file-user-line text-primary"></i>
                                                                    </div>
                                                                    <div class="media-body ml-3">
                                                                        <h6 class="my-0 ">Perfil</h6>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                            <a href="{{route('canal.index')}}"
                                                               class="iq-sub-card setting-dropdown">
                                                                <div class="media align-items-center">
                                                                    <div class="right-icon">
                                                                        <i class="ri-profile-line text-primary"></i>
                                                                    </div>
                                                                    <div class="media-body ml-3">
                                                                        <h6 class="my-0 ">Canal</h6>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                            <a href="{{route('visualizacao.index')}}"
                                                               class="iq-sub-card setting-dropdown">
                                                                <div class="media align-items-center">
                                                                    <div class="right-icon">
                                                                        <i class="ri-restart-line text-primary"></i>
                                                                    </div>
                                                                    <div class="media-body ml-3">
                                                                        <h6 class="my-0 ">Histórico</h6>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                            <a href="{{route('curtidas.index')}}"
                                                               class="iq-sub-card setting-dropdown">
                                                                <div class="media align-items-center">
                                                                    <div class="right-icon">
                                                                        <i class="ri-heart-line text-primary"></i>
                                                                    </div>
                                                                    <div class="media-body ml-3">
                                                                        <h6 class="my-0 ">Marcados como "Amei"</h6>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                            <a href="{{route('videos_ocultos.index')}}"
                                                               class="iq-sub-card setting-dropdown">
                                                                <div class="media align-items-center">
                                                                    <div class="right-icon">
                                                                        <i class="ri-eye-close-fill text-primary"></i>
                                                                    </div>
                                                                    <div class="media-body ml-3">
                                                                        <h6 class="my-0 "> Ocultados</h6>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                            <a href="{{route('videos.index')}}"
                                                               class="iq-sub-card setting-dropdown">
                                                                <div class="media align-items-center">
                                                                    <div class="right-icon">
                                                                        <i class="ri-video-line text-primary"></i>
                                                                    </div>
                                                                    <div class="media-body ml-3">
                                                                        <h6 class="my-0 ">Seus vídeos</h6>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                            <form id="form-logout" style="display: flex" method="post"
                                                                  action="{{route('logout')}}">
                                                                @csrf
                                                                <span style="cursor: pointer"
                                                                      onclick="$('#form-logout').submit()"
                                                                      class="iq-sub-card setting-dropdown">
                                                    <div class="media align-items-center">
                                                        <div class="right-icon">
                                                            <i class="ri-logout-circle-line text-primary"></i>
                                                        </div>
                                                        <div class="media-body ml-3">
                                                            <h6 class="my-0 ">Sair</h6>
                                                        </div>
                                                    </div>
                                                </span>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        @else
                                            <a href="{{route('login')}}" class="btn btn-danger">Entrar</a>
                                        @endif
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="navbar-right menu-right">
                            <ul class="d-flex align-items-center list-inline m-0">
                                <li class="nav-item nav-icon">
                                    <a href="/temp/frontend/#" class="search-toggle device-search">
                                        <i class="ri-search-line"></i>
                                    </a>
                                    <div class="search-box iq-search-bar d-search">
                                        <form action="{{route('videos')}}" class="searchbox">
                                            <div class="form-group position-relative">
                                                <input type="text" name="search" class="text search-input font-size-12"
                                                       placeholder="Digite aqui para pesquisar...">
                                                <i class="search-link ri-search-line"></i>
                                            </div>
                                        </form>
                                    </div>
                                </li>
                                <li>
                                    <a href="{{route('videos.create')}}" class="video-add  position-relative">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24"
                                             height="24">
                                            <path fill="none" d="M0 0H24V24H0z"/>
                                            <path
                                                d="M16 4c.552 0 1 .448 1 1v4.2l5.213-3.65c.226-.158.538-.103.697.124.058.084.09.184.09.286v12.08c0 .276-.224.5-.5.5-.103 0-.203-.032-.287-.09L17 14.8V19c0 .552-.448 1-1 1H2c-.552 0-1-.448-1-1V5c0-.552.448-1 1-1h14zm-1 2H3v12h12V6zM8 8h2v3h3v2H9.999L10 16H8l-.001-3H5v-2h3V8zm13 .841l-4 2.8v.718l4 2.8V8.84z"
                                                fill="var(--iq-body-text)"/>
                                        </svg>
                                    </a>
                                </li>
                                @if(auth()->check())
                                    <li class="nav-item nav-icon">
                                        @if(count(notifications()) > 0)
                                            <a href="#" class="search-toggle" data-toggle="search-toggle">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="22"
                                                     height="22"
                                                     class="noti-svg">
                                                    <path fill="none" d="M0 0h24v24H0z"/>
                                                    <path
                                                        d="M18 10a6 6 0 1 0-12 0v8h12v-8zm2 8.667l.4.533a.5.5 0 0 1-.4.8H4a.5.5 0 0 1-.4-.8l.4-.533V10a8 8 0 1 1 16 0v8.667zM9.5 21h5a2.5 2.5 0 1 1-5 0z"/>
                                                </svg>

                                                <span class="bg-danger dots"></span>
                                            </a>
                                        @endif

                                        @if(auth()->check())
                                            <div class="iq-sub-dropdown">
                                                <div class="iq-card shadow-none m-0">
                                                    <div class="iq-card-body">
                                                        @foreach(notifications() as $notification)
                                                            <a href="{{route('video.show',\App\Models\Video::find($notification->data['video_id']))}}"
                                                               class="iq-sub-card">
                                                                <div class="media align-items-center">
                                                                    <img style="width: 100px;"
                                                                         src="{{\Illuminate\Support\Facades\Storage::url(\App\Models\Video::find($notification->data['video_id'])->img_thumb)}}"
                                                                         class="img-fluid mr-3"
                                                                         alt="streamit"/>
                                                                    <div class="media-body">
                                                                        <h6 class="mb-0 ">{{\App\Models\User::find($notification->data['user_id'])->name}}</h6>
                                                                        <small class="font-size-12"> curtiu seu
                                                                            vídeo</small>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                    </li>
                                    <li class="nav-item nav-icon">
                                        <a href="{{route('perfil.index')}}"
                                           class="iq-user-dropdown search-toggle p-0 d-flex align-items-center"
                                           data-toggle="search-toggle">
                                            <img src="{{auth()->user()->imagem_perfil}}"
                                                 class="img-fluid avatar-40 rounded-circle" alt="user">
                                        </a>
                                        <div class="iq-sub-dropdown iq-user-dropdown">
                                            <div class="iq-card shadow-none m-0">
                                                <div class="iq-card-body p-0 pl-3 pr-3">
                                                    <a href="{{route('perfil.index')}}"
                                                       class="iq-sub-card setting-dropdown">
                                                        <div class="media align-items-center">
                                                            <div class="right-icon">
                                                                <i class="ri-file-user-line text-primary"></i>
                                                            </div>
                                                            <div class="media-body ml-3">
                                                                <h6 class="my-0 ">Perfil</h6>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <a href="{{route('canal.index')}}"
                                                       class="iq-sub-card setting-dropdown">
                                                        <div class="media align-items-center">
                                                            <div class="right-icon">
                                                                <i class="ri-profile-line text-primary"></i>
                                                            </div>
                                                            <div class="media-body ml-3">
                                                                <h6 class="my-0 ">Canal</h6>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <a href="{{route('visualizacao.index')}}"
                                                       class="iq-sub-card setting-dropdown">
                                                        <div class="media align-items-center">
                                                            <div class="right-icon">
                                                                <i class="ri-restart-line text-primary"></i>
                                                            </div>
                                                            <div class="media-body ml-3">
                                                                <h6 class="my-0 ">Histórico</h6>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <a href="{{route('curtidas.index')}}"
                                                       class="iq-sub-card setting-dropdown">
                                                        <div class="media align-items-center">
                                                            <div class="right-icon">
                                                                <i class="ri-heart-line text-primary"></i>
                                                            </div>
                                                            <div class="media-body ml-3">
                                                                <h6 class="my-0 ">Marcados como "Amei"</h6>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <a href="{{route('videos_ocultos.index')}}"
                                                       class="iq-sub-card setting-dropdown">
                                                        <div class="media align-items-center">
                                                            <div class="right-icon">
                                                                <i class="ri-eye-close-fill text-primary"></i>
                                                            </div>
                                                            <div class="media-body ml-3">
                                                                <h6 class="my-0 "> Ocultados</h6>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <form id="form-logout" style="display: flex" method="post"
                                                          action="{{route('logout')}}">
                                                        @csrf
                                                        <span style="cursor: pointer"
                                                              onclick="$('#form-logout').submit()"
                                                              class="iq-sub-card setting-dropdown">
                                                    <div class="media align-items-center">
                                                        <div class="right-icon">
                                                            <i class="ri-logout-circle-line text-primary"></i>
                                                        </div>
                                                        <div class="media-body ml-3">
                                                            <h6 class="my-0 ">Sair</h6>
                                                        </div>
                                                    </div>
                                                </span>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                @else
                                    <a href="{{route('login')}}" class="btn btn-danger">Entrar</a>
                                @endif
                            </ul>
                        </div>
                    </nav>
                    <div class="nav-overlay"></div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Header End -->
<!-- Slider Start -->
@if(!$video_page and $banner)
    <section id="home" class="iq-main-slider p-0">
        <div id="home-slider" class="slider m-0 p-0">
            @foreach(videos_banner() as $video_banner)
                <div class="slide slick-bg "
                     style="background-image: url({{\Illuminate\Support\Facades\Storage::url($video_banner->img_thumb)}}); width:100%!important; height:100%; margin-top: 80px;">
                    <div class="container-fluid position-relative h-100">
                        <div class="slider-inner h-100">
                            <div class="row align-items-center  h-100">
                                <div class="col-xl-6 col-lg-12 col-md-12">
                                    <a href="{{route('video.show',$video_banner)}}">
                                        <div class="channel-logo" data-animation-in="fadeInLeft" data-delay-in="0.5"
                                             style="padding-bottom: 0px;">
                                            <img
                                                src="{{$video_banner->user->imagem_perfil}}"
                                                class="c-logo" alt="streamit">
                                        </div>
                                    </a>
                                    <h1 class="slider-text big-title title text-uppercase"
                                        data-animation-in="fadeInLeft"
                                        data-delay-in="0.6">{{Illuminate\Support\Str::limit($video_banner->titulo,20,'...')}}</h1>

                                    <div class="d-flex flex-wrap align-items-center fadeInLeft animated"
                                         data-animation-in="fadeInLeft" style="opacity: 1;">
                                        <div class="slider-ratting d-flex align-items-center mr-4 mt-2 mt-md-3">
                                            <span class="text-white ml-2"><i class="fa fa-eye"></i> {{$video_banner->visualizacoes()->count()}}</span>
                                        </div>
                                        <div class="d-flex align-items-center mt-2 mt-md-3">
                                            <span class="ml-3">{{gmdate('H:i:s',$video_banner->duracao)}}</span>
                                        </div>
                                    </div>

                                    <!-- <div class="d-flex align-items-center" data-animation-in="fadeInUp" data-delay-in="1">

                                       <span class="badge badge-secondary p-2">18+</span>
                                       <span class="ml-3">2 Seasons</span>
                                    </div> -->
                                    <p data-animation-in="fadeInUp" data-delay-in="1.2"
                                       style="white-space: pre-wrap;">{{$video_banner->descricao}}
                                    </p>
                                    <div class="trending-list" data-wp_object-in="fadeInUp" data-delay-in="1.2">
                                        <div class="text-primary title starring">
                                            Autor: <span class="text-body">{{$video_banner->user->name}}</span>
                                        </div>
                                        <div class="text-primary title genres">
                                            Categoria: <span
                                                class="text-body">{{$video_banner->categoria['titulo']}}</span>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center r-mb-23" data-animation-in="fadeInUp"
                                         data-delay-in="1.2">
                                        <a href="{{route('video.show',$video_banner)}}" class="btn btn-hover iq-button"><i
                                                class="fa fa-play mr-2"
                                                aria-hidden="true"></i>Asssitir</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-5 col-lg-12 col-md-12 trailor-video">

                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
            <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 44 44" width="44px" height="44px" id="circle"
                    fill="none" stroke="currentColor">
                <circle r="20" cy="22" cx="22" id="test"></circle>
            </symbol>
        </svg>
    </section>
@endif

<!-- Slider End -->
<!-- MainContent -->
@yield('content')
@if(!auth()->check())
    <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header border-bottom-0">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class=" text-center mb-2">
                        <h4 class="text-primary">Login</h4>
                    </div>
                    <div class="d-flex flex-column text-center">
                        <form action="{{route('login')}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <input autocomplete="off" type="email" name="email" class="form-control" id="email1"
                                       placeholder="Seu E-mail">
                            </div>
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                            <div class="form-group">
                                <input autocomplete="off" type="password" name="password" class="form-control"
                                       id="password1" placeholder="Insira uma senha">
                            </div>
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                            <button type="submit" class="btn btn-outline-primary btn-block btn-round">Entrar</button>
                        </form>

                        {{--                        <div class="text-center text-muted delimiter">Ou use uma rede social</div>--}}
                        {{--                        <div class="d-flex justify-content-center social-buttons">--}}
                        {{--                            <button type="button" class="btn btn-secondary btn-round" data-toggle="tooltip" data-placement="top" title="Twitter">--}}
                        {{--                                <i class="fab fa-twitter"></i>--}}
                        {{--                            </button>--}}
                        {{--                            <button type="button" class="btn btn-secondary btn-round" data-toggle="tooltip" data-placement="top" title="Facebook">--}}
                        {{--                                <i class="fab fa-facebook"></i>--}}
                        {{--                            </button>--}}
                        {{--                            <button type="button" class="btn btn-secondary btn-round" data-toggle="tooltip" data-placement="top" title="Linkedin">--}}
                        {{--                                <i class="fab fa-linkedin"></i>--}}
                        {{--                            </button>--}}
                        {{--                            </di>--}}
                        {{--                        </div>--}}
                    </div>
                </div>
                <div class="modal-footer d-flex justify-content-center">
                    <div class="signup-section">Não possui cadastro? <a href="{{route('register')}}" class="text-info">
                            Cadastrar</a>.
                    </div>
                </div>
            </div>
        </div>
    @endif

    <!-- MainContent End-->
        <!-- back-to-top -->
        <div id="back-to-top">
            <a class="top" href="/temp/frontend/#top" id="top"> <i class="fa fa-angle-up"></i> </a>
        </div>
        <div class="action">
            <span>+</span>
            <ul>
                <li><a href="#">Ocultar Video</a></li>
            </ul>
        </div>
        <!-- back-to-top End -->
        <!-- jQuery, Popper JS -->
        <script src="/temp/frontend/js/jquery-3.4.1.min.js"></script>
        <script src="/temp/frontend/js/popper.min.js"></script>
        <!-- Bootstrap JS -->
        <script src="/temp/frontend/js/bootstrap.min.js"></script>
        <!-- Slick JS -->
        <script src="/temp/frontend/js/slick.min.js"></script>
        <!-- owl carousel Js -->
        <script src="/temp/frontend/js/owl.carousel.min.js"></script>
        <!-- select2 Js -->
        <script src="/temp/frontend/js/select2.min.js"></script>
        <!-- Magnific Popup-->
        <script src="/temp/frontend/js/jquery.magnific-popup.min.js"></script>
        <!-- Slick Animation-->
        <script src="/temp/frontend/js/slick-animation.min.js"></script>
        <!-- Custom JS-->
        <script src="/js/dist/tata.js"></script>
        <script src="/js/dist/moment.js"></script>
        <script type="text/javascript">
            $('.action').on('click', function () {
                let action = $(this).toggleClass('active');
            })
        </script>
        <script>
            moment.locale('pt-br');
        </script>
        <script src="/temp/frontend/js/custom.js"></script>
    @stack('js')
</body>
</html>
