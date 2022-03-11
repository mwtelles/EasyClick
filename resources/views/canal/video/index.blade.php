@extends('layouts.app',['banner'=>false,'nav'=>'position-relative'])

<style>
    .row .menu-canal {
        padding: 10px !important;;
        cursor: pointer !important;;
    }

    .row .menu-canal h5 {
        font-size: 20px !important;;
        font-weight: 400 !important;;
    }

    .row .menu-canal:hover, .row.menu-canal.show {
        background: var(--iq-primary) !important;
    }

    .row .menu-canal:hover > h5 i, .row.menu-canal.show > h5 i {
        color: white !important;
    }
</style>
@section('content')
    <!-- MainContent -->
    <section class="container-fluid">
        <div class="row">
            <img id="capa-canal" src="{{auth()->user()->capa_canal_src}}" height="500"
                 style="width: 100%;object-fit: cover">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-3 mt-5 mb-5 nav nav-tabs d-block " style="border-bottom: none!important" id="nav-tab"
                    role="tablist">
                    <div class="row">
                        <div class="iq-main-header d-flex align-items-center justify-content-between">
                            <h4 class="main-title"><i class="ri-video-line text-primary"></i> Meu Canal</h4>
                        </div>
                    </div>
                    <a class="row menu-canal " id="menu-envios-tab" data-toggle="tab" href="#menu-envios">
                        <h5 class="border-danger"><i class="ri-video-fill text-primary  "></i> Envios </h5>
                    </a>
                    <a class="row menu-canal" id="menu-personalizar-tab" data-toggle="tab" href="#menu-personalizar">
                        <h5 class="border-danger"><i class="ri-edit-2-fill text-primary "></i> Personalizar</h5>
                    </a>
                </div>
                <div class="tab-content col-9 mt-5 mb-5">
                    <div class="tab-pane fade in show active" id="menu-envios">
                            @include('canal.video.detalhes')
                    </div>
                    <div class="tab-pane fade   " id="menu-personalizar">
                        @include('canal.personalizar')
                    </div>
                </div>
            </div>
        </div>

    </section>
@endsection
