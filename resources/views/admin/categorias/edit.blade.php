@extends('admin.layouts.static',['menu'=>'categorias'])

@section('main')
    <div id="content-page" class="content-page">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    @if(session()->has('success'))
                        <div class="alert alert-success">
                            {{session()->get('success')}}
                        </div>
                    @endif
                </div>
                <div class="col-sm-12">
                    <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                            <div class="iq-header-title">
                                <h4 class="card-title">Editar Categoria</h4>
                            </div>
                        </div>
                        <div class="iq-card-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form action="{{route('admin.categorias.update',$categoria)}}" method="post">
                                        @csrf
                                        @method('put')
                                        <div class="form-group">
                                            <input type="text" value="{{$categoria->titulo}}" name="titulo" class="form-control" placeholder="Titulo">
                                        </div>
                                        <div class="form-group">
                                    <textarea name="descricao" id="text" name="text" rows="5" class="form-control"
                                              placeholder="Descrição">{{$categoria->descricao}}</textarea>
                                        </div>
                                        <div class="form-group radio-box">
                                            <label>Status</label>
                                            <div class="radio-btn">
                                                <div class="custom-control custom-radio custom-control-inline">
                                                    <input @if($categoria->is_active) checked @endif type="radio" id="customRadio6" value="1" name="is_active" class="custom-control-input">
                                                    <label class="custom-control-label" for="customRadio6">Ativo</label>
                                                </div>
                                                <div class="custom-control custom-radio custom-control-inline">
                                                    <input @if(!$categoria->is_active) checked @endif type="radio" id="customRadio7" value="0" name="is_active" class="custom-control-input">
                                                    <label class="custom-control-label" for="customRadio7">Desativado </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group ">
                                            <button type="submit" class="btn btn-primary">Salvar</button>
                                            <a href="{{route('admin.categorias.index')}}" class="btn btn-danger">Voltar</a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
