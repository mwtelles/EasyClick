@extends('admin.layouts.app')

@section('content')
    <!-- Wrapper Start -->
    <div class="wrapper">
        <!-- Sidebar-->
        <div class="iq-sidebar">
            <div class="iq-sidebar-logo d-flex justify-content-between">
                <a href="/" class="header-logo">
                    <img src="./temp/frontend/images/logo-icon.png" class="img-fluid rounded-normal" alt="">
                </a>
                <div class="iq-menu-bt-sidebar">
                    <div class="iq-menu-bt align-self-center">
                        <div class="wrapper-menu">
                            <div class="main-circle"><i class="las la-bars"></i></div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="sidebar-scrollbar">
                <nav class="iq-sidebar-menu">
                    <ul id="iq-sidebar-toggle" class="iq-menu">
                        <li><a href="/" class="text-info"><i class="ri-arrow-right-line"></i><span>Visitar site</span></a></li>
                        <li class="@if($menu == 'home') active active-menu @endif"><a href="{{route('admin.home')}}" class="iq-waves-effect"><i class="las la-home iq-arrow-left"></i><span>Dashboard</span></a></li>
{{--                        <li><a href="rating.html" class="@if($menu == 'avaliacoes') active active-menu @endif iq-waves-effect"><i class="las la-star-half-alt"></i><span>Rating </span></a></li>--}}
{{--                        <li><a href="comment.html" class="@if($menu == 'comentarios') active active-menu @endif iq-waves-effect"><i class="las la-comments"></i><span>Comment</span></a></li>--}}
{{--                        <li><a href="user.html" class="@if($menu == 'usuarios') active active-menu @endif iq-waves-effect"><i class="las la-user-friends"></i><span>User</span></a></li>--}}
                        <li>
                            <a href="#categoria" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="las la-list-ul"></i><span>Categorias</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                            <ul id="categoria" class=" iq-submenu collapse " data-parent="#iq-sidebar-toggle">
                                <li><a href="{{route('admin.categorias.create')}}"><i class="las la-user-plus"></i>Nova categoria</a></li>
                                <li><a href="{{route('admin.categorias.index')}}"><i class="las la-eye"></i>Categorias</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#video" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="las la-film"></i><span>Vídeo</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                            <ul id="video" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                                <li><a href="{{route('admin.videos.create')}}"><i class="las la-user-plus"></i>Novo Vídeo</a></li>
                                <li><a href="{{route('admin.videos.index')}}"><i class="las la-eye"></i>Vídeos</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="{{route('admin.configs.index')}}"><i class="las la-cog"></i>Configurações</a>
                        </li>
{{--                        <li>--}}
{{--                            <a href="#show" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i--}}
{{--                                    class="las la-film"></i><span>Show</span><i--}}
{{--                                    class="ri-arrow-right-s-line iq-arrow-right"></i>--}}
{{--                            </a>--}}
{{--                            <ul id="show" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">--}}
{{--                                <li><a href="add-show.html"><i class="las la-user-plus"></i>Add Show</a></li>--}}
{{--                                <li><a href="show-list.html"><i class="las la-eye"></i>Show List</a></li>--}}
{{--                            </ul>--}}
{{--                        </li>--}}
{{--                        <li><a href="pages-pricing.html" class="iq-waves-effect"><i class="ri-price-tag-line"></i><span>Pricing</span></a></li>--}}
{{--                        <li>--}}
{{--                            <a href="#ui-elements" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="lab la-elementor iq-arrow-left"></i><span>UI Elements</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>--}}
{{--                            <ul id="ui-elements" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">--}}
{{--                                <li class="elements">--}}
{{--                                    <a href="#sub-menu" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="ri-play-circle-line"></i><span>UI Kit</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>--}}
{{--                                    <ul id="sub-menu" class="iq-submenu collapse" data-parent="#ui-elements">--}}
{{--                                        <li><a href="ui-colors.html"><i class="las la-palette"></i>colors</a></li>--}}
{{--                                        <li><a href="ui-typography.html"><i class="las la-keyboard"></i>Typography</a></li>--}}
{{--                                        <li><a href="ui-alerts.html"><i class="las la-tag"></i>Alerts</a></li>--}}
{{--                                        <li><a href="ui-badges.html"><i class="lab la-atlassian"></i>Badges</a></li>--}}
{{--                                        <li><a href="ui-breadcrumb.html"><i class="las la-bars"></i>Breadcrumb</a></li>--}}
{{--                                        <li><a href="ui-buttons.html"><i class="las la-tablet"></i>Buttons</a></li>--}}
{{--                                        <li><a href="ui-cards.html"><i class="las la-credit-card"></i>Cards</a></li>--}}
{{--                                        <li><a href="ui-carousel.html"><i class="las la-film"></i>Carousel</a></li>--}}
{{--                                        <li><a href="ui-embed-video.html"><i class="las la-video"></i>Video</a></li>--}}
{{--                                        <li><a href="ui-grid.html"><i class="las la-border-all"></i>Grid</a></li>--}}
{{--                                        <li><a href="ui-images.html"><i class="las la-images"></i>Images</a></li>--}}
{{--                                        <li><a href="ui-list-group.html"><i class="las la-list"></i>list Group</a></li>--}}
{{--                                        <li><a href="ui-media-object.html"><i class="las la-ad"></i>Media</a></li>--}}
{{--                                        <li><a href="ui-modal.html"><i class="las la-columns"></i>Modal</a></li>--}}
{{--                                        <li><a href="ui-notifications.html"><i class="las la-bell"></i>Notifications</a></li>--}}
{{--                                        <li><a href="ui-pagination.html"><i class="las la-ellipsis-h"></i>Pagination</a></li>--}}
{{--                                        <li><a href="ui-popovers.html"><i class="las la-eraser"></i>Popovers</a></li>--}}
{{--                                        <li><a href="ui-progressbars.html"><i class="las la-hdd"></i>Progressbars</a></li>--}}
{{--                                        <li><a href="ui-tabs.html"><i class="las la-database"></i>Tabs</a></li>--}}
{{--                                        <li><a href="ui-tooltips.html"><i class="las la-magnet"></i>Tooltips</a></li>--}}
{{--                                    </ul>--}}
{{--                                </li>--}}
{{--                                <li class="form">--}}
{{--                                    <a href="#forms" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="lab la-wpforms"></i><span>Forms</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>--}}
{{--                                    <ul id="forms" class="iq-submenu collapse" data-parent="#ui-elements">--}}
{{--                                        <li><a href="form-layout.html"><i class="las la-book"></i>Form Elements</a></li>--}}
{{--                                        <li><a href="form-validation.html"><i class="las la-edit"></i>Form Validation</a></li>--}}
{{--                                        <li><a href="form-switch.html"><i class="las la-toggle-off"></i>Form Switch</a></li>--}}
{{--                                        <li><a href="form-chechbox.html"><i class="las la-check-square"></i>Form Checkbox</a></li>--}}
{{--                                        <li><a href="form-radio.html"><i class="ri-radio-button-line"></i>Form Radio</a></li>--}}
{{--                                    </ul>--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--                                    <a href="#wizard-form" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="ri-archive-drawer-line"></i><span>Forms Wizard</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>--}}
{{--                                    <ul id="wizard-form" class="iq-submenu collapse" data-parent="#ui-elements">--}}
{{--                                        <li><a href="form-wizard.html"><i class="ri-clockwise-line"></i>Simple Wizard</a></li>--}}
{{--                                        <li><a href="form-wizard-validate.html"><i class="ri-clockwise-2-line"></i>Validate Wizard</a></li>--}}
{{--                                        <li><a href="form-wizard-vertical.html"><i class="ri-anticlockwise-line"></i>Vertical Wizard</a></li>--}}
{{--                                    </ul>--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--                                    <a href="#tables" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="ri-table-line"></i><span>Table</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>--}}
{{--                                    <ul id="tables" class="iq-submenu collapse" data-parent="#ui-elements">--}}
{{--                                        <li><a href="tables-basic.html"><i class="ri-table-line"></i>Basic Tables</a></li>--}}
{{--                                        <li><a href="data-table.html"><i class="ri-database-line"></i>Data Table</a></li>--}}
{{--                                        <li><a href="table-editable.html"><i class="ri-refund-line"></i>Editable Table</a></li>--}}
{{--                                    </ul>--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--                                    <a href="#icons" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="ri-list-check"></i><span>Icons</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>--}}
{{--                                    <ul id="icons" class="iq-submenu collapse" data-parent="#ui-elements">--}}
{{--                                        <li><a href="icon-dripicons.html"><i class="ri-stack-line"></i>Dripicons</a></li>--}}
{{--                                        <li><a href="icon-fontawesome-5.html"><i class="ri-facebook-fill"></i>Font Awesome 5</a></li>--}}
{{--                                        <li><a href="icon-lineawesome.html"><i class="ri-keynote-line"></i>line Awesome</a></li>--}}
{{--                                        <li><a href="icon-remixicon.html"><i class="ri-remixicon-line"></i>Remixicon</a></li>--}}
{{--                                        <li><a href="icon-unicons.html"><i class="ri-underline"></i>unicons</a></li>--}}
{{--                                    </ul>--}}
{{--                                </li>--}}
{{--                            </ul>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="#pages" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="las la-file-alt iq-arrow-left"></i><span>Pages</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>--}}
{{--                            <ul id="pages" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">--}}
{{--                                <li>--}}
{{--                                    <a href="#authentication" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="ri-pages-line"></i><span>Authentication</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>--}}
{{--                                    <ul id="authentication" class="iq-submenu collapse" data-parent="#pages">--}}
{{--                                        <li><a href="sign-in.html"><i class="las la-sign-in-alt"></i>Login</a></li>--}}
{{--                                        <li><a href="sign-up.html"><i class="ri-login-circle-line"></i>Register</a></li>--}}
{{--                                        <li><a href="pages-recoverpw.html"><i class="ri-record-mail-line"></i>Recover Password</a></li>--}}
{{--                                        <li><a href="pages-confirm-mail.html"><i class="ri-file-code-line"></i>Confirm Mail</a></li>--}}
{{--                                        <li><a href="pages-lock-screen.html"><i class="ri-lock-line"></i>Lock Screen</a></li>--}}
{{--                                    </ul>--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--                                    <a href="#extra-pages" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="ri-pantone-line"></i><span>Extra Pages</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>--}}
{{--                                    <ul id="extra-pages" class="iq-submenu collapse" data-parent="#pages">--}}
{{--                                        <li><a href="pages-timeline.html"><i class="ri-map-pin-time-line"></i>Timeline</a></li>--}}
{{--                                        <li><a href="pages-invoice.html"><i class="ri-question-answer-line"></i>Invoice</a></li>--}}
{{--                                        <li><a href="blank-page.html"><i class="ri-invision-line"></i>Blank Page</a></li>--}}
{{--                                        <li><a href="pages-error.html"><i class="ri-error-warning-line"></i>Error 404</a></li>--}}
{{--                                        <li><a href="pages-error-500.html"><i class="ri-error-warning-line"></i>Error 500</a></li>--}}

{{--                                        <li><a href="pages-pricing-one.html"><i class="ri-price-tag-2-line"></i>Pricing 1</a></li>--}}
{{--                                        <li><a href="pages-maintenance.html"><i class="ri-archive-line"></i>Maintenance</a></li>--}}
{{--                                        <li><a href="pages-comingsoon.html"><i class="ri-mastercard-line"></i>Coming Soon</a></li>--}}
{{--                                        <li><a href="pages-faq.html"><i class="ri-compasses-line"></i>Faq</a></li>--}}
{{--                                    </ul>--}}
{{--                                </li>--}}
{{--                            </ul>--}}
{{--                        </li>--}}
                    </ul>
                </nav>
            </div>
        </div>
        <!-- TOP Nav Bar -->
        <div class="iq-top-navbar">
            <div class="iq-navbar-custom">
                <nav class="navbar navbar-expand-lg navbar-light p-0">
                    <div class="iq-menu-bt d-flex align-items-center">
                        <div class="wrapper-menu">
                            <div class="main-circle"><i class="las la-bars"></i></div>
                        </div>
                        <div class="iq-navbar-logo d-flex justify-content-between">
                            <a href="/" class="header-logo">
                                <img src="../assets/images/logo.png" class="img-fluid rounded-normal" alt="">
                                <div class="logo-title">
                                    <span class="text-primary text-uppercase">EzClick</span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="iq-search-bar ml-auto">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"  aria-label="Toggle navigation">
                            <i class="ri-menu-3-line"></i>
                        </button>
                    </div>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto navbar-list">
                            <li class="nav-item nav-icon search-content">
                                <a href="#" class="search-toggle iq-waves-effect text-gray rounded">
                                    <i class="ri-search-line"></i>
                                </a>
                                <form action="#" class="search-box p-0">
                                    <input type="text" class="text search-input" placeholder="Type here to search...">
                                    <a class="search-link" href="#"><i class="ri-search-line"></i></a>
                                </form>
                            </li>
                            <li class="line-height pt-3">
                                <a href="#" class="search-toggle iq-waves-effect d-flex align-items-center">
                                    <img src="{{auth()->user()->imagem_perfil}}" class="img-fluid rounded-circle mr-3" alt="user">
                                </a>
                                <div class="iq-sub-dropdown iq-user-dropdown">
                                    <div class="iq-card shadow-none m-0">
                                        <div class="iq-card-body p-0 ">
                                            <div class="bg-primary p-3">
                                                <h5 class="mb-0 text-white line-height">{{auth()->user()->name}}</h5>
                                            </div>
                                            <div class="d-inline-block w-100 text-center p-3">
                                                <form action="{{route('logout')}}" method="post">
                                                    @csrf
                                                    <button type="submit" class="bg-primary iq-sign-btn" role="button">Sair<i class="ri-login-box-line ml-2"></i></button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!-- TOP Nav Bar END -->
        <!-- Page Content  -->
        @yield('main')
    </div>
    <!-- Wrapper END -->
@endsection

