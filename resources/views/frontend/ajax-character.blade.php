<div class="compect_element_section">
    <div class="compect_element_title">
        <h2>@lang('comp-builder.elements')</h2>
    </div>

    <ul>
        <li>
            <img src="{{ asset('assets/image/compect_bulider/icon-eau.png') }}" alt="compect element1">
            <p>x {{ $comp_character['element_water'] }}</p>
        </li>
        <li>
            <img src="{{ asset('assets/image/compect_bulider/icon-tenebre.png') }}" alt="compect element2">
            <p>x {{ $comp_character['element_dark'] }}</p>
        </li>
        <li>
            <img src="{{ asset('assets/image/compect_bulider/icon-feu.png') }}" alt="compect element3">
            <p>x {{ $comp_character['element_fire'] }}</p>
        </li>
        <li>
            <img src="{{ asset('assets/image/compect_bulider/icon-lumiere.png') }}" alt="compect element4">
            <p>x {{ $comp_character['element_light'] }}</p>
        </li>
        <li>
            <img src="{{ asset('assets/image/compect_bulider/icon-vent.png') }}" alt="compect element5">
            <p>x {{ $comp_character['element_wind'] }}</p>
        </li>
    </ul>
    <input type="hidden" name="element_water" value="{{ $comp_character['element_water'] }}">
    <input type="hidden" name="element_dark" value="{{ $comp_character['element_dark'] }}">
    <input type="hidden" name="element_fire" value="{{ $comp_character['element_fire'] }}">
    <input type="hidden" name="element_light" value="{{ $comp_character['element_light'] }}">
    <input type="hidden" name="element_wind" value="{{ $comp_character['element_wind'] }}">
</div>

<div class="compect_role_section">
    <div class="compect_element_title">
        <h2>@lang('comp-builder.role')</h2>
    </div>

    <div class="compect_role_items">
        <ul>
            <li>
                <div class="cm_role_icone_img">
                    <img src="{{ asset('assets/image/Monter-list/all_role_monter_icon_1.png') }}" alt="role icon1">
                </div>
                <p>x {{ $comp_character['role_atk'] }} @lang('comp-builder.atk')</p>
            </li>
            <li>
                <div class="cm_role_icone_img">
                    <img src="{{ asset('assets/image/Monter-list/all_role_monter_icon_4.png') }}" alt="role icon1">
                </div>
                <p>x {{ $comp_character['role_defense'] }} @lang('comp-builder.def')</p>
            </li>
            <li>
                <div class="cm_role_icone_img">
                    <img src="{{ asset('assets/image/Monter-list/all_role_monter_icon_2.png') }}" alt="role icon1">
                </div>
                <p>x {{ $comp_character['role_hp'] }} @lang('comp-builder.hp')</p>
            </li>
            <li>
                <div class="cm_role_icone_img">
                    <img src="{{ asset('assets/image/Monter-list/all_role_support-ic_3.png') }}" alt="role icon1">
                </div>
                <p>x {{ $comp_character['role_support'] }} @lang('comp-builder.sup')</p>
            </li>
        </ul>
        <input type="hidden" name="role_atk" value="{{ $comp_character['role_atk'] }}">
        <input type="hidden" name="role_defense" value="{{ $comp_character['role_defense'] }}">
        <input type="hidden" name="role_hp" value="{{ $comp_character['role_hp'] }}">
        <input type="hidden" name="role_support" value="{{ $comp_character['role_support'] }}">
    </div>
</div>

<div class="compect_raity_section">
    <div class="compect_element_title">
        <h2>@lang('comp-builder.rarity')</h2>
    </div>

    <div class="compect_raity_items">
        <ul>
            <li>
                <span></span>
                <p>x {{ $comp_character['rarity_normal'] }}</p>
            </li>

            <li>
                <span class="raity_color_2"></span>
                <p>x {{ $comp_character['rarity_hero'] }}</p>
            </li>

            <li>
                <span class="raity_color_3"></span>
                <p>x {{ $comp_character['rarity_rare'] }}</p>
            </li>

            <li>
                <span class="raity_color_4"></span>
                <p>x {{ $comp_character['rarity_legend'] }}</p>
            </li>
        </ul>
        <input type="hidden" name="rarity_normal" value="{{ $comp_character['rarity_normal'] }}">
        <input type="hidden" name="rarity_hero" value="{{ $comp_character['rarity_hero'] }}">
        <input type="hidden" name="rarity_rare" value="{{ $comp_character['rarity_rare'] }}">
        <input type="hidden" name="rarity_legend" value="{{ $comp_character['rarity_legend'] }}">
        <input type="hidden" name="average_mana_cost" id="avg_mana" value="{{ $comp_character['average_mana_cost'] }}">
    </div>
</div>