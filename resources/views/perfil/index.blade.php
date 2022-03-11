@extends('layouts.app',['banner'=>false])

@section('content')
    <!-- MainContent -->
    <section class="m-profile manage-p">
        <div class="container h-100">
            <div class="row align-items-center justify-content-center h-100">
                <div class="col-lg-10">
                    <div class="sign-user_card">
                        <div class="row">
                            <form style="display: contents" method="post" class="mt-4"
                                  action="{{route('perfil.update',auth()->user())}}"
                                  enctype="multipart/form-data">

                                <div class="col-lg-2">
                                    <div class="upload_profile d-inline-block">
                                        <a href="#" class="search-toggle iq-waves-effect d-flex align-items-center">
                                            <img src="{{auth()->user()->imagem_perfil}}" class="img-fluid rounded-circle mr-3" alt="user" style="height: 110px; width: 100%;">
                                        </a>
                                        <div class="p-image">
                                            <i class="ri-pencil-line upload-button"></i>
                                            <input class="file-upload" name="imagem_de_perfil" type="file"
                                                   accept="image/*">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-10 device-margin">
                                    <div class="profile-from">
                                        <h4 class="mb-3">Perfil</h4>
                                        @csrf
                                        @method('put')
                                        <div class="form-group">
                                            <label>Nome</label>
                                            <input type="text" class="form-control mb-0" id="exampleInputl2"
                                                  name="name" value="{{auth()->user()->name}}" autocomplete="off" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input name="email" type="text" class="form-control  basicFlatpickr mb-0"
                                                   value="{{auth()->user()->email}}" id="exampleInputPassword2"
                                                   required>
                                        </div>
                                        <div class="form-group">
                                            <label>Senha atual</label>
                                            <input type="password" name="passwordd" class="form-control  mb-0" id="exampleInputPassword2"
                                            autocomplete="off">
                                        </div>
                                        <div class="form-group">
                                            <label>Nova senha</label>
                                            <input type="password" name="new_password" class="form-control  mb-0" id="exampleInputPassword2"
                                                   autocomplete="off">
                                        </div>
                                        <div class="form-group">
                                            <label>Repetir nova senha</label>
                                            <input type="password" name="confirm_new_password" class="form-control  mb-0" id="exampleInputPassword2"
                                                   autocomplete="off">
                                        </div>
                                        <div class="d-flex">
                                            <button type="submit" class="btn btn-hover">Salvar</button>
                                            @if(session()->has('success'))
                                                <span class="alert m-auto alert-success">{{session()->get('success')}}</span>
                                            @endif
                                            @if ($errors->any())
                                                <div class="alert m-auto alert-danger">
                                                    <ul>
                                                        @foreach ($errors->all() as $error)
                                                            <li>{{ $error }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
