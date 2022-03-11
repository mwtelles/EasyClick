@extends('layouts.app',['banner'=>false,'nav'=>'position-relative'])

@section('content')
    <!-- MainContent -->
    <section class="container" style="max-width: 1600px">
        <div class="row mt-5 mb-5">
            <div class="iq-main-header w-100 d-flex align-items-center justify-content-between">
                <h4 class="main-title"><i class="ri-heart-line text-primary"></i> Vídeos ocultados</h4>
                @include('components.filter-orderBy')
            </div>
        </div>
        <div class="row">
            @foreach($videos_ocultos as $video_oculto)
                @if($video_oculto)
                    @include('components.video_card_no_slide',['video'=>$video_oculto->video,'date'=>date('d/m/Y H:i:s', strtotime($video_oculto->created_at))])
                @endif
            @endforeach
        </div>
    </section>
@endsection
