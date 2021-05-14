@extends('layouts.frontend.layout')

@section('styles')
<link rel="stylesheet" href="assets/css/all.min.css" type="text/css" />
@endsection

@section('content')
<!-- Content Start-->
<div class="main-content user-page-public comp_builder-page comp_builder">
    <!-- Body Content -->
    <div class="monster_wrap page-space">

        <div class="text-center ragdoll-top-sec page-title-section mt-3 mt-md-0 ">
            <h1 class="page-title ">Team composition creation tool</h1>
            <img src="assets/image/add-run-set/separator-title.png" alt="title">
            <p class="page-title-subtext">
                Access here the team composition creation tool for
                your Summoners War: Lost Centuria monsters.
            </p>
        </div>

        <!-- comps with ragdoll sec -->
        <div class="comps_sec">
            <div class="row text-center">
                <div class="col-12">
                    <div class="comp_input_section">
                        <div class="comp_input_field">
                            <input type="text" name="name" placeholder="Enter composition name">
                            <p class="text-left">Kindly note that you will not be able to publish
                                the team composition if you have not logged in beforehand.</p>
                        </div>
                    </div>
                    <div class="comp_textarea_section d-block d-md-none mt-4">
                        <div class="comp_textarea_field">
                            <textarea
                                placeholder="Enter the comp info for the other players and yourself ..."></textarea>
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
                                    <img src="assets/image/compect_bulider/icon-feu.png" alt="collen icon">
                                </div>
                            </li>

                            <li>
                                <p><span>2</span>. Colleen</p>
                                <div class="collen_icon_img">
                                    <img src="assets/image/compect_bulider/icon-lumiere.png" alt="collen icon">
                                </div>
                            </li>

                            <li>
                                <p><span>3</span>. Colleen</p>
                                <div class="collen_icon_img">
                                    <img src="assets/image/compect_bulider/icon-feu.png" alt="collen icon">
                                </div>
                            </li>

                            <li>
                                <p><span>4</span>. Colleen</p>
                                <div class="collen_icon_img">
                                    <img src="assets/image/compect_bulider/icon-lumiere.png" alt="collen icon">
                                </div>
                            </li>

                            <li>
                                <p><span>5</span>. Colleen</p>
                                <div class="collen_icon_img">
                                    <img src="assets/image/compect_bulider/icon-vent.png" alt="collen icon">
                                </div>
                            </li>

                            <li>
                                <p><span>6</span>. Colleen</p>
                                <div class="collen_icon_img">
                                    <img src="assets/image/compect_bulider/icon-vent.png" alt="collen icon">
                                </div>
                            </li>

                            <li>
                                <p><span>7</span>. Colleen</p>
                                <div class="collen_icon_img">
                                    <img src="assets/image/compect_bulider/icon-eau.png" alt="collen icon">
                                </div>
                            </li>

                            <li>
                                <p><span>8</span>. Colleen</p>
                                <div class="collen_icon_img">
                                    <img src="assets/image/compect_bulider/icon-eau.png" alt="collen icon">
                                </div>
                            </li>
                        </ul>
                    </div>

                    <div class="compect_element_section">
                        <div class="compect_element_title">
                            <h2>Elements</h2>
                        </div>

                        <ul>
                            <li>
                                <img src="assets/image/compect_bulider/icon-eau.png" alt="compect element1">
                                <p>x 1</p>
                            </li>
                            <li>
                                <img src="assets/image/compect_bulider/icon-tenebre.png" alt="compect element2">
                                <p>x 0</p>
                            </li>
                            <li>
                                <img src="assets/image/compect_bulider/icon-feu.png" alt="compect element3">
                                <p>x 0</p>
                            </li>
                            <li>
                                <img src="assets/image/compect_bulider/icon-lumiere.png" alt="compect element4">
                                <p>x 0</p>
                            </li>
                            <li>
                                <img src="assets/image/compect_bulider/icon-vent.png" alt="compect element5">
                                <p>x 0</p>
                            </li>
                        </ul>
                    </div>

                    <div class="compect_role_section">
                        <div class="compect_element_title">
                            <h2>Roles</h2>
                        </div>

                        <div class="compect_role_items">
                            <ul>
                                <li>
                                    <div class="cm_role_icone_img">
                                        <img src="assets/image/Monter-list/all_role_monter_icon_1.png" alt="role icon1">
                                    </div>
                                    <p>x 1 in Attack</p>
                                </li>
                                <li>
                                    <div class="cm_role_icone_img">
                                        <img src="assets/image/Monter-list/all_role_monter_icon_4.png" alt="role icon1">
                                    </div>
                                    <p>x 0 in Defense</p>
                                </li>
                                <li>
                                    <div class="cm_role_icone_img">
                                        <img src="assets/image/Monter-list/all_role_monter_icon_2.png" alt="role icon1">
                                    </div>
                                    <p>x 0 in HP</p>
                                </li>
                                <li>
                                    <div class="cm_role_icone_img">
                                        <img src="assets/image/Monter-list/all_role_support-ic_3.png" alt="role icon1">
                                    </div>
                                    <p>x 0 in Support</p>
                                </li>
                            </ul>
                        </div>
                    </div>


                    <div class="compect_raity_section">
                        <div class="compect_element_title">
                            <h2>Rarity</h2>
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

                    <div class="compect_spells_section">
                        <div class="compect_element_title">
                            <h2>Spells</h2>
                        </div>

                        <div class="spells_item">
                            <ul>
                                <li>
                                    <a href="#1" data-toggle="modal" class="switch-modal-a" data-target="">
                                        <div class="spells_iiner_iteam">
                                            <img src="assets/image/compect_bulider/compect_spells_1.png"
                                                alt="compect_icon">
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#1" data-toggle="modal" class="switch-modal-a" data-target="">
                                        <div class="spells_iiner_iteam">
                                            <div class="spells_center_pluse">
                                                <img src="assets/image/compect_bulider/spell_shape.png" alt="shape"
                                                    class="spell_center_shape">
                                    </a>
                        </div>
                    </div>
                    </li>
                    <li>
                        <a href="#1" data-toggle="modal" class="switch-modal-a" data-target="">
                            <div class="spells_iiner_iteam">
                                <img src="assets/image/compect_bulider/compect_spells_1.png" alt="compect_icon">
                            </div>
                        </a>
                    </li>
                    </ul>
                </div>
            </div>

            <div class="compect_average mobile_block">
                <p>Average mana cost:3.2</p>
                <img src="assets/image/compect_bulider/cb_average_img.png" alt="average">
            </div>
        </div>

        <div class="compect_right_section">
            <div class="compect_right_bg_banner">
                <div class="compect_genral_info_section">
                    <h2 class="general-info-title">GENERAL INFO</h2>
                    <textarea placeholder="Enter the comp info for the other players and yourself ..."></textarea>
                </div>

                <div class="row desktop_block">
                    <div class="col-md-6">
                        <div class="compect_plus_box">
                            <a href="#1" class="compect_monster_box compect_monster_box1" target="_blank">
                                <div class="monster_img">
                                    <div class="icon_img">
                                        <img src="assets/image/mana-icone-carte.svg" alt="icon"
                                            class="icon_top_monster">
                                        <span>4</span>
                                    </div>
                                    <img src="assets/image/compect_bulider/cb_monster.png" alt="monster"
                                        class="monster-individual">
                                    <img src="assets/image/compect_bulider/cb_right_bar_icon.png" alt="right bar"
                                        class="icon_monster">
                                </div>
                                <div class="cm_monster_name">
                                    <span class="round-legendary round-color"> </span>
                                    <p>Poséidon</p>
                                    <img src="assets/image/Monter-list/all_role_monter_icon_1.png" alt="cm icon">
                                </div>
                            </a>
                            <a href="#1" class="compect_plus_right_2" target="_blank">
                                <div class="compect_plus_inner">
                                    <i class="fas fa-plus"></i>
                                </div>
                            </a>
                            <a href="#1" class="compect_plus_right_3" target="_blank">
                                <div class="compect_plus_inner">
                                    <i class="fas fa-plus"></i>
                                </div>
                            </a>
                            <a href="#1" class="compect_plus_right_4" target="_blank">
                                <div class="compect_plus_inner">
                                    <i class="fas fa-plus"></i>
                                </div>
                            </a>

                            <div class="compect_average">
                                <p>Average mana cost:3.2</p>
                                <img src="assets/image/compect_bulider/cb_average_img.png" alt="average">
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="compect_plus_right_box">
                            <a href="#1" class="compect_plus_right_1" target="_blank">
                                <div class="compect_plus_inner">
                                    <i class="fas fa-plus"></i>
                                </div>
                            </a>
                            <a href="#1" class="compect_plus_right_2" target="_blank">
                                <div class="compect_plus_inner">
                                    <i class="fas fa-plus"></i>
                                </div>
                            </a>
                            <a href="#1" class="compect_plus_right_3" target="_blank">
                                <div class="compect_plus_inner">
                                    <i class="fas fa-plus"></i>
                                </div>
                            </a>
                            <a href="#1" class="compect_plus_right_4" target="_blank">
                                <div class="compect_plus_inner">
                                    <i class="fas fa-plus"></i>
                                </div>
                            </a>

                            <div class="cb_save_and_publish_btn">
                                <a href="#" class="all_btn">Save and publish</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mobile_block">
                    <div class="col">
                        <div class="compect_mobil_bg">
                            <div class="compect_coleen_title">
                                <p>La Team de Colleen la Colline</p>
                            </div>


                            <div class="compect_mobile_boder">
                                <div class="mobile_monster_section">
                                    <div class="line_up_sec text-center">
                                        <div class="line_up_monster" data-toggle="modal" data-target="#monster-modal">
                                            <div class="contain_shape">
                                                <div class="shape"><img src="assets/image/colleen-thumb.jpg"
                                                        alt="monster"></div>
                                            </div>
                                            <span>Colleen</span>
                                        </div>

                                        <div class="line_up_monster" data-toggle="modal" data-target="#monster-modal">
                                            <div class="contain_shape">
                                                <div class="shape"><img src="assets/image/hwadam-thumb.jpg"
                                                        alt="monster"></div>
                                            </div>
                                            <span>Hwadam</span>
                                        </div>

                                        <div class="line_up_monster" data-toggle="modal" data-target="#monster-modal">
                                            <div>
                                                <div><img src="assets/image/compect_bulider/mobile_add_pluse.png"
                                                        alt="monster"></div>
                                            </div>
                                            <span></span>
                                        </div>

                                        <div class="line_up_monster" data-toggle="modal" data-target="#monster-modal">
                                            <div class="contain_shape">
                                                <div class="shape"><img src="assets/image/belladeon-thumb.jpg"
                                                        alt="monster"></div>
                                            </div>
                                            <span>Belladeon</span>
                                        </div>

                                        <div class="line_up_monster" data-toggle="modal" data-target="#monster-modal">
                                            <div class="contain_shape">
                                                <div class="shape"><img src="assets/image/ramagos-thumb.jpg"
                                                        alt="monster"></div>
                                            </div>
                                            <span>Ramagos</span>
                                        </div>

                                        <div class="line_up_monster" data-toggle="modal" data-target="#monster-modal">
                                            <div>
                                                <div><img src="assets/image/compect_bulider/mobile_add_pluse.png"
                                                        alt="monster"></div>
                                            </div>
                                            <span></span>
                                        </div>

                                        <div class="line_up_monster" data-toggle="modal" data-target="#monster-modal">
                                            <div>
                                                <div><img src="assets/image/compect_bulider/mobile_add_pluse.png"
                                                        alt="monster"></div>
                                            </div>
                                            <span>Mikene</span>
                                        </div>

                                        <div class="line_up_monster" data-toggle="modal" data-target="#monster-modal">
                                            <div class="contain_shape">
                                                <div class="shape"><img src="assets/image/megan-thumb.jpg"
                                                        alt="monster"></div>
                                            </div>
                                            <span>Megan</span>
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

