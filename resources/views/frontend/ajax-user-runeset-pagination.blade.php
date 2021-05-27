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
                <h3>{{ $rune_set->rs_name }}</h3>
                @php
                    $rune = DB::table('runes')->where('r_id', $rune_set->rs_rune)->first();
                    $skill_stone = DB::table('skill_stones')->where('skill_id', $rune_set->rs_skill_stones)->first();
                    $rune_set->rs_substats = json_decode($rune_set->rs_substats);
                @endphp
                <ul>
                    <li><span>Rune Set to use : </span>{{ $rune->r_name }} <img src="{{ asset('images/game/icons/runes/'.$rune->r_icon) }}" alt=""
                            class="icons-after-text"></li>
                    <li>
                        <span>Prioritized Sub-stats :</span>
                        @foreach($rune_set->rs_substats as $rs)
                        @php
                            $sub_stat = DB::table('sub_stats')->where('sub_id', $rs)->first();
                        @endphp
                        <img src="{{ asset('images/game/icons/sub-stats/'.$sub_stat->sub_icon) }}" alt="">
                        @endforeach
                    </li>
                    <li><span>Skill Stone : </span>{{ $skill_stone->skill_name }}<img src="{{ asset('images/game/icons/skill-stones/'.$skill_stone->skill_icon) }}"
                            alt="" class="icons-after-text"></li>
                    <li><span>Position in comp : </span>{{ $rune_set->rs_comp_position }}</li>
                </ul>
                @php
                    $user = DB::table('users')->where('id', $rune_set->rs_user_id)->first();
                @endphp
                <p class="date">By <span><a href="#1">{{ $user->name }}</a></span> on the {{ $rune_set->created_at->format('m/d/Y') }}</p>
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