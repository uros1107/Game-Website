@extends('layouts/contentLayoutMaster')

@section('title', 'Edit Monster')

@section('vendor-style')
<style>
  .mb-6 {
    margin-bottom: 6px;
  }
  label {
    font-weight: bold !important;
    margin-bottom: 4px!important;
  }
  .w-50 {
    width: 50% !important;
  }
  .custom-label {
    margin-top: 10px;
    margin-right: 15px;
    font-weight: unset!important;
  }
</style>
@endsection

@section('content')
<!-- users edit start -->
<section class="users-edit">
  <div class="card">
    <div class="card-content">
      <div class="card-body">
        <div class="tab-content">
          <div class="tab-pane active" id="account" aria-labelledby="account-tab" role="tabpanel">
            <!-- users edit account form start -->
            @if(Session::has('success'))
            <div class="alert alert-success" role="alert">
                <i class="feather icon-star mr-1 align-middle"></i>
                <span class="mb-0">
                  {{Session::get('success')}}
                </span>
            </div>
            @endif
            @if(Session::has('error'))
            <div class="alert alert-danger" role="alert">
                <i class="feather icon-info mr-1 align-middle"></i>
                <span class="mb-0">
                  {{Session::get('error')}}
                </span>
            </div>
            @endif
            <form action="{{ route('update-monster') }}" method="POST" enctype="multipart/form-data">
              {{ csrf_field() }}
              <input type="hidden" name="id" value="{{ $monster->id }}">
              <div class="row mt-1">
                <div class="col-12"><h5 class="mb-1"><i class="feather icon-user mr-25"></i>Edit a monster</h5></div>
                <div class="col-12 col-sm-6">
                  <div class="row">
                    <div class="col-12 col-sm-6">
                      <div class="form-group">
                        <div class="controls">
                          <label>Monster Name</label>
                          <input type="text" class="form-control mb-6" name="name" value="{{ $monster->name }}" required placeholder="Monster Name"
                            data-validation-required-message="This Monster Name field is required">
                          <span class="font-italic">EN</span>
                        </div>
                      </div>
                    </div>
                    <div class="col-12 col-sm-6">
                      <div class="form-group">
                        <div class="controls">
                          <label></label>
                          <input type="text" class="form-control mb-6" name="fr_name" value="{{ $monster->fr_name }}" required placeholder="Monster Name"
                            data-validation-required-message="This Monster Name field is required">
                          <span class="font-italic">FR</span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-12 col-sm-6">
                      <div class="form-group">
                        <div class="controls">
                          <label>Monster Second Name</label>
                          <input type="text" class="form-control mb-6" name="second_name" value="{{ $monster->second_name }}" required placeholder="Monster Second Name"
                            data-validation-required-message="This Monster Second Name field is required">
                          <span class="font-italic">EN</span>
                        </div>
                      </div>
                    </div>
                    <div class="col-12 col-sm-6">
                      <div class="form-group">
                        <div class="controls">
                          <label></label>
                          <input type="text" class="form-control mb-6" name="fr_second_name" value="{{ $monster->fr_second_name }}" required placeholder="Monster Second Name"
                            data-validation-required-message="This Monster Second Name field is required">
                          <span class="font-italic">FR</span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-12 col-sm-6">
                      <div class="form-group">
                        <div class="controls">
                          <label>Spell Name</label>
                          <input type="text" class="form-control mb-6" name="spell_name" value="{{ $monster->spell_name }}" required placeholder="Spell Name"
                            data-validation-required-message="This Spell Name field is required">
                          <span class="font-italic">EN</span>
                        </div>
                      </div>
                    </div>
                    <div class="col-12 col-sm-6">
                      <div class="form-group">
                        <div class="controls">
                          <label></label>
                          <input type="text" class="form-control mb-6" name="fr_spell_name" value="{{ $monster->fr_spell_name }}" required placeholder="Spell Name"
                            data-validation-required-message="This Spell Name field is required">
                          <span class="font-italic">FR</span>
                        </div>
                      </div>
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <div class="controls">
                      <label>Spell Description</label>
                      <div class="d-flex">
                        <input type="text" class="form-control" name="spell_description"
                          placeholder="Please input description"  value="{{ $monster->spell_description }}"
                          data-validation-required-message="This Spell Description field is required">
                          <span class="font-italic" style="margin: auto 5px">EN</span>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="controls">
                      <div class="d-flex">
                        <input type="text" class="form-control" name="fr_spell_description"
                          placeholder="Please input description" value="{{ $monster->fr_spell_description }}"
                          data-validation-required-message="This Spell Description field is required">
                          <span class="font-italic" style="margin: auto 5px">FR</span>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="controls">
                      <label>Mana Cost</label>
                      <input type="number" class="form-control" required placeholder="Mana Cost"
                        value="{{ $monster->mana_cost }}" name="mana_cost" step="0.01" min="0.00"
                        data-validation-required-message="This Mana Cost field is required">
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label>Role</label>
                    <ul class="list-unstyled mb-0">
                      <li class="d-inline-block mr-2">
                        <fieldset>
                          <div class="vs-radio-con">
                            <input type="radio" name="role" value="1" {{ $monster->role == 1? 'checked' : '' }}>
                            <span class="vs-radio">
                              <span class="vs-radio--border"></span>
                              <span class="vs-radio--circle"></span>
                            </span>
                            Attack
                          </div>
                        </fieldset>
                      </li>
                      <li class="d-inline-block mr-2">
                        <fieldset>
                          <div class="vs-radio-con">
                            <input type="radio" name="role" value="2" {{ $monster->role == 2? 'checked' : '' }}>
                            <span class="vs-radio">
                              <span class="vs-radio--border"></span>
                              <span class="vs-radio--circle"></span>
                            </span>
                            HP
                          </div>
                        </fieldset>
                      </li>
                      <li class="d-inline-block mr-2">
                        <fieldset>
                          <div class="vs-radio-con">
                            <input type="radio" name="role" value="3" {{ $monster->role == 3? 'checked' : '' }}>
                            <span class="vs-radio">
                              <span class="vs-radio--border"></span>
                              <span class="vs-radio--circle"></span>
                            </span>
                            Support
                          </div>
                        </fieldset>
                      </li>
                      <li class="d-inline-block mr-2">
                        <fieldset>
                          <div class="vs-radio-con">
                            <input type="radio" name="role" value="4" {{ $monster->role == 4? 'checked' : '' }}>
                            <span class="vs-radio">
                              <span class="vs-radio--border"></span>
                              <span class="vs-radio--circle"></span>
                            </span>
                            Defense
                          </div>
                        </fieldset>
                      </li>
                    </ul>
                  </div>
                  <div class="form-group">
                    <label>Rarity</label>
                    <ul class="list-unstyled mb-0">
                      <li class="d-inline-block mr-2">
                        <fieldset>
                          <div class="vs-radio-con">
                            <input type="radio" name="rarity" value="1" {{ $monster->rarity == 1? 'checked' : '' }}>
                            <span class="vs-radio">
                              <span class="vs-radio--border"></span>
                              <span class="vs-radio--circle"></span>
                            </span>
                            Normal
                          </div>
                        </fieldset>
                      </li>
                      <li class="d-inline-block mr-2">
                        <fieldset>
                          <div class="vs-radio-con">
                            <input type="radio" name="rarity" value="2" {{ $monster->rarity == 2? 'checked' : '' }}>
                            <span class="vs-radio">
                              <span class="vs-radio--border"></span>
                              <span class="vs-radio--circle"></span>
                            </span>
                            Rare
                          </div>
                        </fieldset>
                      </li>
                      <li class="d-inline-block mr-2">
                        <fieldset>
                          <div class="vs-radio-con">
                            <input type="radio" name="rarity" value="3" {{ $monster->rarity == 3? 'checked' : '' }}>
                            <span class="vs-radio">
                              <span class="vs-radio--border"></span>
                              <span class="vs-radio--circle"></span>
                            </span>
                            Hero
                          </div>
                        </fieldset>
                      </li>
                      <li class="d-inline-block mr-2">
                        <fieldset>
                          <div class="vs-radio-con">
                            <input type="radio" name="rarity" value="4" {{ $monster->rarity == 4? 'checked' : '' }}>
                            <span class="vs-radio">
                              <span class="vs-radio--border"></span>
                              <span class="vs-radio--circle"></span>
                            </span>
                            Legend
                          </div>
                        </fieldset>
                      </li>
                    </ul>
                  </div>
                  <div class="form-group">
                    <label>Element</label>
                    <ul class="list-unstyled mb-0">
                      <li class="d-inline-block mr-2">
                        <fieldset>
                          <div class="vs-radio-con">
                            <input type="radio" name="element" value="1" {{ $monster->element == 1? 'checked' : '' }}>
                            <span class="vs-radio">
                              <span class="vs-radio--border"></span>
                              <span class="vs-radio--circle"></span>
                            </span>
                            Fire
                          </div>
                        </fieldset>
                      </li>
                      <li class="d-inline-block mr-2">
                        <fieldset>
                          <div class="vs-radio-con">
                            <input type="radio" name="element" value="2" {{ $monster->element == 2? 'checked' : '' }}>
                            <span class="vs-radio">
                              <span class="vs-radio--border"></span>
                              <span class="vs-radio--circle"></span>
                            </span>
                            Water
                          </div>
                        </fieldset>
                      </li>
                      <li class="d-inline-block mr-2">
                        <fieldset>
                          <div class="vs-radio-con">
                            <input type="radio" name="element" value="3" {{ $monster->element == 3? 'checked' : '' }}>
                            <span class="vs-radio">
                              <span class="vs-radio--border"></span>
                              <span class="vs-radio--circle"></span>
                            </span>
                            Wind
                          </div>
                        </fieldset>
                      </li>
                      <li class="d-inline-block mr-2">
                        <fieldset>
                          <div class="vs-radio-con">
                            <input type="radio" name="element" value="4" {{ $monster->element == 4? 'checked' : '' }}>
                            <span class="vs-radio">
                              <span class="vs-radio--border"></span>
                              <span class="vs-radio--circle"></span>
                            </span>
                            Light
                          </div>
                        </fieldset>
                      </li>
                      <li class="d-inline-block mr-2">
                        <fieldset>
                          <div class="vs-radio-con">
                            <input type="radio" name="element" value="5" {{ $monster->element == 5? 'checked' : '' }}>
                            <span class="vs-radio">
                              <span class="vs-radio--border"></span>
                              <span class="vs-radio--circle"></span>
                            </span>
                            Dark
                          </div>
                        </fieldset>
                      </li>
                    </ul>
                  </div>
                  <div>
                    <label>Basic Stats</label>
                    <div class="d-flex">
                      <div class="form-group">
                        <div class="controls d-flex">
                          <label class="custom-label">CRIT Rate</label>
                          <input type="number" name="crit_rate" class="form-control w-50" required placeholder="0"
                            value="{{ $monster->crit_rate }}"  step="0.01" min="0.00"
                            data-validation-required-message="This field is required">
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="controls d-flex">
                          <label class="custom-label">CRIT DMG</label>
                          <input type="number" name="crit_dmg" class="form-control w-50" required placeholder="0"
                            value="{{ $monster->crit_dmg }}" step="0.01" min="0.00"
                            data-validation-required-message="This field is required">
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="controls d-flex">
                          <label class="custom-label">HP</label>
                          <input type="number" name="hp" class="form-control w-50" required placeholder="0"
                            value="{{ $monster->hp }}" step="0.01" min="0.00"
                            data-validation-required-message="This field is required">
                        </div>
                      </div>
                    </div>
                    <div class="d-flex">
                      <div class="form-group">
                        <div class="controls d-flex">
                          <label class="custom-label">ATK</label>
                          <input type="number" name="atk" class="form-control w-50" required placeholder="0"
                            value="{{ $monster->atk }}" step="0.01" min="0.00"
                            data-validation-required-message="This field is required">
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="controls d-flex">
                          <label class="custom-label">ACC</label>
                          <input type="number" name="acc" class="form-control w-50" required placeholder="0"
                            value="{{ $monster->acc }}" step="0.01" min="0.00"
                            data-validation-required-message="This field is required">
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="controls d-flex">
                          <label class="custom-label">DEF</label>
                          <input type="number" name="def" class="form-control w-50" required placeholder="0"
                            value="{{ $monster->def }}" step="0.01" min="0.00"
                            data-validation-required-message="This field is required">
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="controls d-flex">
                          <label class="custom-label">RES</label>
                          <input type="number" name="res" class="form-control w-50" required placeholder="0"
                            value="{{ $monster->res }}" step="0.01" min="0.00"
                            data-validation-required-message="This field is required">
                        </div>
                      </div>
                    </div>
                  </div>
                  

                </div>
                <div class="col-12 col-sm-6">
                  <div class="form-group">
                    <div class="controls">
                      <label>Meta Title</label>
                      <div class="d-flex">
                        <input type="text" class="form-control" value="{{ $monster->meta_title }}"
                          placeholder="Please input description" name="meta_title"
                          data-validation-required-message="This Meta Title is required">
                          <span class="font-italic" style="margin: auto 5px">EN</span>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="controls">
                      <div class="d-flex">
                        <input type="text" class="form-control" value="{{ $monster->fr_meta_title }}"
                          placeholder="Please input description" name="fr_meta_title"
                          data-validation-required-message="This Meta Title is required">
                          <span class="font-italic" style="margin: auto 5px">FR</span>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="controls">
                      <label>Meta Description</label>
                      <div class="d-flex">
                        <input type="text" class="form-control" value="{{ $monster->meta_description }}"
                          placeholder="Please input description" name="meta_description"
                          data-validation-required-message="This Meta Description is required">
                          <span class="font-italic" style="margin: auto 5px">EN</span>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="controls">
                      <div class="d-flex">
                        <input type="text" class="form-control" value="{{ $monster->fr_meta_description }}"
                          placeholder="Please input description" name="fr_meta_description"
                          data-validation-required-message="This Meta Description is required">
                          <span class="font-italic" style="margin: auto 5px">FR</span>
                      </div>
                    </div>
                  </div>
                  <fieldset class="form-group">
                      <label for="basicInputFile">OG Image</label>
                      <div class="custom-file">
                          <input type="text" id="og_img_input" class="custom-file-input">
                          <input type="file" name="og_image" id="og_img_hidden" class="custom-file-input d-none">
                          <label class="custom-file-label" for="inputGroupFile01">{{ $monster->og_image }}</label>
                      </div>
                  </fieldset>
                  <fieldset class="form-group">
                      <label for="basicInputFile">Main Image (card format)</label>
                      <div class="custom-file">
                          <input type="text" id="main_img_input" class="custom-file-input">
                          <input type="file" name="main_image" id="main_img_hidden" class="custom-file-input d-none">
                          <label class="custom-file-label" for="inputGroupFile01">{{ $monster->main_image }}</label>
                      </div>
                  </fieldset>
                  <fieldset class="form-group">
                      <label for="basicInputFile">BG Image</label>
                      <div class="custom-file">
                          <input type="text" id="bg_img_input" class="custom-file-input">
                          <input type="file" name="bg_image" id="bg_img_hidden" class="custom-file-input d-none">
                          <label class="custom-file-label" for="inputGroupFile01">{{ $monster->bg_image }}</label>
                      </div>
                  </fieldset>
                  <fieldset class="form-group">
                      <label for="basicInputFile">BG Comp Image</label>
                      <div class="custom-file">
                          <input type="text" id="bg_comp_img_input" class="custom-file-input">
                          <input type="file" name="bg_comp_image" id="bg_comp_img_hidden" class="custom-file-input d-none">
                          <label class="custom-file-label" for="inputGroupFile01">{{ $monster->bg_comp_image }}</label>
                      </div>
                  </fieldset>
                  <fieldset class="form-group">
                      <label for="basicInputFile">Icon/Thumb Image</label>
                      <div class="custom-file">
                          <input type="text" id="icon_img_input" class="custom-file-input">
                          <input type="file" name="icon_image" id="icon_img_hidden" class="custom-file-input d-none">
                          <label class="custom-file-label" for="inputGroupFile01">{{ $monster->icon_image }}</label>
                      </div>
                  </fieldset>
                  
                  <div class="form-group">
                    <label>Is a special monster?</label>
                    <ul class="list-unstyled mb-0">
                      <li class="d-inline-block mr-2">
                        <fieldset>
                          <div class="vs-radio-con">
                            <input type="radio" name="special_monster" value="1" {{ $monster->special_monster == 1? 'checked' : '' }}>
                            <span class="vs-radio">
                              <span class="vs-radio--border"></span>
                              <span class="vs-radio--circle"></span>
                            </span>
                            Yes
                          </div>
                        </fieldset>
                      </li>
                      <li class="d-inline-block mr-2">
                        <fieldset>
                          <div class="vs-radio-con">
                            <input type="radio" name="special_monster" value="0" {{ $monster->special_monster == 0? 'checked' : '' }}>
                            <span class="vs-radio">
                              <span class="vs-radio--border"></span>
                              <span class="vs-radio--circle"></span>
                            </span>
                            No
                          </div>
                        </fieldset>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>

              <div class="divider special-divider">
                <div class="divider-text"><i class="feather icon-star"></i></div>
              </div>
              <div class="row mt-1 special-block">
                <div class="col-12"><h5 class="mb-1"><i class="feather icon-user mr-25"></i>Special Monster</h5></div>
                <div class="col-12 col-sm-6">
                  <div class="row">
                    <div class="col-12 col-sm-6">
                      <div class="form-group">
                        <div class="controls">
                          <label>Monster Name</label>
                          <input type="text" class="form-control mb-6" name="s_name" value="{{ $monster->special_monster == 1? $monster->s_name : '' }}" required placeholder="Monster Name">
                          <span class="font-italic">EN</span>
                        </div>
                      </div>
                    </div>
                    <div class="col-12 col-sm-6">
                      <div class="form-group">
                        <div class="controls">
                          <label></label>
                          <input type="text" class="form-control mb-6" name="fr_s_name" value="{{ $monster->special_monster == 1? $monster->fr_s_name : '' }}" required placeholder="Monster Name"
                            data-validation-required-message="This Monster Name field is required">
                          <span class="font-italic">FR</span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-12 col-sm-6">
                      <div class="form-group">
                        <div class="controls">
                          <label>Monster Second Name</label>
                          <input type="text" class="form-control mb-6" name="s_second_name" value="{{ $monster->special_monster == 1? $monster->s_second_name : '' }}" required placeholder="Monster Second Name"
                            data-validation-required-message="This Monster Second Name field is required">
                          <span class="font-italic">EN</span>
                        </div>
                      </div>
                    </div>
                    <div class="col-12 col-sm-6">
                      <div class="form-group">
                        <div class="controls">
                          <label></label>
                          <input type="text" class="form-control mb-6" name="fr_s_second_name" value="{{ $monster->special_monster == 1? $monster->fr_s_second_name : '' }}" required placeholder="Monster Second Name"
                            data-validation-required-message="This Monster Second Name field is required">
                          <span class="font-italic">FR</span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-12 col-sm-6">
                      <div class="form-group">
                        <div class="controls">
                          <label>Spell Name</label>
                          <input type="text" class="form-control mb-6" name="s_spell_name" value="{{ $monster->special_monster == 1? $monster->s_spell_name : '' }} " required placeholder="Spell Name"
                            data-validation-required-message="This Spell Name field is required">
                          <span class="font-italic">EN</span>
                        </div>
                      </div>
                    </div>
                    <div class="col-12 col-sm-6">
                      <div class="form-group">
                        <div class="controls">
                          <label></label>
                          <input type="text" class="form-control mb-6" name="fr_s_spell_name" value="{{ $monster->special_monster == 1? $monster->fr_s_spell_name : '' }}" required placeholder="Spell Name"
                            data-validation-required-message="This Spell Name field is required">
                          <span class="font-italic">FR</span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="controls">
                      <label>Spell Description</label>
                      <div class="d-flex">
                        <input type="text" class="form-control"  value="{{ $monster->special_monster == 1? $monster->s_spell_description : '' }}"
                          placeholder="Please input description" name="s_spell_description" 
                          data-validation-required-message="This Spell Description is required">
                          <span class="font-italic" style="margin: auto 5px">EN</span>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="controls">
                      <div class="d-flex">
                        <input type="text" class="form-control" value="{{ $monster->special_monster == 1? $monster->fr_s_spell_description : '' }}"
                          placeholder="Please input description" name="fr_s_spell_description"
                          data-validation-required-message="This Spell Description is required">
                          <span class="font-italic" style="margin: auto 5px">FR</span>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-12 col-sm-6">
                  <fieldset class="form-group">
                      <label for="basicInputFile">Main Image (card format)</label>
                      <div class="custom-file">
                          @if($monster->special_monster == 1)
                          <input type="text" id="s_main_img_input" class="custom-file-input">
                          <input type="file" name="s_main_image" id="s_main_img_hidden" class="custom-file-input d-none">
                          @else
                          <input type="file" name="s_main_image" class="custom-file-input">
                          @endif
                          <label class="custom-file-label" for="inputGroupFile01">{{ $monster->special_monster == 1? $monster->s_main_image : 'Choose file' }}</label>
                      </div>
                  </fieldset>
                  <div>
                    <label>Basic Stats</label>
                    <div class="d-flex">
                      <div class="form-group">
                        <div class="controls d-flex">
                          <label class="custom-label">CRIT Rate</label>
                          <input type="number" class="form-control w-50" name="s_crit_rate" required placeholder="0"
                            value="{{ $monster->special_monster == 1? $monster->s_crit_rate : 0 }}"  step="0.01" min="0.00"
                            data-validation-required-message="This field is required">
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="controls d-flex">
                          <label class="custom-label">CRIT DMG</label>
                          <input type="number" class="form-control w-50" name="s_crit_dmg" required placeholder="0"
                            value="{{ $monster->special_monster == 1? $monster->s_crit_dmg : 0 }}"  step="0.01" min="0.00"
                            data-validation-required-message="This field is required">
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="controls d-flex">
                          <label class="custom-label">HP</label>
                          <input type="number" class="form-control w-50" name="s_hp" required placeholder="0"
                            value="{{ $monster->special_monster == 1? $monster->s_hp : 0 }}"  step="0.01" min="0.00"
                            data-validation-required-message="This field is required">
                        </div>
                      </div>
                    </div>
                    <div class="d-flex">
                      <div class="form-group">
                        <div class="controls d-flex">
                          <label class="custom-label">ATK</label>
                          <input type="number" class="form-control w-50" name="s_atk" required placeholder="0"
                            value="{{ $monster->special_monster == 1? $monster->s_atk : 0 }}" step="0.01" min="0.00"
                            data-validation-required-message="This field is required">
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="controls d-flex">
                          <label class="custom-label">ACC</label>
                          <input type="number" class="form-control w-50" name="s_acc" required placeholder="0"
                            value="{{ $monster->special_monster == 1? $monster->s_acc : 0 }}" step="0.01" min="0.00"
                            data-validation-required-message="This field is required">
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="controls d-flex">
                          <label class="custom-label">DEF</label>
                          <input type="number" class="form-control w-50" name="s_def" required placeholder="0"
                            value="{{ $monster->special_monster == 1? $monster->s_def : 0 }}" step="0.01" min="0.00"
                            data-validation-required-message="This field is required">
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="controls d-flex">
                          <label class="custom-label">RES</label>
                          <input type="number" class="form-control w-50" name="s_res" required placeholder="0"
                            value="{{ $monster->special_monster == 1? $monster->s_res : 0 }}" step="0.01" min="0.00"
                            data-validation-required-message="This field is required">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="controls">
                      <label>Mana Cost</label>
                      <input type="number" class="form-control" name="s_mana_cost" required placeholder="Mana Cost"
                        value="{{ $monster->special_monster == 1? $monster->s_mana_cost : 0 }}" step="0.01" min="0.00"
                        data-validation-required-message="This field is required">
                    </div>
                  </div>
                </div>  
              </div>

              <div class="divider">
                <div class="divider-text"><i class="feather icon-star"></i></div>
              </div>
              <div class="row mt-1">
                <div class="col-12"><h5 class="mb-1"><i class="feather icon-user mr-25"></i>Skills Stones</h5></div>
                <div class="col-12 col-sm-6">
                  <div class="row">
                    <div class="col-12 col-sm-6">
                      <div class="form-group">
                        <div class="controls">
                          <label>Skill Stone 1 - Name</label>
                          <input type="text" class="form-control mb-6" name="skill_stone1_name" value="{{ $monster->skill_stone1_name }}" required placeholder="Name"
                            data-validation-required-message="This field is required">
                          <span class="font-italic">EN</span>
                        </div>
                      </div>
                    </div>
                    <div class="col-12 col-sm-6">
                      <div class="form-group">
                        <div class="controls">
                          <label></label>
                          <input type="text" class="form-control mb-6" name="fr_skill_stone1_name" value="{{ $monster->fr_skill_stone1_name }}" required placeholder="Name"
                            data-validation-required-message="This field is required">
                          <span class="font-italic">FR</span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <fieldset class="form-group">
                      <label for="basicInputFile">Skill Stone 1 - Icon image</label>
                      <div class="custom-file">
                          <input type="text" id="skill_stone1_img_input" class="custom-file-input">
                          <input type="file" name="skill_stone1_image" id="skill_stone1_img_hidden" class="custom-file-input d-none">
                          <label class="custom-file-label" for="inputGroupFile01">{{ $monster->skill_stone1_image }}</label>
                      </div>
                  </fieldset>
                </div>
                <div class="col-12 col-sm-6">
                  <div class="form-group">
                    <div class="controls">
                      <label>Skill Stone 1 - Description</label>
                      <div class="d-flex">
                        <input type="text" class="form-control"  value="{{ $monster->skill_stone1_description }}"
                          placeholder="Please input description"  name="skill_stone1_description"
                          data-validation-required-message="This field is required">
                          <span class="font-italic" style="margin: auto 5px">EN</span>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="controls">
                      <div class="d-flex">
                        <input type="text" class="form-control" value="{{ $monster->fr_skill_stone1_description }}"
                          placeholder="Please input description"  name="fr_skill_stone1_description"
                          data-validation-required-message="This field is required">
                          <span class="font-italic" style="margin: auto 5px">FR</span>
                      </div>
                    </div>
                  </div>
                </div>
                
                <div style="height:50px;width:100%"></div>
                <div class="col-12 col-sm-6">
                  <div class="row">
                    <div class="col-12 col-sm-6">
                      <div class="form-group">
                        <div class="controls">
                          <label>Skill Stone 2 - Name</label>
                          <input type="text" class="form-control mb-6"  name="skill_stone2_name" value="{{ $monster->skill_stone2_name }}" required placeholder="Name"
                            data-validation-required-message="This field is required">
                          <span class="font-italic">EN</span>
                        </div>
                      </div>
                    </div>
                    <div class="col-12 col-sm-6">
                      <div class="form-group">
                        <div class="controls">
                          <label></label>
                          <input type="text" class="form-control mb-6"  name="fr_skill_stone2_name" value="{{ $monster->fr_skill_stone2_name }}" required placeholder="Name"
                            data-validation-required-message="This field is required">
                          <span class="font-italic">FR</span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <fieldset class="form-group">
                      <label for="basicInputFile">Skill Stone 2 - Icon image</label>
                      <div class="custom-file">
                          <input type="text" id="skill_stone2_img_input" class="custom-file-input">
                          <input type="file" name="skill_stone2_image" id="skill_stone2_img_hidden" class="custom-file-input d-none">
                          <label class="custom-file-label" for="inputGroupFile01">{{ $monster->skill_stone2_image }}</label>
                      </div>
                  </fieldset>
                </div>
                <div class="col-12 col-sm-6">
                  <div class="form-group">
                    <div class="controls">
                      <label>Skill Stone 2 - Description</label>
                      <div class="d-flex">
                        <input type="text" class="form-control" value="{{ $monster->skill_stone2_description }}"
                          placeholder="Please input description" name="skill_stone2_description"
                          data-validation-required-message="This field is required">
                          <span class="font-italic" style="margin: auto 5px">EN</span>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="controls">
                      <div class="d-flex">
                        <input type="text" class="form-control" value="{{ $monster->fr_skill_stone2_description }}"
                          placeholder="Please input description" name="fr_skill_stone2_description"
                          data-validation-required-message="This field is required">
                          <span class="font-italic" style="margin: auto 5px">FR</span>
                      </div>
                    </div>
                  </div>
                </div>

                <div style="height:50px;width:100%"></div>
                <div class="col-12 col-sm-6">
                  <div class="row">
                    <div class="col-12 col-sm-6">
                      <div class="form-group">
                        <div class="controls">
                          <label>Skill Stone 3 - Name</label>
                          <input type="text" class="form-control mb-6" name="skill_stone3_name" value="{{ $monster->skill_stone3_name }}" required placeholder="Name"
                            data-validation-required-message="This field is required">
                          <span class="font-italic">EN</span>
                        </div>
                      </div>
                    </div>
                    <div class="col-12 col-sm-6">
                      <div class="form-group">
                        <div class="controls">
                          <label></label>
                          <input type="text" class="form-control mb-6" name="fr_skill_stone3_name" value="{{ $monster->fr_skill_stone3_name }}" required placeholder="Name"
                            data-validation-required-message="This field is required">
                          <span class="font-italic">FR</span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <fieldset class="form-group">
                      <label for="basicInputFile">Skill Stone 3 - Icon image</label>
                      <div class="custom-file">
                          <input type="text" id="skill_stone3_img_input" class="custom-file-input">
                          <input type="file" name="skill_stone3_image" id="skill_stone3_img_hidden" class="custom-file-input d-none">
                          <label class="custom-file-label" for="inputGroupFile01">{{ $monster->skill_stone3_image }}</label>
                      </div>
                  </fieldset>
                </div>
                <div class="col-12 col-sm-6">
                  <div class="form-group">
                    <div class="controls">
                      <label>Skill Stone 3 - Description</label>
                      <div class="d-flex">
                        <input type="text" class="form-control" value="{{ $monster->skill_stone3_description }}"
                          placeholder="Please input description"  name="skill_stone3_description"
                          data-validation-required-message="This field is required">
                          <span class="font-italic" style="margin: auto 5px">EN</span>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="controls">
                      <div class="d-flex">
                        <input type="text" class="form-control" value="{{ $monster->fr_skill_stone3_description }}"
                          placeholder="Please input description"  name="fr_skill_stone3_description"
                          data-validation-required-message="This field is required">
                          <span class="font-italic" style="margin: auto 5px">FR</span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-12 d-flex flex-sm-row flex-column justify-content-end mt-1">
                  <button type="submit" class="btn btn-primary glow mb-1 mb-sm-0 mr-0 mr-sm-1">Save</button>
                </div>
              </div>
            </form>
            <!-- users edit account form ends -->
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- users edit ends -->
@endsection

