@extends('layouts.frontend.layout')

@section('head')
<link rel="alternate" hreflang="en" href="{{ url('en/monsters') }}" />
<link rel="alternate" hreflang="fr" href="{{ url('fr/monstres') }}" />
<link rel="alternate" hreflang="x-default" href="{{ url('en/monsters') }}" />
@endsection

@section('styles')
    <!-- No UISlider -->
    
    <link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}" type="text/css" />
@endsection

@section('content')
<!-- Content Start-->
<div class="main-content monster-list-page">
    <!-- Body Content -->
    <div class="monster-lists page-space">
        <!--  -->
        <div class="text-center ragdoll-top-sec page-title-section mt-3 mt-md-0">
            <h1 class="page-title">@lang('monster-list.title')</h1>
            <img src="{{ asset('assets/image/add-run-set/separator-title.png') }}" alt="">
            <p class="page-title-subtext">@lang('monster-list.description')</p>
        </div>

        <form class="runes-form">
            <div class="checkbox-field">
                <div class="range-slider-wrap">
                    <div class="range-slider--diamond"><img src="{{ asset('assets/image/Monter-list/mana-icone-carte-violet.png') }}"
                            alt="" class="mana-icone-carte-violet-img"></div>
                    <div class="range-slider--values">
                        <span id="slider-value1" class="slider-value"></span> &#8722; <span id="slider-value2"
                            class="slider-value"></span>
                    </div>
                    <div class="range-line" id="range-line"></div>
                    <input type="hidden" name="mana_cost" id="mana_cost">
                </div>
                <div class="dropdown dropdown2" data-control="checkbox-dropdown">
                    <label class="dropdown-label">@lang('monster-list.all_elements')</label>
                    <div class="dropdown-list">
                        <div class="inner-dropdown-sec">
                            @foreach(DB::table('element')->get() as $element)
                            <label class="dropdown-option">
                                <input type="checkbox" class="element" name="element[]" value="{{ $element->id }}" />
                                <span>{{ Session::get('lang') == 'en'? $element->name : $element->fr_name }}</span>
                                <img src="{{ asset('images/game/icons/elements/'.$element->detail_icon) }}" alt="">
                            </label>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="dropdown dropdown3" data-control="checkbox-dropdown">
                    <label class="dropdown-label">@lang('monster-list.all_rarity')</label>
                    <div class="dropdown-list">
                        <div class="inner-dropdown-sec">
                            @foreach(DB::table('rarity')->get() as $rarity)
                            <label class="dropdown-option">
                                <input type="checkbox" class="rarity" name="rarity[]" value="{{ $rarity->id }}" />
                                <span>{{ Session::get('lang') == 'en'? $rarity->name : $rarity->fr_name }}</span>
                                <span class="round-color" style="background: {{ $rarity->color }}"></span>
                            </label>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="dropdown dropdown4" data-control="checkbox-dropdown">
                    <label class="dropdown-label">@lang('monster-list.all_roles')</label>
                    <div class="dropdown-list">
                        <div class="inner-dropdown-sec">
                            @foreach(DB::table('role')->get() as $role)
                            <label class="dropdown-option">
                                <input type="checkbox" class="role" name="role[]" value="{{ $role->id }}" />
                                <span>{{ Session::get('lang') == 'en'? $role->name : $role->fr_name }}</span>
                                <img src="{{ asset('images/game/icons/roles/'.$role->icon) }}" alt="">
                            </label>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </form>

        <div>
            <!--  -->
            <div class="monster-list-inner">
                <!-- Monster - 1 -->
                @foreach($monsters as $key => $monster)
                @php
                    $element = DB::table('element')->where('id', $monster->element)->first();
                    $role = DB::table('role')->where('id', $monster->role)->first();
                    $rarity = DB::table('rarity')->where('id', $monster->rarity)->first();
                @endphp
                <div class="monster-single monster-{{ $element->id }}">
                    <a href="{{ route(Session::get('lang') == 'en' ? 'monster-detail' : 'fr-monster-detail', [Session::get('lang'), Session::get('lang') == 'en' ? $monster->slug : $monster->fr_slug]) }}">
                        <div class="monster-item" data-value="{{Session::get('lang') == 'en' ? $monster->slug : $monster->fr_slug}}">
                            <div class="monster-single-inner monster_img">
                                <div class="icon_img">
                                    <span class="polygon-corner">{{ $monster->mana_cost }}</span>
                                    <img src="{{ asset('assets/image/Monter-list/mana-icone-carte.svg') }}" alt="" class="icon_top_monster">
                                </div>
                                <img src="{{ asset('images/game/main_images/'.$monster->main_image) }}" alt="" class="monster-individual">
                                <img src="{{ asset('images/game/icons/elements/'.$element->image) }}" alt="" class="icon_monster">
                            </div>
                            <div class="monter-single-name">
                                <a><span style="background-color:{{ $rarity->color }}!important"></span> {{ Session::get('lang') == 'en' ? $monster->name : $monster->fr_name }} <img src="{{ asset('images/game/icons/roles/'.$role->icon) }}" alt=""
                                        srcset=""> </a>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach

                <!-- Pagination Section -->
                <div class="pagination_sec text-center pt-3" id="pagination" style="width: 100%;justify-content: center">
                    {!! $monsters->links('frontend.custom-pagination') !!}
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
      start: [1, 6],
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
        $('#mana_cost').val(values);
    });

    handlesSlider.noUiSlider.on('change', function (values, handle) {
        snapValues[handle].innerHTML = values[handle];
        $('#mana_cost').val(values);
        filter();
    });

    $(document).ready(function() {
       

        $(".element, .rarity, .role").on('change', function() {
            filter();
        })

        $(document).on('click', '.page-number, #prev, #next', function() {
            var page_url = $(this).data('href');

            let filterlink = '';
            $(".element, .rarity, .role").each(function() {
                if ($(this).is(':checked')) {
                    filterlink += '&'+ $(this).attr('name') + '=' + $(this).val();
                }
            });
            filterlink += '&' + $('#mana_cost').attr('name') + '=[' + $('#mana_cost').val() + ']';

            var url = page_url + encodeURI(filterlink);

            $.ajax({
                url: url,
                method: "get",
                success: function(data) {
                    $('.monster-list-inner').html(data);
                }
            })
        })
    })

    function filter() {
        let filterlink = '';

        $(".element, .rarity, .role").each(function() {
            if ($(this).is(':checked')) {
                if (filterlink == '') {
                    filterlink += "{{route('get-filter-monster', Session::get('lang'))}}" + '?'+ $(this).attr('name') + '=' + $(this).val();
                } else {
                    filterlink += '&' + $(this).attr('name') + '=' + $(this).val();
                }
            }
        });


        if (filterlink == '') {
            filterlink += "{{route('get-filter-monster', Session::get('lang'))}}" + '?'+ $('#mana_cost').attr('name') + '=[' + $('#mana_cost').val() + ']';
        } else {
            filterlink += '&' + $('#mana_cost').attr('name') + '=[' + $('#mana_cost').val() + ']';
        }
        console.log(encodeURI(filterlink))

        $.ajax({
            url: encodeURI(filterlink),
            method: "get",
            success: function(data) {
                $('.monster-list-inner').html(data);
            }
        })
    }

</script>
@endsection