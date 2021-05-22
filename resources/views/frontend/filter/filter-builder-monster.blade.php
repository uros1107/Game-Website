@foreach($monsters as $monster)
<div class="line_up_monster" ondragstart="DragStart(event)">
    <a href="{{ route('monster-detail', [Session::get('lang'), Session::get('lang') == 'en' ? $monster->slug : $monster->fr_slug]) }}" target="_blank">
        <div class="contain_shape contain_shape_{{ $monster->rarity }}">
            <div class="shape m-auto"><img id="{{$monster->id}}"
                    src="{{ asset('images/game/icon_images/'.$monster->icon_image) }}"
                    alt="monster img"></div>
        </div>
        <span>{{ Session::get('lang') == 'en' ? $monster->name : $monster->fr_name }}</span>
    </a>
</div>
@endforeach