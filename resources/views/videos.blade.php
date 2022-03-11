@extends('layouts.app')

@section('content')
    <div class="main-content">
        @if(!request()->has('search'))
        @foreach(\App\Models\Categoria::where('is_active',true)->get() as $cat)
        <section id="iq-suggestede">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12 overflow-hidden">
                        <div class="iq-main-header d-flex align-items-center justify-content-between">
                            <h4 class="main-title">{{$cat->titulo}}</h4>
                        </div>
                        <div class="suggestede-contens">
                            <ul class="list-inline favorites-slider row p-0 mb-0">
                                @foreach($cat->videos as $video)
                                    @include('components.video_card',['video'=>$video])
                                    @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
            @endforeach
        @else
            <section id="iq-suggestede">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12 overflow-hidden">
                            <div class="iq-main-header d-flex align-items-center justify-content-between">
                                <h4 class="main-title">Resultados para "{{request()->search}}"</h4>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        @foreach($videos as $video)
                            @include('components.video_card_no_slide',['video'=>$video])
                        @endforeach
                    </div>
                </div>
            </section>
        @endif
    </div>
@endsection
