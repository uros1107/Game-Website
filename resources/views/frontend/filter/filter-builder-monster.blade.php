@foreach($monsters as $monster)
<div class="line_up_monster">
    <a href="{{ route('monster-detail').'?id='.$monster->id  }}" target="_blank">
        <div class="contain_shape">
            <div class="shape"><img src="{{ asset('images/game/icon_images/'.$monster->icon_image) }}"
                    alt="monster img"></div>
        </div>
        <span>{{ $monster->name }}</span>
    </a>
</div>
@endforeach