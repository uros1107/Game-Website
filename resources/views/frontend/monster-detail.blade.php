@extends('layouts.frontend.layout')

@section('styles')
<style>
.mb_padd:last-child {
    padding-bottom: 0px!important;
    margin-bottom: 0px!important;
    border-bottom: 0px solid #dee2e6!important;
}
</style>
@endsection

@section('content')
<!-- Content Start-->
<div class="main-content monster-special-page" style="background-image: url({{ asset('images/game/bg_images/'.$monster->bg_image) }})">

    <!-- Body Content -->
    <div class="monster_wrap">
        <!-- Ragdoll Section -->
        <div class="monster_sec mb-50">
            <div class="row">
                <div class="col-md-5">
                    <div class="monster_left_sec">
                        @php
                            $element = DB::table('element')->where('id', $monster->element)->first();
                            $role = DB::table('role')->where('id', $monster->role)->first();
                            $rarity = DB::table('rarity')->where('id', $monster->rarity)->first();
                        @endphp
                        <div class="monster_img monster_img_{{$element->id}}">
                            <div class="icon_img">
                                <img src="{{ asset('assets/image/mana-icone-carte.svg') }}" alt="" class="icon_top_monster">
                                <span>{{ $monster->mana_cost }}</span>
                            </div>
                            <img src="{{ asset('images/game/main_images/'.$monster->main_image) }}" alt=""
                                class="monster-individual">
                            <img src="{{ asset('images/game/icons/elements/'.$element->image) }}" alt="" class="icon_monster">
                        </div>
                        <div class="monster_content">
                            <div class="monster_heading">
                                <h1>{{ Session::get('lang') == 'en'? $monster->name : $monster->fr_name }}</h1>
                                <p class="monster_sub_heading">{{ Session::get('lang') == 'en'? $monster->second_name : $monster->fr_second_name }}</p>
                            </div>
                            <ul>
                                <li><span>@lang('monster-detail.rarity') : </span>{{ Session::get('lang') == 'en'? $rarity->name : $rarity->fr_name }} <span class="round-color" style="background-color:{{ $rarity->color }}"></span>
                                </li>
                                <li><span>@lang('monster-detail.role') : </span>{{ Session::get('lang') == 'en'? $role->name : $role->fr_name }}<img src="{{ asset('images/game/icons/roles/'.$role->icon) }}" style="width:21px" alt=""
                                        class="icons-after-text"></li>
                                <li><span>@lang('monster-detail.element') : </span>{{ Session::get('lang') == 'en'? $element->name : $element->fr_name }}<img src="{{ asset('images/game/icons/elements/'.$element->detail_icon) }}" style="width:14px" alt=""
                                        class="icons-after-text"></li>
                                <li><span>@lang('monster-detail.mana_cost') : </span> {{ $monster->mana_cost }}</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="monster_right_sec">
                        <div class="fury_content">
                            <p class="monster-speciality">{{ Session::get('lang') == 'en'? $monster->spell_name : $monster->fr_spell_name }}</p>
                            <p>{{ Session::get('lang') == 'en'? $monster->spell_description : $monster->fr_spell_description }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Basic & skill Section -->
        <div class="basic_skill_sec">
            <div class="row text-center">
                <div class="col-md-6">
                    <div class="basic_inner_sec bg_br">
                        <h2>@lang('monster-detail.basic')</h2>
                        <div class="stats_info">
                            <ul class="text-left">
                                <li>  
                                    <div class="stats_icon">
                                        <img src="{{ asset('assets/image/atk-icon.png') }}" alt="">
                                    </div>
                                    <div class="stats_detais">
                                        <span class="basic_stats_title">@lang('monster-detail.atk')</span>
                                        <span class="basic_stats_number">{{ $monster->atk }}</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="stats_icon">
                                        <img src="{{ asset('assets/image/def-icon.png') }}" alt="">
                                    </div>
                                    <div class="stats_detais">
                                        <span class="basic_stats_title">@lang('monster-detail.def')</span>
                                        <span class="basic_stats_number">{{ $monster->def }}</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="stats_icon">
                                        <img src="{{ asset('assets/image/hp-icon.png') }}" alt="">
                                    </div>
                                    <div class="stats_detais">
                                        <span class="basic_stats_title">@lang('monster-detail.hp')</span>
                                        <span class="basic_stats_number">{{ $monster->hp }}</span>
                                    </div>
                                </li>
                            </ul>
                            <ul class="text-left">

                                <li>
                                    <div class="stats_icon">
                                        <img src="{{ asset('assets/image/tc-icon.png') }}" alt="">
                                    </div>
                                    <div class="stats_detais">
                                        <span class="basic_stats_title">@lang('monster-detail.crit_rate')</span>
                                        <span class="basic_stats_number">{{ $monster->crit_rate }}%</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="stats_icon">
                                        <img src="{{ asset('assets/image/dc-icon.png') }}" alt="">
                                    </div>
                                    <div class="stats_detais">
                                        <span class="basic_stats_title">@lang('monster-detail.crit_dmg')</span>
                                        <span class="basic_stats_number">{{ $monster->crit_dmg }}%</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="stats_icon">
                                        <img src="{{ asset('assets/image/acc-icon.png') }}" alt="">
                                    </div>
                                    <div class="stats_detais">
                                        <span class="basic_stats_title">@lang('monster-detail.acc')</span>
                                        <span class="basic_stats_number">{{ $monster->acc }}%</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="stats_icon">
                                        <img src="{{ asset('assets/image/res-icon.png') }}" alt="">
                                    </div>
                                    <div class="stats_detais">
                                        <span class="basic_stats_title">@lang('monster-detail.res')</span>
                                        <span class="basic_stats_number">{{ $monster->res }}%</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="basic_inner_sec bg_br">
                        <h2 class="skill_heading">@lang('monster-detail.skill_stones')</h2>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="skill_list">
                                    <img src="{{ asset('images/game/skill_images/'.$monster->skill_stone1_image) }}" alt="">
                                    <span class="skill_title text-capitalize">{{ Session::get('lang') == 'en'? $monster->skill_stone1_name : $monster->fr_skill_stone1_name }}</span>
                                    <p class="text-left">{{ Session::get('lang') == 'en'? $monster->skill_stone1_description : $monster->fr_skill_stone1_description }}</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="skill_list">
                                    <img src="{{ asset('images/game/skill_images/'.$monster->skill_stone2_image) }}" alt="">
                                    <span class="skill_title text-capitalize">{{ Session::get('lang') == 'en'? $monster->skill_stone2_name : $monster->fr_skill_stone2_name }}</span>
                                    <p class="text-left">{{ Session::get('lang') == 'en'? $monster->skill_stone2_description : $monster->fr_skill_stone2_description }}</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="skill_list">
                                    <img src="{{ asset('images/game/skill_images/'.$monster->skill_stone3_image) }}" alt="">
                                    <span class="skill_title text-capitalize">{{ Session::get('lang') == 'en'? $monster->skill_stone3_name : $monster->fr_skill_stone3_name }}</span>
                                    <div class="cm_scroll mCustomScrollbar">
                                        <p class="text-left">{{ Session::get('lang') == 'en'? $monster->skill_stone3_description : $monster->fr_skill_stone3_description }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="runeset_pagination">
            <!-- Rangdoll Lost section -->
            <div class="monster_lost_sec bg_br mt-50">
                <div class="row mb_bg mb-40">
                    <div class="col-12 text-center ">
                        <h2>{{ Session::get('lang') == 'en'? $monster->name : $monster->fr_name }} @lang('monster-detail.rune_set')</h2>
                        <a id="add-rune-set-btn" data-value="{{ $monster->id }}" class="all_btn">+ @lang('monster-detail.add_rune')</a>
                    </div>
                </div>
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
                                <h3>{{ $rune_set->rs_name }}</h3>
                                @php
                                    $rune = DB::table('runes')->where('r_id', $rune_set->rs_rune)->first();
                                    $skill_stone = DB::table('skill_stones')->where('skill_id', $rune_set->rs_skill_stones)->first();
                                    $rune_set->rs_substats = json_decode($rune_set->rs_substats);
                                @endphp
                                <ul>
                                    <li><span>@lang('monster-detail.rune_use') : </span>{{ Session::get('lang') == 'en'? $monster->r_name : $monster->fr_r_name }} <img src="{{ asset('images/game/icons/runes/'.$rune->r_icon) }}" alt=""
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
                                    <li><span>@lang('monster-detail.skill_stones') : </span>{{ Session::get('lang') == 'en'? $monster->skill_name : $monster->fr_skill_name }}<img src="{{ asset('images/game/icons/skill-stones/'.$skill_stone->skill_icon) }}"
                                            alt="" class="icons-after-text"></li>
                                    <li><span>@lang('monster-detail.position') : </span>{{ $rune_set->rs_comp_position }}</li>
                                </ul>
                                @php
                                    $user = DB::table('users')->where('id', $rune_set->rs_user_id)->first();
                                @endphp
                                <p class="date">@lang('monster-detail.by') <span><a href="#1">{{ $user->name }}</a></span> @lang('monster-detail.on') {{ $rune_set->created_at->format('m/d/Y') }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="lost_inner_sec">
                            <div class="cm_scroll mCustomScrollbar">
                                <div class="lost_content">
                                    <p>{{ $rune_set->rs_comment }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-1">
                        <div class="like_icon">
                            <span class="like">
                                <a href="#1">
                                    <div class="like-unlike-wrap">
                                        <img src="{{ asset('assets/image/pouce_vide.png') }}" alt="">
                                        <img src="{{ asset('assets/image/like-active.png') }}" alt="" class="active-like-inlike">
                                    </div>
                                    {{ $rune_set->rs_likes }}
                                </a>
                            </span>
                            <span class="unlike">
                                <a href="#1">
                                    <div class="like-unlike-wrap">
                                        <img src="{{ asset('assets/image/Pouce_bas.png') }}" alt="">
                                        <img src="{{ asset('assets/image/unlike-active.png') }}" alt="" class="active-like-inlike">
                                    </div>
                                    {{ $rune_set->rs_dislikes }}
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
                {!! $rune_sets->appends(['id' => $monster->id])->links('frontend.custom-pagination') !!}
            </div>
        </div>


        <div class="mb_btn">
            <a href="#" class="all_btn">+ @lang('monster-detail.add_rune')</a>
        </div>

        <!-- comps with ragdoll sec -->
        <div class="comps_sec">
            <div class="row text-center">
                <div class="col-12">
                    <h2>@lang('monster-detail.comps_title1') {{ Session::get('lang') == 'en'? $monster->name : $monster->fr_name }} @lang('monster-detail.comps_title2')</h2>
                </div>
            </div>
            <div id="team_comps_pagination">
                @if(count($team_comps))
                @foreach($team_comps as $team_comp)
                <div class="ct_accordion_wrap accordion_close">
                    <div class="force_sec bg_br">
                        <div class="row">
                            <div class="col-md-3">
                                @php
                                    $c_monsters = json_decode($team_comp->c_position);
                                    $c_monster = DB::table('monsters')->where('id', $c_monsters[0])->first();
                                @endphp
                                <div class="force_heading">
                                    <div class="bg_img_block">
                                        <img src="{{ asset('images/game/bc_images/'.$c_monster->bg_comp_image) }}">
                                    </div>
                                    <h3 class="desk_heading">{{ Session::get('lang') == 'en'? $team_comp->c_name : $team_comp->fr_c_name }}</h3>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="line_up_ifo">
                                    <div class="like_icon">
                                        <span class="like">
                                            <a href="#1">
                                                <div class="like-unlike-wrap">
                                                    <img src="{{ asset('assets/image/pouce_vide.png') }}" alt="">
                                                    <img src="{{ asset('assets/image/like-active.png') }}" alt=""
                                                        class="active-like-inlike">
                                                </div>
                                                <span>{{ $team_comp->c_likes }}</span>
                                            </a>
                                        </span>
                                        <span class="unlike">
                                            <a href="#1">
                                                <div class="like-unlike-wrap">
                                                    <img src="{{ asset('assets/image/Pouce_bas.png') }}" alt="">
                                                    <img src="{{ asset('assets/image/unlike-active.png') }}" alt=""
                                                        class="active-like-inlike">
                                                </div>
                                                <span>{{ $team_comp->c_dislikes }}</span>
                                            </a>
                                        </span>
                                    </div>

                                    <div class="line_up_sec text-center">
                                        @foreach(json_decode($team_comp->c_position) as $comp)
                                        @php
                                            $c_monster = DB::table('monsters')->where('id', $comp)->first();
                                        @endphp
                                        <div class="line_up_monster">
                                            <a href="{{ route('monster-detail', [Session::get('lang'), Session::get('lang') == 'en' ? $c_monster->slug : $c_monster->fr_slug]) }}" target="_blank">
                                                <div class="contain_shape contain_shape_{{ $c_monster->rarity }}">
                                                    <div class="shape"><img src="{{ asset('images/game/icon_images/'.$c_monster->icon_image) }}" alt="">
                                                    </div>
                                                </div>
                                                <span>{{ Session::get('lang') == 'en'? $c_monster->name : $c_monster->fr_name }}</span>
                                            </a>
                                        </div>
                                        @endforeach
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
                                            @foreach(json_decode($team_comp->c_position) as $key => $comp)
                                            @php
                                                $c_monster = DB::table('monsters')->where('id', $comp)->first();
                                                $element = DB::table('element')->where('id', $c_monster->element)->first();
                                            @endphp
                                            <li>
                                                <p><span>{{ $key++ }}</span>. {{ Session::get('lang') == 'en'? $c_monster->name : $c_monster->fr_name }}</p>
                                                <div class="collen_icon_img">
                                                    <img src="{{ asset('images/game/icons/elements/'.$element->image) }}" alt="collen icon">
                                                </div>
                                            </li>
                                            @endforeach
                                        </ul>
                                    </div>

                                    <div class="compect_genral_info_section mobile-genral_info d-md-none">
                                        <h3 class="general-info-title">@lang('monster-detail.gen_info')</h3>
                                        <p class="general-info-desc mCustomScrollbar">{{ $team_comp->c_general_info }}</p>
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
                                            <p class="general-info-desc">{{ $team_comp->c_general_info }}</p>
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
                                                    <a href="{{ route('monster-detail', [Session::get('lang'), Session::get('lang') == 'en' ? $c_monster->slug : $c_monster->fr_slug]) }}" class="compect_monster_box compect_monster_box{{$key + 1}}"
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
                                                    <a href="{{ route('monster-detail', [Session::get('lang'), Session::get('lang') == 'en' ? $c_monster->slug : $c_monster->fr_slug]) }}" class="compect_monster_box compect_monster_box{{$key % 4 + 1}}"
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
                @else
                <div class="ct_accordion_wrap accordion_close text-center p-4">
                    @lang('monster-detail.empty_msg')
                </div>
                @endif

                <!-- Pagination Section -->
                <div class="pagination_sec text-center pt-3">
                    {!! $team_comps->links('frontend.custom-pagination') !!}
                </div>
            </div>
        </div>
        
    </div>
    <!-- Body Content Close -->

</div>
<!-- Content Start-->
@endsection

@section('scripts')
<script>
$(document).ready(function() {
    $(document).on('click', '#add-rune-set-btn', function() {
        @if(!Auth::user())
            $('#login_popup').modal('toggle');
            $(".register-form").parents('.register_content').removeClass('hide_register');                 
            $(".login-form").parents('.register_content').addClass('show_login');
        @else
            var monster_id = $(this).data('value');
            location.href = "{{ route('user-add-rune-set', Session::get('lang')) }}" + '?monster_id=' + monster_id;
        @endif
    })

    $(document).on('click', '#team_comps_pagination #prev, #team_comps_pagination .page-number, #team_comps_pagination #next', function() {
        console.log($(this).data('href'));
        var url = $(this).data('href');
        var id = "{{ $monster->id }}";

        $.ajax({
            url: url,
            method: "get",
            data: { 
                id: id,
                team_comps: 1
            },
            success: function(data) {
                $('#team_comps_pagination').html(data);
            }
        })
    })

    $(document).on('click', '#runeset_pagination #prev, #runeset_pagination .page-number, #runeset_pagination #next', function() {
        console.log($(this).data('href'));
        var url = $(this).data('href');
        var id = "{{ $monster->id }}";

        $.ajax({
            url: url,
            method: "get",
            data: { 
                id: id,
                rune_set: 1
            },
            success: function(data) {
                $('#runeset_pagination').html(data);
            }
        })
    })
})
</script>
@endsection