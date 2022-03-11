<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>EzClick - Dashboard</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="/temp/frontend/images/favicon.ico"/>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/temp/assets/css/bootstrap.min.css">
    <!--datatable CSS -->
    <link rel="stylesheet" href="/temp/assets/css/dataTables.bootstrap4.min.css">
    <!-- Typography CSS -->
    <link rel="stylesheet" href="/temp/assets/css/typography.css">
    <!-- Style CSS -->
    <link rel="stylesheet" href="/temp/assets/css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="/temp/assets/css/responsive.css">

    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

</head>
<body>
<!-- loader Start -->
<div id="loading">
    <div id="loading-center">
    </div>
</div>
<!-- loader END -->

@yield('content')

<!-- Footer -->
<footer class="iq-footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6">
                <ul class="list-inline mb-0">
                    <li class="list-inline-item"><a href="#">Política de Privacidade</a></li>
                    <li class="list-inline-item"><a href="#">Termos de Uso</a></li>
                </ul>
            </div>
            <div class="col-lg-6 text-right">
                Copyright 2021 <a href="#">Serra Development</a> Todos direitos reservados.
            </div>
        </div>
    </div>
</footer>
<!-- Footer END -->
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="/temp/assets/js/jquery.min.js"></script>
<script src="/temp/assets/js/popper.min.js"></script>
<script src="/temp/assets/js/bootstrap.min.js"></script>
<script src="/temp/assets/js/jquery.dataTables.min.js"></script>
<script src="/temp/assets/js/dataTables.bootstrap4.min.js"></script>
<!-- Appear JavaScript -->
<script src="/temp/assets/js/jquery.appear.js"></script>
<!-- Countdown JavaScript -->
<script src="/temp/assets/js/countdown.min.js"></script>
<!-- Select2 JavaScript -->
<script src="/temp/assets/js/select2.min.js"></script>
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
<!-- apex Custom JavaScript -->
<script src="/temp/assets/js/apexcharts.js"></script>
<!-- Chart Custom JavaScript -->
<script src="/temp/assets/js/chart-custom.js"></script>

<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<!-- Custom JavaScript -->
<script src="/temp/assets/js/custom.js"></script>
<script>
    $(".select-2").select2({
        width: 'resolve',
        theme: "classic",
        placeholder: 'This is my placeholder',
        allowClear: true
    });
</script>

@stack('js')
</body>
</html>
