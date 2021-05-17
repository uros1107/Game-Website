@foreach($monsters as $monster)
<div class="line_up_monster" ondragstart="DragStart(event)">
    <a href="{{ route('monster-detail').'?id='.$monster->id  }}" target="_blank">
        <div class="contain_shape">
            <div class="shape m-auto"><img id="{{$monster->id}}"
                        src="{{ asset('images/game/icon_images/'.$monster->icon_image) }}"
                        alt="monster img"></div>
        </div>
        <span>{{ $monster->name }}</span>
    </a>
</div>
@endforeach