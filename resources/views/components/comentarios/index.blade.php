<style>
    .comentario_liked{
         color: red;
    }
    .grid {
        display: grid;
    }

    .img_perfil {
        grid-area: img_perfil;
    }

    .nome_perfil {
        grid-area: nome_perfil;
    }

    .data_comentario {
        grid-area: data_comentario;
    }

    .comentario {
        grid-area: comentario;
    }
    .like_comentario {
        grid-area: like_comentario;
    }
    .responder_comentario {
        grid-area: responder_comentario;
    }

    .sub_comentarios {
        grid-area: sub_comentarios;
    }

    .grid-template-comentario {
        width: fit-content;
        grid-template-areas:
            "img_perfil nome_perfil nome_perfil"
            "img_perfil comentario comentario"
            "img_perfil like_comentario like_comentario"
            "img_perfil sub_comentarios sub_comentarios"
            "img_perfil responder_comentario responder_comentario"

    ;
    }

    .date {
        font-size: 14px;
        font-weight: lighter;
    }

    .comment-text {
        font-size: 0.9rem;
        color: white;
        font-weight: 400;
    }

    .fs-12 {
        font-size: 12px
    }

    .shadow-none {
        box-shadow: none
    }

    .name {
        color: #007bff
    }

    .cursor:hover {
        color: blue
    }

    .cursor {
        cursor: pointer
    }

    .textarea {
        resize: none
    }
</style>
<div class="mt-5 w-100">
    <div class=" mb-5 container row">
        <h6>
            Comentários
        </h6>
    </div>
    <div class="d-flex  justify-content-start row">
        <div class="col-md-12">
            <div class=" comment-section">
                <div id="list-comentarios" class="scrolling-pagination">
                    @foreach($comentarios as $comentario)
                        <section class="grid grid-template-comentario mb-4 comentario-{{$comentario->id}}">
                            <div class="img_perfil">
                                <img class="rounded-circle"
                                     src="{{$comentario->autor->imagem_perfil}}"
                                     width="40">
                            </div>
                            <div class="nome_perfil ml-2">
                                <span class=" d-inline font-weight-bold text-primary">{{$comentario->autor->name}}</span>
                                <span class="data_comentario  date  text-white-50 format-date">{{date('d/m/Y H:i:s',strtotime($comentario->created_at))}}</span>

                            </div>
                            <div class="comentario ml-2">
                                <span class="comment-text">{{$comentario->texto}}</span>
                            </div>
                            <div class="like_comentario ml-2">
                                <div class="row">
                                    <div class="col-12" >
                                        <span @if(auth()->check()) onclick="likeComentario({!! $comentario->id !!})" @endif id="span-like-25" class="like-comentario" style="cursor: pointer"><i class="ri-heart-fill like-button @if(auth()->check() && \App\Models\ComentariosCurtida::where('comentario_id',$comentario->id)->where('user_id',auth()->user()->id)->first()) comentario_liked @endif "></i></span>
                                        <span class="qtd_curtidas" >{{($comentario->curtidas()->count() > 0)?$comentario->curtidas()->count():' '}}</span>
                                        <button style="padding: 5px!important;font-size: 10px;border: none" class="ml-4 btn btn-outline-light" onclick="responderComentario({{$comentario->id}})">RESPONDER</button>
                                    </div>
                                </div>
                            </div>
                            <div class="sub_comentarios ml-2">
                                @if(count($comentario->sub_comentarios)>0)
                                <span onclick="toggleSubComentarios(this)" style="color: #4ac4f3; cursor: pointer"><i class="fa fa-arrow-down"></i> Ver respostas</span>
                                @endif
                                @foreach($comentario->sub_comentarios as $sub_comentario)
                                    <section class="grid grid-template-comentario m-4 d-none">
                                        <div class="img_perfil">
                                            <img class="rounded-circle"
                                                 src="{{$sub_comentario->autor->imagem_perfil}}"
                                                 width="30" height="30">
                                        </div>
                                        <div class="nome_perfil ml-2">
                                            <span class=" d-inline font-weight-bold text-primary">{{$sub_comentario->autor->name}}</span>
                                            <span class="data_comentario  date  text-white-50 format-date">{{date('d/m/Y H:i:s',strtotime($sub_comentario->created_at))}}</span>

                                        </div>
                                        <div class="comentario ml-2">
                                            <span class="comment-text">{{$sub_comentario->texto}}</span>
                                        </div>
                                    </section>
                                    @endforeach
                            </div>
                            <div class="responder_comentario ml-2"></div>
                        </section>
                    @endforeach
                    {{$comentarios->links()}}
                </div>

                <div class=" p-2 ">
                    @include('components.comentarios.create')
                </div>
            </div>
        </div>
    </div>
