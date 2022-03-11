<li class="slide-item" onclick='window.location.href="{{route('video.show',$video->id)}}"'>
    <div class="block-images position-relative">
        <div class="img-box">
            <img class="box-video-page" src="{{\Illuminate\Support\Facades\Storage::url($video->img_thumb)}}" alt="">
        </div>
        <div class="row description-video">
            <div class="col-2">
                <img src="{{$video->user->imagem_perfil}}" class="img-fluid avatar-40 rounded-circle">
            </div>
            <div class="col-10">
                <h6 class="iq-title"><a href="{{route('video.show',$video)}}" tabindex="0">{{$video->titulo}}</a>
                </h6>
                <span class="info-video">{{$video->user->name}}</span>
                <span class="info-video">•</span>
                <span class="info-video">{{$video->visualizacoes->count()}} Visualizações</span><br>
                <span class="info-video">Postado em {{date('d/m/Y',strtotime($video->created_at))}}</span>
            </div>
        </div>
    </div>
</li>
