@extends('layouts.app',['banner'=>false,'nav'=>'position-relative'])

@section('content')
    <!-- MainContent -->
    <section class="container" style="max-width: 1500px">
        <div class="row mt-5 mb-5">
            <div class="iq-main-header w-100 d-flex align-items-center justify-content-between">
                <h4 class="main-title"><i class="ri-heart-line text-primary"></i> Marcados como "Amei"</h4>
                @include('components.filter-orderBy')
            </div>
        </div>
        <div class="row">
            @foreach($curtidas as $curtida)
                @if($curtida->video)
                @include('components.video_card_no_slide',['video'=>$curtida->video,'date'=>date('d/m/Y H:i:s', strtotime($curtida->created_at)),'text_date'=>'Marcado em'])
                @endif
                    @endforeach
        </div>
    </section>
@endsection
