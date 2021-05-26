@extends('layouts.frontend.layout')

@section('head')
<link rel="alternate" hreflang="en" href="{{ url('en/comps-builder') }}" />
<link rel="alternate" hreflang="fr" href="{{ url('fr/compos-builder') }}" />
<link rel="alternate" hreflang="x-default" href="{{ url('en/comps-builder') }}" />
@endsection

@section('styles')
<link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}" type="text/css" />
<style>
.comp_builder .compect_monster_box4 {
    bottom: 100px;
}
.all_btn {
    border: 1px solid #D9BC84;
    border-radius: 35px;
    padding: 8px 20px;
    color: #D9BC84;
    min-width: 144px;
    display: inline-block;
    text-align: center;
    font-family: 'selawk-semi-bold';
    background: #272741;
    font-size: 15px;
}
.all_btn:hover {
    background-color: #D9BC84;
    color: #000;
}

@media screen and (max-width:475px) {
    .all_btn {
        width: 100%;
    }
}
</style>
@endsection

@section('content')
<!-- Content Start-->
<div class="main-content user-page-public comp_builder-page comp_builder">
    <!-- Body Content -->
    <div class="monster_wrap page-space">

        <div class="text-center ragdoll-top-sec page-title-section mt-3 mt-md-0 ">
            <h1 class="page-title ">@lang('comp-builder.title')</h1>
            <img src="{{ asset('assets/image/add-run-set/separator-title.png') }}" alt="title">
            <p class="page-title-subtext">@lang('comp-builder.description')</p>
        </div>

        <form id="publish">
        <!-- comps with ragdoll sec -->
        <div class="comps_sec">
            <div class="row text-center">
                <div class="col-12">
                    <div class="comp_input_section">
                        <div class="comp_input_field">
                            <input type="text" name="c_name" placeholder="@lang('comp-builder.enter_position')" required>
                            <p class="text-left">@lang('comp-builder.description1')</p>
                        </div>
                    </div>
                    <div class="comp_textarea_section d-block d-md-none mt-4">
                        <div class="comp_textarea_field">
                            <textarea
                                placeholder="@lang('comp-builder.enter')"></textarea>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- compect elements sec -->
        <div class="compact_bulider_element_section">
            <div class="compact_bulider_inner_section">
                <div class="compect_left_element_bar">
                    <div class="colleen_section mobile_block">
                        <ul>
                            <li>
                                <p><span>1</span>. Colleen</p>
                                <div class="collen_icon_img">
                                    <img src="{{ asset('assets/image/compect_bulider/icon-feu.png') }}" alt="collen icon">
                                </div>
                            </li>

                            <li>
                                <p><span>2</span>. Colleen</p>
                                <div class="collen_icon_img">
                                    <img src="{{ asset('assets/image/compect_bulider/icon-lumiere.png') }}" alt="collen icon">
                                </div>
                            </li>

                            <li>
                                <p><span>3</span>. Colleen</p>
                                <div class="collen_icon_img">
                                    <img src="{{ asset('assets/image/compect_bulider/icon-feu.png') }}" alt="collen icon">
                                </div>
                            </li>

                            <li>
                                <p><span>4</span>. Colleen</p>
                                <div class="collen_icon_img">
                                    <img src="{{ asset('assets/image/compect_bulider/icon-lumiere.png') }}" alt="collen icon">
                                </div>
                            </li>

                            <li>
                                <p><span>5</span>. Colleen</p>
                                <div class="collen_icon_img">
                                    <img src="{{ asset('assets/image/compect_bulider/icon-vent.png') }}" alt="collen icon">
                                </div>
                            </li>

                            <li>
                                <p><span>6</span>. Colleen</p>
                                <div class="collen_icon_img">
                                    <img src="{{ asset('assets/image/compect_bulider/icon-vent.png') }}" alt="collen icon">
                                </div>
                            </li>

                            <li>
                                <p><span>7</span>. Colleen</p>
                                <div class="collen_icon_img">
                                    <img src="{{ asset('assets/image/compect_bulider/icon-eau.png') }}" alt="collen icon">
                                </div>
                            </li>

                            <li>
                                <p><span>8</span>. Colleen</p>
                                <div class="collen_icon_img">
                                    <img src="{{ asset('assets/image/compect_bulider/icon-eau.png') }}" alt="collen icon">
                                </div>
                            </li>
                        </ul>
                    </div>

                    <div id="character">
                        <div class="compect_element_section">
                            <div class="compect_element_title">
                                <h2>@lang('comp-builder.elements')</h2>
                            </div>

                            <ul>
                                <li>
                                    <img src="{{ asset('assets/image/compect_bulider/icon-eau.png') }}" alt="compect element1">
                                    <p>x 0</p>
                                </li>
                                <li>
                                    <img src="{{ asset('assets/image/compect_bulider/icon-tenebre.png') }}" alt="compect element2">
                                    <p>x 0</p>
                                </li>
                                <li>
                                    <img src="{{ asset('assets/image/compect_bulider/icon-feu.png') }}" alt="compect element3">
                                    <p>x 0</p>
                                </li>
                                <li>
                                    <img src="{{ asset('assets/image/compect_bulider/icon-lumiere.png') }}" alt="compect element4">
                                    <p>x 0</p>
                                </li>
                                <li>
                                    <img src="{{ asset('assets/image/compect_bulider/icon-vent.png') }}" alt="compect element5">
                                    <p>x 0</p>
                                </li>
                            </ul>
                        </div>

                        <div class="compect_role_section">
                            <div class="compect_element_title">
                                <h2>@lang('comp-builder.role')</h2>
                            </div>

                            <div class="compect_role_items">
                                <ul>
                                    <li>
                                        <div class="cm_role_icone_img">
                                            <img src="{{ asset('assets/image/Monter-list/all_role_monter_icon_1.png') }}" alt="role icon1">
                                        </div>
                                        <p>x 0 @lang('comp-builder.atk')</p>
                                    </li>
                                    <li>
                                        <div class="cm_role_icone_img">
                                            <img src="{{ asset('assets/image/Monter-list/all_role_monter_icon_4.png') }}" alt="role icon1">
                                        </div>
                                        <p>x 0 @lang('comp-builder.def')</p>
                                    </li>
                                    <li>
                                        <div class="cm_role_icone_img">
                                            <img src="{{ asset('assets/image/Monter-list/all_role_monter_icon_2.png') }}" alt="role icon1">
                                        </div>
                                        <p>x 0 @lang('comp-builder.hp')</p>
                                    </li>
                                    <li>
                                        <div class="cm_role_icone_img">
                                            <img src="{{ asset('assets/image/Monter-list/all_role_support-ic_3.png') }}" alt="role icon1">
                                        </div>
                                        <p>x 0 @lang('comp-builder.sup')</p>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="compect_raity_section">
                            <div class="compect_element_title">
                                <h2>@lang('comp-builder.rarity')</h2>
                            </div>

                            <div class="compect_raity_items">
                                <ul>
                                    <li>
                                        <span></span>
                                        <p>x 0</p>
                                    </li>

                                    <li>
                                        <span class="raity_color_2"></span>
                                        <p>x 0</p>
                                    </li>

                                    <li>
                                        <span class="raity_color_3"></span>
                                        <p>x 0</p>
                                    </li>

                                    <li>
                                        <span class="raity_color_4"></span>
                                        <p>x 0</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="compect_spells_section">
                        <div class="compect_element_title">
                            <h2>@lang('comp-builder.spells')</h2>
                        </div>

                        <div class="spells_item" ondragover="allowDrop1(event)" ondrop="drop1(event)">
                            <ul>
                                <li id="spell_1">
                                    <a href="#1" data-toggle="modal" class="switch-modal-a" data-target="">
                                        <div class="spells_iiner_iteam">
                                            <img src="{{ asset('assets/image/compect_bulider/spell_shape.png') }}" alt="compect_icon" data-position="1">
                                        </div>
                                    </a>
                                </li>
                                <li id="spell_2">
                                    <a href="#1" data-toggle="modal" class="switch-modal-a" data-target="">
                                        <div class="spells_iiner_iteam">
                                            <img src="{{ asset('assets/image/compect_bulider/spell_shape.png') }}" alt="compect_icon"  data-position="2">
                                        </div>
                                    </a>
                                </li>
                                <li id="spell_3">
                                    <a href="#1" data-toggle="modal" class="switch-modal-a" data-target="">
                                        <div class="spells_iiner_iteam">
                                            <img src="{{ asset('assets/image/compect_bulider/spell_shape.png') }}" alt="compect_icon"  data-position="3">
                                        </div>
                                    </a>
                                </li>
                    </ul>
                </div>
            </div>

            <div class="compect_average mobile_block">
                <p id="avg_mana_cost">@lang('comp-builder.avg_mana'):<span> 0</span></p>
                <img src="{{ asset('assets/image/compect_bulider/cb_average_img.png') }}" alt="average">
            </div>
        </div>

        <div class="compect_right_section">
            <div class="compect_right_bg_banner">
                <div class="compect_genral_info_section">
                    <h2 class="general-info-title">@lang('comp-builder.info')</h2>
                    <textarea name="c_general_info" placeholder="@lang('comp-builder.enter')" required></textarea>
                </div>

                <div class="row desktop_block">
                    <div class="col-md-6">
                        <div class="compect_plus_box" ondragover="allowDrop(event)" ondrop="drop(event)">
                            <div id="add_1">
                                <a class="compect_plus_right_1">
                                    <div class="compect_plus_inner" data-position="1">
                                        <i class="fas fa-plus"  data-position="1"></i>
                                    </div>
                                </a>
                            </div>
                            <div id="add_2">
                                <a class="compect_plus_right_2">
                                    <div class="compect_plus_inner" data-position="2">
                                        <i class="fas fa-plus"  data-position="2"></i>
                                    </div>
                                </a>
                            </div>
                            <div id="add_3">
                                <a class="compect_plus_right_3">
                                    <div class="compect_plus_inner" data-position="3">
                                        <i class="fas fa-plus"  data-position="3"></i>
                                    </div>
                                </a>
                            </div>
                            <div id="add_4">
                                <a class="compect_plus_right_4">
                                    <div class="compect_plus_inner" data-position="4">
                                        <i class="fas fa-plus"  data-position="4"></i>
                                    </div>
                                </a>
                            </div>

                            <div class="compect_average">
                                <p id="avg_mana_cost">@lang('comp-builder.avg_mana'):<span> 0</span></p>
                                <img src="{{ asset('assets/image/compect_bulider/cb_average_img.png') }}" alt="average">
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="compect_plus_right_box" ondragover="allowDrop(event)" ondrop="drop(event)">
                            <div id="add_5">
                                <a href="#1" class="compect_plus_right_1" target="_blank">
                                    <div class="compect_plus_inner" data-position="5">
                                        <i class="fas fa-plus"  data-position="5"></i>
                                    </div>
                                </a>
                            </div>
                            <div id="add_6">
                                <a href="#1" class="compect_plus_right_2" target="_blank">
                                    <div class="compect_plus_inner" data-position="6">
                                        <i class="fas fa-plus"  data-position="6"></i>
                                    </div>
                                </a>
                            </div>
                            <div id="add_7">
                                <a href="#1" class="compect_plus_right_3" target="_blank">
                                    <div class="compect_plus_inner" data-position="7">
                                        <i class="fas fa-plus"  data-position="7"></i>
                                    </div>
                                </a>
                            </div>
                            <div id="add_8">
                                <a href="#1" class="compect_plus_right_4" target="_blank">
                                    <div class="compect_plus_inner" data-position="8">
                                        <i class="fas fa-plus" data-position="8"></i>
                                    </div>
                                </a>
                            </div>

                            <div class="cb_save_and_publish_btn">
                                <button type="submit" class="all_btn">@lang('comp-builder.save')</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mobile_block">
                    <div class="col">
                        <div class="compect_mobil_bg">
                            <div class="compect_coleen_title">
                                <p>@lang('comp-builder.title')</p>
                            </div>


                            <div class="compect_mobile_boder">
                                <div class="mobile_monster_section">
                                    <div class="line_up_sec text-center">
                                        <input type="hidden" id="position">
                                        <div class="line_up_monster line_up_monster_1" data-position="1" data-toggle="modal" data-target="#monster-modal">
                                            <div>
                                                <div>
                                                    <img src="{{ asset('assets/image/compect_bulider/mobile_add_pluse.png') }}" alt="monster">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="line_up_monster line_up_monster_2" data-position="2" data-toggle="modal" data-target="#monster-modal">
                                            <div>
                                                <div>
                                                    <img src="{{ asset('assets/image/compect_bulider/mobile_add_pluse.png') }}" alt="monster">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="line_up_monster line_up_monster_3" data-position="3" data-toggle="modal" data-target="#monster-modal">
                                            <div>
                                                <div>
                                                    <img src="{{ asset('assets/image/compect_bulider/mobile_add_pluse.png') }}" alt="monster">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="line_up_monster line_up_monster_4" data-position="4" data-toggle="modal" data-target="#monster-modal">
                                            <div>
                                                <div>
                                                    <img src="{{ asset('assets/image/compect_bulider/mobile_add_pluse.png') }}" alt="monster">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="line_up_monster line_up_monster_5" data-position="5" data-toggle="modal" data-target="#monster-modal">
                                            <div>
                                                <div>
                                                    <img src="{{ asset('assets/image/compect_bulider/mobile_add_pluse.png') }}" alt="monster">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="line_up_monster line_up_monster_6" data-position="6" data-toggle="modal" data-target="#monster-modal">
                                            <div>
                                                <div><img src="{{ asset('assets/image/compect_bulider/mobile_add_pluse.png') }}"
                                                        alt="monster"></div>
                                            </div>
                                        </div>

                                        <div class="line_up_monster line_up_monster_7" data-position="7" data-toggle="modal" data-target="#monster-modal">
                                            <div>
                                                <div>
                                                    <img src="{{ asset('assets/image/compect_bulider/mobile_add_pluse.png') }}" alt="monster">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="line_up_monster line_up_monster_8" data-position="8" data-toggle="modal" data-target="#monster-modal">
                                            <div>
                                                <div>
                                                    <img src="{{ asset('assets/image/compect_bulider/mobile_add_pluse.png') }}" alt="monster">
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
        </div>
        </form>
    </div>
