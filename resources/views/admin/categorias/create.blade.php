@extends('admin.layouts.static',['menu'=>'categorias'])

@section('main')
    <div id="content-page" class="content-page">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                            <div class="iq-header-title">
                                <h4 class="card-title">Nova Categoria</h4>
                            </div>
                        </div>
                        <div class="iq-card-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form action="{{route('admin.categorias.store')}}" method="post">
                                        @csrf
                                        <div class="form-group">
                                            <input type="text" name="titulo" class="form-control" placeholder="Titulo">
                                        </div>
                                        <div class="form-group">
                                    <textarea name="descricao" id="text" name="text" rows="5" class="form-control"
                                              placeholder="Descrição"></textarea>
                                        </div>
                                        <div class="form-group radio-box">
                                            <label>Status</label>
                                            <div class="radio-btn">
                                                <div class="custom-control custom-radio custom-control-inline">
                                                    <input type="radio" id="customRadio6" value="1" name="is_active" class="custom-control-input">
                                                    <label class="custom-control-label" for="customRadio6">Ativo</label>
                                                </div>
                                                <div class="custom-control custom-radio custom-control-inline">
                                                    <input type="radio" id="customRadio7" value="0" name="is_active" class="custom-control-input">
                                                    <label class="custom-control-label" for="customRadio7">Desativado </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group ">
                                            <button type="submit" class="btn btn-primary">Salvar</button>
                                            <button type="reset" class="btn btn-danger">Cancelar</button>
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
