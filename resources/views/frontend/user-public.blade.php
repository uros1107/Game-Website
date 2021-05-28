@extends('layouts.frontend.layout')

@section('head')
<link rel="alternate" hreflang="en" href="{{ url('en/user/'.$user->slug) }}" />
<link rel="alternate" hreflang="fr" href="{{ url('fr/user/'.$user->slug) }}" />
<link rel="alternate" hreflang="x-default" href="{{ url('en/user/'.$user->slug) }}" />
@endsection

@section('styles')
<style>
.mb_padd:last-child {
    padding-bottom: 0px!important;
    margin-bottom: 0px!important;
    border-bottom: 0px solid #dee2e6!important;
}
</style>
@endsection

@section('language')
<div class="select-lang lang-close">
    <a href="{{ url('en/user/'.$user->slug) }}">
        <img src="{{ asset('assets/image/england-flag.png') }}" alt="">
    </a>
    <a href="{{ url('fr/user/'.$user->slug) }}">
        <img src="{{ asset('assets/image/france-flag.png') }}" alt="">
    </a>
</div>
@endsection

@section('content')
<!-- Content Start-->
<div class="main-content user-page-public">

    <!-- Body Content -->
    <div class="monster_wrap page-space">

        <div class="text-center ragdoll-top-sec page-title-section mt-3 mt-md-0 ">
            @if(Session::get('lang') == 'en')
            <h1 class="page-title ">{{ $user->name }}@lang('user-public.profile')</h1>
            @else
            <h1 class="page-title ">@lang('user-public.profile') {{ $user->name }}</h1>
            @endif
            <img src="{{ asset('assets/image/add-run-set/separator-title.png') }}" alt="">
            <p class="page-title-subtext">
                @lang('user-public.description1') {{ $user->name }}. @lang('user-public.description2')
            </p>
        </div>

        <!-- comps with ragdoll sec -->
        <div class="comps_sec">
            <div class="row text-center">
                <div class="col-12">
                    <h2>@lang('user-public.published') {{ $user->name }}</h2>
                </div>
            </div>
            <div id="team_comps_pagination">
                @foreach($team_comps as $team_comp)
                <div class="ct_accordion_wrap accordion_close">
                    <div class="force_sec bg_br">
                        <div class="row">
                            <div class="col-md-3">
                                @php
                                    $c_monsters = json_decode($team_comp->c_position);
                                    $c_monster = DB::table('monsters')->where('id', $c_monsters[5])->first();
                                @endphp
                                <div class="force_heading">
                                    <div class="bg_img_block">
                                        <img src="{{ asset('images/game/bc_images/'.$c_monster->bg_comp_image) }}">
                                    </div>
                                    <h3 class="desk_heading">{{ Session::get('lang') == 'en'? $team_comp->c_name : $team_comp->c_fr_name }}</h3>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="line_up_ifo">
                                    <div class="like_icon">
                                        <span class="like">
                                            <a class="likes" data-value="{{ $team_comp->c_id }}">
                                                <div class="like-unlike-wrap">
                                                    <img src="{{ asset('assets/image/pouce_vide.png') }}" alt="">
                                                    <img src="{{ asset('assets/image/like-active.png') }}" alt=""
                                                        class="active-like-inlike">
                                                </div>
                                                <span id="likes_{{ $team_comp->c_id }}">{{ $team_comp->c_likes }}</span>
                                            </a>
                                        </span>
                                        <span class="unlike">
                                            <a class="dislikes" data-value="{{ $team_comp->c_id }}">
                                                <div class="like-unlike-wrap">
                                                    <img src="{{ asset('assets/image/Pouce_bas.png') }}" alt="">
                                                    <img src="{{ asset('assets/image/unlike-active.png') }}" alt=""
                                                        class="active-like-inlike">
                                                </div>
                                                <span id="dislikes_{{ $team_comp->c_id }}">{{ $team_comp->c_dislikes }}</span>
                                            </a>
                                        </span>
                                    </div>

                                    <div class="line_up_sec text-center">
                                    @php
                                        $comps = json_decode($team_comp->c_position);
                                        $c_monster = DB::table('monsters')->where('id', $comps[5])->first();
                                    @endphp
                                    <div class="line_up_monster">
                                        <a href="{{ route(Session::get('lang') == 'en' ? 'monster-detail' : 'fr-monster-detail', [Session::get('lang'), Session::get('lang') == 'en' ? $c_monster->slug : $c_monster->fr_slug]) }}" target="_blank">
                                            <div class="contain_shape contain_shape_{{ $c_monster->rarity }}">
                                                <div class="shape"><img src="{{ asset('images/game/icon_images/'.$c_monster->icon_image) }}" alt="">
                                                </div>
                                            </div>
                                            <span>{{ Session::get('lang') == 'en'? $c_monster->name : $c_monster->fr_name }}</span>
                                        </a>
                                    </div>
                                    @php
                                        $c_monster = DB::table('monsters')->where('id', $comps[7])->first();
                                    @endphp
                                    <div class="line_up_monster">
                                        <a href="{{ route(Session::get('lang') == 'en' ? 'monster-detail' : 'fr-monster-detail', [Session::get('lang'), Session::get('lang') == 'en' ? $c_monster->slug : $c_monster->fr_slug]) }}" target="_blank">
                                            <div class="contain_shape contain_shape_{{ $c_monster->rarity }}">
                                                <div class="shape"><img src="{{ asset('images/game/icon_images/'.$c_monster->icon_image) }}" alt="">
                                                </div>
                                            </div>
                                            <span>{{ Session::get('lang') == 'en'? $c_monster->name : $c_monster->fr_name }}</span>
                                        </a>
                                    </div>
                                    @php
                                        $c_monster = DB::table('monsters')->where('id', $comps[4])->first();
                                    @endphp
                                    <div class="line_up_monster">
                                        <a href="{{ route(Session::get('lang') == 'en' ? 'monster-detail' : 'fr-monster-detail', [Session::get('lang'), Session::get('lang') == 'en' ? $c_monster->slug : $c_monster->fr_slug]) }}" target="_blank">
                                            <div class="contain_shape contain_shape_{{ $c_monster->rarity }}">
                                                <div class="shape"><img src="{{ asset('images/game/icon_images/'.$c_monster->icon_image) }}" alt="">
                                                </div>
                                            </div>
                                            <span>{{ Session::get('lang') == 'en'? $c_monster->name : $c_monster->fr_name }}</span>
                                        </a>
                                    </div>
                                    @php
                                        $c_monster = DB::table('monsters')->where('id', $comps[6])->first();
                                    @endphp
                                    <div class="line_up_monster">
                                        <a href="{{ route(Session::get('lang') == 'en' ? 'monster-detail' : 'fr-monster-detail', [Session::get('lang'), Session::get('lang') == 'en' ? $c_monster->slug : $c_monster->fr_slug]) }}" target="_blank">
                                            <div class="contain_shape contain_shape_{{ $c_monster->rarity }}">
                                                <div class="shape"><img src="{{ asset('images/game/icon_images/'.$c_monster->icon_image) }}" alt="">
                                                </div>
                                            </div>
                                            <span>{{ Session::get('lang') == 'en'? $c_monster->name : $c_monster->fr_name }}</span>
                                        </a>
                                    </div>
                                    @php
                                        $c_monster = DB::table('monsters')->where('id', $comps[1])->first();
                                    @endphp
                                    <div class="line_up_monster">
                                        <a href="{{ route(Session::get('lang') == 'en' ? 'monster-detail' : 'fr-monster-detail', [Session::get('lang'), Session::get('lang') == 'en' ? $c_monster->slug : $c_monster->fr_slug]) }}" target="_blank">
                                            <div class="contain_shape contain_shape_{{ $c_monster->rarity }}">
                                                <div class="shape"><img src="{{ asset('images/game/icon_images/'.$c_monster->icon_image) }}" alt="">
                                                </div>
                                            </div>
                                            <span>{{ Session::get('lang') == 'en'? $c_monster->name : $c_monster->fr_name }}</span>
                                        </a>
                                    </div>
                                    @php
                                        $c_monster = DB::table('monsters')->where('id', $comps[3])->first();
                                    @endphp
                                    <div class="line_up_monster">
                                        <a href="{{ route(Session::get('lang') == 'en' ? 'monster-detail' : 'fr-monster-detail', [Session::get('lang'), Session::get('lang') == 'en' ? $c_monster->slug : $c_monster->fr_slug]) }}" target="_blank">
                                            <div class="contain_shape contain_shape_{{ $c_monster->rarity }}">
                                                <div class="shape"><img src="{{ asset('images/game/icon_images/'.$c_monster->icon_image) }}" alt="">
                                                </div>
                                            </div>
                                            <span>{{ Session::get('lang') == 'en'? $c_monster->name : $c_monster->fr_name }}</span>
                                        </a>
                                    </div>
                                    @php
                                        $c_monster = DB::table('monsters')->where('id', $comps[0])->first();
                                    @endphp
                                    <div class="line_up_monster">
                                        <a href="{{ route(Session::get('lang') == 'en' ? 'monster-detail' : 'fr-monster-detail', [Session::get('lang'), Session::get('lang') == 'en' ? $c_monster->slug : $c_monster->fr_slug]) }}" target="_blank">
                                            <div class="contain_shape contain_shape_{{ $c_monster->rarity }}">
                                                <div class="shape"><img src="{{ asset('images/game/icon_images/'.$c_monster->icon_image) }}" alt="">
                                                </div>
                                            </div>
                                            <span>{{ Session::get('lang') == 'en'? $c_monster->name : $c_monster->fr_name }}</span>
                                        </a>
                                    </div>
                                    @php
                                        $c_monster = DB::table('monsters')->where('id', $comps[2])->first();
                                    @endphp
                                    <div class="line_up_monster">
                                        <a href="{{ route(Session::get('lang') == 'en' ? 'monster-detail' : 'fr-monster-detail', [Session::get('lang'), Session::get('lang') == 'en' ? $c_monster->slug : $c_monster->fr_slug]) }}" target="_blank">
                                            <div class="contain_shape contain_shape_{{ $c_monster->rarity }}">
                                                <div class="shape"><img src="{{ asset('images/game/icon_images/'.$c_monster->icon_image) }}" alt="">
                                                </div>
                                            </div>
                                            <span>{{ Session::get('lang') == 'en'? $c_monster->name : $c_monster->fr_name }}</span>
                                        </a>
                                    </div>
                                    </div>

                                    <div class="down_arrow ct_accordion_lable">
                                        <i class="fal fa-angle-down"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="content_tab ct_accordion_info comp_builder" style="display: none;">
                        <div class="compact_bulider_element_section">
                            <div class="compact_bulider_inner_section">
                                <div class="compect_left_element_bar">
                                    <div class="colleen_section mobile_block">
                                        <ul>
                                            @php
                                                $teamcomps = json_decode($team_comp->c_position);
                                                $c_monster = DB::table('monsters')->where('id', $teamcomps[5])->first();
                                                $element = DB::table('element')->where('id', $c_monster->element)->first();
                                            @endphp
                                            <li>
                                                <p><span>1</span>. {{ Session::get('lang') == 'en'? $c_monster->name : $c_monster->fr_name }}</p>
                                                <div class="collen_icon_img">
                                                    <img src="{{ asset('images/game/icons/elements/'.$element->image) }}" alt="collen icon">
                                                </div>
                                            </li>
                                            @php
                                                $c_monster = DB::table('monsters')->where('id', $teamcomps[7])->first();
                                                $element = DB::table('element')->where('id', $c_monster->element)->first();
                                            @endphp
                                            <li>
                                                <p><span>2</span>. {{ Session::get('lang') == 'en'? $c_monster->name : $c_monster->fr_name }}</p>
                                                <div class="collen_icon_img">
                                                    <img src="{{ asset('images/game/icons/elements/'.$element->image) }}" alt="collen icon">
                                                </div>
                                            </li>
                                            @php
                                                $c_monster = DB::table('monsters')->where('id', $teamcomps[4])->first();
                                                $element = DB::table('element')->where('id', $c_monster->element)->first();
                                            @endphp
                                            <li>
                                                <p><span>3</span>. {{ Session::get('lang') == 'en'? $c_monster->name : $c_monster->fr_name }}</p>
                                                <div class="collen_icon_img">
                                                    <img src="{{ asset('images/game/icons/elements/'.$element->image) }}" alt="collen icon">
                                                </div>
                                            </li>
                                            @php
                                                $c_monster = DB::table('monsters')->where('id', $teamcomps[6])->first();
                                                $element = DB::table('element')->where('id', $c_monster->element)->first();
                                            @endphp
                                            <li>
                                                <p><span>4</span>. {{ Session::get('lang') == 'en'? $c_monster->name : $c_monster->fr_name }}</p>
                                                <div class="collen_icon_img">
                                                    <img src="{{ asset('images/game/icons/elements/'.$element->image) }}" alt="collen icon">
                                                </div>
                                            </li>
                                            @php
                                                $c_monster = DB::table('monsters')->where('id', $teamcomps[1])->first();
                                                $element = DB::table('element')->where('id', $c_monster->element)->first();
                                            @endphp
                                            <li>
                                                <p><span>5</span>. {{ Session::get('lang') == 'en'? $c_monster->name : $c_monster->fr_name }}</p>
                                                <div class="collen_icon_img">
                                                    <img src="{{ asset('images/game/icons/elements/'.$element->image) }}" alt="collen icon">
                                                </div>
                                            </li>
                                            @php
                                                $c_monster = DB::table('monsters')->where('id', $teamcomps[3])->first();
                                                $element = DB::table('element')->where('id', $c_monster->element)->first();
                                            @endphp
                                            <li>
                                                <p><span>6</span>. {{ Session::get('lang') == 'en'? $c_monster->name : $c_monster->fr_name }}</p>
                                                <div class="collen_icon_img">
                                                    <img src="{{ asset('images/game/icons/elements/'.$element->image) }}" alt="collen icon">
                                                </div>
                                            </li>
                                            @php
                                                $c_monster = DB::table('monsters')->where('id', $teamcomps[0])->first();
                                                $element = DB::table('element')->where('id', $c_monster->element)->first();
                                            @endphp
                                            <li>
                                                <p><span>7</span>. {{ Session::get('lang') == 'en'? $c_monster->name : $c_monster->fr_name }}</p>
                                                <div class="collen_icon_img">
                                                    <img src="{{ asset('images/game/icons/elements/'.$element->image) }}" alt="collen icon">
                                                </div>
                                            </li>
                                            @php
                                                $c_monster = DB::table('monsters')->where('id', $teamcomps[2])->first();
                                                $element = DB::table('element')->where('id', $c_monster->element)->first();
                                            @endphp
                                            <li>
                                                <p><span>8</span>. {{ Session::get('lang') == 'en'? $c_monster->name : $c_monster->fr_name }}</p>
                                                <div class="collen_icon_img">
                                                    <img src="{{ asset('images/game/icons/elements/'.$element->image) }}" alt="collen icon">
                                                </div>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="compect_genral_info_section mobile-genral_info d-md-none">
                                        <h3 class="general-info-title">@lang('monster-detail.gen_info')</h3>
                                        <p class="general-info-desc mCustomScrollbar">{{ Session::get('lang') == 'en'? $team_comp->c_general_info : $team_comp->c_fr_general_info }}</p>
                                    </div>
                                    <div class="compect_element_section">
                                        <div class="compect_element_title">
                                            <h3>@lang('monster-detail.elements')</h3>
                                        </div>

                                        <ul>
                                            <li>
                                                <img src="{{ asset('assets/image/compect_bulider/icon-eau.png') }}" alt="compect element1">
                                                <p>x {{ $team_comp->element_water }}</p>
                                            </li>
                                            <li>
                                                <img src="{{ asset('assets/image/compect_bulider/icon-tenebre.png') }}"
                                                    alt="compect element2">
                                                <p>x {{ $team_comp->element_dark }}</p>
                                            </li>
                                            <li>
                                                <img src="{{ asset('assets/image/compect_bulider/icon-feu.png') }}" alt="compect element3">
                                                <p>x {{ $team_comp->element_fire }}</p>
                                            </li>
                                            <li>
                                                <img src="{{ asset('assets/image/compect_bulider/icon-lumiere.png') }}"
                                                    alt="compect element4">
                                                <p>x {{ $team_comp->element_light }}</p>
                                            </li>
                                            <li>
                                                <img src="{{ asset('assets/image/compect_bulider/icon-vent.png') }}"
                                                    alt="compect element5">
                                                <p>x {{ $team_comp->element_wind }}</p>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="compect_role_section">
                                        <div class="compect_element_title">
                                            <h3>@lang('monster-detail.roles')</h3>
                                        </div>

                                        <div class="compect_role_items">
                                            <ul>
                                                <li>
                                                    <div class="cm_role_icone_img">
                                                        <img src="{{ asset('assets/image/Monter-list/all_role_monter_icon_1.png') }}"
                                                            alt="role icon1">
                                                    </div>
                                                    <p>x {{ $team_comp->role_atk }} @lang('monster-detail.in_atk')</p>
                                                </li>
                                                <li>
                                                    <div class="cm_role_icone_img">
                                                        <img src="{{ asset('assets/image/Monter-list/all_role_monter_icon_4.png') }}"
                                                            alt="role icon1">
                                                    </div>
                                                    <p>x {{ $team_comp->role_defense }} @lang('monster-detail.in_def')</p>
                                                </li>
                                                <li>
                                                    <div class="cm_role_icone_img">
                                                        <img src="{{ asset('assets/image/Monter-list/all_role_monter_icon_2.png') }}"
                                                            alt="role icon1">
                                                    </div>
                                                    <p>x {{ $team_comp->role_hp }} @lang('monster-detail.in_hp')</p>
                                                </li>
                                                <li>
                                                    <div class="cm_role_icone_img">
                                                        <img src="{{ asset('assets/image/Monter-list/all_role_support-ic_3.png') }}"
                                                            alt="role icon1">
                                                    </div>
                                                    <p>x {{ $team_comp->role_support }} @lang('monster-detail.in_sup')</p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>


                                    <div class="compect_raity_section">
                                        <div class="compect_element_title">
                                            <h3>@lang('monster-detail.rarity')</h3>
                                        </div>

                                        <div class="compect_raity_items">
                                            <ul>
                                                <li>
                                                    <span></span>
                                                    <p>x {{ $team_comp->rarity_normal }}</p>
                                                </li>

                                                <li>
                                                    <span class="raity_color_2"></span>
                                                    <p>x {{ $team_comp->rarity_hero }}</p>
                                                </li>

                                                <li>
                                                    <span class="raity_color_3"></span>
                                                    <p>x {{ $team_comp->rarity_rare }}</p>
                                                </li>

                                                <li>
                                                    <span class="raity_color_4"></span>
                                                    <p>x {{ $team_comp->rarity_legend }}</p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="compect_spells_section">
                                        <div class="compect_element_title">
                                            <h3>@lang('monster-detail.spells')</h3>
                                        </div>
                                        @php
                                            $spell_ids = json_decode($team_comp->c_spell);
                                        @endphp
                                        <div class="spells_item">
                                            <ul>
                                                @foreach($spell_ids as $spell_id)
                                                @php
                                                    $spell = DB::table('spells')->where('id', $spell_id)->first();
                                                @endphp
                                                <li>
                                                    <div class="spells_iiner_iteam">
                                                        <img src="{{ asset('images/game/icon_images/'.$spell->icon_image) }}"
                                                            alt="compect_icon">
                                                    </div>
                                                </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="compect_average mobile_block">
                                        <p>@lang('monster-detail.avg_mana'):{{ $team_comp->average_mana_cost }}</p>
                                        <img src="{{ asset('assets/image/compect_bulider/cb_average_img.png') }}" alt="average">
                                    </div>
                                    <div class="mobile_block mobile-see-more">
                                        <div class="cb_save_and_publish_btn see-more-btn">
                                            @if(Session::get('lang') == 'en')
                                            <a href="{{ route('comps-detail', [Session::get('lang'), $team_comp->c_slug]) }}" class="all_btn">@lang('comp-list.see')</a>
                                            @else
                                            <a href="{{ route('fr-comps-detail', [Session::get('lang'), $team_comp->c_fr_slug]) }}" class="all_btn">@lang('comp-list.see')</a>
                                            @endif
                                        </div>
                                    </div>
                                </div>

                                <div class="compect_right_section">
                                    @php
                                        $c_monster_ids = json_decode($team_comp->c_position);
                                        $c_monster = DB::table('monsters')->where('id', $c_monster_ids[0])->first();
                                    @endphp
                                    <div class="compect_right_bg_banner" style="background-image: url({{ asset('assets/image/comp_sec-monster_bg.png') }});">
                                    <!-- <div class="compect_right_bg_banner" style="background-image: url({{ asset('images/game/bc_images/'.$c_monster->bg_comp_image) }})"> -->
                                        <div class="compect_genral_info_section">
                                            <h3 class="general-info-title">@lang('monster-detail.gen_info')</h3>
                                            <p class="general-info-desc">{{ Session::get('lang') == 'en'? $team_comp->c_general_info : $team_comp->c_fr_general_info }}</p>
                                        </div>

                                        <div class="row desktop_block">
                                            <div class="col-md-6">
                                                @php
                                                    $c_monster_ids = json_decode($team_comp->c_position);
                                                @endphp
                                                <div class="compect_plus_box">
                                                    @foreach($c_monster_ids as $key => $c_monster_id)
                                                    @php
                                                        $c_monster = DB::table('monsters')->where('id', $c_monster_id)->first();
                                                        $element = DB::table('element')->where('id', $c_monster->element)->first();
                                                        $role = DB::table('role')->where('id', $c_monster->role)->first();
                                                        $rarity = DB::table('rarity')->where('id', $c_monster->rarity)->first();
                                                    @endphp
                                                    @if($key % 8 < 4)
                                                    <a href="{{ route(Session::get('lang') == 'en' ? 'monster-detail' : 'fr-monster-detail', [Session::get('lang'), Session::get('lang') == 'en' ? $c_monster->slug : $c_monster->fr_slug]) }}" class="compect_monster_box compect_monster_box{{$key + 1}}"
                                                        target="_blank">
                                                        <div class="monster_img">
                                                            <div class="icon_img">
                                                                <img src="{{ asset('assets/image/mana-icone-carte.svg') }}" alt="icon"
                                                                    class="icon_top_monster">
                                                                <span>{{ $c_monster->mana_cost }}</span>
                                                            </div>
                                                            <img src="{{ asset('images/game/main_images/'.$c_monster->main_image) }}"
                                                                alt="monster" class="monster-individual">
                                                            <img src="{{ asset('images/game/icons/elements/'.$element->image) }}"
                                                                alt="right bar" class="icon_monster" style="height: 40px">
                                                        </div>
                                                        <div class="cm_monster_name">
                                                            <span style="background-color:{{ $rarity->color }}!important"> </span>
                                                            <p>{{ Session::get('lang') == 'en'? $c_monster->name : $c_monster->fr_name }}</p>
                                                            <img src="{{ asset('images/game/icons/roles/'.$role->icon) }}"
                                                                alt="cm icon">
                                                        </div>
                                                    </a>
                                                    @endif
                                                    @endforeach

                                                    <div class="compect_average">
                                                        <p>@lang('monster-detail.avg_mana'):{{ $team_comp->average_mana_cost }}</p>
                                                        <img src="{{ asset('assets/image/compect_bulider/cb_average_img.png') }}"
                                                            alt="average">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="compect_plus_right_box">
                                                    @foreach($c_monster_ids as $key => $c_monster_id)
                                                    @php
                                                        $c_monster = DB::table('monsters')->where('id', $c_monster_id)->first();
                                                        $element = DB::table('element')->where('id', $c_monster->element)->first();
                                                        $role = DB::table('role')->where('id', $c_monster->role)->first();
                                                        $rarity = DB::table('rarity')->where('id', $c_monster->rarity)->first();
                                                    @endphp
                                                    @if($key % 8 >= 4)
                                                    <a href="{{ route(Session::get('lang') == 'en' ? 'monster-detail' : 'fr-monster-detail', [Session::get('lang'), Session::get('lang') == 'en' ? $c_monster->slug : $c_monster->fr_slug]) }}" class="compect_monster_box compect_monster_box{{$key % 4 + 1}}"
                                                        target="_blank">
                                                        <div class="monster_img">
                                                            <div class="icon_img">
                                                                <img src="{{ asset('assets/image/mana-icone-carte.svg') }}" alt="icon"
                                                                    class="icon_top_monster">
                                                                <span>{{ $c_monster->mana_cost }}</span>
                                                            </div>
                                                            <img src="{{ asset('images/game/main_images/'.$c_monster->main_image) }}"
                                                                alt="monster" class="monster-individual">
                                                            <img src="{{ asset('images/game/icons/elements/'.$element->image) }}"
                                                                alt="right bar" class="icon_monster" style="height: 40px">
                                                        </div>
                                                        <div class="cm_monster_name">
                                                            <span style="background-color:{{ $rarity->color }}!important"> </span>
                                                            <p>{{ Session::get('lang') == 'en'? $c_monster->name : $c_monster->fr_name }}</p>
                                                            <img src="{{ asset('images/game/icons/roles/'.$role->icon) }}"
                                                                alt="cm icon">
                                                        </div>
                                                    </a>
                                                    @endif
                                                    @endforeach
                                                    <div class="cb_save_and_publish_btn see-more-btn">
                                                        @if(Session::get('lang') == 'en')
                                                        <a href="{{ route('comps-detail', [Session::get('lang'), $team_comp->c_slug]) }}" class="all_btn">@lang('comp-list.see')</a>
                                                        @else
                                                        <a href="{{ route('fr-comps-detail', [Session::get('lang'), $team_comp->c_fr_slug]) }}" class="all_btn">@lang('comp-list.see')</a>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

                <!-- Pagination Section Strat -->
                <div class="pagination_sec text-center pt-3" id="paginate">
                    {!! $team_comps->links('frontend.custom-pagination') !!}
                </div>
                <!-- Pagination Section End -->
            </div>
        </div>


        
            <!-- Rangdoll Lost section -->
            <div class="monster_lost_sec-heading mb_bg mt-50">
                <div class="text-center ">
                    <h2>@lang('user-public.rune_published') {{ $user->name }}</h2>
                </div>
            </div>
        <div id="runeset_pagination">
            <div class="monster_lost_sec bg_br">
                @if(count($rune_sets))
                @foreach($rune_sets as $rune_set)
                <div class="row mb_padd border-bottom">
                    <div class="col-md-6">
                        <div class="lost_inner_sec_left runes-selector-wrapper">
                            <div class="lost_img runes-selector-inner">
                                <img src="{{ asset('assets/image/runes-selector.png') }}" alt="" class="runes-selector-img">
                                <img src="{{ asset('assets/image/rune.png') }}" alt="" class="rune-img rune-1-img">
                                <img src="{{ asset('assets/image/rune.png') }}" alt="" class="rune-img rune-2-img">
                                <img src="{{ asset('assets/image/rune.png') }}" alt="" class="rune-img rune-3-img">
                            </div>
                            <div class="lost_info">
                                <h3>{{ Session::get('lang') == 'en'? $rune_set->rs_name : $rune_set->fr_rs_name }}</h3>
                                @php
                                    $rune = DB::table('runes')->where('r_id', $rune_set->rs_rune)->first();
                                    $rune_set->rs_substats = json_decode($rune_set->rs_substats);
                                    $monster = DB::table('monsters')->where('id', $rune_set->rs_monster_id)->first();
                                @endphp
                                <ul>
                                    <li><span>@lang('monster-detail.rune_use') : </span>{{ Session::get('lang') == 'en'? $rune->r_name : $rune->fr_r_name }} <img src="{{ asset('images/game/icons/runes/'.$rune->r_icon) }}" alt=""
                                            class="icons-after-text"></li>
                                    <li>
                                        <span>@lang('monster-detail.sub_stats') :</span>
                                        @foreach($rune_set->rs_substats as $rs)
                                        @php
                                            $sub_stat = DB::table('sub_stats')->where('sub_id', $rs)->first();
                                        @endphp
                                        <img src="{{ asset('images/game/icons/sub-stats/'.$sub_stat->sub_icon) }}" alt="">
                                        @endforeach
                                    </li>
                                    <li>
                                        <span>@lang('monster-detail.skill_stones') : </span>
                                        @if($rune_set->rs_skill_stones == 1)
                                        {{ Session::get('lang') == 'en'? $monster->skill_stone1_name : $monster->fr_skill_stone1_name }}
                                        <img src="{{ asset('images/game/skill_images/'.$monster->skill_stone1_image) }}" alt="" class="icons-after-text">
                                        @elseif($rune_set->rs_skill_stones == 2)
                                        {{ Session::get('lang') == 'en'? $monster->skill_stone2_name : $monster->fr_skill_stone2_name }}
                                        <img src="{{ asset('images/game/skill_images/'.$monster->skill_stone2_image) }}" alt="" class="icons-after-text">
                                        @elseif($rune_set->rs_skill_stones == 3)
                                        {{ Session::get('lang') == 'en'? $monster->skill_stone3_name : $monster->fr_skill_stone3_name }}
                                        <img src="{{ asset('images/game/skill_images/'.$monster->skill_stone3_image) }}" alt="" class="icons-after-text">
                                        @endif
                                    </li>
                                    <li><span>@lang('monster-detail.position') : </span>{{ $rune_set->rs_comp_position }}</li>
                                </ul>
                                @php
                                    $user = DB::table('users')->where('id', $rune_set->rs_user_id)->first();
                                @endphp
                                <p class="date">@lang('monster-detail.by') <span><a>{{ $user->name }}</a></span> @lang('monster-detail.on') {{ $rune_set->created_at->format('m/d/Y') }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="lost_inner_sec">
                            <div class="cm_scroll mCustomScrollbar">
                                <div class="lost_content">
                                    <p>{{ Session::get('lang') == 'en'? $rune_set->rs_comment : $rune_set->fr_rs_comment }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-1">
                        <div class="like_icon">
                            <span class="like">
                                <a class="rs_likes" data-value="{{ $rune_set->rs_id }}">
                                    <div class="like-unlike-wrap">
                                        <img src="{{ asset('assets/image/pouce_vide.png') }}" alt="">
                                        <img src="{{ asset('assets/image/like-active.png') }}" alt="" class="active-like-inlike">
                                    </div>
                                    <span id="rs_likes_{{ $rune_set->rs_id }}">{{ $rune_set->rs_likes }}</span>
                                </a>
                            </span>
                            <span class="unlike">
                                <a class="rs_dislikes" data-value="{{ $rune_set->rs_id }}">
                                    <div class="like-unlike-wrap">
                                        <img src="{{ asset('assets/image/Pouce_bas.png') }}" alt="">
                                        <img src="{{ asset('assets/image/unlike-active.png') }}" alt="" class="active-like-inlike">
                                    </div>
                                    <span id="rs_dislikes_{{ $rune_set->rs_id }}">{{ $rune_set->rs_dislikes }}</span>
                                </a>
                            </span>
                        </div>
                    </div>
                </div>
                @endforeach
                @else
                <div class="row mb_padd border-bottom" style="justify-content: center">
                    @lang('monster-detail.empty_msg')
                </div>
                @endif
            </div>

            <!-- Pagination Section -->
            <div class="pagination_sec text-center pt-3">
                {!! $rune_sets->links('frontend.custom-pagination') !!}
            </div>
        </div>

    </div>
    <!-- Body Content Close -->


</div>
<!-- Content Start-->
@endsection

@section('scripts')
<script>

var createCookie = function(name, value, days) {
    var expires;
    if (days) {
        var date = new Date();
        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
        expires = "; expires=" + date.toGMTString();
    }
    else {
        expires = "";
    }
    document.cookie = name + "=" + value + expires + "; path=/";
}

function getCookie(c_name) {
    if (document.cookie.length > 0) {
        c_start = document.cookie.indexOf(c_name + "=");
        if (c_start != -1) {
            c_start = c_start + c_name.length + 1;
            c_end = document.cookie.indexOf(";", c_start);
            if (c_end == -1) {
                c_end = document.cookie.length;
            }
            return unescape(document.cookie.substring(c_start, c_end));
        }
    }
    return [];
}

$(document).ready(function() {

    var arr = getCookie('comps_cookie');
    $(document).on('click', ".likes", function() {
        var c_id = $(this).data('value');

        if(typeof arr == 'string') arr = JSON.parse(arr);
        if(arr.indexOf(c_id) == -1) {
            arr.push(c_id);
            var json_str = JSON.stringify(arr);
            createCookie('comps_cookie', json_str);

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url: "{{ route('add-comps-likes', Session::get('lang')) }}",
                method: "POST",
                data: { c_id: c_id },
                success: function(data) {
                    $('#likes_' + c_id).html(data['c_likes']);
                    $(this).find('img').addClass('active-like-inlike');
                    toastr.success('Successfully added!');
                }
            })
        }
    })

    $(document).on('click', ".dislikes", function() {
        var c_id = $(this).data('value');

        if(typeof arr == 'string') arr = JSON.parse(arr);
        if(arr.indexOf(c_id) == -1) {
            arr.push(c_id);
            var json_str = JSON.stringify(arr);
            createCookie('comps_cookie', json_str);

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url: "{{ route('add-comps-dislikes', Session::get('lang')) }}",
                method: "POST",
                data: { c_id: c_id },
                success: function(data) {
                    $('#dislikes_' + c_id).html(data['c_dislikes']);
                    toastr.success('Successfully added!');
                }
            })
        }
    })

    var arr1 = getCookie('runes_cookie');
    $(document).on('click', ".rs_likes", function() {
        var r_id = $(this).data('value');
        
        if(typeof arr1 == 'string') arr1 = JSON.parse(arr1);
        if(arr1.indexOf(r_id) == -1) {
            arr1.push(r_id);
            var json_str = JSON.stringify(arr1);
            createCookie('runes_cookie', json_str);

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url: "{{ route('add-runes-likes', Session::get('lang')) }}",
                method: "POST",
                data: { r_id: r_id },
                success: function(data) {
                    $('#rs_likes_' + r_id).html(data['r_likes']);
                    $(this).find('img').addClass('active-like-inlike');
                    toastr.success('Successfully added!');
                }
            })
        }
    })

    $(document).on('click', ".rs_dislikes", function() {
        var r_id = $(this).data('value');

        if(typeof arr1 == 'string') arr1 = JSON.parse(arr1);
        if(arr1.indexOf(r_id) == -1) {
            arr1.push(r_id);
            var json_str = JSON.stringify(arr1);
            createCookie('runes_cookie', json_str);

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url: "{{ route('add-runes-dislikes', Session::get('lang')) }}",
                method: "POST",
                data: { r_id: r_id },
                success: function(data) {
                    $('#rs_dislikes_' + r_id).html(data['r_dislikes']);
                    toastr.success('Successfully added!');
                }
            })
        }
    });

    $(document).on('click', '#team_comps_pagination #prev, #team_comps_pagination .page-number, #team_comps_pagination #next', function() {
        console.log($(this).data('href'));
        var url = $(this).data('href');

        $.ajax({
            url: url,
            method: "get",
            data: { 
                team_comps: 1,
                id: "{{ $user->id }}"
            },
            success: function(data) {
                $('#team_comps_pagination').html(data);
            }
        })
    });

    $(document).on('click', '#runeset_pagination #prev, #runeset_pagination .page-number, #runeset_pagination #next', function() {
        console.log($(this).data('href'));
        var url = $(this).data('href');

        $.ajax({
            url: url,
            method: "get",
            data: { 
                rune_set: 1
            },
            success: function(data) {
                $('#runeset_pagination').html(data);
            }
        })
    });
});
</script>
@endsection