<!-- compect elements tab sec -->
<div class="compect_bulider_fliter_section">
    <div class="compect_filter_elemts">
        <div class="compect_select_list runes-form">
            <div class="checkbox-field">
                <div class="dropdown dropdown1 dropdown-search-wrap " data-control="checkbox-dropdown">
                    <label class="dropdown-label">Filter by monster</label>
                    <div class="dropdown-list">
                        <div class="search-filed">
                            <input type="search" placeholder="Search by name" class="dropdown-search">
                            <i class="fa fa-search" aria-hidden="true"></i>
                        </div>
                        <div class="inner-dropdown-sec ">
                            <label class="dropdown-option">
                                <input type="checkbox" name="dropdown-group" value="Selection 1">
                                <span>Ariamiel</span>
                            </label>
                            <label class="dropdown-option">
                                <input type="checkbox" name="dropdown-group" value="Selection 2">
                                <span>Colleen</span>
                            </label>
                            <label class="dropdown-option">
                                <input type="checkbox" name="dropdown-group" value="Selection 3">
                                <span>Ganymede</span>
                            </label>
                            <label class="dropdown-option">
                                <input type="checkbox" name="dropdown-group" value="Selection 4">
                                <span>Roid</span>
                            </label>
                            <label class="dropdown-option">
                                <input type="checkbox" name="dropdown-group" value="Selection 5">
                                <span>Ganymede</span>
                            </label>
                            <label class="dropdown-option">
                                <input type="checkbox" name="dropdown-group" value="Selection 5">
                                <span>Ganymede</span>
                            </label>
                            <label class="dropdown-option">
                                <input type="checkbox" name="dropdown-group" value="Selection 5">
                                <span>Ganymede</span>
                            </label>
                        </div>
                    </div>
                </div>

                <div class="dropdown dropdown2" data-control="checkbox-dropdown">
                    <label class="dropdown-label">
                        <input type="number" name="" value="3" min="1" max="6" maxlength="1" class="start-monster">
                        -
                        <input type="text" name="" value="4" min="1" max="6" maxlength="1" class="end-monster">
                    </label>
                </div>

                <div class="dropdown dropdown3" data-control="checkbox-dropdown">
                    <label class="dropdown-label">All elements</label>
                    <div class="dropdown-list">
                        <div class="inner-dropdown-sec ">
                            <label class="dropdown-option">
                                <input type="checkbox" name="dropdown-group" value="Selection 1">
                                <span>Water</span>
                                <img src="assets/image/compect_bulider/all-ele_1.png" alt="all con">
                            </label>
                            <label class="dropdown-option">
                                <input type="checkbox" name="dropdown-group" value="Selection 2">
                                <span>Fire</span>
                                <img src="assets/image/compect_bulider/all-ele_2.png" alt="all con">
                            </label>
                            <label class="dropdown-option">
                                <input type="checkbox" name="dropdown-group" value="Selection 3">
                                <span>Light</span>
                                <img src="assets/image/compect_bulider/all-ele_3.png" alt="all con">
                            </label>
                            <label class="dropdown-option">
                                <input type="checkbox" name="dropdown-group" value="Selection 4">
                                <span>Dark</span>
                                <img src="assets/image/compect_bulider/all-ele_4.png" alt="all con">
                            </label>
                            <label class="dropdown-option">
                                <input type="checkbox" name="dropdown-group" value="Selection 5">
                                <span>Wind</span>
                                <img src="assets/image/compect_bulider/all-ele_5.png" alt="all con">
                            </label>
                        </div>
                    </div>
                </div>

                <div class="dropdown dropdown4" data-control="checkbox-dropdown">
                    <label class="dropdown-label">All rarity</label>
                    <div class="dropdown-list">
                        <div class="inner-dropdown-sec">
                            <label class="dropdown-option">
                                <input type="checkbox" name="dropdown-group" value="Selection 1">
                                <span>Normal</span>
                                <p class="rarity_circle rarity_circle1"></p>
                            </label>
                            <label class="dropdown-option">
                                <input type="checkbox" name="dropdown-group" value="Selection 1">
                                <span>Rare</span>
                                <p class="rarity_circle rarity_circle2"></p>
                            </label>
                            <label class="dropdown-option">
                                <input type="checkbox" name="dropdown-group" value="Selection 1">
                                <span>Heroic</span>
                                <p class="rarity_circle rarity_circle3"></p>
                            </label>
                            <label class="dropdown-option">
                                <input type="checkbox" name="dropdown-group" value="Selection 1">
                                <span>Legend</span>
                                <p class="rarity_circle rarity_circle4"></p>
                            </label>
                        </div>
                    </div>
                </div>

                <div class="dropdown dropdown5" data-control="checkbox-dropdown">
                    <label class="dropdown-label">All roles</label>
                    <div class="dropdown-list">
                        <div class="inner-dropdown-sec ">
                            <label class="dropdown-option">
                                <input type="checkbox" name="dropdown-group" value="Selection 1">
                                <span>Attack</span>
                                <img src="assets/image/compect_bulider/all_roll_1.png" alt="roll icon">
                            </label>
                            <label class="dropdown-option">
                                <input type="checkbox" name="dropdown-group" value="Selection 2">
                                <span>HP</span>
                                <img src="assets/image/compect_bulider/all_roll_2.png" alt="roll icon">
                            </label>
                            <label class="dropdown-option">
                                <input type="checkbox" name="dropdown-group" value="Selection 3">
                                <span>Support</span>
                                <img src="assets/image/compect_bulider/all_roll_3.png" alt="roll icon">
                            </label>
                            <label class="dropdown-option">
                                <input type="checkbox" name="dropdown-group" value="Selection 4">
                                <span>Defense</span>
                                <img src="assets/image/compect_bulider/all_roll_4.png" alt="roll icon">
                            </label>
                        </div>
                    </div>
                </div>

                <div class="cm_bulider_tab">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link monsters_tab active" data-toggle="tab" href="#tabs-1"
                                role="tab">Monsters</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link spells_tab" data-toggle="tab" href="#tabs-2" role="tab">Spells</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="compect_monster_tab_section">
                <div class="tab-content">
                    <div class="tab-pane active" id="tabs-1" role="tabpanel">
                        <div class="compect_inner_monster mCustomScrollbar">
                            <div class="line_up_sec text-center">
                                <div class="line_up_monster">
                                    <a href="#1" target="_blank">
                                        <div class="contain_shape">
                                            <div class="shape"><img src="assets/image/colleen-thumb.jpg"
                                                    alt="monster img"></div>
                                        </div>
                                        <span>Colleen</span>
                                    </a>
                                </div>
                                <div class="line_up_monster">
                                    <a href="#1" target="_blank">
                                        <div class="contain_shape">
                                            <div class="shape"><img src="assets/image/hwadam-thumb.jpg"
                                                    alt="monster img"></div>
                                        </div>
                                        <span>Hwadam</span>
                                    </a>
                                </div>
                                <div class="line_up_monster">
                                    <a href="#1" target="_blank">
                                        <div class="contain_shape">
                                            <div class="shape"><img src="assets/image/train-thumb.jpg"
                                                    alt="monster img"></div>
                                        </div>
                                        <span>Thrain</span>
                                    </a>
                                </div>
                                <div class="line_up_monster">
                                    <a href="#1" target="_blank">
                                        <div class="contain_shape">
                                            <div class="shape"><img src="assets/image/belladeon-thumb.jpg"
                                                    alt="monster img"></div>
                                        </div>
                                        <span>Belladeon</span>
                                    </a>
                                </div>
                                <div class="line_up_monster">
                                    <a href="#1" target="_blank">
                                        <div class="contain_shape">
                                            <div class="shape"><img src="assets/image/ramagos-thumb.jpg"
                                                    alt="monster img"></div>
                                        </div>
                                        <span>Ramagos</span>
                                    </a>
                                </div>
                                <div class="line_up_monster">
                                    <a href="#1" target="_blank">
                                        <div class="contain_shape">
                                            <div class="shape"><img src="assets/image/orochi-thumb.jpg"
                                                    alt="monster img"></div>
                                        </div>
                                        <span>Orochi</span>
                                    </a>
                                </div>
                                <div class="line_up_monster">
                                    <a href="#1" target="_blank">
                                        <div class="contain_shape">
                                            <div class="shape"><img src="assets/image/mikene-thumb.jpg"
                                                    alt="monster img"></div>
                                        </div>
                                        <span>Mikene</span>
                                    </a>
                                </div>
                                <div class="line_up_monster">
                                    <a href="#1" target="_blank">
                                        <div class="contain_shape">
                                            <div class="shape"><img src="assets/image/megan-thumb.jpg"
                                                    alt="monster img"></div>
                                        </div>
                                        <span>Megan</span>
                                    </a>
                                </div>
                                <div class="line_up_monster">
                                    <a href="#1" target="_blank">
                                        <div class="contain_shape">
                                            <div class="shape"><img src="assets/image/colleen-thumb.jpg"
                                                    alt="monster img"></div>
                                        </div>
                                        <span>Colleen</span>
                                    </a>
                                </div>
                                <div class="line_up_monster">
                                    <a href="#1" target="_blank">
                                        <div class="contain_shape">
                                            <div class="shape"><img src="assets/image/hwadam-thumb.jpg"
                                                    alt="monster img"></div>
                                        </div>
                                        <span>Hwadam</span>
                                    </a>
                                </div>
                                <div class="line_up_monster">
                                    <a href="#1" target="_blank">
                                        <div class="contain_shape">
                                            <div class="shape"><img src="assets/image/train-thumb.jpg"
                                                    alt="monster img"></div>
                                        </div>
                                        <span>Thrain</span>
                                    </a>
                                </div>
                                <div class="line_up_monster">
                                    <a href="#1" target="_blank">
                                        <div class="contain_shape">
                                            <div class="shape"><img src="assets/image/belladeon-thumb.jpg"
                                                    alt="monster img"></div>
                                        </div>
                                        <span>Belladeon</span>
                                    </a>
                                </div>
                                <div class="line_up_monster">
                                    <a href="#1" target="_blank">
                                        <div class="contain_shape">
                                            <div class="shape"><img src="assets/image/ramagos-thumb.jpg"
                                                    alt="monster img"></div>
                                        </div>
                                        <span>Ramagos</span>
                                    </a>
                                </div>

                                <div class="line_up_monster">
                                    <a href="#1" target="_blank">
                                        <div class="contain_shape">
                                            <div class="shape"><img src="assets/image/colleen-thumb.jpg"
                                                    alt="monster img"></div>
                                        </div>
                                        <span>Colleen</span>
                                    </a>
                                </div>
                                <div class="line_up_monster">
                                    <a href="#1" target="_blank">
                                        <div class="contain_shape">
                                            <div class="shape"><img src="assets/image/hwadam-thumb.jpg"
                                                    alt="monster img"></div>
                                        </div>
                                        <span>Hwadam</span>
                                    </a>
                                </div>
                                <div class="line_up_monster">
                                    <a href="#1" target="_blank">
                                        <div class="contain_shape">
                                            <div class="shape"><img src="assets/image/train-thumb.jpg"
                                                    alt="monster img"></div>
                                        </div>
                                        <span>Thrain</span>
                                    </a>
                                </div>
                                <div class="line_up_monster">
                                    <a href="#1" target="_blank">
                                        <div class="contain_shape">
                                            <div class="shape"><img src="assets/image/belladeon-thumb.jpg"
                                                    alt="monster img"></div>
                                        </div>
                                        <span>Belladeon</span>
                                    </a>
                                </div>
                                <div class="line_up_monster">
                                    <a href="#1" target="_blank">
                                        <div class="contain_shape">
                                            <div class="shape"><img src="assets/image/ramagos-thumb.jpg"
                                                    alt="monster img"></div>
                                        </div>
                                        <span>Ramagos</span>
                                    </a>
                                </div>
                                <div class="line_up_monster">
                                    <a href="#1" target="_blank">
                                        <div class="contain_shape">
                                            <div class="shape"><img src="assets/image/orochi-thumb.jpg"
                                                    alt="monster img"></div>
                                        </div>
                                        <span>Orochi</span>
                                    </a>
                                </div>
                                <div class="line_up_monster">
                                    <a href="#1" target="_blank">
                                        <div class="contain_shape">
                                            <div class="shape"><img src="assets/image/mikene-thumb.jpg"
                                                    alt="monster img"></div>
                                        </div>
                                        <span>Mikene</span>
                                    </a>
                                </div>
                                <div class="line_up_monster">
                                    <a href="#1" target="_blank">
                                        <div class="contain_shape">
                                            <div class="shape"><img src="assets/image/megan-thumb.jpg"
                                                    alt="monster img"></div>
                                        </div>
                                        <span>Megan</span>
                                    </a>
                                </div>
                                <div class="line_up_monster">
                                    <a href="#1" target="_blank">
                                        <div class="contain_shape">
                                            <div class="shape"><img src="assets/image/colleen-thumb.jpg"
                                                    alt="monster img"></div>
                                        </div>
                                        <span>Colleen</span>
                                    </a>
                                </div>
                                <div class="line_up_monster">
                                    <a href="#1" target="_blank">
                                        <div class="contain_shape">
                                            <div class="shape"><img src="assets/image/hwadam-thumb.jpg"
                                                    alt="monster img"></div>
                                        </div>
                                        <span>Hwadam</span>
                                    </a>
                                </div>
                                <div class="line_up_monster">
                                    <a href="#1" target="_blank">
                                        <div class="contain_shape">
                                            <div class="shape"><img src="assets/image/train-thumb.jpg"
                                                    alt="monster img"></div>
                                        </div>
                                        <span>Thrain</span>
                                    </a>
                                </div>
                                <div class="line_up_monster">
                                    <a href="#1" target="_blank">
                                        <div class="contain_shape">
                                            <div class="shape"><img src="assets/image/belladeon-thumb.jpg"
                                                    alt="monster img"></div>
                                        </div>
                                        <span>Belladeon</span>
                                    </a>
                                </div>
                                <div class="line_up_monster">
                                    <a href="#1" target="_blank">
                                        <div class="contain_shape">
                                            <div class="shape"><img src="assets/image/ramagos-thumb.jpg"
                                                    alt="monster img"></div>
                                        </div>
                                        <span>Ramagos</span>
                                    </a>
                                </div>

                                <div class="line_up_monster">
                                    <a href="#1" target="_blank">
                                        <div class="contain_shape">
                                            <div class="shape"><img src="assets/image/colleen-thumb.jpg"
                                                    alt="monster img"></div>
                                        </div>
                                        <span>Colleen</span>
                                    </a>
                                </div>
                                <div class="line_up_monster">
                                    <a href="#1" target="_blank">
                                        <div class="contain_shape">
                                            <div class="shape"><img src="assets/image/hwadam-thumb.jpg"
                                                    alt="monster img"></div>
                                        </div>
                                        <span>Hwadam</span>
                                    </a>
                                </div>
                                <div class="line_up_monster">
                                    <a href="#1" target="_blank">
                                        <div class="contain_shape">
                                            <div class="shape"><img src="assets/image/train-thumb.jpg"
                                                    alt="monster img"></div>
                                        </div>
                                        <span>Thrain</span>
                                    </a>
                                </div>
                                <div class="line_up_monster">
                                    <a href="#1" target="_blank">
                                        <div class="contain_shape">
                                            <div class="shape"><img src="assets/image/belladeon-thumb.jpg"
                                                    alt="monster img"></div>
                                        </div>
                                        <span>Belladeon</span>
                                    </a>
                                </div>
                                <div class="line_up_monster">
                                    <a href="#1" target="_blank">
                                        <div class="contain_shape">
                                            <div class="shape"><img src="assets/image/ramagos-thumb.jpg"
                                                    alt="monster img"></div>
                                        </div>
                                        <span>Ramagos</span>
                                    </a>
                                </div>
                                <div class="line_up_monster">
                                    <a href="#1" target="_blank">
                                        <div class="contain_shape">
                                            <div class="shape"><img src="assets/image/orochi-thumb.jpg"
                                                    alt="monster img"></div>
                                        </div>
                                        <span>Orochi</span>
                                    </a>
                                </div>
                                <div class="line_up_monster">
                                    <a href="#1" target="_blank">
                                        <div class="contain_shape">
                                            <div class="shape"><img src="assets/image/mikene-thumb.jpg"
                                                    alt="monster img"></div>
                                        </div>
                                        <span>Mikene</span>
                                    </a>
                                </div>
                                <div class="line_up_monster">
                                    <a href="#1" target="_blank">
                                        <div class="contain_shape">
                                            <div class="shape"><img src="assets/image/megan-thumb.jpg"
                                                    alt="monster img"></div>
                                        </div>
                                        <span>Megan</span>
                                    </a>
                                </div>
                                <div class="line_up_monster">
                                    <a href="#1" target="_blank">
                                        <div class="contain_shape">
                                            <div class="shape"><img src="assets/image/colleen-thumb.jpg"
                                                    alt="monster img"></div>
                                        </div>
                                        <span>Colleen</span>
                                    </a>
                                </div>
                                <div class="line_up_monster">
                                    <a href="#1" target="_blank">
                                        <div class="contain_shape">
                                            <div class="shape"><img src="assets/image/hwadam-thumb.jpg"
                                                    alt="monster img"></div>
                                        </div>
                                        <span>Hwadam</span>
                                    </a>
                                </div>
                                <div class="line_up_monster">
                                    <a href="#1" target="_blank">
                                        <div class="contain_shape">
                                            <div class="shape"><img src="assets/image/train-thumb.jpg"
                                                    alt="monster img"></div>
                                        </div>
                                        <span>Thrain</span>
                                    </a>
                                </div>
                                <div class="line_up_monster">
                                    <a href="#1" target="_blank">
                                        <div class="contain_shape">
                                            <div class="shape"><img src="assets/image/belladeon-thumb.jpg"
                                                    alt="monster img"></div>
                                        </div>
                                        <span>Belladeon</span>
                                    </a>
                                </div>
                                <div class="line_up_monster">
                                    <a href="#1" target="_blank">
                                        <div class="contain_shape">
                                            <div class="shape"><img src="assets/image/ramagos-thumb.jpg"
                                                    alt="monster img"></div>
                                        </div>
                                        <span>Ramagos</span>
                                    </a>
                                </div>

                                <div class="line_up_monster">
                                    <a href="#1" target="_blank">
                                        <div class="contain_shape">
                                            <div class="shape"><img src="assets/image/colleen-thumb.jpg"
                                                    alt="monster img"></div>
                                        </div>
                                        <span>Colleen</span>
                                    </a>
                                </div>
                                <div class="line_up_monster">
                                    <a href="#1" target="_blank">
                                        <div class="contain_shape">
                                            <div class="shape"><img src="assets/image/hwadam-thumb.jpg"
                                                    alt="monster img"></div>
                                        </div>
                                        <span>Hwadam</span>
                                    </a>
                                </div>
                                <div class="line_up_monster">
                                    <a href="#1" target="_blank">
                                        <div class="contain_shape">
                                            <div class="shape"><img src="assets/image/train-thumb.jpg"
                                                    alt="monster img"></div>
                                        </div>
                                        <span>Thrain</span>
                                    </a>
                                </div>
                                <div class="line_up_monster">
                                    <a href="#1" target="_blank">
                                        <div class="contain_shape">
                                            <div class="shape"><img src="assets/image/belladeon-thumb.jpg"
                                                    alt="monster img"></div>
                                        </div>
                                        <span>Belladeon</span>
                                    </a>
                                </div>
                                <div class="line_up_monster">
                                    <a href="#1" target="_blank">
                                        <div class="contain_shape">
                                            <div class="shape"><img src="assets/image/ramagos-thumb.jpg"
                                                    alt="monster img"></div>
                                        </div>
                                        <span>Ramagos</span>
                                    </a>
                                </div>
                                <div class="line_up_monster">
                                    <a href="#1" target="_blank">
                                        <div class="contain_shape">
                                            <div class="shape"><img src="assets/image/orochi-thumb.jpg"
                                                    alt="monster img"></div>
                                        </div>
                                        <span>Orochi</span>
                                    </a>
                                </div>
                                <div class="line_up_monster">
                                    <a href="#1" target="_blank">
                                        <div class="contain_shape">
                                            <div class="shape"><img src="assets/image/mikene-thumb.jpg"
                                                    alt="monster img"></div>
                                        </div>
                                        <span>Mikene</span>
                                    </a>
                                </div>
                                <div class="line_up_monster">
                                    <a href="#1" target="_blank">
                                        <div class="contain_shape">
                                            <div class="shape"><img src="assets/image/megan-thumb.jpg"
                                                    alt="monster img"></div>
                                        </div>
                                        <span>Megan</span>
                                    </a>
                                </div>
                                <div class="line_up_monster">
                                    <a href="#1" target="_blank">
                                        <div class="contain_shape">
                                            <div class="shape"><img src="assets/image/colleen-thumb.jpg"
                                                    alt="monster img"></div>
                                        </div>
                                        <span>Colleen</span>
                                    </a>
                                </div>
                                <div class="line_up_monster">
                                    <a href="#1" target="_blank">
                                        <div class="contain_shape">
                                            <div class="shape"><img src="assets/image/hwadam-thumb.jpg"
                                                    alt="monster img"></div>
                                        </div>
                                        <span>Hwadam</span>
                                    </a>
                                </div>
                                <div class="line_up_monster">
                                    <a href="#1" target="_blank">
                                        <div class="contain_shape">
                                            <div class="shape"><img src="assets/image/train-thumb.jpg"
                                                    alt="monster img"></div>
                                        </div>
                                        <span>Thrain</span>
                                    </a>
                                </div>
                                <div class="line_up_monster">
                                    <a href="#1" target="_blank">
                                        <div class="contain_shape">
                                            <div class="shape"><img src="assets/image/belladeon-thumb.jpg"
                                                    alt="monster img"></div>
                                        </div>
                                        <span>Belladeon</span>
                                    </a>
                                </div>
                                <div class="line_up_monster">
                                    <a href="#1" target="_blank">
                                        <div class="contain_shape">
                                            <div class="shape"><img src="assets/image/ramagos-thumb.jpg"
                                                    alt="monster img"></div>
                                        </div>
                                        <span>Ramagos</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane" id="tabs-2" role="tabpanel">
                        <div class="compect_inner_monster2 mCustomScrollbar">
                            <div class="line_up_sec text-center">
                                <div class="line_up_monster">
                                    <a href="#1">
                                        <div class="compect_spells_big">
                                            <img src="assets/image/compect_bulider/compect_big_spells_1.png"
                                                alt="spells">
                                        </div>
                                    </a>
                                </div>
                                <div class="line_up_monster">
                                    <a href="#1">
                                        <div class="compect_spells_big">
                                            <img src="assets/image/compect_bulider/compect_big_spells_2.png"
                                                alt="compect spells">
                                        </div>
                                    </a>
                                </div>

                                <div class="line_up_monster">
                                    <a href="#1">
                                        <div class="compect_spells_big">
                                            <img src="assets/image/compect_bulider/compect_big_spells_1.png"
                                                alt="spells">
                                        </div>
                                    </a>
                                </div>
                                <div class="line_up_monster">
                                    <a href="#1">
                                        <div class="compect_spells_big">
                                            <img src="assets/image/compect_bulider/compect_big_spells_2.png"
                                                alt="compect spells">
                                        </div>
                                    </a>
                                </div>
                                <div class="line_up_monster">
                                    <a href="#1">
                                        <div class="compect_spells_big">
                                            <img src="assets/image/compect_bulider/compect_big_spells_1.png"
                                                alt="spells">
                                        </div>
                                    </a>
                                </div>
                                <div class="line_up_monster">
                                    <a href="#1">
                                        <div class="compect_spells_big">
                                            <img src="assets/image/compect_bulider/compect_big_spells_2.png"
                                                alt="compect spells">
                                        </div>
                                    </a>
                                </div>
                                <div class="line_up_monster">
                                    <a href="#1">
                                        <div class="compect_spells_big">
                                            <img src="assets/image/compect_bulider/compect_big_spells_1.png"
                                                alt="spells">
                                        </div>
                                    </a>
                                </div>
                                <div class="line_up_monster">
                                    <a href="#1">
                                        <div class="compect_spells_big">
                                            <img src="assets/image/compect_bulider/compect_big_spells_2.png"
                                                alt="compect spells">
                                        </div>
                                    </a>
                                </div>
                                <div class="line_up_monster">
                                    <a href="#1">
                                        <div class="compect_spells_big">
                                            <img src="assets/image/compect_bulider/compect_big_spells_1.png"
                                                alt="spells">
                                        </div>
                                    </a>
                                </div>
                                <div class="line_up_monster">
                                    <a href="#1">
                                        <div class="compect_spells_big">
                                            <img src="assets/image/compect_bulider/compect_big_spells_2.png"
                                                alt="compect spells">
                                        </div>
                                    </a>
                                </div>
                                <div class="line_up_monster">
                                    <a href="#1">
                                        <div class="compect_spells_big">
                                            <img src="assets/image/compect_bulider/compect_big_spells_1.png"
                                                alt="spells">
                                        </div>
                                    </a>
                                </div>

                                <div class="line_up_monster">
                                    <a href="#1">
                                        <div class="compect_spells_big">
                                            <img src="assets/image/compect_bulider/compect_big_spells_1.png"
                                                alt="spells">
                                        </div>
                                    </a>
                                </div>
                                <div class="line_up_monster">
                                    <a href="#1">
                                        <div class="compect_spells_big">
                                            <img src="assets/image/compect_bulider/compect_big_spells_2.png"
                                                alt="compect spells">
                                        </div>
                                    </a>
                                </div>

                                <div class="line_up_monster">
                                    <a href="#1">
                                        <div class="compect_spells_big">
                                            <img src="assets/image/compect_bulider/compect_big_spells_1.png"
                                                alt="spells">
                                        </div>
                                    </a>
                                </div>
                                <div class="line_up_monster">
                                    <a href="#1">
                                        <div class="compect_spells_big">
                                            <img src="assets/image/compect_bulider/compect_big_spells_2.png"
                                                alt="compect spells">
                                        </div>
                                    </a>
                                </div>
                                <div class="line_up_monster">
                                    <a href="#1">
                                        <div class="compect_spells_big">
                                            <img src="assets/image/compect_bulider/compect_big_spells_1.png"
                                                alt="spells">
                                        </div>
                                    </a>
                                </div>
                                <div class="line_up_monster">
                                    <a href="#1">
                                        <div class="compect_spells_big">
                                            <img src="assets/image/compect_bulider/compect_big_spells_2.png"
                                                alt="compect spells">
                                        </div>
                                    </a>
                                </div>
                                <div class="line_up_monster">
                                    <a href="#1">
                                        <div class="compect_spells_big">
                                            <img src="assets/image/compect_bulider/compect_big_spells_1.png"
                                                alt="spells">
                                        </div>
                                    </a>
                                </div>
                                <div class="line_up_monster">
                                    <a href="#1">
                                        <div class="compect_spells_big">
                                            <img src="assets/image/compect_bulider/compect_big_spells_2.png"
                                                alt="compect spells">
                                        </div>
                                    </a>
                                </div>
                                <div class="line_up_monster">
                                    <a href="#1">
                                        <div class="compect_spells_big">
                                            <img src="assets/image/compect_bulider/compect_big_spells_1.png"
                                                alt="spells">
                                        </div>
                                    </a>
                                </div>
                                <div class="line_up_monster">
                                    <a href="#1">
                                        <div class="compect_spells_big">
                                            <img src="assets/image/compect_bulider/compect_big_spells_2.png"
                                                alt="compect spells">
                                        </div>
                                    </a>
                                </div>
                                <div class="line_up_monster">
                                    <a href="#1">
                                        <div class="compect_spells_big">
                                            <img src="assets/image/compect_bulider/compect_big_spells_1.png"
                                                alt="spells">
                                        </div>
                                    </a>
                                </div>

                                <div class="line_up_monster">
                                    <a href="#1">
                                        <div class="compect_spells_big">
                                            <img src="assets/image/compect_bulider/compect_big_spells_1.png"
                                                alt="spells">
                                        </div>
                                    </a>
                                </div>
                                <div class="line_up_monster">
                                    <a href="#1">
                                        <div class="compect_spells_big">
                                            <img src="assets/image/compect_bulider/compect_big_spells_2.png"
                                                alt="compect spells">
                                        </div>
                                    </a>
                                </div>

                                <div class="line_up_monster">
                                    <a href="#1">
                                        <div class="compect_spells_big">
                                            <img src="assets/image/compect_bulider/compect_big_spells_1.png"
                                                alt="spells">
                                        </div>
                                    </a>
                                </div>
                                <div class="line_up_monster">
                                    <a href="#1">
                                        <div class="compect_spells_big">
                                            <img src="assets/image/compect_bulider/compect_big_spells_2.png"
                                                alt="compect spells">
                                        </div>
                                    </a>
                                </div>
                                <div class="line_up_monster">
                                    <a href="#1">
                                        <div class="compect_spells_big">
                                            <img src="assets/image/compect_bulider/compect_big_spells_1.png"
                                                alt="spells">
                                        </div>
                                    </a>
                                </div>
                                <div class="line_up_monster">
                                    <a href="#1">
                                        <div class="compect_spells_big">
                                            <img src="assets/image/compect_bulider/compect_big_spells_2.png"
                                                alt="compect spells">
                                        </div>
                                    </a>
                                </div>
                                <div class="line_up_monster">
                                    <a href="#1">
                                        <div class="compect_spells_big">
                                            <img src="assets/image/compect_bulider/compect_big_spells_1.png"
                                                alt="spells">
                                        </div>
                                    </a>
                                </div>
                                <div class="line_up_monster">
                                    <a href="#1">
                                        <div class="compect_spells_big">
                                            <img src="assets/image/compect_bulider/compect_big_spells_2.png"
                                                alt="compect spells">
                                        </div>
                                    </a>
                                </div>
                                <div class="line_up_monster">
                                    <a href="#1">
                                        <div class="compect_spells_big">
                                            <img src="assets/image/compect_bulider/compect_big_spells_1.png"
                                                alt="spells">
                                        </div>
                                    </a>
                                </div>
                                <div class="line_up_monster">
                                    <a href="#1">
                                        <div class="compect_spells_big">
                                            <img src="assets/image/compect_bulider/compect_big_spells_2.png"
                                                alt="compect spells">
                                        </div>
                                    </a>
                                </div>
                                <div class="line_up_monster">
                                    <a href="#1">
                                        <div class="compect_spells_big">
                                            <img src="assets/image/compect_bulider/compect_big_spells_1.png"
                                                alt="spells">
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="mobile_save_and_pub_btn mobile_block">
    <a href="#" class="all_btn">Save and publish</a>
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
                            <label class="dropdown-label text-center">Filter by monster</label>
                            <div class="dropdown-list">
                                <div class="search-filed">
                                    <input type="search" placeholder="Search by name" class="dropdown-search">
                                    <i class="fa fa-search" aria-hidden="true"></i>
                                </div>
                                <div class="inner-dropdown-sec ">
                                    <label class="dropdown-option">
                                        <input type="checkbox" name="dropdown-group" value="Selection 1">
                                        <span>Ariamiel</span>
                                    </label>
                                    <label class="dropdown-option">
                                        <input type="checkbox" name="dropdown-group" value="Selection 2">
                                        <span>Colleen</span>
                                    </label>
                                    <label class="dropdown-option">
                                        <input type="checkbox" name="dropdown-group" value="Selection 3">
                                        <span>Ganymede</span>
                                    </label>
                                    <label class="dropdown-option">
                                        <input type="checkbox" name="dropdown-group" value="Selection 4">
                                        <span>Roid</span>
                                    </label>
                                    <label class="dropdown-option">
                                        <input type="checkbox" name="dropdown-group" value="Selection 5">
                                        <span>Ganymede</span>
                                    </label>
                                    <label class="dropdown-option">
                                        <input type="checkbox" name="dropdown-group" value="Selection 5">
                                        <span>Ganymede</span>
                                    </label>
                                    <label class="dropdown-option">
                                        <input type="checkbox" name="dropdown-group" value="Selection 5">
                                        <span>Ganymede</span>
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="dropdown dropdown2" data-control="checkbox-dropdown">
                            <label class="dropdown-label">
                                <input type="text" name="" value="3" min="1" max="6" maxlength="1">
                                -
                                <input type="text" name="" value="4" min="1" max="6" maxlength="1">
                            </label>
                        </div>

                        <div class="dropdown dropdown3" data-control="checkbox-dropdown">
                            <label class="dropdown-label">All elements</label>
                            <div class="dropdown-list">
                                <div class="inner-dropdown-sec ">
                                    <label class="dropdown-option">
                                        <input type="checkbox" name="dropdown-group" value="Selection 1">
                                        <span>Water</span>
                                        <img src="assets/image/compect_bulider/all-ele_1.png" alt="all con">
                                    </label>
                                    <label class="dropdown-option">
                                        <input type="checkbox" name="dropdown-group" value="Selection 2">
                                        <span>Fire</span>
                                        <img src="assets/image/compect_bulider/all-ele_2.png" alt="all con">
                                    </label>
                                    <label class="dropdown-option">
                                        <input type="checkbox" name="dropdown-group" value="Selection 3">
                                        <span>Light</span>
                                        <img src="assets/image/compect_bulider/all-ele_3.png" alt="all con">
                                    </label>
                                    <label class="dropdown-option">
                                        <input type="checkbox" name="dropdown-group" value="Selection 4">
                                        <span>Dark</span>
                                        <img src="assets/image/compect_bulider/all-ele_4.png" alt="all con">
                                    </label>
                                    <label class="dropdown-option">
                                        <input type="checkbox" name="dropdown-group" value="Selection 5">
                                        <span>Wind</span>
                                        <img src="assets/image/compect_bulider/all-ele_5.png" alt="all con">
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="dropdown dropdown4" data-control="checkbox-dropdown">
                            <label class="dropdown-label">All rarity</label>
                            <div class="dropdown-list">
                                <div class="inner-dropdown-sec">
                                    <label class="dropdown-option">
                                        <input type="checkbox" name="dropdown-group" value="Selection 1">
                                        <span>Normal</span>
                                        <p class="rarity_circle rarity_circle1"></p>
                                    </label>
                                    <label class="dropdown-option">
                                        <input type="checkbox" name="dropdown-group" value="Selection 1">
                                        <span>Rare</span>
                                        <p class="rarity_circle rarity_circle2"></p>
                                    </label>
                                    <label class="dropdown-option">
                                        <input type="checkbox" name="dropdown-group" value="Selection 1">
                                        <span>Heroic</span>
                                        <p class="rarity_circle rarity_circle3"></p>
                                    </label>
                                    <label class="dropdown-option">
                                        <input type="checkbox" name="dropdown-group" value="Selection 1">
                                        <span>Legend</span>
                                        <p class="rarity_circle rarity_circle4"></p>
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="dropdown dropdown5" data-control="checkbox-dropdown">
                            <label class="dropdown-label">All roles</label>
                            <div class="dropdown-list">
                                <div class="inner-dropdown-sec ">
                                    <label class="dropdown-option">
                                        <input type="checkbox" name="dropdown-group" value="Selection 1">
                                        <span>Attack</span>
                                        <img src="assets/image/compect_bulider/all_roll_1.png" alt="roll icon">
                                    </label>
                                    <label class="dropdown-option">
                                        <input type="checkbox" name="dropdown-group" value="Selection 2">
                                        <span>HP</span>
                                        <img src="assets/image/compect_bulider/all_roll_2.png" alt="roll icon">
                                    </label>
                                    <label class="dropdown-option">
                                        <input type="checkbox" name="dropdown-group" value="Selection 3">
                                        <span>Support</span>
                                        <img src="assets/image/compect_bulider/all_roll_3.png" alt="roll icon">
                                    </label>
                                    <label class="dropdown-option">
                                        <input type="checkbox" name="dropdown-group" value="Selection 4">
                                        <span>Defense</span>
                                        <img src="assets/image/compect_bulider/all_roll_4.png" alt="roll icon">
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="compect_inner_monster mCustomScrollbar">
                            <div class="line_up_sec text-center">
                                <div class="line_up_monster">
                                    <a href="#1" target="_blank">
                                        <div class="contain_shape">
                                            <div class="shape"><img src="assets/image/colleen-thumb.jpg"
                                                    alt="monster img"></div>
                                        </div>
                                        <span>Colleen</span>
                                    </a>
                                </div>
                                <div class="line_up_monster">
                                    <a href="#1" target="_blank">
                                        <div class="contain_shape">
                                            <div class="shape"><img src="assets/image/hwadam-thumb.jpg"
                                                    alt="monster img"></div>
                                        </div>
                                        <span>Hwadam</span>
                                    </a>
                                </div>
                                <div class="line_up_monster">
                                    <a href="#1" target="_blank">
                                        <div class="contain_shape">
                                            <div class="shape"><img src="assets/image/train-thumb.jpg"
                                                    alt="monster img"></div>
                                        </div>
                                        <span>Thrain</span>
                                    </a>
                                </div>
                                <div class="line_up_monster">
                                    <a href="#1" target="_blank">
                                        <div class="contain_shape">
                                            <div class="shape"><img src="assets/image/belladeon-thumb.jpg"
                                                    alt="monster img"></div>
                                        </div>
                                        <span>Belladeon</span>
                                    </a>
                                </div>
                                <div class="line_up_monster">
                                    <a href="#1" target="_blank">
                                        <div class="contain_shape">
                                            <div class="shape"><img src="assets/image/ramagos-thumb.jpg"
                                                    alt="monster img"></div>
                                        </div>
                                        <span>Ramagos</span>
                                    </a>
                                </div>
                                <div class="line_up_monster">
                                    <a href="#1" target="_blank">
                                        <div class="contain_shape">
                                            <div class="shape"><img src="assets/image/orochi-thumb.jpg"
                                                    alt="monster img"></div>
                                        </div>
                                        <span>Orochi</span>
                                    </a>
                                </div>
                                <div class="line_up_monster">
                                    <a href="#1" target="_blank">
                                        <div class="contain_shape">
                                            <div class="shape"><img src="assets/image/mikene-thumb.jpg"
                                                    alt="monster img"></div>
                                        </div>
                                        <span>Mikene</span>
                                    </a>
                                </div>
                                <div class="line_up_monster">
                                    <a href="#1" target="_blank">
                                        <div class="contain_shape">
                                            <div class="shape"><img src="assets/image/megan-thumb.jpg"
                                                    alt="monster img"></div>
                                        </div>
                                        <span>Megan</span>
                                    </a>
                                </div>
                                <div class="line_up_monster">
                                    <a href="#1" target="_blank">
                                        <div class="contain_shape">
                                            <div class="shape"><img src="assets/image/colleen-thumb.jpg"
                                                    alt="monster img"></div>
                                        </div>
                                        <span>Colleen</span>
                                    </a>
                                </div>
                                <div class="line_up_monster">
                                    <a href="#1" target="_blank">
                                        <div class="contain_shape">
                                            <div class="shape"><img src="assets/image/hwadam-thumb.jpg"
                                                    alt="monster img"></div>
                                        </div>
                                        <span>Hwadam</span>
                                    </a>
                                </div>
                                <div class="line_up_monster">
                                    <a href="#1" target="_blank">
                                        <div class="contain_shape">
                                            <div class="shape"><img src="assets/image/train-thumb.jpg"
                                                    alt="monster img"></div>
                                        </div>
                                        <span>Thrain</span>
                                    </a>
                                </div>
                                <div class="line_up_monster">
                                    <a href="#1" target="_blank">
                                        <div class="contain_shape">
                                            <div class="shape"><img src="assets/image/belladeon-thumb.jpg"
                                                    alt="monster img"></div>
                                        </div>
                                        <span>Belladeon</span>
                                    </a>
                                </div>
                                <div class="line_up_monster">
                                    <a href="#1" target="_blank">
                                        <div class="contain_shape">
                                            <div class="shape"><img src="assets/image/ramagos-thumb.jpg"
                                                    alt="monster img"></div>
                                        </div>
                                        <span>Ramagos</span>
                                    </a>
                                </div>
                                <div class="line_up_monster">
                                    <a href="#1" target="_blank">
                                        <div class="contain_shape">
                                            <div class="shape"><img src="assets/image/train-thumb.jpg"
                                                    alt="monster img"></div>
                                        </div>
                                        <span>Thrain</span>
                                    </a>
                                </div>
                                <div class="line_up_monster">
                                    <a href="#1" target="_blank">
                                        <div class="contain_shape">
                                            <div class="shape"><img src="assets/image/belladeon-thumb.jpg"
                                                    alt="monster img"></div>
                                        </div>
                                        <span>Belladeon</span>
                                    </a>
                                </div>
                                <div class="line_up_monster">
                                    <a href="#1" target="_blank">
                                        <div class="contain_shape">
                                            <div class="shape"><img src="assets/image/ramagos-thumb.jpg"
                                                    alt="monster img"></div>
                                        </div>
                                        <span>Ramagos</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="popup-bottom-design">

                        </div>
                    </div>
                    <!--  -->
                </div>
            </div>
            <div class="modal-footer d-none">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
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
                <div class="compect_inner_monster2 mCustomScrollbar">
                    <div class="line_up_sec text-center">
                        <div class="line_up_monster">
                            <a href="#1">
                                <div class="compect_spells_big">
                                    <img src="assets/image/compect_bulider/compect_big_spells_1.png" alt="spells">
                                </div>
                            </a>
                        </div>
                        <div class="line_up_monster">
                            <a href="#1">
                                <div class="compect_spells_big">
                                    <img src="assets/image/compect_bulider/compect_big_spells_2.png"
                                        alt="compect spells">
                                </div>
                            </a>
                        </div>

                        <div class="line_up_monster">
                            <a href="#1">
                                <div class="compect_spells_big">
                                    <img src="assets/image/compect_bulider/compect_big_spells_1.png" alt="spells">
                                </div>
                            </a>
                        </div>
                        <div class="line_up_monster">
                            <a href="#1">
                                <div class="compect_spells_big">
                                    <img src="assets/image/compect_bulider/compect_big_spells_2.png"
                                        alt="compect spells">
                                </div>
                            </a>
                        </div>
                        <div class="line_up_monster">
                            <a href="#1">
                                <div class="compect_spells_big">
                                    <img src="assets/image/compect_bulider/compect_big_spells_1.png" alt="spells">
                                </div>
                            </a>
                        </div>
                        <div class="line_up_monster">
                            <a href="#1">
                                <div class="compect_spells_big">
                                    <img src="assets/image/compect_bulider/compect_big_spells_2.png"
                                        alt="compect spells">
                                </div>
                            </a>
                        </div>
                        <div class="line_up_monster">
                            <a href="#1">
                                <div class="compect_spells_big">
                                    <img src="assets/image/compect_bulider/compect_big_spells_1.png" alt="spells">
                                </div>
                            </a>
                        </div>
                        <div class="line_up_monster">
                            <a href="#1">
                                <div class="compect_spells_big">
                                    <img src="assets/image/compect_bulider/compect_big_spells_2.png"
                                        alt="compect spells">
                                </div>
                            </a>
                        </div>
                        <div class="line_up_monster">
                            <a href="#1">
                                <div class="compect_spells_big">
                                    <img src="assets/image/compect_bulider/compect_big_spells_1.png" alt="spells">
                                </div>
                            </a>
                        </div>
                        <div class="line_up_monster">
                            <a href="#1">
                                <div class="compect_spells_big">
                                    <img src="assets/image/compect_bulider/compect_big_spells_2.png"
                                        alt="compect spells">
                                </div>
                            </a>
                        </div>
                        <div class="line_up_monster">
                            <a href="#1">
                                <div class="compect_spells_big">
                                    <img src="assets/image/compect_bulider/compect_big_spells_1.png" alt="spells">
                                </div>
                            </a>
                        </div>

                        <div class="line_up_monster">
                            <a href="#1">
                                <div class="compect_spells_big">
                                    <img src="assets/image/compect_bulider/compect_big_spells_1.png" alt="spells">
                                </div>
                            </a>
                        </div>
                        <div class="line_up_monster">
                            <a href="#1">
                                <div class="compect_spells_big">
                                    <img src="assets/image/compect_bulider/compect_big_spells_2.png"
                                        alt="compect spells">
                                </div>
                            </a>
                        </div>

                        <div class="line_up_monster">
                            <a href="#1">
                                <div class="compect_spells_big">
                                    <img src="assets/image/compect_bulider/compect_big_spells_1.png" alt="spells">
                                </div>
                            </a>
                        </div>
                        <div class="line_up_monster">
                            <a href="#1">
                                <div class="compect_spells_big">
                                    <img src="assets/image/compect_bulider/compect_big_spells_2.png"
                                        alt="compect spells">
                                </div>
                            </a>
                        </div>
                        <div class="line_up_monster">
                            <a href="#1">
                                <div class="compect_spells_big">
                                    <img src="assets/image/compect_bulider/compect_big_spells_1.png" alt="spells">
                                </div>
                            </a>
                        </div>
                        <div class="line_up_monster">
                            <a href="#1">
                                <div class="compect_spells_big">
                                    <img src="assets/image/compect_bulider/compect_big_spells_2.png"
                                        alt="compect spells">
                                </div>
                            </a>
                        </div>
                        <div class="line_up_monster">
                            <a href="#1">
                                <div class="compect_spells_big">
                                    <img src="assets/image/compect_bulider/compect_big_spells_1.png" alt="spells">
                                </div>
                            </a>
                        </div>
                        <div class="line_up_monster">
                            <a href="#1">
                                <div class="compect_spells_big">
                                    <img src="assets/image/compect_bulider/compect_big_spells_2.png"
                                        alt="compect spells">
                                </div>
                            </a>
                        </div>
                        <div class="line_up_monster">
                            <a href="#1">
                                <div class="compect_spells_big">
                                    <img src="assets/image/compect_bulider/compect_big_spells_1.png" alt="spells">
                                </div>
                            </a>
                        </div>
                        <div class="line_up_monster">
                            <a href="#1">
                                <div class="compect_spells_big">
                                    <img src="assets/image/compect_bulider/compect_big_spells_2.png"
                                        alt="compect spells">
                                </div>
                            </a>
                        </div>
                        <div class="line_up_monster">
                            <a href="#1">
                                <div class="compect_spells_big">
                                    <img src="assets/image/compect_bulider/compect_big_spells_1.png" alt="spells">
                                </div>
                            </a>
                        </div>

                        <div class="line_up_monster">
                            <a href="#1">
                                <div class="compect_spells_big">
                                    <img src="assets/image/compect_bulider/compect_big_spells_1.png" alt="spells">
                                </div>
                            </a>
                        </div>
                        <div class="line_up_monster">
                            <a href="#1">
                                <div class="compect_spells_big">
                                    <img src="assets/image/compect_bulider/compect_big_spells_2.png"
                                        alt="compect spells">
                                </div>
                            </a>
                        </div>

                        <div class="line_up_monster">
                            <a href="#1">
                                <div class="compect_spells_big">
                                    <img src="assets/image/compect_bulider/compect_big_spells_1.png" alt="spells">
                                </div>
                            </a>
                        </div>
                        <div class="line_up_monster">
                            <a href="#1">
                                <div class="compect_spells_big">
                                    <img src="assets/image/compect_bulider/compect_big_spells_2.png"
                                        alt="compect spells">
                                </div>
                            </a>
                        </div>
                        <div class="line_up_monster">
                            <a href="#1">
                                <div class="compect_spells_big">
                                    <img src="assets/image/compect_bulider/compect_big_spells_1.png" alt="spells">
                                </div>
                            </a>
                        </div>
                        <div class="line_up_monster">
                            <a href="#1">
                                <div class="compect_spells_big">
                                    <img src="assets/image/compect_bulider/compect_big_spells_2.png"
                                        alt="compect spells">
                                </div>
                            </a>
                        </div>
                        <div class="line_up_monster">
                            <a href="#1">
                                <div class="compect_spells_big">
                                    <img src="assets/image/compect_bulider/compect_big_spells_1.png" alt="spells">
                                </div>
                            </a>
                        </div>
                        <div class="line_up_monster">
                            <a href="#1">
                                <div class="compect_spells_big">
                                    <img src="assets/image/compect_bulider/compect_big_spells_2.png"
                                        alt="compect spells">
                                </div>
                            </a>
                        </div>
                        <div class="line_up_monster">
                            <a href="#1">
                                <div class="compect_spells_big">
                                    <img src="assets/image/compect_bulider/compect_big_spells_1.png" alt="spells">
                                </div>
                            </a>
                        </div>
                        <div class="line_up_monster">
                            <a href="#1">
                                <div class="compect_spells_big">
                                    <img src="assets/image/compect_bulider/compect_big_spells_2.png"
                                        alt="compect spells">
                                </div>
                            </a>
                        </div>
                        <div class="line_up_monster">
                            <a href="#1">
                                <div class="compect_spells_big">
                                    <img src="assets/image/compect_bulider/compect_big_spells_1.png" alt="spells">
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <!--  -->
            </div>
            <div class="modal-footer d-none">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/12.0.0/nouislider.min.js"></script>
<script>
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
</script>
@endsection