</div>

<!-- compect elements tab sec -->
<div class="compect_bulider_fliter_section">
    <div class="compect_filter_elemts">
        <div class="compect_select_list runes-form">
            <div class="checkbox-field">
                <div class="dropdown dropdown1 dropdown-search-wrap " data-control="checkbox-dropdown">
                    <label class="dropdown-label">@lang('comp-builder.filter_monster')</label>
                    <div class="dropdown-list">
                        <div class="search-filed">
                            <input type="search" placeholder="@lang('comp-builder.search_name')" class="dropdown-search"
                                id="monster-search" onkeyup="filterFunction()">
                            <i class="fa fa-search" aria-hidden="true"></i>
                        </div>
                        <div class="inner-dropdown-sec " id="search-box">
                            @foreach($monsters as $monster)
                            <label class="dropdown-option search-dropdown">
                                <input type="checkbox" name="monster[]" class="monster" value="{{ $monster->id }}">
                                <span>{{ Session::get('lang') == 'en' ? $monster->name : $monster->fr_name }}</span>
                            </label>
                            @endforeach
                        </div>
                    </div>
                </div>

                <div class="dropdown dropdown2" data-control="checkbox-dropdown">
                    <label class="dropdown-label">
                        <input type="number" name="mana_cost1" id="mana_cost1" value="1" min="1" max="6" maxlength="1"
                            class="start-monster">
                        -
                        <input type="number" name="mana_cost2" id="mana_cost2" value="6" min="1" max="6" maxlength="1"
                            class="end-monster">
                    </label>
                </div>

                <div class="dropdown dropdown3" data-control="checkbox-dropdown">
                    <label class="dropdown-label">@lang('comp-builder.all_elements')</label>
                    <div class="dropdown-list">
                        <div class="inner-dropdown-sec ">
                            @foreach(DB::table('element')->get() as $element)
                            <label class="dropdown-option">
                                <input type="checkbox" class="element dropdown-group" name="element[]"
                                    value="{{ $element->id }}" />
                                <span>{{ Session::get('lang') == 'en' ? $element->name : $element->fr_name }}</span>
                                <img src="{{ asset('images/game/icons/elements/'.$element->detail_icon) }}"
                                    alt="all con">
                            </label>
                            @endforeach
                        </div>
                    </div>
                </div>

                <div class="dropdown dropdown4" data-control="checkbox-dropdown">
                    <label class="dropdown-label">@lang('comp-builder.all_rarity')</label>
                    <div class="dropdown-list">
                        <div class="inner-dropdown-sec">
                            @foreach(DB::table('rarity')->get() as $rarity)
                            <label class="dropdown-option">
                                <input type="checkbox" class="rarity" name="rarity[]" value="{{ $rarity->id }}" />
                                <span>{{ Session::get('lang') == 'en' ? $rarity->name : $rarity->fr_name }}</span>
                                <p class="rarity_circle" style="background: {{ $rarity->color }}"></p>
                            </label>
                            @endforeach
                        </div>
                    </div>
                </div>

                <div class="dropdown dropdown5" data-control="checkbox-dropdown">
                    <label class="dropdown-label">@lang('comp-builder.all_role')</label>
                    <div class="dropdown-list">
                        <div class="inner-dropdown-sec ">
                            @foreach(DB::table('role')->get() as $role)
                            <label class="dropdown-option">
                                <input type="checkbox" class="role" name="role[]" value="{{ $role->id }}" />
                                <span>{{ Session::get('lang') == 'en' ? $role->name : $role->fr_name }}</span>
                                <img src="{{ asset('images/game/icons/roles/'.$role->icon) }}" alt="roll icon">
                            </label>
                            @endforeach
                        </div>
                    </div>
                </div>

                <div class="cm_bulider_tab">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link monsters_tab active" data-toggle="tab" href="#tabs-1"
                                role="tab">@lang('comp-builder.monsters')</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link spells_tab" data-toggle="tab" href="#tabs-2" role="tab">@lang('comp-builder.spells')</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="compect_monster_tab_section">
                <div class="tab-content">
                    <div class="tab-pane active" id="tabs-1" role="tabpanel">
                        <div class="compect_inner_monster mCustomScrollbar">
                            <div class="line_up_sec text-center" id="monster-list" ondrop="drop(event)">
                                @foreach($monsters as $monster)
                                <div class="line_up_monster" ondragstart="DragStart(event)">
                                    <a href="{{ route(Session::get('lang') == 'en' ? 'monster-detail' : 'fr-monster-detail', [Session::get('lang'), Session::get('lang') == 'en' ? $monster->slug : $monster->fr_slug]) }}" target="_blank">
                                        <div class="contain_shape contain_shape_{{ $monster->rarity }}">
                                            <div class="shape m-auto"><img id="{{$monster->id}}"
                                                    src="{{ asset('images/game/icon_images/'.$monster->icon_image) }}"
                                                    alt="monster img"></div>
                                        </div>
                                        <span>{{ Session::get('lang') == 'en' ? $monster->name : $monster->fr_name }}</span>
                                    </a>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane" id="tabs-2" role="tabpanel">
                        <div class="compect_inner_monster2 mCustomScrollbar">
                            <div class="line_up_sec text-center" ondrop="drop1(event)">
                                @foreach(DB::table('spells')->where('del_flag', 0)->get() as $spell)
                                <div class="line_up_monster" ondragstart="DragStart1(event)">
                                    <a href="#1">
                                        <div class="compect_spells_big">
                                            <img src="{{ asset('images/game/icon_images/'.$spell->icon_image) }}" id="{{ $spell->id }}" style="width:71px"
                                                alt="spells">
                                        </div>
                                    </a>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="mobile_save_and_pub_btn mobile_block">
    <a href="#" class="all_btn">@lang('comp-builder.save')</a>