</div>
@push('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jscroll/2.4.1/jquery.jscroll.min.js"
            integrity="sha512-51l8tSwY8XyM6zkByW3A0E36xeiwDpSQnvDfjBAzJAO9+O1RrEcOFYAs3yIF3EDRS/QWPqMzrl6t7ZKEJgkCgw=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script type="text/javascript">
        $('ul.pagination').hide();
        $(function () {
            $('.scrolling-pagination').jscroll({
                loadingHtml: '<img src="https://c.tenor.com/I6kN-6X7nhAAAAAj/loading-buffering.gif" width="40" alt="Loading" /> ',
                autoTrigger: true,
                padding: 0,
                nextSelector: '.pagination li.active + li a',
                contentSelector: 'div.scrolling-pagination',
                callback: function () {
                    $('ul.pagination').remove();
                }
            });
        });

        @if(auth()->check())
        function responderComentario( id_comentario) {
            let div_resposta = $('.comentario-'+id_comentario+' .responder_comentario')[0];
            div_resposta.innerHTML = `
            <form id="form-resposta-`+id_comentario+`"  ">
                <div class="row mt-2">
                    <div class="col-1">
                        <img class="rounded-circle" src="{{\Illuminate\Support\Facades\Storage::url(auth()->user()->profile_image)}}" width="40">
                    </div>
                    <div class="col-8 m-auto">
                        <input name="texto" style="width: inherit;" placeholder="Digite um comentário"  >
                    </div>
                    <div class="col-3">
                        <button class="btn btn-outline-dark" type="button" onclick="sendResposta(`+id_comentario+`);" >RESPONDER</button>
                    </div>
                </div>
            </form>
            `;

        }

        function sendResposta(id_comentario){
            let form = $('#form-resposta-'+id_comentario);
            let texto = form.find('input[name="texto"]').val();

            $.ajax({
                url: '{!! route('sub_comentarios.store') !!}',
                headers:{
                    'X-CSRF-TOKEN': $('#csrf_token').val()
                },
                type:'post',
                data:{
                    texto:texto,
                    comentario_id:id_comentario
                },
                success: function(comentario){
                    let sub_comentarios = $('.comentario-'+id_comentario+' .sub_comentarios');
                    let image_profile = (comentario.autor.profile_image)??'temp/frontend/images/user/default.png';

                    sub_comentarios.append(`
                        <section class="grid grid-template-comentario m-4">
                            <div class="img_perfil">
                                <img class="rounded-circle"
                                     src="/storage/`+image_profile+`"
                                      width="30" height="30">
                            </div>
                            <div class="nome_perfil ml-2">
                                <span class=" d-inline font-weight-bold text-primary">`+comentario.autor.name+`</span>
                                <span class="data_comentario  date  text-white-50 format-date">`+moment(comentario.created_at, "YYYYMMDD").fromNow()+`</span>

                            </div>
                            <div class="comentario ml-2">
                                <p class="comment-text">`+comentario.texto+`</p>
                            </div>
                        </section>
                `);

                    form.remove();
                }
            })
            return false;
        }

        function likeComentario(id_comentario){
            $.ajax({
                url: '{!! route('comentarios_curtidas.store') !!}',
                headers:{
                    'X-CSRF-TOKEN': $('#csrf_token').val()
                },
                type:'post',
                data:{
                    comentario_id:id_comentario
                },
                success: function(curtidas,status,xhr){
                    if(xhr.status === 201){
                        $('.comentario-'+id_comentario+' .like-button').removeClass('comentario_liked');
                    }else{
                        $('.comentario-'+id_comentario+' .like-button').addClass('comentario_liked');
                    }
                    if(curtidas > 0){
                        $('.comentario-'+id_comentario+' .qtd_curtidas').html(curtidas);
                    }else{
                        $('.comentario-'+id_comentario+' .qtd_curtidas').html('');
                    }

                }
            })
        }

        @endif
        function toggleSubComentarios(el){
            if($(el).next().hasClass('d-none')){
                $(el).html(`
                 <span onclick="toggleSubComentarios(this)" style="color: #4ac4f3; cursor: pointer"><i class="fa fa-arrow-up"></i> Ocultar respostas</span>
                `);
                $(el).next().removeClass('d-none');
            }else{
                $(el).html(`
                 <span onclick="toggleSubComentarios(this)" style="color: #4ac4f3; cursor: pointer"><i class="fa fa-arrow-down"></i> Ver respostas</span>
                `);
                $(el).next().addClass('d-none');
            }

        }
    </script>
@endpush
