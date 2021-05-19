<!DOCTYPE html>
<html dir="ltr" lang="en-US">

<head>
    <title>LostCenturia</title>

    <link type="image/x-icon" rel="shortcut icon" href="assets/image/favicon.svg" />
    <!-- Required meta tags -->
    <meta charset="UTF-8" />
    <meta name="HandheldFriendly" content="true">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">

    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">

    <!-- Animate CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">

    <link rel="stylesheet" href="assets/css/jquery.mCustomScrollbar.min.css">

    <link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/12.0.0/nouislider.min.css">

    <!-- FontAwesome -->
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}" type="text/css" />

    <!-- Style Sheet -->
    <link type="text/css" rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
    <link type="text/css" rel="stylesheet" href="{{ asset('assets/css/responsive_style.css') }}" />
    @yield('styles')
</head>

<body class="home-page">

    <!-- Main Wrapper Start -->
    <div class="main-wrapper">

        <div class="mobile-nav d-flex d-xl-none">
            <div>
                <a href="{{ route('index') }}">
                    <img src="assets/image/logo-lost-centuria.svg" alt="logo" class="">
                </a>
            </div>
            <div class="main--content-search text-center">
                <div class="mobile-search-inner">
                    <input type="text" class="seach-input" placeholder="Search for a monster...">
                    <i class="fa fa-search"></i>
                </div>
            </div>

            <a href="#1" id="toggle" class="nav-mobile-btn">
                <span></span>
                <span></span>
                <span></span>
            </a>
        </div>

        <!-- Sidebar Start-->
        <div id="sidebar-container" class="bg-dark-blue sidebar-expanded d-xl-block">
            <div
                class="logo list-group-item sidebar-separator-title text-muted d-none d-xl-flex align-items-center menu-collapsed">
                <a href="{{ route('index') }}">
                    <img src="assets/image/logo-collapse-menu.svg" alt="logo" class="collapse-menu">
                    <img src="assets/image/logo-lost-centuria.svg" alt="logo" class="expand-menu">
                </a>
            </div>
            <ul class="list-group">
                <!-- Monstres Menu -->
                <li>
                    <a href="{{ route('monster-list') }}"
                        class="bg-dark-blue list-group-item list-group-item-action flex-column align-items-start">
                        <div class="menu-lis-inner d-flex w-100 justify-content-start align-items-center">
                            <div class="fa-fa_icons">
                                <i class="fad fa-helmet-battle"></i>
                            </div>
                            <span class="menu-collapsed">Monstres</span>
                        </div>
                    </a>
                </li>

                <!-- Liste de compos Menu -->
                <li>
                    <a href="{{ route('comps-list') }}"
                        class="bg-dark-blue list-group-item list-group-item-action flex-column align-items-start">
                        <div class="menu-lis-inner d-flex w-100 justify-content-start align-items-center">
                            <div class="fa-fa_icons">
                                <i class="fad fa-swords"></i>
                            </div>
                            <span class="menu-collapsed">Team Comps</span>
                        </div>
                    </a>
                </li>

                <!-- Création de compos Menu -->
                <li>
                    <a href="{{ route('comps-builder') }}"
                        class="bg-dark-blue list-group-item list-group-item-action flex-column align-items-start">
                        <div class="menu-lis-inner d-flex w-100 justify-content-start align-items-center">
                            <div class="fa-fa_icons">
                                <i class="fad fa-hammer-war"></i>
                            </div>
                            <span class="menu-collapsed">Comps Builder</span>
                        </div>
                    </a>
                </li>

                <!-- Astuces Menu -->
                <li>
                    <a href="https://www.jeumobi.com/en/summoners-war-lost-centuria/astuces/" data-toggle="collapse" aria-expanded="false"
                        class="bg-dark-blue list-group-item list-group-item-action flex-column align-items-start">
                        <div class="menu-lis-inner d-flex w-100 justify-content-start align-items-center">
                            <div class="fa-fa_icons">
                                <i class="fad fa-book-spells"></i>
                            </div>
                            <span class="menu-collapsed">Tips</span>
                        </div>
                    </a>
                </li>

                <!-- News Menu -->
                <li>
                    <a href="https://www.jeumobi.com/en/summoners-war-lost-centuria/news/" data-toggle="collapse" aria-expanded="false"
                        class="bg-dark-blue list-group-item list-group-item-action flex-column align-items-start">
                        <div class="menu-lis-inner d-flex w-100 justify-content-start align-items-center">
                            <div class="fa-fa_icons">
                                <i class="fad fa-scroll-old"></i>
                            </div>
                            <span class="menu-collapsed">News</span>
                        </div>
                    </a>
                </li>

                <!-- Contact Menu -->
                <li>
                    <a href="#submenu6" data-toggle="collapse" aria-expanded="false"
                        class="bg-dark-blue list-group-item list-group-item-action flex-column align-items-start">
                        <div class="menu-lis-inner d-flex w-100 justify-content-start align-items-center">
                            <div class="fa-fa_icons">
                                <i class="fad fa-comment-alt-smile"></i>
                            </div>
                            <span class="menu-collapsed">Contact</span>
                        </div>
                    </a>
                </li>

                <div class="mobile-menu-login-lang d-flex justify-content-center align-items-center d-xl-none">
                    <div class="mobile-menu-login ">
                        <a href="#1" class="common-btn">Log In</a>
                    </div>
                    <div class="mobile-menu-language">
                        <a href="javascript:void(0);" class="choose-lang">
                            <img src="assets/image/globe-americas-duotone.svg" alt="">
                        </a>
                        <div class="select-lang lang-close">
                            <a href="#1">
                                <img src="assets/image/england-flag.png" alt="">
                            </a>
                            <a href="#2">
                                <img src="assets/image/france-flag.png" alt="">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="mobile-partnership-text d-flex justify-content-center align-items-center d-xl-none">
                    In partnership with <a href="https://www.jeumobi.com/" target="_blank"> JeuMobi.com </a>
                </div>
            </ul>

            <div class="main-sidebar-footer d-none d-xl-block">
                <p class="subtext">In partnership with <a href="https://www.jeumobi.com/"
                        target="_blank">JeuMobi.com</a></p>
                <a href="javascript:void(0);" data-toggle="sidebar-colapse" class="sidebar-colapse-trigger">
                    <div class="d-flex w-100 justify-content-center align-items-center">
                        <div id="collapse-icon" class="chevron-double-icon">
                            <i class="fad fa-angle-double-left"></i>
                        </div>
                        <span id="collapse-text" class="menu-collapsed">Collapse</span>
                    </div>
                </a>
            </div>
        </div>
        <!-- Sidebar Close-->

        <!-- main--content-header -->
        <div class="main--content-header d-none d-xl-block">
            <div class="main--content-search text-center">
                <input type="text" class="seach-input" placeholder="Search for a monster...">
                <i class="fa fa-search"></i>
            </div>
            <div class="main--content-header-right">
                @if(Auth::user())
                <div class="main-content--single  main--content-profile">
                    <a href="{{ route('user-public') }}">
                        <i class="fad fa-user"></i>
                    </a>
                </div>
                <div class="main-content--single  main--content-setting">
                    <a href="{{ route('user-private') }}">
                        <i class="fad fa-cogs"></i>
                    </a>
                </div>
                <div class="main-content--single  main--content-deconnector-text">
                    <a href="{{ route('admin.logout') }}" class="common-btn">Sign Out</a>
                </div>
                @else
                <div class="main-content--single  main--content-deconnector-text">
                    <a href="#1" class="common-btn" id="login_btn">Log In</a>
                </div>
                @endif
                <div class="main-content--single  main--content-language">
                    <a href="javascript:void(0);" class="choose-lang border-open">
                        <i class="fas fa-globe-americas"></i>
                    </a>
                    <div class="select-lang lang-close">
                        <a href="#1">
                            <img src="assets/image/england-flag.png" alt="">
                        </a>
                        <a href="#2">
                            <img src="assets/image/france-flag.png" alt="">
                        </a>
                    </div>
                </div>

            </div>
        </div>
        <!-- main--content-header Close -->

        @yield('content')

        <!-- Footer Start -->
        <div class="footer-wrapper">
            <footer>
                <div class="footer-left-content">
                    Copyright © 2021 LostCenturia.gg. All rights reserved.
                </div>
                <div class="footer-right-content">
                    <p class="sw-text">
                        SW: Lost Centuria is a trademark registered by Com2Us.
                    </p>
                    <p class="site-text">
                        Fan site, unofficial and not affiliated with Com2Us.
                    </p>
                </div>
            </footer>
        </div>
        <!-- Footer Close -->

    </div>
    <!-- Main Wrapper Close -->

    <!-- Modal Popup for Register and Login -->
    <div class="modal" id="login_popup">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="register_content hide_register">
                    <!-- Modal Header -->
                    <div class="modal-header text-center border-0">
                        <div class="modal_logo">
                            <img src="assets/image/logo-lost-centuria.svg" alt="logo" class="expand-menu">
                        </div>
                        <div class="modal_logo">
                            <img src="assets/image/add-run-set/separator-title.png" alt="">
                        </div>
                        <div class="popup_title">
                            <span class="modal-title">Register</span>
                            <span class="login-modal-title">Log In</span>
                        </div>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        <div class="register_form ">
                            <form id="register_form" class="register-form personal_form" method="POST">
                                {{ csrf_field() }}
                                <div class="personal_info">
                                    <div class="form_field">
                                        <input type="text" value="" placeholder="Nickname*" name="name"  required/>
                                    </div>
                                    <div class="form_field">
                                        <input type="email" placeholder="Email*" name="email" required />
                                    </div>
                                    <div class="d-none" id="error_message">
                                        <span class="help-block pl-3 mb-4 d-block" style="color:#d61919">
                                            <p>Email should be unique.</p>
                                        </span>
                                    </div>
                                    <div class="form_field">
                                        <input type="password" placeholder="Password*" name="password" required />
                                    </div>
                                    <div class="form_field">
                                        <input type="text" placeholder="Lost Centuria in-game name" name="game_name" required />
                                    </div>
                                    <div class="form_field">
                                        <input type="text" placeholder="Guild name" name="guild_name" required />
                                    </div>
                                    <div class="accept_field text-center">
                                        <label class="accept_option">
                                            <input type="checkbox" value="">
                                            <p>I have read and accept the <a href="{{ route('terms-of-use') }}" target="_blank">Terms of Use.</a>
                                            </p>
                                        </label>
                                    </div>
                                    <div class="form_field_btn text-center">
                                        <input type="submit" value="Register" class="common-btn" />
                                    </div>
                                </div>
                            </form>
                            <form id="login_form" class="login-form personal_form" action="{{ route('login') }}" method="POST">
                                {{ csrf_field() }}
                                <div class="personal_info">
                                    <div class="form_field">
                                        <input type="text" name="email" placeholder="Nickname or Email" required />
                                    </div>
                                    <div class="form_field">
                                        <input type="password" name="password" placeholder="Password*" required />
                                    </div>
                                    <div class="accept_field text-center">
                                        <label class="accept_option">
                                            <input type="checkbox" value="">
                                            <p>Remember me</p>
                                        </label>
                                    </div>
                                    <div class="form_field_btn text-center">
                                        <input type="submit" value="Log In" class="common-btn" />
                                    </div>
                                </div>
                            </form>
                            <div class="text-center register_btn">
                                <a href="javascript:void(0);" class="log_in"><span class="modal-title">Log
                                        In</span><span class="login-modal-title">Register</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Modal Popup -->




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{ asset('assets/js/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <script src="https://kit.fontawesome.com/51ac9b356a.js" crossorigin="anonymous"></script>

    <!-- WOW Js -->
    <script src="{{ asset('assets/js/wow.min.js') }}"></script>

    <!-- Custom Js -->
    <script src="{{ asset('assets/js/custom.js') }}"></script>
    <script>
    $('.collaborative-sec-sec-1').click(function(e) {
        e.preventDefault();
        var target = $($(this).attr('href'));
        if (target.length) {
            var scrollTo = target.offset().top - 80;
            $('body, html').animate({
                scrollTop: scrollTo + 'px'
            }, 800);
        }
    });

    $(document).on('click', '#login_btn', function() {
        $('#login_popup').modal('toggle');
        $(".register-form").parents('.register_content').removeClass('hide_register');                 
        $(".login-form").parents('.register_content').addClass('show_login');
    })

    $(document).on('submit', '#register_form', function(e) {
        e.preventDefault();

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url: "{{ route('register') }}",
            method: "post",
            data: $(this).serialize(),
            success: function(data) {
                if(data['success']) {
                    location.reload();
                } else {
                    $('#error_message').removeClass('d-none');
                }
            },
            error: function(error) {
                alert(error);
            }
        })
    })
    
    </script>

    @yield('scripts')

</body>

</html>