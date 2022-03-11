@extends('layouts.app',['banner'=>false,'nav'=>'position-relative'])

@section('content')
    <!-- MainContent -->
    <section class="container" style="max-width: 1600px">
        <div class="row mt-5 mb-5">
            <div class="iq-main- w-100 d-flex align-items-center justify-content-between">
                <h4 class="main-title"><i class="ri-heart-line text-primary"></i> Histórico de exibição</h4>

                @include('components.filter-orderBy')
            </div>

        </div>
        <div class="row">
            @foreach($visualizados as $visualizado)
                @if($visualizado->video)
                    @include('components.video_card_no_slide',['video'=>$visualizado->video,'date'=>date('d/m/Y H:i:s', strtotime($visualizado->created_at)),'text_date'=>'Visualizado em'])
                @endif
            @endforeach
        </div>
    </section>
@endsection
