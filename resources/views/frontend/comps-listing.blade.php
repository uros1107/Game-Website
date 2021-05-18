@extends('layouts.frontend.layout')

@section('styles')
<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/12.0.0/nouislider.min.css"> -->
<link rel="stylesheet" href="assets/css/all.min.css" type="text/css" />
@endsection

@section('content')
<div class="main-content user-page-public" id="comps-listing-page">

    <!-- Body Content -->
    <div class="monster_wrap page-space">

        <div class="text-center ragdoll-top-sec page-title-section mt-3 mt-md-0 ">
            <h1 class="page-title ">Lost Centuria Composition List</h1>
            <img src="assets/image/add-run-set/separator-title.png" alt="">
            <p class="page-title-subtext">
                Access the list of all Summoners War: Lost Centuria monster team comps.
                Filter the compositions by element, monster, popularity and average mana cost.
            </p>
        </div>

        <!-- comps with ragdoll sec -->
        <div class="comps_sec">
            <div class="row text-center">
                <div class="col-12 runes-form">
                    <div class="checkbox-field">

                        <div class="dropdown dropdown1 dropdown-search-wrap" data-control="checkbox-dropdown">
                            <label class="dropdown-label">Filter by monster</label>
                            <div class="dropdown-list">
                                <div class="search-filed">
                                    <input type="search" placeholder="Search by name" class="dropdown-search" id="monster-search" onkeyup="filterFunction()" />
                                    <i class="fa fa-search"></i>
                                </div>
                                <div class="inner-dropdown-sec" id="search-box">
                                    @foreach(DB::table('monsters')->get(['id', 'name', 'fr_name']) as $monster)
                                    <label class="dropdown-option search-dropdown">
                                        <input type="checkbox" name="monster[]" class="monster" value="{{ $monster->id }}">
                                        <span>{{ $monster->name }}</span>
                                    </label>
                                    @endforeach
                                </div>
                            </div>
                        </div>

                        <div class="range-slider-wrap">
                            <div class="range-slider--diamond"><img src="assets/image/mana-icone-carte-violet.png"
                                    alt="" class="mana-icone-carte-violet-img"></div>

                            <div class="range-slider--values">
                                <input type="text" id="slider-value1" value="3.2" />
                                &#8722;
                                <input type="text" id="slider-value2" value="4.6" />
                            </div>

                            <div class="range-line" id="range"></div>
                            <input type="hidden" name="mana_cost" id="mana_cost">
                        </div>

                        <div class="dropdown dropdown2" data-control="checkbox-dropdown">
                            <label class="dropdown-label">All elements</label>
                            <div class="dropdown-list">
                                <div class="inner-dropdown-sec">
                                    @foreach(DB::table('element')->get() as $element)
                                    <label class="dropdown-option">
                                        <input type="checkbox" class="element dropdown-group" name="element[]" value="{{ $element->id }}" />
                                        <span>{{ $element->name }}</span>
                                        <img src="{{ asset('images/game/icons/elements/'.$element->detail_icon) }}" alt="">
                                    </label>
                                    @endforeach
                                </div>
                            </div>
                        </div>

                        <div class="three_btn_design">
                            <span href="#0">
                                Sort by
                            </span>
                            <div class="two_btn">
                                <a href="#0" class="btn_active thumb-icon" data-sort="0">
                                    <img src="assets/image/pouce_vide.png" alt="" class="hover_none">
                                    <img src="assets/image/pouce-vide-tri.png" alt="" class="hover_block">
                                </a>
                                <a href="#0" class="date-txt" data-sort="1">
                                    Date
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div id="team_comps_list">
                @foreach($team_comps as $team_comp)
                <div class="ct_accordion_wrap accordion_close">
                    <div class="force_sec bg_br remove">
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
                                    <h2 class="desk_heading">{{ $team_comp->c_name }}</h2>
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
                                        <div class="compect_genral_info_section mobile-genral_info d-md-none">
                                            <h3 class="general-info-title">General Info</h3>
                                            <p class="general-info-desc mCustomScrollbar">{{ $team_comp->c_general_info }}</p>
                                        </div>
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
                                    <div class="mobile_block mobile-see-more">
                                        <div class="cb_save_and_publish_btn see-more-btn">
                                            <a href="{{ route('comps-detail').'?id='.$team_comp->c_id }}" class="all_btn">See more</a>
                                        </div>
                                    </div>

                                </div>

                                <div class="compect_right_section">
                                    <div class="compect_right_bg_banner"
                                        style="background-image: url(./assets/image/comp_sec-monster_bg.png);">
                                        <div class="compect_genral_info_section">
                                            <h3 class="general-info-title">General Info</h3>
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
                                                            <img src="{{ asset('images/game/icons/elements/'.$element->image) }}" style="width: 37px;"
                                                                alt="right bar" class="icon_monster">
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
                                                            <img src="{{ asset('images/game/icons/elements/'.$element->image) }}" style="width: 37px;"
                                                                alt="right bar" class="icon_monster">
                                                        </div>
                                                        <div class="cm_monster_name">
                                                            <span style="background-color:{{ $rarity->color }}!important"> </span>
                                                            <p>{{ $c_monster->name }}</p>
                                                            <img src="{{ asset('images/game/icons/roles/'.$role->icon) }}"
                                                                alt="cm icon">
                                                        </div>
                                                    </a>
                                                    <div class="cb_save_and_publish_btn see-more-btn">
                                                        <a href="{{ route('comps-detail').'?id='.$team_comp->c_id }}" class="all_btn">See more</a>
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
            </div>
        </div>

    </div>
    <!-- Body Content Close -->


