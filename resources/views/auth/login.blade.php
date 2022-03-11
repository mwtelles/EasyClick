<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>EzClick - Entrar </title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="/temp/frontend/images/favicon.ico"/>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/temp/assets/css/bootstrap.min.css">
    <!-- Typography CSS -->
    <link rel="stylesheet" href="/temp/assets/css/typography.css">
    <!-- Style CSS -->
    <link rel="stylesheet" href="/temp/assets/css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="/temp/assets/css/responsive.css">
</head>
<body>
<!-- loader Start -->
<div id="loading">
    <div id="loading-center">
    </div>
</div>
<!-- loader END -->
<!-- Sign in Start -->
<section class="sign-in-page">
    <div class="container">
        <div class="row justify-content-center align-items-center height-self-center">
            <div class="col-lg-5 col-md-12 align-self-center">
                <div class="sign-user_card ">
                    <div class="sign-in-page-data">
                        <div class="sign-in-from w-100 m-auto">
                            <h3 class="mb-3 text-center">Entrar</h3>
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="form-group">
                                    <input type="email" class="form-control mb-0 @error('email') is-invalid @enderror "
                                           id="exampleInputEmail2" placeholder="Email" autocomplete="off" name="email" required>
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input type="password"
                                           class="form-control mb-0 @error('password') is-invalid @enderror"
                                           id="exampleInputPassword2" placeholder="Senha" name="password" required>
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="sign-info">
                                    <button type="submit" class="btn btn-primary">Entrar</button>

                                    <div class="custom-control custom-checkbox d-inline-block">
                                        <input type="checkbox" class="custom-control-input" id="customCheck">
                                        <label class="custom-control-label" for="customCheck">Lembrar</label>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="mt-3">
                        <div class="d-flex justify-content-center links">
                            Não tem uma conta? <a href="{{route('register')}}" class="text-primary ml-2">Cadastrar</a>
                        </div>
                        <div class="d-flex justify-content-center links">
                            @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Esqueceu sua senha?
                                </a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Sign in END -->
        <!-- color-customizer -->
    </div>
</section>
<!-- Sign in END -->
</body>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="/temp/assets/js/jquery.min.js"></script>
<script src="/temp/assets/js/popper.min.js"></script>
<script src="/temp/assets/js/bootstrap.min.js"></script>
<!-- Appear JavaScript -->
<script src="/temp/assets/js/jquery.appear.js"></script>
<!-- Countdown JavaScript -->
<script src="/temp/assets/js/countdown.min.js"></script>
<!-- Counterup JavaScript -->
<script src="/temp/assets/js/waypoints.min.js"></script>
<script src="/temp/assets/js/jquery.counterup.min.js"></script>
<!-- Wow JavaScript -->
<script src="/temp/assets/js/wow.min.js"></script>
<!-- Slick JavaScript -->
<script src="/temp/assets/js/slick.min.js"></script>
<!-- Owl Carousel JavaScript -->
<script src="/temp/assets/js/owl.carousel.min.js"></script>
<!-- Magnific Popup JavaScript -->
<script src="/temp/assets/js/jquery.magnific-popup.min.js"></script>
<!-- Smooth Scrollbar JavaScript -->
<script src="/temp/assets/js/smooth-scrollbar.js"></script>
<!-- Chart Custom JavaScript -->
<script src="/temp/assets/js/chart-custom.js"></script>
<!-- Custom JavaScript -->
<script src="/temp/assets/js/custom.js"></script>
</body>
</html>