</div>

</div>
</div>

<!-- Content Start-->

<!-- Modal -->
<div class="modal fade comp-builder-popup" id="monster-modal" tabindex="-1" role="dialog"
    aria-labelledby="monstermodalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header justify-content-center">
                <h5 class="modal-title" id="monstermodalLabel">Choisir un monstre</h5>
            </div>
            <div class="modal-body comp_builder p-0">
                <div class="runes-form">
                    <!--  -->
                    <div class="checkbox-field">
                        <div class="dropdown dropdown1 dropdown-search-wrap " data-control="checkbox-dropdown">
                            <label class="dropdown-label text-center">@lang('comp-builder.filter_monster')</label>
                            <div class="dropdown-list">
                                <div class="search-filed">
                                    <input type="search" placeholder="@lang('comp-builder.search_name')" class="dropdown-search"
                                        id="m-monster-search" onkeyup="m_filterFunction()">
                                    <i class="fa fa-search" aria-hidden="true"></i>
                                </div>
                                <div class="inner-dropdown-sec " id="m-search-box">
                                    @foreach($monsters as $monster)
                                    <label class="dropdown-option m-search-dropdown">
                                        <input type="checkbox" name="monster[]" class="monster"
                                            value="{{ $monster->id }}">
                                        <span>{{ Session::get('lang') == 'en' ? $monster->name : $monster->fr_name }}</span>
                                    </label>
                                    @endforeach
                                </div>
                            </div>
                        </div>

                        <div class="dropdown dropdown2" data-control="checkbox-dropdown">
                            <label class="dropdown-label">
                                <input type="text" name="mana_cost1" id="mana_cost1"  value="1" min="1" max="6" maxlength="1">
                                -
                                <input type="text" name="mana_cost2" id="mana_cost2" value="6" min="1" max="6" maxlength="1">
                            </label>
                        </div>

                        <div class="dropdown dropdown3" data-control="checkbox-dropdown">
                            <label class="dropdown-label">@lang('comp-builder.all_elements')</label>
                            <div class="dropdown-list">
                                <div class="inner-dropdown-sec ">
                                    @foreach(DB::table('element')->get() as $element)
                                    <label class="dropdown-option">
                                        <input type="checkbox" class="element dropdown-group" name="element[]"
                                            value="{{ $element->id }}" />
                                        <span>{{ Session::get('lang') == 'en' ? $element->name : $element->fr_name }}</span>
                                        <img src="{{ asset('images/game/icons/elements/'.$element->detail_icon) }}"
                                            alt="all con">
                                    </label>
                                    @endforeach
                                </div>
                            </div>
                        </div>

                        <div class="dropdown dropdown4" data-control="checkbox-dropdown">
                            <label class="dropdown-label">@lang('comp-builder.all_rarity')</label>
                            <div class="dropdown-list">
                                <div class="inner-dropdown-sec">
                                    @foreach(DB::table('rarity')->get() as $rarity)
                                    <label class="dropdown-option">
                                        <input type="checkbox" class="rarity" name="rarity[]"
                                            value="{{ $rarity->id }}" />
                                        <span>{{ Session::get('lang') == 'en' ? $rarity->name : $rarity->fr_name }}</span>
                                        <p class="rarity_circle" style="background: {{ $rarity->color }}"></p>
                                    </label>
                                    @endforeach
                                </div>
                            </div>
                        </div>

                        <div class="dropdown dropdown5" data-control="checkbox-dropdown">
                            <label class="dropdown-label">@lang('comp-builder.all_roles')</label>
                            <div class="dropdown-list">
                                <div class="inner-dropdown-sec ">
                                    @foreach(DB::table('role')->get() as $role)
                                    <label class="dropdown-option">
                                        <input type="checkbox" class="role" name="role[]" value="{{ $role->id }}" />
                                        <span>{{ Session::get('lang') == 'en' ? $role->name : $role->fr_name }}</span>
                                        <img src="{{ asset('images/game/icons/roles/'.$role->icon) }}" alt="roll icon">
                                    </label>
                                    @endforeach
                                </div>
                            </div>
                        </div>

                        <div class="compect_inner_monster mCustomScrollbar w-100">
                            <div class="line_up_sec text-center" id="m-monster-list">
                                @foreach($monsters as $monster)
                                <div class="line_up_monster">
                                    <a class="monster-item" href="{{ route(Session::get('lang') == 'en' ? 'monster-detail' : 'fr-monster-detail', [Session::get('lang'), Session::get('lang') == 'en' ? $monster->slug : $monster->fr_slug]) }}" target="_blank">
                                        <div class="contain_shape contain_shape_{{ $monster->rarity }}">
                                            <div class="shape"><img id="{{$monster->id}}"
                                                    src="{{ asset('images/game/icon_images/'.$monster->icon_image) }}"
                                                    alt="monster img"></div>
                                        </div>
                                        <span>{{ Session::get('lang') == 'en' ? $monster->name : $monster->fr_name }}</span>
                                    </a>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="popup-bottom-design">

                        </div>
                    </div>
                    <!--  -->
                </div>
            </div>
            <div class="modal-footer d-none">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">@lang('comp-builder.close')</button>
                <button type="button" class="btn btn-primary">@lang('comp-builder.change')</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade comp-builder-popup switch-modal hide" id="switch-modal" tabindex="-1" role="dialog"
    aria-labelledby="switchModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header justify-content-center">
                <h5 class="modal-title" id="switchModalLabel">Choisir un monstre</h5>
            </div>
            <div class="modal-body comp_builder p-0">
                <!--  -->
                <div class="compect_inner_monster2 mCustomScrollbar w-100">
                    <div class="line_up_sec text-center">
                        @foreach(DB::table('spells')->where('del_flag', 0)->get() as $spell)
                        <div class="line_up_monster">
                            <a href="#1">
                                <div class="compect_spells_big">
                                    <img src="{{ asset('images/game/icon_images/'.$spell->icon_image) }}" alt="spells">
                                </div>
                            </a>
                        </div>
                        @endforeach
                    </div>
                </div>
                <!--  -->
            </div>
            <div class="modal-footer d-none">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">@lang('comp-builder.close')</button>
                <button type="button" class="btn btn-primary">@lang('comp-builder.change')</button>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/12.0.0/nouislider.min.js"></script>
