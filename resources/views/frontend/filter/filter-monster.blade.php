
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
    {!! $monsters->links('frontend.ajax-custom-pagination') !!}
</div>
