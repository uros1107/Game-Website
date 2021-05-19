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
                    <h3 class="desk_heading">{{ $team_comp->c_name }}</h3>
                </div>
            </div>
            <div class="col-md-9">
                <div class="line_up_ifo">
                    <div class="like_icon">
                        <span class="like">
                            <a href="#1">
                                <div class="like-unlike-wrap">
                                    <img src="assets/image/pouce_vide.png" alt="">
                                    <img src="assets/image/like-active.png" alt=""
                                        class="active-like-inlike">
                                </div>
                                <span>{{ $team_comp->c_likes }}</span>
                            </a>
                        </span>
                        <span class="unlike">
                            <a href="#1">
                                <div class="like-unlike-wrap">
                                    <img src="assets/image/Pouce_bas.png" alt="">
                                    <img src="assets/image/unlike-active.png" alt=""
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
                            <a href="{{ route('monster-detail').'?id='.$c_monster->id }}" target="_blank">
                                <div class="contain_shape contain_shape_{{ $c_monster->rarity }}">
                                    <div class="shape"><img src="{{ asset('images/game/icon_images/'.$c_monster->icon_image) }}" alt="">
                                    </div>
                                </div>
                                <span>{{ $c_monster->name }}</span>
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
                                <p><span>{{ $key++ }}</span>. {{ $c_monster->name }}</p>
                                <div class="collen_icon_img">
                                    <img src="{{ asset('images/game/icons/elements/'.$element->image) }}" alt="collen icon">
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>

                    <div class="compect_genral_info_section mobile-genral_info d-md-none">
                        <h3 class="general-info-title">General Info</h3>
                        <p class="general-info-desc mCustomScrollbar">{{ $team_comp->c_general_info }}</p>
                    </div>
                    <div class="compect_element_section">
                        <div class="compect_element_title">
                            <h3>Elements</h3>
                        </div>

                        <ul>
                            <li>
                                <img src="assets/image/compect_bulider/icon-eau.png" alt="compect element1">
                                <p>x {{ $team_comp->element_water }}</p>
                            </li>
                            <li>
                                <img src="assets/image/compect_bulider/icon-tenebre.png"
                                    alt="compect element2">
                                <p>x {{ $team_comp->element_dark }}</p>
                            </li>
                            <li>
                                <img src="assets/image/compect_bulider/icon-feu.png" alt="compect element3">
                                <p>x {{ $team_comp->element_fire }}</p>
                            </li>
                            <li>
                                <img src="assets/image/compect_bulider/icon-lumiere.png"
                                    alt="compect element4">
                                <p>x {{ $team_comp->element_light }}</p>
                            </li>
                            <li>
                                <img src="assets/image/compect_bulider/icon-vent.png"
                                    alt="compect element5">
                                <p>x {{ $team_comp->element_wind }}</p>
                            </li>
                        </ul>
                    </div>

                    <div class="compect_role_section">
                        <div class="compect_element_title">
                            <h3>Roles</h3>
                        </div>

                        <div class="compect_role_items">
                            <ul>
                                <li>
                                    <div class="cm_role_icone_img">
                                        <img src="assets/image/Monter-list/all_role_monter_icon_1.png"
                                            alt="role icon1">
                                    </div>
                                    <p>x {{ $team_comp->role_atk }} in Attack</p>
                                </li>
                                <li>
                                    <div class="cm_role_icone_img">
                                        <img src="assets/image/Monter-list/all_role_monter_icon_4.png"
                                            alt="role icon1">
                                    </div>
                                    <p>x {{ $team_comp->role_defense }} in Defense</p>
                                </li>
                                <li>
                                    <div class="cm_role_icone_img">
                                        <img src="assets/image/Monter-list/all_role_monter_icon_2.png"
                                            alt="role icon1">
                                    </div>
                                    <p>x {{ $team_comp->role_hp }} in HP</p>
                                </li>
                                <li>
                                    <div class="cm_role_icone_img">
                                        <img src="assets/image/Monter-list/all_role_support-ic_3.png"
                                            alt="role icon1">
                                    </div>
                                    <p>x {{ $team_comp->role_support }} in Support</p>
                                </li>
                            </ul>
                        </div>
                    </div>


                    <div class="compect_raity_section">
                        <div class="compect_element_title">
                            <h3>Rarity</h3>
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
                            <h3>Spells</h3>
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
                        <p>Average mana cost:{{ $team_comp->average_mana_cost }}</p>
                        <img src="assets/image/compect_bulider/cb_average_img.png" alt="average">
                    </div>
                </div>

                <div class="compect_right_section">
                    <div class="compect_right_bg_banner"
                        style="background-image: url(./assets/image/comp_sec-monster_bg.png);">
                        <div class="compect_genral_info_section">
                            <h3 class="general-info-title">GENERAL INFO</h3>
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
                                    <a href="{{ route('monster-detail').'?id='.$c_monster->id }}" class="compect_monster_box compect_monster_box{{$key + 1}}"
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
                                            <p>{{ $c_monster->name }}</p>
                                            <img src="{{ asset('images/game/icons/roles/'.$role->icon) }}"
                                                alt="cm icon">
                                        </div>
                                    </a>
                                    @endif
                                    @endforeach

                                    <div class="compect_average">
                                        <p>Average mana cost:{{ $team_comp->average_mana_cost }}</p>
                                        <img src="assets/image/compect_bulider/cb_average_img.png"
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
                                    <a href="{{ route('monster-detail').'?id='.$c_monster->id }}" class="compect_monster_box compect_monster_box{{$key % 4 + 1}}"
                                        target="_blank">
                                        <div class="monster_img">
                                            <div class="icon_img">
                                                <img src="assets/image/mana-icone-carte.svg" alt="icon"
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
                                            <p>{{ $c_monster->name }}</p>
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
    There is no item yet... Be the first to add and help the community!
</div>
@endif

<!-- Pagination Section -->
<div class="pagination_sec text-center pt-3">
    {!! $team_comps->links('frontend.custom-pagination') !!}
</div>