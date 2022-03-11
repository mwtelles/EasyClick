@extends('admin.layouts.static',['menu'=>'home'])

@section('main')
    <div id="content-page" class="content-page">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-sm-6 col-lg-6 col-xl-3">
                            <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                                <div class="iq-card-body">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="iq-cart-text text-capitalize">
                                            <p class="mb-0">
                                                Visualizações Hoje
                                            </p>
                                        </div>
                                        <div class="icon iq-icon-box-top rounded-circle bg-primary">
                                            <i class="las la-eye"></i>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between mt-3">
                                        <h4 class=" mb-0">+{{$visualizacoes_hoje}}</h4>
                                        <p class="mb-0 text-{{(($visualizacoes_hoje-$visualizacoes_ontem/100)< 0)?'primary':'success'}}"><span><i
                                                    class="fa fa-caret-{{(($visualizacoes_hoje-$visualizacoes_ontem/100)< 0)?'down':'up'}} mr-2"></i></span>{{$visualizacoes_hoje-$visualizacoes_ontem/100}}
                                            %</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-6 col-xl-3">
                            <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                                <div class="iq-card-body">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="iq-cart-text text-capitalize">
                                            <p class="mb-0 font-size-14">
                                                Categorias
                                            </p>
                                        </div>
                                        <div class="icon iq-icon-box-top rounded-circle bg-info">
                                            <i class="fa fa-car"></i>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between mt-3">
                                        <h4 class=" mb-0">{{\App\Models\Categoria::count()}}</h4>
                                        <p class="mb-0 text-{{(($categorias_hoje-$categorias_ontem/100)< 0)?'primary':'success'}}"><span><i
                                                    class="fa fa-caret-{{(($categorias_hoje-$categorias_ontem/100)< 0)?'down':'up'}} mr-2"></i></span>{{$categorias_hoje-$categorias_ontem/100}}
                                            %</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-6 col-xl-3">
                            <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                                <div class="iq-card-body">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="iq-cart-text text-uppercase">
                                            <p class="mb-0 font-size-14">
                                                Usuários
                                            </p>
                                        </div>
                                        <div class="icon iq-icon-box-top rounded-circle bg-success">
                                            <i class="lar la-user"></i>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between mt-3">
                                        <h4 class=" mb-0">{{\App\Models\User::count()}}</h4>
                                        <p class="mb-0 text-{{(($usuarios_hoje-$usuarios_ontem/100)< 0)?'primary':'success'}}"><span><i
                                                    class="fa fa-caret-{{(($usuarios_hoje-$usuarios_ontem/100)< 0)?'down':'up'}} mr-2"></i></span>{{$usuarios_hoje-$usuarios_ontem/100}}
                                            %</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="iq-card w-100">
                                <div class="iq-card-header d-flex justify-content-between align-items-center">
                                    <div class="iq-header-title">
                                        <h4 class="card-title">Videos mais visualizados </h4>
                                    </div>
                                    <div id="top-rated-item-slick-arrow" class="slick-aerrow-block"></div>
                                </div>
                                <div class="iq-card-body">
                                    <ul class="list-unstyled row top-rated-item mb-0">
                                        @foreach(videos_mais_visualizado(5) as $vmv)

                                            @php
                                                $vmv = $vmv->video;
                                            @endphp
                                            @if($vmv)
                                            <li class="col-sm-6 col-lg-4 col-xl-3 iq-rated-box">
                                                <div class="iq-card mb-0">
                                                    <div class="iq-card-body p-0">
                                                        <div class="iq-thumb">
                                                            <a href="/video/{{$vmv->id}}">
                                                                <img
                                                                    src="{{\Illuminate\Support\Facades\Storage::url($vmv->img_thumb)}}"
                                                                    class="img-fluid w-100 img-border-radius" style="height: 250px;object-fit: contain" alt="">
                                                            </a>
                                                        </div>
                                                        <div class="iq-feature-list">
                                                            <h6 class="font-weight-600 mb-0">{{\Illuminate\Support\Str::limit($vmv->titulo,20,'...')}}</h6>
                                                            <p class="mb-0 mt-2">{{$vmv->user->name}}</p>
                                                            <div class="d-flex align-items-center my-2">
                                                                <p class="mb-0 mr-2"><i
                                                                        class="lar la-eye mr-1"></i> {{$vmv->visualizacoes()->count()}}
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            @endif
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="row">

                <div class="col-sm-12">
                    <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                            <div class="iq-header-title">
                                <h4 class="card-title">Videos adicionados recentemente</h4>
                            </div>
                        </div>
                        <div class="iq-card-body">
                            <div class="table-responsive">
                                <table class="data-tables table movie_table" style="width:100%">
                                    <thead>
                                    <tr>
                                        <th style="width:20%;">Video</th>
                                        <th style="width:10%;">Duração</th>
                                        <th style="width:20%;">Categoria</th>
                                        <th style="width:10%;">Visualizações</th>
                                        <th style="width:10%;">Curtidas</th>
                                        <th style="width:10%;">Autor</th>
                                        <th style="width:20%;">Data</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach(\App\Models\Video::orderByDesc('created_at')->limit(5)->get() as $vvr)
                                        <tr>
                                            <td>
                                                <div class="media align-items-center">
                                                    <div class="iq-movie">
                                                        <a href="javascript:void(0);"><img
                                                                src="{{\Illuminate\Support\Facades\Storage::url($vvr->img_thumb)}}"
                                                                class="img-border-radius avatar-60 img-fluid"
                                                                alt="" style="object-fit: cover"></a>
                                                    </div>
                                                    <div class="media-body text-white text-left ml-3">
                                                        <p class="mb-0">{{$vvr->titulo}}</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <i class="lar la-star mr-2"></i> {{gmdate('H:i:s',$vvr->duracao)}}
                                            </td>
                                            <td>{{$vvr->categoria->titulo}}</td>
                                            <td>
                                                <i class="lar la-eye "></i> {{$vvr->visualizacoes()->count()}}
                                            </td>
                                            <td>
                                                <i class="lar la-eye "></i> {{$vvr->curtidas()->count()}}
                                            </td>
                                            <td>{{$vvr->user->name}}</td>
                                            <td>{{date('d/m/Y',strtotime($vvr->created_at))}}</td>
                                            <td><i class="las la-heart text-primary"></i></td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                            <div class="iq-header-title">
                                <h4 class="card-title">Videos mais curtidos</h4>
                            </div>
                        </div>
                        <div class="iq-card-body">
                            <div class="table-responsive">
                                <table class="data-tables table movie_table" style="width:100%">
                                    <thead>
                                    <tr>
                                        <th style="width:20%;">Video</th>
                                        <th style="width:10%;">Duração</th>
                                        <th style="width:20%;">Categoria</th>
                                        <th style="width:10%;">Curtidas</th>
                                        <th style="width:10%;">Visualizações</th>
                                        <th style="width:10%;">Autor</th>
                                        <th style="width:20%;">Data</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach(videos_mais_curtidos(5) as $vvr)
                                        @if($vvr->video)
                                        <tr>
                                            <td>
                                                <div class="media align-items-center">
                                                    <div class="iq-movie">
                                                        <a href="javascript:void(0);">
                                                            <img
                                                                src="{{\Illuminate\Support\Facades\Storage::url($vvr->video->img_thumb)}}"
                                                                class="img-border-radius avatar-60 img-fluid"
                                                                alt="" style="object-fit: cover">
                                                        </a>
                                                    </div>
                                                    <div class="media-body text-white text-left ml-3">
                                                        <p class="mb-0">{{$vvr->video->titulo}}</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <i class="lar la-star mr-2"></i> {{gmdate('H:i:s',$vvr->video->duracao)}}
                                            </td>
                                            <td>{{$vvr->video->categoria->titulo}}</td>
                                            <td>
                                                <i class="lar la-eye "></i> {{$vvr->video->curtidas()->count()}}
                                            </td>
                                            <td>
                                                <i class="lar la-eye "></i> {{$vvr->video->visualizacoes()->count()}}
                                            </td>
                                            <td>{{$vvr->video->user->name}}</td>
                                            <td>{{date('d/m/Y',strtotime($vvr->video->created_at))}}</td>
                                            <td><i class="las la-heart text-primary"></i></td>
                                        </tr>
                                        @endif
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