<script>
// =============== drag and drop start ===================
// ------------- monster ------------
var monster_id;

function allowDrop(eve) {
    eve.preventDefault();
}

function DragStart(eve) {
    monster_id = eve.target.id;
}

function drop(eve) {
    if(eve.target.parentNode.getAttribute("data-position")) {
        var drop_id = eve.target.parentNode.getAttribute("data-position");
    } else {
        var drop_id = eve.target.getAttribute("data-position");
    }
    
    var is_same = false;
    $('.main-image').each(function() {
        if ($(this).attr('id') == monster_id) {
            toastr.error("You can't choose same monster! Please chooose other monster.")
            is_same = true;
            return false;
        }
    });
    if(!is_same) {
        $.ajax({
            url: "{{ route('get-monster', Session::get('lang')) }}",
            method: "get",
            data: {
                monster_id: monster_id,
                drop_id: drop_id
            },
            success: function(data) {
                var html = data;
                $('#add_' + drop_id).html(html);

                var monster_ids = [];
                var i = 0;
                $('.main-image').each(function() {
                    monster_ids[i] = $(this).attr('id');
                    i++;
                });
                $.ajax({
                    url: "{{ route('calculate-monster', Session::get('lang')) }}",
                    method: "get",
                    data: {
                        monster_ids: monster_ids
                    },
                    success: function(data) {
                        $('#character').html(data);
                        var avg_mana = $('#avg_mana').val();
                        $('#avg_mana_cost > span').text(avg_mana);
                    }
                })
            }
        })
    }
}

