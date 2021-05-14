@extends('layouts.frontend.layout')

@section('styles')
    <!-- No UISlider -->
    <link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/12.0.0/nouislider.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}" type="text/css" />
@endsection

@section('content')
<!-- Content Start-->
<div class="main-content monster-list-page">
    <!-- Body Content -->
    <div class="monster-lists page-space">
        <!--  -->
        <div class="text-center ragdoll-top-sec page-title-section mt-3 mt-md-0">
            <h1 class="page-title">Lost Centuria Monster List</h1>
            <img src="{{ asset('assets/image/add-run-set/separator-title.png') }}" alt="">
            <p class="page-title-subtext"> Access the list of all Summoners War: Lost Centuria monsters
                with the possibility to filter them by element, rarity and role.</p>
        </div>

        <form class="runes-form">
            <div class="checkbox-field">
                <div class="range-slider-wrap">
                    <div class="range-slider--diamond"><img src="assets/image/Monter-list/mana-icone-carte-violet.png"
                            alt="" class="mana-icone-carte-violet-img"></div>
                    <div class="range-slider--values">
                        <span id="slider-value1" class="slider-value"></span> &#8722; <span id="slider-value2"
                            class="slider-value"></span>
                    </div>
                    <div class="range-line" id="range-line"></div>
                </div>
                <div class="dropdown dropdown2" data-control="checkbox-dropdown">
                    <label class="dropdown-label">All Elements</label>
                    <div class="dropdown-list">
                        <div class="inner-dropdown-sec">
                            <label class="dropdown-option">
                                <input type="checkbox" name="dropdown-group" value="Selection 1" />
                                <span>Water</span>
                                <img src="assets/image/Monter-list/icon-water.png" alt="">
                            </label>
                            <label class="dropdown-option">
                                <input type="checkbox" name="dropdown-group" value="Selection 2" />
                                <span>Fire</span>
                                <img src="assets/image/Monter-list/icon-fire.png" alt="">
                            </label>
                            <label class="dropdown-option">
                                <input type="checkbox" name="dropdown-group" value="Selection 3" />
                                <span>Light</span>
                                <img src="assets/image/Monter-list/icon-light.png" alt="">
                            </label>
                            <label class="dropdown-option">
                                <input type="checkbox" name="dropdown-group" value="Selection 4" />
                                <span>Dark</span>
                                <img src="assets/image/Monter-list/icon-dark.png" alt="">
                            </label>
                            <label class="dropdown-option">
                                <input type="checkbox" name="dropdown-group" value="Selection 5" />
                                <span>Wind</span>
                                <img src="assets/image/Monter-list/icon-wind.png" alt="">
                            </label>

                        </div>
                    </div>
                </div>
                <div class="dropdown dropdown3" data-control="checkbox-dropdown">
                    <label class="dropdown-label">All Rarity</label>
                    <div class="dropdown-list">
                        <div class="inner-dropdown-sec">
                            <label class="dropdown-option">
                                <input type="checkbox" name="dropdown-group" value="Selection 1" />
                                <span>Normal </span>
                                <span class="round-normal round-color"></span>
                            </label>
                            <label class="dropdown-option">
                                <input type="checkbox" name="dropdown-group" value="Selection 2" />
                                <span>Rare</span>
                                <span class="round-rare round-color"></span>
                            </label>
                            <label class="dropdown-option">
                                <input type="checkbox" name="dropdown-group" value="Selection 3" />
                                <span>Heroic</span>
                                <span class="round-heroic round-color"></span>
                            </label>
                            <label class="dropdown-option">
                                <input type="checkbox" name="dropdown-group" value="Selection 3" />
                                <span>Legendary</span>
                                <span class="round-legendary round-color"></span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="dropdown dropdown4" data-control="checkbox-dropdown">
                    <label class="dropdown-label">All Roles</label>
                    <div class="dropdown-list">
                        <div class="inner-dropdown-sec">
                            <label class="dropdown-option">
                                <input type="checkbox" name="dropdown-group" value="Selection 1" />
                                <span>Attack</span>
                                <img src="assets/image/Monter-list/all_role_monter_icon_1.png" alt="">
                            </label>
                            <label class="dropdown-option">
                                <input type="checkbox" name="dropdown-group" value="Selection 2" />
                                <span>HP</span>
                                <img src="assets/image/Monter-list/all_role_monter_icon_2.png" alt="">
                            </label>
                            <label class="dropdown-option">
                                <input type="checkbox" name="dropdown-group" value="Selection 3" />
                                <span>Support</span>
                                <img src="assets/image/Monter-list/all_role_support-ic_3.png" alt="">
                            </label>
                            <label class="dropdown-option">
                                <input type="checkbox" name="dropdown-group" value="Selection 3" />
                                <span>Defense</span>
                                <img src="assets/image/Monter-list/all_role_monter_icon_4.png" alt="">
                            </label>

                        </div>
                    </div>
                </div>
            </div>
        </form>

        <!--  -->
        <div class="monster-list-inner">
            <!-- Monster - 1 -->
            @foreach($monsters as $monster)
            <div class="monster-single monster-1">
                <div class="monster-item" data-value="{{$monster->id}}">
                    <div class="monster-single-inner monster_img">
                        <div class="icon_img">
                            <span class="polygon-corner">{{ $monster->mana_cost }}</span>
                            <img src="{{ asset('assets/image/Monter-list/mana-icone-carte.svg') }}" alt="" class="icon_top_monster">
                        </div>
                        @php
                            $element = DB::table('element')->where('id', $monster->element)->first();
                            $role = DB::table('role')->where('id', $monster->role)->first();
                            $rarity = DB::table('rarity')->where('id', $monster->rarity)->first();
                        @endphp
                        <img src="{{ asset('images/game/main_images/'.$monster->main_image) }}" alt="" class="monster-individual">
                        <img src="{{ asset('images/game/icons/elements/'.$element->image) }}" alt="" class="icon_monster">
                    </div>
                    <div class="monter-single-name">
                        <a href="{{ route('monster-detail') }}"><span style="background-color:{{ $rarity->color }}!important"></span> {{ $monster->name }} <img src="{{ asset('images/game/icons/roles/'.$role->icon) }}" alt=""
                                srcset=""> </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>


        <!-- Pagination Section -->
        <div class="pagination_sec text-center pt-3">
            <div class="row">
                <div class="col-12">
                    <div class="pagination_number">
                        <span>
                            <a href="#">
                                <i class="fal fa-angle-left"></i>
                            </a>
                            <a href="#">1</a>
                            <a href="#">2</a>
                            <a href="#">3</a> ... <a href="#">8</a>
                            <a href="#">
                                <i class="fal fa-angle-right"></i>
                            </a>
                        </span>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- Body Content Close -->
</div>
<!-- Content Start-->
@endsection

@section('scripts')

<script src="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/12.0.0/nouislider.min.js"></script>

<script>
  //  Range Slider ------------------------------

    var handlesSlider = document.getElementById('range-line');

    noUiSlider.create(handlesSlider, {
      start: [2, 4],
      step : 1,
      connect: true,
      range: {
        'min': [1],
        'max': [6]
      },
      format: {
          to: (v) => parseFloat(v).toFixed(0),
          from: (v) => parseFloat(v).toFixed(0)
      }
    });


    var snapValues = [
      document.getElementById('slider-value1'),
      document.getElementById('slider-value2')
    ];

    handlesSlider.noUiSlider.on('update', function (values, handle) {
      snapValues[handle].innerHTML = values[handle];
    });

    $(document).ready(function() {
        $('.monster-item').on('click', function() {
            var id = $(this).data('value');
            location.href = "{{ route('monster-detail') }}?id=" + id;
        })
    })


</script>
@endsection