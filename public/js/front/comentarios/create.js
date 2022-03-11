$(document).ready(function(){
    $('#form-comentario').submit(function(e){
       e.preventDefault();

        let data = $( this ).serialize();
        $(this)[0].reset();
        $.ajax({
            url:'/comentarios',
            type:'post',
            data:data,
            success:function(data){

                let comentario = data;
                let image_profile = (comentario.autor.profile_image)??'temp/frontend/images/user/default.png';
                $('#list-comentarios').append(`
                        <section class="grid grid-template-comentario">
                            <div class="img_perfil">
                                <img class="rounded-circle"
                                     src="/storage/`+image_profile+`"
                                     width="40">
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


            }
        })
    });

})