// -------------- spell -------------
var spell_id;

function allowDrop1(eve) {
    eve.preventDefault();
}

function DragStart1(eve) {
    spell_id = eve.target.id;
}

function drop1(eve) {
    var drop_id = eve.target.getAttribute("data-position");
    var is_same = false;

    $('.spell-image').each(function() {
        if ($(this).attr('id') == spell_id) {
            toastr.error("You can't choose same spell! Please chooose other spell.")
            is_same = true;
            return false;
        }
    });

    if(!is_same) {
        $.ajax({
            url: "{{ route('get-spell', Session::get('lang')) }}",
            method: "get",
            data: {
                spell_id: spell_id,
                drop_id: drop_id
            },
            success: function(data) {
                var html = data;
                $('#spell_' + drop_id).html(html);
            }
        })
    }
}

// =============== drag and drop end ===================


$(document).on('submit', '#publish', function(e) {
    e.preventDefault();
    
    @if(!Auth::user())
        $('#login_popup').modal('toggle');
        $(".register-form").parents('.register_content').removeClass('hide_register');                 
        $(".login-form").parents('.register_content').addClass('show_login');
    @else
        var monster_count = 0; 
        $('.c_position').each(function() {
            monster_count++;  
        });

        if(monster_count != 8) {
            toastr.error('You should choose 8 monsters!');
        }

        var spell_count = 0;
        $('.c_spell').each(function() {
            spell_count++;
        });

        if(spell_count != 3) {
            toastr.error('You should choose 3 spells!');
        }

        if(spell_count == 3 && monster_count == 8) {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url: "{{ route('comps-submit', Session::get('lang')) }}",
                method: "POST",
                data: $(this).serialize(),
                success: function(data) {
                    if(data) {
                        toastr.success('You have successfully submitted!');
                        location.reload();
                    } else {
                        toastr.success('Server has any problem!');
                    }
                    
                }
            })
        }
    @endif
})

