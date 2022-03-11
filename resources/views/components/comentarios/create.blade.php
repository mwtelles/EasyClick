@if(auth()->check())
    <form id="form-comentario" action="{{route('comentarios.store')}}" method="post">
        @csrf
        <input type="hidden" name="video" value="{{$video->id}}">
        <div class="d-flex flex-row align-items-start">
            <img class="rounded-circle" src="{{auth()->user()->imagem_perfil}}" width="40">
            <textarea name="texto" class="form-control ml-1 shadow-none textarea" placeholder="escreva aqui um comentário..."></textarea>
        </div>
        <div class="mt-2 text-right">
            <button class="btn btn-primary btn-sm shadow-none comments-button" type="submit">Comentar</button>
        </div>
    </form>

@else
    <div class="d-flex flex-row align-items-start">
        <img class="rounded-circle" src="/temp/frontend/images/user/default.png" width="40">
        <button class="  comentar btn btn-default">Comentar</button>
    </div>
@endif
@push('js')
<script src="/js/front/comentarios/create.js"></script>
@endpush
