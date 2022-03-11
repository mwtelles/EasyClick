<div class=" col-lg-4 col-md-6 col-sm-6 col-xl-3 col-12 block-images slide-item mb-5 pr-0 pl-0">
    <li class="slide-item" style="list-style:none;"  >
        <div class="block-images position-relative">

            <div class="img-box">
                @if(auth()->check() && $video->users_id !== auth()->user()->id)
                    <div class="action">
                        <span>+</span>
                        <ul>
                            <li>
                                @if(request()->route()->getName() === 'videos_ocultos.index')
                                    <a href="javascript:void(0)" data-video="{{$video->id}}" class="ocultar-video">Exibir Video</a>
                                @else
                                    <a href="javascript:void(0)" data-video="{{$video->id}}" class="ocultar-video">Ocultar Video</a>
                                @endif
                            </li>
                        </ul>
                    </div>
                @endif
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
</div>