function filterFunction() {
    var input, filter, ul, li, a, i;
    input = document.getElementById("monster-search");
    filter = input.value.toUpperCase();
    div = document.getElementById("search-box");
    search_dropdown = document.getElementsByClassName("search-dropdown");
    span = div.getElementsByTagName("span");
    for (i = 0; i < span.length; i++) {
        txtValue = span[i].textContent || span[i].innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
            search_dropdown[i].style.display = "";
        } else {
            search_dropdown[i].style.display = "none";
        }
    }
}

function m_filterFunction() {
    var input, filter, ul, li, a, i;
    input = document.getElementById("m-monster-search");
    filter = input.value.toUpperCase();
    div = document.getElementById("m-search-box");
    search_dropdown = document.getElementsByClassName("m-search-dropdown");
    span = div.getElementsByTagName("span");
    for (i = 0; i < span.length; i++) {
        txtValue = span[i].textContent || span[i].innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
            search_dropdown[i].style.display = "";
        } else {
            search_dropdown[i].style.display = "none";
        }
    }
}

// ========================== filter part start =========================
$(document).ready(function() {

    $(".element, .rarity, .role, .monster, #mana_cost1, #mana_cost2").on('change', function() {
        filter();
    })

    $(document).on('click', '.number-page, #prev, #next', function() {
        var page_url = $(this).data('href');

        let filterlink = '';
        $(".element, .rarity, .role").each(function() {
            if ($(this).is(':checked')) {
                filterlink += '&' + $(this).attr('name') + '=' + $(this).val();
            }
        });
        filterlink += '&' + $('#mana_cost').attr('name') + '=[' + $('#mana_cost').val() + ']';

        var url = page_url + encodeURI(filterlink);

        $.ajax({
            url: url,
            method: "get",
            success: function(data) {
                $('#monster-list').html(data);
                $('#m-monster-list').html(data);
            }
        })
    })
})

