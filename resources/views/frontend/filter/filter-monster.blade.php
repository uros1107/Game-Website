
@foreach($monsters as $key => $monster)
<div class="monster-single monster-{{ $key%5 + 1 }}">
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
            <a href="{{ route('monster-detail', $monster->slug) }}"><span style="background-color:{{ $rarity->color }}!important"></span> {{ $monster->name }} <img src="{{ asset('images/game/icons/roles/'.$role->icon) }}" alt=""
                    srcset=""> </a>
        </div>
    </div>
</div>
@endforeach

<!-- Pagination Section -->
<div class="pagination_sec text-center pt-3" id="pagination" style="width: 100%;justify-content: center">
    {!! $monsters->links('frontend.ajax-custom-pagination') !!}
</div>
