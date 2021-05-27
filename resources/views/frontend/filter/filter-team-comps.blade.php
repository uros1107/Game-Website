@foreach($team_comps as $team_comp)
<div class="ct_accordion_wrap accordion_close">
    <div class="force_sec bg_br remove">
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
                    <h2 class="desk_heading">{{ Session::get('lang') == 'en'? $team_comp->c_name : $team_comp->c_fr_name }}</h2>
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
                        <div class="compect_genral_info_section mobile-genral_info d-md-none">
                            <h3 class="general-info-title">@lang('info')</h3>
                            <p class="general-info-desc mCustomScrollbar">{{ $team_comp->c_general_info }}</p>
                        </div>
                    </div>
                    <div class="compect_element_section">
                        <div class="compect_element_title">
                            <h3>@lang('comp-list.elements')</h3>
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
                            <h3>@lang('comp-list.roles')</h3>
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
                            <h3>@lang('comp-list.rarity')</h3>
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
                            <h3>@lang('comp-list.spells')</h3>
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
                        <p>@lang('comp-list.avg_mana'):{{ $team_comp->average_mana_cost }}</p>
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
                            <h3 class="general-info-title">@lang('comp-list.info')</h3>
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
                                    <a href="{{ route(Session::get('lang') == 'en' ? 'monster-detail' : 'fr-monster-detail', [Session::get('lang'), Session::get('lang')== 'en' ? $c_monster->slug : $c_monster->fr_slug]) }}" class="compect_monster_box compect_monster_box{{$key + 1}}"
                                        target="_blank">
                                        <div class="monster_img">
                                            <div class="icon_img">
                                                <img src="{{ asset('assets/image/mana-icone-carte.svg') }}" alt="icon"
                                                    class="icon_top_monster">
                                                <span>{{ $c_monster->mana_cost }}</span>
                                            </div>
                                            <img src="{{ asset('images/game/main_images/'.$c_monster->main_image) }}"
                                                alt="monster" class="monster-individual">
                                            <img src="{{ asset('images/game/icons/elements/'.$element->image) }}" style="width: 37px;"
                                                alt="right bar" class="icon_monster">
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
                                        <p>@lang('comp-list.avg_mana'):{{ $team_comp->average_mana_cost }}</p>
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
                                            <img src="{{ asset('images/game/icons/elements/'.$element->image) }}" style="width: 37px;"
                                                alt="right bar" class="icon_monster">
                                        </div>
                                        <div class="cm_monster_name">
                                            <span style="background-color:{{ $rarity->color }}!important"> </span>
                                            <p>{{ Session::get('lang') == 'en'? $c_monster->name : $c_monster->fr_name }}</p>
                                            <img src="{{ asset('images/game/icons/roles/'.$role->icon) }}"
                                                alt="cm icon">
                                        </div>
                                    </a>
                                    <div class="cb_save_and_publish_btn see-more-btn">
                                        @if(Session::get('lang') == 'en')
                                        <a href="{{ route('comps-detail', [Session::get('lang'), $team_comp->c_slug]) }}" class="all_btn">@lang('comp-list.see')</a>
                                        @else
                                        <a href="{{ route('fr-comps-detail', [Session::get('lang'), $team_comp->c_fr_slug]) }}" class="all_btn">@lang('comp-list.see')</a>
                                        @endif
                                    </div>
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

<!-- Pagination Section Strat -->
<div class="pagination_sec text-center pt-3" id="paginate">
    {!! $team_comps->links('frontend.custom-pagination') !!}
</div>
<!-- Pagination Section End -->