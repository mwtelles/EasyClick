@extends('admin.layouts.static',['menu'=>'videos'])


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
                                <h4 class="card-title">Editar Vídeo</h4>
                            </div>
                        </div>
                        <div class="iq-card-body">
                            <form action="{{route('admin.videos.update',$video)}}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="row">
                                    <div class="col-lg-7">
                                        <div class="row">
                                            <div class="col-12 form-group">
                                                <input type="text" value="{{$video->titulo}}" name="titulo" class="form-control"
                                                       placeholder="Título">
                                            </div>
                                            <div class="col-12 form_gallery form-group">
                                                <label id="gallery2" for="form_gallery-upload">Upload Imagem de
                                                    Capa</label>
                                                <input data-name="#gallery2" name="img_thumb" id="form_gallery-upload"
                                                       class="form_gallery-upload"
                                                       type="file" accept=".png, .jpg, .jpeg">
                                            </div>
                                            <div class="col-md-6 form-group">
                                                <select class="form-control" name="categorias_id"
                                                        id="exampleFormControlSelect1">
                                                    <option disabled="">Categoria</option>
                                                    @foreach(\App\Models\Categoria::where('is_active',true)->get() as $cat)
                                                        <option @if($cat->id === $video->categoria->id) selected @endif value="{{$cat->id}}">{{$cat->titulo}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-sm-6 form-group">
                                                <select name="qualidade" class="form-control"
                                                        id="exampleFormControlSelect2">
                                                    <option disabled="">Qualidade</option>
                                                    <option @if($video->categoria->id === 'FULLHD') selected @endif>FULLHD</option>
                                                    <option @if($video->categoria->id === 'HD') selected @endif>HD</option>
                                                </select>
                                            </div>
                                            <div class="col-12 form-group">
                                       <textarea id="text" name="descricao" rows="5" class="form-control"
                                                 placeholder="Descrição">{{$video->descricao}}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-5">
                                        <div class="d-block position-relative">
                                            <div class="form_video-upload">
                                                <input name="video" type="file" accept="video/mp4,video/x-m4v,video/*"
                                                       id="upload_video">
                                                <p>Upload de vídeo</p>
                                            </div>
                                        </div>
                                        <div id="file-preview" style="
                                            width: 100%;
                                            overflow: hidden;
                                            position: relative;
                                            padding: 20px;
                                            position: relative;
                                            display: none;
                                            width: 100%;
height: 350px;">

                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6 form-group">
                                        <input type="text" name="ano_lancamento" class="form-control"
                                               placeholder="Ano de criação"
                                               value="{{$video->ano_lancamento}}">
                                    </div>
                                    <div class="col-sm-6 form-group">
                                        <select name="linguagem" class="form-control" id="exampleFormControlSelect3">
                                            <option selected disabled="">Linguagem</option>
                                            <option @if($video->linguagem === 'PT_BR') selected @endif value="PT_BR">Português</option>
                                            <option @if($video->linguagem === 'EN') selected @endif  value="EN">Inglês</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-12 form-group">
                                        <input value="{{$video->duracao}}" type="text" name="duracao" readonly id="duracao" class="form-control"
                                               placeholder="Duração">
                                    </div>
                                    <div class="col-12 form-group ">
                                        <button type="submit" class="btn btn-primary">Salvar</button>
                                        <a href="{{route('admin.videos.index')}}" class="btn btn-danger">Voltar</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @push('js')
        <script src="/js/dist/tata.js"></script>
        <script src="/js/admin/videos/create.js"></script>
    @endpush
@endsection