function filter() {
    let filterlink = '';

    $(".element, .rarity, .role, .monster").each(function() {
        if ($(this).is(':checked')) {
            if (filterlink == '') {
                filterlink += "{{route('get-filter-builder-monster', Session::get('lang'))}}" + '?' + $(this).attr('name') + '=' + $(
                    this).val();
            } else {
                filterlink += '&' + $(this).attr('name') + '=' + $(this).val();
            }
        }
    });

    if (filterlink == '') {
        filterlink += "{{route('get-filter-builder-monster', Session::get('lang'))}}" + '?mana_cost1=' + $('#mana_cost1').val() +
            '&mana_cost2=' + $('#mana_cost2').val();
    } else {
        filterlink += '&mana_cost1=' + $('#mana_cost1').val() + '&mana_cost2=' + $('#mana_cost2').val();
    }
    console.log(encodeURI(filterlink))

    $.ajax({
        url: encodeURI(filterlink),
        method: "get",
        success: function(data) {
            $('#monster-list').html(data);
            $('#m-monster-list').html(data);
        }
    })
}
// ========================== fileter part end

//moster and sells tab js ----------------------

$(".spells_tab").click(function($e) {
    $e.preventDefault();
    $('.compect_bulider_fliter_section').addClass('active');
    $(this).tab('show');
});

