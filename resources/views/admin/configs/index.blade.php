@extends('admin.layouts.static', ['menu'=>'configs'])

@section('main')
    <div id="content-page" class="content-page">
        <div class="container-fluid">
            <div class="row">
                <h3 class="card-title">Configurações do sistema</h3>
            </div>
            <div class="row">

                <div class="col-sm-6">
                    <div class="iq-card">
                        <form action="{{route('admin.videos_banner')}}" method="post">
                            @csrf
                            <div class="iq-card-header d-flex justify-content-between">
                                <div class="iq-header-title">
                                    <h4 class="card-title">Vídeos em destaque</h4>
                                    <small>Vídeos exibidos no banner inicial do site</small>
                                </div>
                            </div>
                            <div class="iq-card-body">
                                <select multiple="multiple" name="videos_banner[]" style="width: 75%" id="select-videos-banner" class="">
                                    @foreach(videos_banner() as $video)
                                        <option selected value="{{$video->id}}">#{{$video->id}}</option>
                                    @endforeach
                                </select>

                                <button class="btn btn-primary">Salvar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('js')
    <script>
        $('#select-videos-banner').select2({
            ajax: {
                url: '{{route('admin.all_videos')}}',
                data: function (params) {
                    var query = {
                        search: params.term
                    }
                    // Query parameters will be ?search=[term]&page=[page]
                    return query;
                },
                processResults: function (data, params) {
                    return {
                        results: data.results
                    };
                },
            },
            templateResult: function (repo) {
                if (repo.loading) {
                    return repo.titulo;
                }
                console.log(repo);
                var $container = $(
                    "<div class='select2-result-repository clearfix row' style='background-color: black;'>" +
                    "<h4 class='select2-result-repository__id col-10'>#" + repo.id + " - Título: " + repo.titulo + "</h4>" +
                    "<h5 class='select2-result-repository__name col-10'>Canal: " + repo.user.name + "</h5>" +
                    "<small class='select2-result-repository__description col-12'></small>" +
                    "</div>"
                );

                $container.find(".select2-result-repository__title").text(repo.titulo);
                $container.find(".select2-result-repository__description").text(repo.descricao);
                return $container;
            },
            templateSelection: function (state) {
                if (!state.id) {
                    return state.titulo;
                }

                var baseUrl = "/user/pages/images/flags";
                var $state = $(
                    '<span style="color: black; font-size: 12px">#' + state.id + '</span>'
                );

                return $state;
            }
        });
    </script>
@endpush