</div>
@endsection

@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/12.0.0/nouislider.min.js"></script>
<script>
$(document).ready(function() {
    $('.checkbox-field .three_btn_design a').click(function() {
        $('.three_btn_design a').removeClass("btn_active");
        $(this).addClass("btn_active");
        filter();
    });
});


// Range Slider ------------------------------

var handlesSlider = document.getElementById('range');

noUiSlider.create(handlesSlider, {
    start: [2.3, 4.4],
    step: .1,
    connect: true,
    range: {
        'min': [1],
        'max': [6]
    },
    format: {
        to: (v) => parseFloat(v).toFixed(1),
        from: (v) => parseFloat(v).toFixed(1)
    }
});

var inputNumber = document.getElementById('slider-value1');
inputNumber.addEventListener('change', function() {
    handlesSlider.noUiSlider.set([this.value, null]);
});

var inputNumber2 = document.getElementById('slider-value2');
inputNumber2.addEventListener('change', function() {
    handlesSlider.noUiSlider.set([null, this.value]);
});

var snapValues = [
    document.getElementById('slider-value1'),
    document.getElementById('slider-value2')
];

handlesSlider.noUiSlider.on('update', function(values, handle) {
    snapValues[handle].value = values[handle];
    $('#mana_cost').val(values);
});

handlesSlider.noUiSlider.on('change', function (values, handle) {
    snapValues[handle].innerHTML = values[handle];
    $('#mana_cost').val(values);
    filter();
});

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

$(document).ready(function() {
        $(".element, .monster").on('change', function() {
            filter();
        })

        $(document).on('click', '.number-page, .prev-page, .next-page', function() {
            var page_url = $(this).data('href');

            let filterlink = '';
            $(".element, .monster").each(function() {
                if ($(this).is(':checked')) {
                    filterlink += '&'+ $(this).attr('name') + '=' + $(this).val();
                }
            });
            filterlink += '&' + $('#mana_cost').attr('name') + '=[' + $('#mana_cost').val() + ']';
            filterlink += '&sort=' + $('.btn_active').data('sort');

            var url = page_url + encodeURI(filterlink);
;
            $.ajax({
                url: url,
                method: "get",
                success: function(data) {
                    $('#team_comps_list').html(data);
                }
            })
        })
    })

    function filter() {
        let filterlink = '';

        $(".element, .monster").each(function() {
            if ($(this).is(':checked')) {
                if (filterlink == '') {
                    filterlink += "{{route('get-filter-team-comps')}}" + '?'+ $(this).attr('name') + '=' + $(this).val();
                } else {
                    filterlink += '&' + $(this).attr('name') + '=' + $(this).val();
                }
            }
        });

        if (filterlink == '') {
            filterlink += "{{route('get-filter-team-comps')}}" + '?'+ $('#mana_cost').attr('name') + '=[' + $('#mana_cost').val() + ']';
        } else {
            filterlink += '&' + $('#mana_cost').attr('name') + '=[' + $('#mana_cost').val() + ']';
        }

        if (filterlink == '') {
            filterlink += "{{route('get-filter-team-comps')}}" + '?sort=' + $('.btn_active').data('sort');
        } else {
            filterlink += '&sort=' + $('.btn_active').data('sort');
        }

        $.ajax({
            url: encodeURI(filterlink),
            method: "get",
            success: function(data) {
                $('#team_comps_list').html(data);
            }
        })
    }

</script>
@endsection