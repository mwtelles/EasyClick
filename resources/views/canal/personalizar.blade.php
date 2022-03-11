<div class="row">
    @if(session()->has('success'))
        <div class="alert alert-success">
            {{session()->get('success')}}
        </div>
    @endif
</div>
<div class="iq-main-header d-flex align-items-center justify-content-between">
    <h4 class="main-title">Personalizar Canal</h4>
</div>

<form method="post" action="{{route('canal.update',auth()->user())}}" enctype="multipart/form-data">
    @csrf
    @method('put')
    <div class="form-group">
        <p>Imagem de Capa</p>
        <input accept="image/*" name="capa_canal" type='file' id="input-capa-canal">
    </div>
    <button class="btn btn-outline-danger " type="submit"> Salvar</button>
</form>


@push('js')
    <script>
        $(document).ready(function () {
            $('#input-capa-canal').change(function () {
                let files = $('#input-capa-canal')[0].files;
                if (files && files[0]) {
                    let reader = new FileReader();
                    reader.onload = function (e) {
                        $('#capa-canal').attr('src', e.target.result);
                    }
                    reader.readAsDataURL($('#input-capa-canal')[0].files[0]);
                }
            });
        });

    </script>
@endpush
