<a href="#1" data-toggle="modal" class="switch-modal-a" data-target="">
    <div class="spells_iiner_iteam">
        <img src="{{ asset('images/game/icon_images/'.$spell->icon_image) }}" class="spell-image" id="{{ $spell->id }}" data-position="{{ $drop_id }}" style="width:49px"
            alt="compect_icon">
    </div>
    <input type="hidden" name="c_spell[]" class="c_spell" value="{{ $spell->id }}">
</a>