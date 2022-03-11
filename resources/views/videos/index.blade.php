@extends('layouts.app',['banner'=>false,'nav'=>'position-relative'])

@section('content')
    <!-- MainContent -->
    <section class="container-fluid" >
        <div class="row mt-5 mb-5">
            <div class="iq-main-header w-100 d-flex align-items-center justify-content-between">
                <h4 class="main-title"><i class="ri-video-line text-primary"></i> Seus vídeos</h4>
                @include('components.filter-orderBy')
            </div>
        </div>
        <div class="row">
            @foreach($videos as $video)
                @include('components.video_card_no_slide',['video'=>$video,'date'=>date('d/m/Y H:i:s', strtotime($video->created_at)),'text_date'=>'Enviado em'])
            @endforeach
        </div>

    </section>
@endsection
