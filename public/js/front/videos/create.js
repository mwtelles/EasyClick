$(document).ready(function(){
    $('#upload_video').change(function(){
        let file = $('#upload_video').prop('files')[0];
        getVideoDuracao(file);
    })

    $('form').submit(function(e){
        $('#btn-enviar').html('<img width="20px" src="http://granjasaojorge.com.br/img/loading1.gif"> Enviando...');
        return true;
    });

});


function getVideoDuracao(file) {
    var video = document.createElement('video');
    video.preload = 'metadata';
    video.src = URL.createObjectURL(file);
    video.onloadedmetadata = function() {

        window.URL.revokeObjectURL(video.src);

        if (video.duration < 20) {
            tata.error("Vídeo Inválido!","O vídeo possui uma duracao menor que 20 segundos.");
            return false;
        }
        tata.success('Video carregado!','O vídeo foi carregado com sucesso');
        $('#file-preview').html(video);
        $('#file-preview').css('display','block');
        $(video).css('height','100%');
        $(video).css('width','100%');
        $(video).prop("controls",true);
        $('.form_video-upload').css('display','none');
        $('#div-duracao').removeClass('d-none');
        let duracao = new Date(video.duration.toFixed(0) * 1000).toISOString().substr(11, 8)
        $('#duracao_label').val(duracao);
        $('#duracao').val(video.duration);
    }

}
