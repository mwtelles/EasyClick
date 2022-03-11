<div class="block-social-info">
    <ul class="list-inline p-0 m-0 music-play-lists">
        <li class="share">
            <span><i class="ri-share-fill"></i></span>
            <div class="share-box">
                <div class="d-flex align-items-center">
                    <a href="https://www.facebook.com/sharer?u={{route('video.show',$video)}}"
                       target="_blank" rel="noopener noreferrer" class="share-ico" tabindex="0"><i
                            class="ri-facebook-fill"></i></a>
                    <a href="javascript:void(0)" onclick="copyToClipboard('{{route('video.show',$video)}}')"
                       class="share-ico iq-copy-link" tabindex="0"><i class="ri-links-fill"></i></a>
                </div>
            </div>
        </li>
        @if(auth()->check())
            <li class="video-like" data-video="{{$video->id}}"><span
                    @if($video->curtidas()->where('user_id',auth()->user()->id)->first()) class="liked"
                    @endif id="span-like-{{$video->id}}"><i class="ri-heart-fill"></i></span></li>
        @endif
    </ul>
</div>
