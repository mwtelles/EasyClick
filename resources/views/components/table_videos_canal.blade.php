<style>
    td {
        vertical-align: middle !important;
        text-align: end !important;
    }
</style>
<div class="row">
    @if(session()->has('success'))
        <div class="alert alert-success">
            {{session()->get('success')}}
        </div>
    @endif
</div>
<div class="iq-main-header d-flex align-items-center justify-content-between">
    <h4 class="main-title">Envios</h4>
</div>
<div class="">
    <table class="table table-responsive table-dark">
        <thead>
        <tr>
            <th scope="col">Vídeo</th>
            <th scope="col">Visibílidade</th>
            <th scope="col">Data</th>
            <th scope="col">Visualizações</th>
            <th scope="col">Curtidas</th>
            <th scope="col">Comentarios</th>
            <th scope="row"></th>
        </tr>
        </thead>
        <tbody>
        @foreach($videos as $video)
            <tr>
                <th scope="row" class="row">
                    <div class="col-lg-4 col-l-4 col-sm-12 col-xs-12 col-md-12">
                        <a style="cursor: pointer" href="{{route('video.show',$video)}}">
                            <img style="width: 100%"
                                 src="{{\Illuminate\Support\Facades\Storage::url($video->img_thumb)}}">
                        </a>
                    </div>
                    <div class="col-lg-8 col-l-8 col-sm-12 col-xs-12 col-md-12">
                        <p>{{\Illuminate\Support\Str::limit($video->titulo,20,'...')}}</p>
                        <p style="font-weight: 300;font-size: 14px">{{\Illuminate\Support\Str::limit($video->descricao,70,'...')}}</p>
                    </div>

                </th>
                <td>
                    <form action="{{route('videos.update',$video)}}" method="post">
                        @csrf
                        @method('put')
                        <select style="width: max-content" onchange="this.form.submit()" name="visibilidade"
                                class="form-control">
                            <option value="0" @if($video->visibilidade == 0) selected @endif>Público</option>
                            <option value="1" @if($video->visibilidade == 1) selected @endif>Privado</option>
                        </select>
                    </form>
                </td>
                <td>
                    <p>{{date('d/m/Y',strtotime($video->created_at))}}</p>
                    <small>Enviado</small>
                </td>

                <td>{{$video->visualizacoes->count()}}</td>
                <td>{{$video->curtidas->count()}}</td>
                <td>{{$video->comentarios->count()}}</td>
                <td>
                    <a href="{{route('canal.video.detalhes',$video)}}" class="btn btn-sm"><i class="fa  text-primary fa-edit"></i></a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
@include('components.paginator',$videos)