$(".monsters_tab").click(function($e) {
    $e.preventDefault();
    $('.compect_bulider_fliter_section').removeClass('active');
    $(this).tab('show');
});

// $('#exampleModal').modal('show');

$(function() {
    $(".start-monster").change(function() {
        var max = parseInt($(this).attr('max'));
        var min = parseInt($(this).attr('min'));
        if ($(this).val() > max) {
            $(this).val(max);
        } else if ($(this).val() < min) {
            $(this).val(min);
        }
    });
});
$(function() {
    $(".end-monster").change(function() {
        var max = parseInt($(this).attr('max'));
        var min = parseInt($(this).attr('min'));
        if ($(this).val() > max) {
            $(this).val(max);
        } else if ($(this).val() < min) {
            $(this).val(min);
        }
    });
});


$('#exampleModal').on('show.bs.modal', function(event) {
    var button = $(event.relatedTarget)
    var recipient = button.data('whatever')

    var modal = $(this)
    modal.find('.modal-title').text('New message to ' + recipient)
    modal.find('.modal-body input').val(recipient)
})


// ---------------- mobile js ---------------
$(document).on('click', '.line_up_monster', function() {
    $('#position').val($(this).data('position'));
})
$(document).on('click', '.monster-item', function(e) {
    e.preventDefault();

    var position = $('#position').val();
    $('.line_up_monster_' + position).html($(this).html());
    $('#monster-modal').modal('hide');
});
</script>
@endsection