@section('page-script')
  <script>
    $(document).ready(function() {
      @if($monster->special_monster == 1)
          $('.special-divider').show();
          $('.special-block').show();
      @else
          $('.special-divider').hide();
          $('.special-block').hide();
          $('.special-block input').attr('required', false)
      @endif

      $("input[name='special_monster']").on('click', function() {
        if($(this).val() == 1) {
          $('.special-divider').show();
          $('.special-block').show();
          $('.special-block input').attr('required', true)
        } else {
          $('.special-divider').hide();
          $('.special-block').hide();
          $('.special-block input').attr('required', false)
        }
      })

      $("#og_img_input").on('click', function(){
        $('#og_img_hidden').click();
      })
      $("#bg_img_input").on('click', function(){
        $('#bg_img_hidden').click();
      })
      $("#icon_img_input").on('click', function(){
        $('#icon_img_hidden').click();
      })
      $("#bg_comp_img_input").on('click', function(){
        $('#bg_comp_img_hidden').click();
      })
      $("#main_img_input").on('click', function(){
        $('#main_img_hidden').click();
      })
      $("#s_main_img_input").on('click', function(){
        $('#s_main_img_hidden').click();
      })
      $("#skill_stone1_img_input").on('click', function(){
        $('#skill_stone1_img_hidden').click();
      })
      $("#skill_stone2_img_input").on('click', function(){
        $('#skill_stone2_img_hidden').click();
      })
      $("#skill_stone3_img_input").on('click', function(){
        $('#skill_stone3_img_hidden').click();
      })
    })
  </script>
@endsection

