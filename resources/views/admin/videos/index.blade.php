@extends('admin.layouts.static',['menu'=>'video'])

@section('main')
    <div id="content-page" class="content-page">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                            <div class="iq-header-title">
                                <h4 class="card-title">Vídeos cadastrados</h4>
                            </div>
                            <div class="iq-card-header-toolbar d-flex align-items-center">
                                <a href="{{route('admin.videos.create')}}" class="btn btn-primary">Novo vídeo</a>
                            </div>
                        </div>
                        <div class="iq-card-body">
                            <div class="table-view">
                                <table class="data-tables table movie_table " style="width:100%">
                                    <thead>
                                    <tr>
                                        <th>Vídeo</th>
                                        <th>Qualidade</th>
                                        <th>Categoria</th>
                                        <th>Ano Criação</th>
                                        <th>Linguagem</th>
                                        <th style="width: 20%;">Descrição</th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($videos as $video)
                                        <tr>
                                            <td>
                                                <div class="media align-items-center">
                                                    <div class="iq-movie">
                                                        <a href="javascript:void(0);"><img
                                                                src="{{Storage::url($video->img_thumb)}}"
                                                                class="img-border-radius avatar-40 img-fluid"
                                                                alt=""></a>
                                                    </div>
                                                    <div class="media-body text-white text-left ml-3">
                                                        <p class="mb-0">{{$video->titulo}}</p>
                                                        <small>{{gmdate('H:i:s',$video->duracao)}}</small>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>{{$video->qualidade}}</td>
                                            <td>{{$video->categoria->titulo}}</td>
                                            <td>{{$video->ano_lancamento}}</td>
                                            <td>{{$video->linguagem}}</td>
                                            <td>
                                                <p>{{$video->descricao}}
                                                </p>
                                            </td>
                                            <td>
                                                <div class="flex align-items-center list-user-action">
                                                    <a class="iq-bg-warning" data-toggle="tooltip" data-placement="top"
                                                       title=""
                                                       data-original-title="View" href="#"><i
                                                            class="lar la-eye"></i></a>
                                                    <a class="iq-bg-success" data-toggle="tooltip" data-placement="top"
                                                       title=""
                                                       data-original-title="Editar" href="{{route('admin.videos.edit',$video)}}"><i
                                                            class="ri-pencil-line"></i></a>
                                                    <form id="form-deletar-{{$video->id}}" onsubmit="return confirm('Deseja mesmo deletar esse vídeo?');" style="display: inline" action="{{route('admin.videos.destroy',$video->id)}}" method="post">
                                                        @csrf
                                                        @method('delete')
                                                        <a onclick="$('#form-deletar-{{$video->id}}').submit()" type="submit" class="iq-bg-primary" data-toggle="tooltip" data-placement="top"
                                                                title=""
                                                                data-original-title="Deletar video" href="#"><i
                                                                class="ri-delete-bin-line"></i></a>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
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
