@extends('admin.layouts.static', ['menu'=>'categorias'])

@section('main')
    <div id="content-page" class="content-page">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                            <div class="iq-header-title">
                                <h4 class="card-title">Categorias</h4>
                            </div>
                            <div class="iq-card-header-toolbar d-flex align-items-center">
                                <a href="{{route('admin.categorias.create')}}" class="btn btn-primary">Nova Categoria</a>
                            </div>
                        </div>
                        <div class="iq-card-body">
                            <div class="table-view">
                                <table class="data-tables table movie_table " style="width:100%">
                                    <thead>
                                    <tr>
                                        <th style="width:10%;">#</th>
                                        <th style="width:20%;">Título</th>
                                        <th style="width:40%;">Descrição</th>
                                        <th style="width:10%;">Videos</th>
                                        <th style="width:20%;"></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($categorias as $key=>$cat)
                                        <tr>
                                            <td>{{$cat->id}}</td>
                                            <td>{{$cat->titulo}}</td>
                                            <td>
                                                <p>{{$cat->descricao}}
                                                </p>
                                            </td>
                                            <td>{{$cat->videos()->count()}}</td>
                                            <td>
                                                <div class="flex align-items-center list-user-action">
                                                    <a class="iq-bg-success" data-toggle="tooltip" data-placement="top"
                                                       title=""
                                                       data-original-title="Editar" href="{{route('admin.categorias.edit',$cat)}}"><i
                                                            class="ri-pencil-line"></i></a>
                                                    <form id="form-deletar-{{$key}}" onsubmit="return confirm('Deseja mesmo deletar essa categoria? Todos os videos da categoria serão excluidos');" style="display: inline" action="{{route('admin.categorias.destroy',$cat)}}" method="post">
                                                        @csrf
                                                        @method('delete')
                                                        <a onclick="$('#form-deletar-{{$key}}').submit()" type="submit" class="iq-bg-primary" data-toggle="tooltip" data-placement="top"
                                                           title=""
                                                           data-original-title="Deletar categoria" href="#"><i
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
