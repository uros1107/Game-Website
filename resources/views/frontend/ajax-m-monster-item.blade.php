<div class="contain_shape contain_shape_{{ $monster->rarity }}">
    <div class="shape"><img id="{{$monster->id}}"
            src="{{ asset('images/game/icon_images/'.$monster->icon_image) }}"
            alt="monster img"></div>
    <input type="hidden" name="m_position[]" class="m_position" value="{{ $monster->id }}">
</div>
<span>{{ Session::get('lang') == 'en' ? $monster->name : $monster->fr_name }}</span>