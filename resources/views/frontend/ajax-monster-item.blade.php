@php
    $element = DB::table('element')->where('id', $monster->element)->first();
    $role = DB::table('role')->where('id', $monster->role)->first();
    $rarity = DB::table('rarity')->where('id', $monster->rarity)->first();
@endphp
<a href="{{ route('monster-detail', $monster->slug) }}" class="compect_monster_box compect_monster_box{{ $drop_id <= 4? $drop_id : $drop_id - 4 }}"
    target="_blank">
    <div class="monster_img">
        <div class="icon_img">
            <img src="assets/image/mana-icone-carte.svg" alt="icon"
                class="icon_top_monster">
            <span>{{ $monster->mana_cost }}</span>
        </div>
        <img src="{{ asset('images/game/main_images/'.$monster->main_image) }}" class="main-image" ondragstart="DragStart(event)" id="{{ $monster->id }}" data-position="{{$drop_id}}"
            alt="monster" class="monster-individual">
        <img src="{{ asset('images/game/icons/elements/'.$element->image) }}" style="width:37px" data-position="{{$drop_id}}"
            alt="right bar" class="icon_monster">
    </div>
    <div class="cm_monster_name">
        <span style="background-color:{{ $rarity->color }}!important"> </span>
        <p>{{ $monster->name }}</p>
        <img src="{{ asset('images/game/icons/roles/'.$role->icon) }}"
            alt="cm icon">
    </div>
    <input type="hidden" name="c_position[]" class="c_position" value="{{ $monster->id }}">
</a>
