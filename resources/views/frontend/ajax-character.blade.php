<div class="compect_element_section">
    <div class="compect_element_title">
        <h3>Elements</h3>
    </div>
            <input name="element_water" type="hidden" value="{{ $comp_character['element_water'] }}">
            <input name="element_dark" type="hidden" value="{{ $comp_character['element_dark'] }}">
            <input name="element_fire" type="hidden" value="{{ $comp_character['element_fire'] }}">
            <input name="element_light" type="hidden" value="{{ $comp_character['element_light'] }}">
            <input name="element_wind" type="hidden" value="{{ $comp_character['element_wind'] }}">
    <ul>
        <li>
            <img src="assets/image/compect_bulider/icon-eau.png" alt="compect element1">
            <p>x {{ $comp_character['element_water'] }}</p>
        </li>
        <li>
            <img src="assets/image/compect_bulider/icon-tenebre.png"
                alt="compect element2">
            <p>x {{ $comp_character['element_dark'] }}</p>
        </li>
        <li>
            <img src="assets/image/compect_bulider/icon-feu.png" alt="compect element3">
            <p>x {{ $comp_character['element_fire'] }}</p>
        </li>
        <li>
            <img src="assets/image/compect_bulider/icon-lumiere.png"
                alt="compect element4">
            <p>x {{ $comp_character['element_light'] }}</p>
        </li>
        <li>
            <img src="assets/image/compect_bulider/icon-vent.png"
                alt="compect element5">
            <p>x {{ $comp_character['element_wind'] }}</p>
        </li>
    </ul>
</div>

<div class="compect_role_section">
    <div class="compect_element_title">
        <h3>Roles</h3>
    </div>

    <div class="compect_role_items">
        <ul>
            <li>
                <div class="cm_role_icone_img">
                    <img src="assets/image/Monter-list/all_role_monter_icon_1.png"
                        alt="role icon1">
                </div>
                <p>x {{ $comp_character['role_atk'] }} in Attack</p>
            </li>
            <li>
                <div class="cm_role_icone_img">
                    <img src="assets/image/Monter-list/all_role_monter_icon_4.png"
                        alt="role icon1">
                </div>
                <p>x {{ $comp_character['role_defense'] }} in Defense</p>
            </li>
            <li>
                <div class="cm_role_icone_img">
                    <img src="assets/image/Monter-list/all_role_monter_icon_2.png"
                        alt="role icon1">
                </div>
                <p>x {{ $comp_character['role_hp'] }} in HP</p>
            </li>
            <li>
                <div class="cm_role_icone_img">
                    <img src="assets/image/Monter-list/all_role_support-ic_3.png"
                        alt="role icon1">
                </div>
                <p>x {{ $comp_character['role_support'] }} in Support</p>
            </li>
            <input name="role_atk" type="hidden" value="{{ $comp_character['role_atk'] }}">
            <input name="role_defense" type="hidden" value="{{ $comp_character['role_defense'] }}">
            <input name="role_hp" type="hidden" value="{{ $comp_character['role_hp'] }}">
            <input name="role_support" type="hidden" value="{{ $comp_character['role_support'] }}">
        </ul>
    </div>
</div>


<div class="compect_raity_section">
    <div class="compect_element_title">
        <h3>Rarity</h3>
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
            <input name="rarity_normal" type="hidden" value="{{ $comp_character['rarity_normal'] }}">
            <input name="rarity_hero" type="hidden" value="{{ $comp_character['rarity_hero'] }}">
            <input name="rarity_rare" type="hidden" value="{{ $comp_character['rarity_rare'] }}">
            <input name="rarity_legend" type="hidden" value="{{ $comp_character['rarity_legend'] }}">
            <input name="average_mana_cost" type="hidden" id="avg_mana" value="{{ $comp_character['average_mana_cost'] }}">
        </ul>
    </div>
</div>