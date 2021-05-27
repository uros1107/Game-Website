@php
$element = DB::table('element')->where('id', $monster->element)->first();
@endphp
<p><span>{{ $position }}</span>. {{ Session::get('lang') == 'en' ? $monster->name : $monster->fr_name }}</p>
<div class="collen_icon_img">
    <img src="{{ asset('images/game/icons/elements/'.$element->image) }}" alt="collen icon">
</div>