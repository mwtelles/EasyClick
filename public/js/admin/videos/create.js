$(document).ready(function(){
   $('#upload_video').change(function(){
       let file = $('#upload_video').prop('files')[0];
       getVideoDuracao(file);
   })

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
        $('#duracao').val(video.duration.toFixed(0));
    }

}
