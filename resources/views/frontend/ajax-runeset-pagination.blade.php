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
                        2700
                    </a>
                </span>
                <span class="unlike">
                    <a href="#1">
                        <div class="like-unlike-wrap">
                            <img src="{{ asset('assets/image/Pouce_bas.png') }}" alt="">
                            <img src="{{ asset('assets/image/unlike-active.png') }}" alt="" class="active-like-inlike">
                        </div>
                        32
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