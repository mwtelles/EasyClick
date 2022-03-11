<li class="slide-item ">
  <div class="block-images position-relative">
    <div class="img-box">
        @if(auth()->check() && $video->users_id !== auth()->user()->id)
        <div class="action">
            <span>+</span>
            <ul>
                <li><a href="javascript:void(0)" data-video="{{$video->id}}" class="ocultar-video">Ocultar Video</a></li>
            </ul>
        </div>
        @endif
        <img style="object-fit: cover; max-width: 100%;width: fit-content;"
              src="{{\Illuminate\Support\Facades\Storage::url($video->img_thumb)}}" onclick='window.location.href="{{route('video.show',$video->id)}}"'>
    </div>
    <div class=" row description-video" onclick='window.location.href="{{route('video.show',$video->id)}}"'>
        <div class="col-2">
            <img src="{{$video->user->imagem_perfil}}" class="img-fluid avatar-40 rounded-circle">
        </div>
        <div class="col-10">
            <h6 class="iq-title"><a
                    href="{{route('video.show',$video)}}">{{\Illuminate\Support\Str::limit($video->titulo,30,'...')}}</a>
            </h6>
            <span class="info-video" >{{$video->user->name}}</span>
            <span class="info-video" >•</span>
            <span class="info-video" >{{$video->visualizacoes->count()}} Visualizações</span>
        </div>
    </div>
  </div>
</li>
