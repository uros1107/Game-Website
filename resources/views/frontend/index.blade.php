@extends('layouts.frontend.layout')

@section('styles')
@endsection

@section('content')
<!-- Content Start-->
<div class="main-content home-page-content">

    <!-- Body Content -->
    <div class="page-space home-main-sec">
        <!--  -->
        <div class="text-center ragdoll-top-sec page-title-section mt-3 mt-md-0 hero-banner-sec">
            <h1 class="page-title">The perfect tool for <span>Lost Centuria </span> players</h1>
            <img src="assets/image/add-run-set/separator-title.png" alt="" class="title-btm-img">
            <p class="page-title-subtext hero-des">Monsters, comps, guides, runes, stats... It's all here.</p>
            <a href="#collaborative-sec" class="collaborative-sec-sec-1">
                <img src="assets/image/arrow-icon-btm.png" alt="" class="title-btm-img">
            </a>
        </div>
        <div>
            <section class="home-sec-1 collaborative-sec-sec-1" id="collaborative-sec">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 wow fadeInLeft">
                            <img src="assets/image/Home/collaborative.png" alt="">
                        </div>
                        <div class="col-sm-6  page-title-section collection_right_sec">
                            <h3 class="page-title page-title-btm">A collaborative creation</h3>
                            <div class="collaborative-des">
                                <p class="page-title-subtext">You will find here the compositions and rune sets
                                    created by other members of the community thanks to our specialized tools.
                                </p>
                                <p class="page-title-subtext">Designed especially for your Summoners War: Lost
                                    Centuria monsters, the other players' comps and rune sets will allow you to
                                    acquire expertise quickly by putting new ideas in practice.
                                </p>
                                <p class="page-title-subtext">Create your own comps and rune sets and share
                                    them!
                                </p>
                                <div class="home-btn">
                                    <a id="comp_builder" class="all_btn">Comp Builder</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="home-sec-2">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6  page-title-section collection_right_sec collection_left_sec">
                            <h3 class="page-title page-title-btm">In depth guides</h3>
                            <div class="collaborative-des">
                                <p class="page-title-subtext">All Summoners War: Lost Centuria monsters are
                                    included in our database with their basic stats, skill stones and all other
                                    essential info.
                                </p>
                                <p class="page-title-subtext">But there's more! On each monster's page, you can
                                    also find rune sets and compositions created by the community.
                                </p>
                                <p class="page-title-subtext">Our partner website JeuMobi also offers tips and
                                    guides on game mecanics as well as overall PvP strategies in SWLC.
                                </p>
                                <div class="home-btn">
                                    <a href="{{ route('monster-list') }}" class="all_btn">Monster List</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 wow fadeInRight">
                            <img src="assets/image/Home/monstre-details-reverse.png" alt="">
                        </div>
                    </div>
                </div>
            </section>
            <section class="home-sec-3">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 wow fadeInLeft">
                            <img src="assets/image/Home/comp-list-swlc-filter.png" alt="">
                        </div>
                        <div class="col-sm-6  page-title-section collection_right_sec">
                            <h3 class="page-title page-title-btm">Many precise and efficient filters</h3>
                            <div class="collaborative-des">
                                <p class="page-title-subtext">Do not waste your time browsing the internet for
                                    ages or opening fifty different web pages simply because you can't find the
                                    right comp or the right rune set.</p>
                                <p class="page-title-subtext"> Instead, use our filters to sort content by
                                    monster, element, role, rarity, mana cost or even publishing date to quickly
                                    find the content that you need on the last up-to-date patch.
                                </p>
                                <div class="home-btn">
                                    <a href="{{ route('comps-list') }}" class="all_btn">Find your ideal comp</a>
                                </div>
                            </div>
                        </div>
            </section>
            <section class="home-sec-4 page-title-section  more-soon_sec collaborative-des ">
                <h3 class="page-title page-title-btm title-line-center">More soon...</h3>
                <div class="more-soon-des">
                    <p class="page-title-subtext">Thank you for you support and, if you are waiting for new
                        features, you won't be disappointed.</p>
                    <p class="page-title-subtext">Several features will soon be available on SWLC.gg:</p>
                </div>
                <ul class="more-soon-list">
                    <li>Monster Tierlists</li>
                    <li>Possibility to add runes to each monster <br> in the comp Builder</li>
                    <li> Recruitment of players for your alliance directly on the website</li>
                </ul>
                <div class="more-soon-des  more-soon-des-last-des">
                    <p class="page-title-subtext">To not miss out on those and much more as well support us,
                        register now for free!</p>
                </div>
                <div class="home-btn wow fadeInUp">
                    <a class="all_btn" id="register_btn">Register</a>
                </div>
            </section>

        </div>
    </div>
    <!-- Body Content Close -->
</div>
<!-- Content Start-->
@endsection

@section('scripts')
<script>
    $(document).on('click', '#register_btn', function() {
        $('#login_popup').modal('toggle');
        $(".register-form").parents('.register_content').removeClass('show_register');                 
        $(".login-form").parents('.register_content').addClass('hide_login');
    })
    $(document).on('click', '#comp_builder', function() {
        location.href = "{{ route('comps-builder') }}";
    })
</script>
@endsection