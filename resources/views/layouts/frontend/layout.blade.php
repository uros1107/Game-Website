<!DOCTYPE html>
<html dir="ltr" lang="en-US">

<head>
    
    @if(isset($monster) && Session::get('lang') == 'en')
    <title>{{ $monster->meta_title != null ? $monster->meta_title : strip_tags($monster->meta_title) }}</title>
    @elseif(isset($monster) && Session::get('lang') == 'fr')
    <title>{{ $monster->fr_meta_title != null ? $monster->fr_meta_title : strip_tags($monster->fr_meta_title) }}</title>
    @else
    <title>LostCenturia</title>
    @endif

    <link type="image/x-icon" rel="shortcut icon" href="{{ asset('assets/image/favicon.svg') }}" />
    <!-- Required meta tags -->
    <meta charset="UTF-8" />
    <meta name="HandheldFriendly" content="true">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @if(isset($monster) && Session::get('lang') == 'en')
    <meta name="description" content="{{ $monster->meta_description != null ? $monster->meta_description : strip_tags($monster->meta_description) }}">
    <meta property="og:title" content="{{ !empty($monster->meta_title) ?  $monster->meta_title : '' }}" />
	<meta property="og:description" content="{{ $monster->meta_description != null ? $monster->meta_description : strip_tags($monster->meta_description) }}" />
    <meta property="og:image" content="{{asset('images/game/og_images/'.$monster->og_image)}}" />
    <meta name="author" content="lostcenturia.gg">
    @elseif(isset($monster) && Session::get('lang') == 'fr')
    <meta name="description" content="{{ $monster->fr_meta_description != null ? $monster->fr_meta_description : strip_tags($monster->fr_meta_description) }}">
    <meta property="og:title" content="{{ !empty($monster->fr_meta_title) ?  $monster->fr_meta_title : '' }}" />
	<meta property="og:description" content="{{ $monster->fr_meta_description != null ? $monster->fr_meta_description : strip_tags($monster->fr_meta_description) }}" />
    <meta property="og:image" content="{{asset('images/game/og_images/'.$monster->fr_og_image)}}" />
    <meta name="author" content="lostcenturia.gg">
    @else
    <meta name="description" content="lostcenturia.gg">
    <meta property="og:title" content="lostcenturia.gg" />
	<meta property="og:description" content="lostcenturia.gg" />
    <meta name="author" content="lostcenturia.gg">
    @endif

    @yield('head')

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">

    <!-- Animate CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/jquery.mCustomScrollbar.min.css') }}">

    <link rel="stylesheet" href="{{ asset(mix('vendors/css/extensions/toastr.css')) }}">
    <link rel="stylesheet" href="{{ asset(mix('css/plugins/extensions/toastr.css')) }}">

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
                <a href="{{ route('index', Session::get('lang')) }}">
                    <img src="{{ asset('assets/image/logo-lost-centuria.svg') }}" alt="logo" class="">
                </a>
            </div>
            <div class="main--content-search text-center">
                <div class="mobile-search-inner">
                    <input type="text" class="seach-input" id="m_monster_search" placeholder="@lang('layout.search_monster')">
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
                <a href="{{ route('index', Session::get('lang')) }}">
                    <img src="{{ asset('assets/image/logo-collapse-menu.svg') }}" alt="logo" class="collapse-menu">
                    <img src="{{ asset('assets/image/logo-lost-centuria.svg') }}" alt="logo" class="expand-menu">
                </a>
            </div>
            <ul class="list-group">
                <!-- Monstres Menu -->
                <li>
                    @if(Session::get('lang') == 'en')
                    <a href="{{ route('monster-list', Session::get('lang')) }}"
                        class="bg-dark-blue list-group-item list-group-item-action flex-column align-items-start">
                        <div class="menu-lis-inner d-flex w-100 justify-content-start align-items-center">
                            <div class="fa-fa_icons">
                                <i class="fad fa-helmet-battle"></i>
                            </div>
                            <span class="menu-collapsed">@lang('layout.monsters')</span>
                        </div>
                    </a>
                    @else
                    <a href="{{ route('fr-monster-list', Session::get('lang')) }}"
                        class="bg-dark-blue list-group-item list-group-item-action flex-column align-items-start">
                        <div class="menu-lis-inner d-flex w-100 justify-content-start align-items-center">
                            <div class="fa-fa_icons">
                                <i class="fad fa-helmet-battle"></i>
                            </div>
                            <span class="menu-collapsed">@lang('layout.monsters')</span>
                        </div>
                    </a>
                    @endif
                </li>

                <!-- Liste de compos Menu -->
                <li>
                    @if(Session::get('lang') == 'en')
                    <a href="{{ route('comps-list', Session::get('lang')) }}"
                        class="bg-dark-blue list-group-item list-group-item-action flex-column align-items-start">
                        <div class="menu-lis-inner d-flex w-100 justify-content-start align-items-center">
                            <div class="fa-fa_icons">
                                <i class="fad fa-swords"></i>
                            </div>
                            <span class="menu-collapsed">@lang('layout.team_comps')</span>
                        </div>
                    </a>
                    @else
                    <a href="{{ route('fr-comps-list', Session::get('lang')) }}"
                        class="bg-dark-blue list-group-item list-group-item-action flex-column align-items-start">
                        <div class="menu-lis-inner d-flex w-100 justify-content-start align-items-center">
                            <div class="fa-fa_icons">
                                <i class="fad fa-swords"></i>
                            </div>
                            <span class="menu-collapsed">@lang('layout.team_comps')</span>
                        </div>
                    </a>
                    @endif
                </li>

                <!-- Création de compos Menu -->
                <li>
                    @if(Session::get('lang') == 'en')
                    <a href="{{ route('comps-builder', Session::get('lang')) }}"
                        class="bg-dark-blue list-group-item list-group-item-action flex-column align-items-start">
                    @else
                    <a href="{{ route('fr-comps-builder', Session::get('lang')) }}"
                        class="bg-dark-blue list-group-item list-group-item-action flex-column align-items-start">
                    @endif
                        <div class="menu-lis-inner d-flex w-100 justify-content-start align-items-center">
                            <div class="fa-fa_icons">
                                <i class="fad fa-hammer-war"></i>
                            </div>
                            <span class="menu-collapsed">@lang('layout.comps_builder')</span>
                        </div>
                    </a>
                </li>

                <!-- Astuces Menu -->
                <li>
                    @if(Session::get('lang') == 'en')
                    <a href="https://www.jeumobi.com/en/summoners-war-lost-centuria/astuces/" 
                        class="bg-dark-blue list-group-item list-group-item-action flex-column align-items-start">
                    @else
                    <a href="https://www.jeumobi.com/summoners-war-lost-centuria/astuces/"
                        class="bg-dark-blue list-group-item list-group-item-action flex-column align-items-start">
                    @endif
                        <div class="menu-lis-inner d-flex w-100 justify-content-start align-items-center">
                            <div class="fa-fa_icons">
                                <i class="fad fa-book-spells"></i>
                            </div>
                            <span class="menu-collapsed">@lang('layout.tips')</span>
                        </div>
                    </a>
                </li>

                <!-- News Menu -->
                <li>
                    @if(Session::get('lang') == 'en')
                    <a href="https://www.jeumobi.com/en/summoners-war-lost-centuria/news/" 
                        class="bg-dark-blue list-group-item list-group-item-action flex-column align-items-start">
                    @else
                    <a href="https://www.jeumobi.com/summoners-war-lost-centuria/news/"
                        class="bg-dark-blue list-group-item list-group-item-action flex-column align-items-start">
                    @endif
                        <div class="menu-lis-inner d-flex w-100 justify-content-start align-items-center">
                            <div class="fa-fa_icons">
                                <i class="fad fa-scroll-old"></i>
                            </div>
                            <span class="menu-collapsed">@lang('layout.news')</span>
                        </div>
                    </a>
                </li>

                <!-- Contact Menu -->
                <li>
                    <a href="mailto:contact@lostcenturia.gg"
                        class="bg-dark-blue list-group-item list-group-item-action flex-column align-items-start">
                        <div class="menu-lis-inner d-flex w-100 justify-content-start align-items-center">
                            <div class="fa-fa_icons">
                                <i class="fad fa-comment-alt-smile"></i>
                            </div>
                            <span class="menu-collapsed">@lang('layout.contact')</span>
                        </div>
                    </a>
                </li>

                <div class="mobile-menu-login-lang d-flex justify-content-center align-items-center d-xl-none">
                    @if(Auth::user())
                    <div class="main-content--single  main--content-profile">
                        <a href="{{ route('user-public', [Session::get('lang'), Auth::user()->slug]) }}">
                            <i class="fad fa-user"></i>
                        </a>
                    </div>
                    <div class="main-content--single  main--content-setting">
                        <a href="{{ route('user-private', [Session::get('lang'), Auth::user()->slug]) }}">
                            <i class="fad fa-cogs"></i>
                        </a>
                    </div>
                    <div class="main-content--single  main--content-deconnector-text">
                        <a href="{{ route('admin.logout') }}" class="common-btn">@lang('layout.sign_out')</a>
                    </div>
                    @else
                    <div class="mobile-menu-login ">
                        <a href="#1" class="common-btn" id="login_btn">@lang('layout.login')</a>
                    </div>
                    @endif
                    <div class="mobile-menu-language">
                        <a href="javascript:void(0);" class="choose-lang">
                            <img src="{{ asset('assets/image/globe-americas-duotone.svg') }}" alt="">
                        </a>
                        @yield('language')
                    </div>
                </div>
                <div class="mobile-partnership-text d-flex justify-content-center align-items-center d-xl-none">
                    @lang('layout.partner1') <a href="https://www.jeumobi.com/" target="_blank"> @lang('layout.partner2') </a>
                </div>
            </ul>

            <div class="main-sidebar-footer d-none d-xl-block">
                <p class="subtext">@lang('layout.partner1') <a href="https://www.jeumobi.com/"
                        target="_blank">@lang('layout.partner2')</a></p>
                <a href="javascript:void(0);" data-toggle="sidebar-colapse" class="sidebar-colapse-trigger">
                    <div class="d-flex w-100 justify-content-center align-items-center">
                        <div id="collapse-icon" class="chevron-double-icon">
                            <i class="fad fa-angle-double-left"></i>
                        </div>
                        <span id="collapse-text" class="menu-collapsed">@lang('layout.collapse')</span>
                    </div>
                </a>
            </div>
        </div>
        <!-- Sidebar Close-->

        <!-- main--content-header -->
        <div class="main--content-header d-none d-xl-block">
            <div class="main--content-search text-center">
                <input type="text" class="seach-input" id="monster_search" placeholder="@lang('layout.search_monster')">
                <i class="fa fa-search"></i>
            </div>
            <div class="main--content-header-right">
                @if(Auth::user())
                <div class="main-content--single  main--content-profile">
                    <a href="{{ route('user-public', [Session::get('lang'), Auth::user()->slug]) }}">
                        <i class="fad fa-user"></i>
                    </a>
                </div>
                <div class="main-content--single  main--content-setting">
                    <a href="{{ route('user-private', [Session::get('lang'), Auth::user()->slug]) }}">
                        <i class="fad fa-cogs"></i>
                    </a>
                </div>
                <div class="main-content--single  main--content-deconnector-text">
                    <a href="{{ route('admin.logout') }}" class="common-btn">@lang('layout.sign_out')</a>
                </div>
                @else
                <div class="main-content--single  main--content-deconnector-text">
                    <a href="#1" class="common-btn" id="login_btn">@lang('layout.login')</a>
                </div>
                @endif
                <div class="main-content--single  main--content-language">
                    <a href="javascript:void(0);" class="choose-lang border-open">
                        <i class="fas fa-globe-americas"></i>
                    </a>
                    @yield('language')
                </div>

            </div>
        </div>
        <!-- main--content-header Close -->

        @yield('content')

        <!-- Footer Start -->
        <div class="footer-wrapper">
            <footer>
                <div class="footer-left-content">
                    @lang('layout.copyright')
                </div>
                <div class="footer-right-content">
                    <p class="sw-text">
                        @lang('layout.sw1')
                    </p>
                    <p class="site-text">
                        @lang('layout.sw2')
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
                            <img src="{{ asset('assets/image/logo-lost-centuria.svg') }}" alt="logo" class="expand-menu">
                        </div>
                        <div class="modal_logo">
                            <img src="{{ asset('assets/image/add-run-set/separator-title.png') }}" alt="">
                        </div>
                        <div class="popup_title">
                            <span class="modal-title">@lang('layout.register')</span>
                            <span class="login-modal-title">@lang('layout.login')</span>
                        </div>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        <div class="register_form ">
                            <form id="register_form" class="register-form personal_form" method="POST">
                                {{ csrf_field() }}
                                <div class="personal_info">
                                    <div class="form_field">
                                        <input type="text" value="" placeholder="@lang('layout.nickname')" name="name"  required/>
                                    </div>
                                    <div class="form_field">
                                        <input type="email" placeholder="@lang('layout.email')" name="email" required />
                                    </div>
                                    <div class="d-none" id="error_message">
                                        <span class="help-block pl-3 mb-4 d-block" style="color:#d61919">
                                            <p>@lang('layout.email_unique')</p>
                                        </span>
                                    </div>
                                    <div class="form_field">
                                        <input type="password" placeholder="@lang('layout.password')" name="password" required />
                                    </div>
                                    <div class="form_field">
                                        <input type="text" placeholder="@lang('layout.game_name')" name="game_name" required />
                                    </div>
                                    <div class="form_field">
                                        <input type="text" placeholder="@lang('layout.guild_name')" name="guild_name" required />
                                    </div>
                                    <div class="accept_field text-center">
                                        <label class="accept_option">
                                            <input type="checkbox" value="">
                                            <p>@lang('layout.accept') <a href="{{ route('terms-of-use', Session::get('lang')) }}" target="_blank">@lang('layout.terms')</a>
                                            </p>
                                        </label>
                                    </div>
                                    <div class="form_field_btn text-center">
                                        <input type="submit" value="@lang('layout.register')" class="common-btn" />
                                    </div>
                                </div>
                            </form>
                            <form id="login_form" class="login-form personal_form" action="{{ route('login') }}" method="POST">
                                {{ csrf_field() }}
                                <div class="personal_info">
                                    <div class="form_field">
                                        <input type="text" name="email" placeholder="@lang('layout.nickname_email')" required />
                                    </div>
                                    <div class="form_field">
                                        <input type="password" name="password" placeholder="@lang('layout.password')" required />
                                    </div>
                                    <div class="accept_field text-center">
                                        <label class="accept_option">
                                            <input type="checkbox" value="">
                                            <p>@lang('layout.remember_me')</p>
                                        </label>
                                    </div>
                                    <div class="form_field_btn text-center">
                                        <input type="submit" value="@lang('layout.login')" class="common-btn" />
                                    </div>
                                </div>
                            </form>
                            <div class="text-center register_btn">
                                <a href="javascript:void(0);" class="log_in">
                                    <span class="modal-title">@lang('layout.login')</span>
                                    <span class="login-modal-title">@lang('layout.register')</span>
                                </a>
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
    <script src="{{ asset(mix('vendors/js/extensions/toastr.min.js')) }}"></script>
    <script src="{{ asset(mix('js/scripts/extensions/toastr.js')) }}"></script>

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

    $(document).on('change', '#monster_search, #m_monster_search', function() {
        var search = $(this).val();

        $.ajax({
            url: "{{ route('search', Session::get('lang')) }}",
            method: "get",
            data: { search: search },
            success: function(data) {
                if(data['success']) {
                    location.href = data['redirect_url'];
                } else {
                    toastr.error('No monster with such name!');
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