<style>
    .form-control {
        background-color: #fff !important;
    }
</style>
<div class="row">
    @if(session()->has('success'))
        <div class="alert alert-success">
            {{session()->get('success')}}
        </div>
    @endif
</div>
<div class="iq-main-header d-flex align-items-center ">
    <a href="{{url()->previous()}}"><i class="fa fa-arrow-left mr-2"></i> </a>
    <h4 class="main-title"> Detalhes do vídeo</h4>
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="iq-card">
            <div class="iq-card-body">
                <form action="{{route('videos.update',$video)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-lg-7">
                            <div class="row">
                                <div class="col-12 form-group">
                                    <labe>Título do vídeo</labe>
                                    <input type="text" value="{{$video->titulo}}" name="titulo" class="form-control"
                                           placeholder="Título">
                                </div>
                                <div class="col-12 form_gallery form-group">
                                    <label id="gallery2" for="form_gallery-upload">Upload Imagem de
                                        Capa</label>
                                    <input name="img_thumb" id="form_gallery-upload"
                                           class="form_gallery-upload"
                                           type="file" accept=".png, .jpg, .jpeg">
                                    <img id="thumb-video" class="p-1"
                                         src="{{\Illuminate\Support\Facades\Storage::url($video->img_thumb)}}"
                                         style="width: 100%;height: 200px;object-fit: cover">
                                </div>
                                <div class="col-md-6 form-group">
                                    <labe>Categoria</labe>
                                    <select class="form-control" name="categorias_id"
                                            id="exampleFormControlSelect1">
                                        <option disabled="">Categoria</option>
                                        @foreach(\App\Models\Categoria::where('is_active',true)->get() as $cat)
                                            <option @if($cat->id === $video->categoria->id) selected
                                                    @endif value="{{$cat->id}}">{{$cat->titulo}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-sm-6 form-group">
                                    <labe>Qualidade</labe>
                                    <select name="qualidade" class="form-control"
                                            id="exampleFormControlSelect2">
                                        <option disabled="">Qualidade</option>
                                        <option @if($video->categoria->id === 'FULLHD') selected @endif>FULLHD</option>
                                        <option @if($video->categoria->id === 'HD') selected @endif>HD</option>
                                    </select>
                                </div>
                                <div class="col-12 form-group">
                                    <labe>Descrição</labe>
                                    <textarea id="text" name="descricao" rows="5" class="form-control"
                                              placeholder="Descrição">{{$video->descricao}}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="d-block position-relative">
                                <labe>Vídeo</labe>

                                <div id="file-preview" style="
                                            width: 100%;
                                            overflow: hidden;
                                            position: relative;
                                            padding: 10px;
                                            position: relative;
                                            width: 100%;height: 20%;">
                                    <video id="video" controls controlsList="nodownload"
                                           poster="{{\Illuminate\Support\Facades\Storage::url($video->img_thumb)}}">
                                        <source src="{{\Illuminate\Support\Facades\Storage::url($video->video)}}"
                                                type="video/mp4"/>
                                    </video>
                                    ​
                                </div>
                                <div class="form_video-upload">
                                    <input name="video" type="file" accept="video/mp4,video/x-m4v,video/*"
                                           id="upload_video">
                                    <p>Upload de vídeo</p>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 form-group">
                            <labe>Ano de Lançamento</labe>
                            <input type="text" name="ano_lancamento" class="form-control"
                                   placeholder="Ano de criação"
                                   value="{{$video->ano_lancamento}}">
                        </div>
                        <div class="col-sm-6 form-group">
                            <labe>Linguagem</labe>

                            <select name="linguagem" class="form-control" id="exampleFormControlSelect3">
                                <option selected disabled="">Linguagem</option>
                                <option @if($video->linguagem === 'PT_BR') selected @endif value="PT_BR">Português
                                </option>
                                <option @if($video->linguagem === 'EN') selected @endif  value="EN">Inglês</option>
                            </select>
                        </div>
                        <div class="col-sm-12 form-group">
                            <label>Duração em segundos</label>
                            <input value="{{$video->duracao}}" type="text" name="duracao" readonly id="duracao"
                                   class="form-control"
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

@push('js')
    <script src="/js/dist/tata.js"></script>
    <script>
        $(document).ready(function () {
            $('#form_gallery-upload').change(function () {
                let files = $('#form_gallery-upload')[0].files;
                if (files && files[0]) {
                    let reader = new FileReader();
                    reader.onload = function (e) {
                        $('#thumb-video').attr('src', e.target.result);
                    }
                    reader.readAsDataURL($('#form_gallery-upload')[0].files[0]);
                }
            });

            $('#upload_video').change(function () {
                let file = $('#upload_video').prop('files')[0];
                getVideoDuracao(file);
            })

        });

        function getVideoDuracao(file) {
            var video = document.createElement('video');
            video.preload = 'metadata';
            video.src = URL.createObjectURL(file);
            video.onloadedmetadata = function () {

                window.URL.revokeObjectURL(video.src);

                if (video.duration < 1) {
                    tata.error("Vídeo Inválido!", "O vídeo possui uma duracao menor que 20 segundos.");
                    return false;
                }
                tata.success('Video carregado!', 'O vídeo foi carregado com sucesso');
                $('#file-preview').html(video);
                $('#file-preview').css('display', 'block');
                $(video).css('height', '100%');
                $(video).css('width', '100%');
                $(video).prop("controls", true);
                $('.form_video-upload').css('display', 'none');
                $('#duracao').val(video.duration.toFixed(0));
            }

        }
    </script>
@endpush


