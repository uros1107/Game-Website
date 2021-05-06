@extends('layouts/contentLayoutMaster')

@section('title', 'Add New Monster')

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
            <form action="{{ route('store-monster') }}" method="POST" enctype="multipart/form-data">
              {{ csrf_field() }}
              <div class="row mt-1">
                <div class="col-12"><h5 class="mb-1"><i class="feather icon-user mr-25"></i>Add a monster</h5></div>
                <div class="col-12 col-sm-6">
                  <div class="row">
                    <div class="col-12 col-sm-6">
                      <div class="form-group">
                        <div class="controls">
                          <label>Monster Name</label>
                          <input type="text" class="form-control mb-6" name="name" required placeholder="Monster Name"
                            data-validation-required-message="This Monster Name field is required">
                          <span class="font-italic">EN</span>
                        </div>
                      </div>
                    </div>
                    <div class="col-12 col-sm-6">
                      <div class="form-group">
                        <div class="controls">
                          <label></label>
                          <input type="text" class="form-control mb-6" name="fr_name" required placeholder="Monster Name"
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
                          <input type="text" class="form-control mb-6" name="second_name" required placeholder="Monster Second Name"
                            data-validation-required-message="This Monster Second Name field is required">
                          <span class="font-italic">EN</span>
                        </div>
                      </div>
                    </div>
                    <div class="col-12 col-sm-6">
                      <div class="form-group">
                        <div class="controls">
                          <label></label>
                          <input type="text" class="form-control mb-6" name="fr_second_name" required placeholder="Monster Second Name"
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
                          <input type="text" class="form-control mb-6" name="spell_name" required placeholder="Spell Name"
                            data-validation-required-message="This Spell Name field is required">
                          <span class="font-italic">EN</span>
                        </div>
                      </div>
                    </div>
                    <div class="col-12 col-sm-6">
                      <div class="form-group">
                        <div class="controls">
                          <label></label>
                          <input type="text" class="form-control mb-6" name="fr_spell_name" required placeholder="Spell Name"
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
                        <input type="text" class="form-control" value="" name="spell_description"
                          placeholder="Please input description"
                          data-validation-required-message="This Spell Description field is required">
                          <span class="font-italic" style="margin: auto 5px">EN</span>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="controls">
                      <div class="d-flex">
                        <input type="text" class="form-control" value="" name="fr_spell_description"
                          placeholder="Please input description"
                          data-validation-required-message="This Spell Description field is required">
                          <span class="font-italic" style="margin: auto 5px">FR</span>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="controls">
                      <label>Mana Cost</label>
                      <input type="number" class="form-control" required placeholder="Mana Cost"
                        value="0" name="mana_cost" step="0.01" min="0.00"
                        data-validation-required-message="This Mana Cost field is required">
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label>Role</label>
                    <ul class="list-unstyled mb-0">
                      <li class="d-inline-block mr-2">
                        <fieldset>
                          <div class="vs-radio-con">
                            <input type="radio" name="role" checked value="1">
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
                            <input type="radio" name="role" value="2">
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
                            <input type="radio" name="role" value="3">
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
                            <input type="radio" name="role" value="4">
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
                            <input type="radio" name="rarity" checked value="1">
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
                            <input type="radio" name="rarity" value="2">
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
                            <input type="radio" name="rarity" value="3">
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
                            <input type="radio" name="rarity" value="4">
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
                            <input type="radio" name="element" checked value="1">
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
                            <input type="radio" name="element" value="2">
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
                            <input type="radio" name="element" value="3">
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
                            <input type="radio" name="element" value="4">
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
                            <input type="radio" name="element" value="5">
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
                            value="0" step="0.01" min="0.00"
                            data-validation-required-message="This field is required">
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="controls d-flex">
                          <label class="custom-label">CRIT DMG</label>
                          <input type="number" name="crit_dmg" class="form-control w-50" required placeholder="0"
                            value="0" step="0.01" min="0.00"
                            data-validation-required-message="This field is required">
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="controls d-flex">
                          <label class="custom-label">HP</label>
                          <input type="number" name="hp" class="form-control w-50" required placeholder="0"
                            value="0" step="0.01" min="0.00"
                            data-validation-required-message="This field is required">
                        </div>
                      </div>
                    </div>
                    <div class="d-flex">
                      <div class="form-group">
                        <div class="controls d-flex">
                          <label class="custom-label">ATK</label>
                          <input type="number" name="atk" class="form-control w-50" required placeholder="0"
                            value="0" step="0.01" min="0.00"
                            data-validation-required-message="This field is required">
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="controls d-flex">
                          <label class="custom-label">ACC</label>
                          <input type="number" name="acc" class="form-control w-50" required placeholder="0"
                            value="0" step="0.01" min="0.00"
                            data-validation-required-message="This field is required">
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="controls d-flex">
                          <label class="custom-label">DEF</label>
                          <input type="number" name="def" class="form-control w-50" required placeholder="0"
                            value="0" step="0.01" min="0.00"
                            data-validation-required-message="This field is required">
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="controls d-flex">
                          <label class="custom-label">RES</label>
                          <input type="number" name="res" class="form-control w-50" required placeholder="0"
                            value="0" step="0.01" min="0.00"
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
                        <input type="text" class="form-control" value=""
                          placeholder="Please input description" name="meta_title"
                          data-validation-required-message="This Meta Title is required">
                          <span class="font-italic" style="margin: auto 5px">EN</span>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="controls">
                      <div class="d-flex">
                        <input type="text" class="form-control" value=""
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
                        <input type="text" class="form-control" value=""
                          placeholder="Please input description" name="meta_description"
                          data-validation-required-message="This Meta Description is required">
                          <span class="font-italic" style="margin: auto 5px">EN</span>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="controls">
                      <div class="d-flex">
                        <input type="text" class="form-control" value=""
                          placeholder="Please input description" name="fr_meta_description"
                          data-validation-required-message="This Meta Description is required">
                          <span class="font-italic" style="margin: auto 5px">FR</span>
                      </div>
                    </div>
                  </div>
                  <fieldset class="form-group">
                      <label for="basicInputFile">OG Image</label>
                      <div class="custom-file">
                          <input type="file" name="og_image" class="custom-file-input" required>
                          <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                      </div>
                  </fieldset>
                  <fieldset class="form-group">
                      <label for="basicInputFile">Main Image (card format)</label>
                      <div class="custom-file">
                          <input type="file" name="main_image" class="custom-file-input" required>
                          <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                      </div>
                  </fieldset>
                  <fieldset class="form-group">
                      <label for="basicInputFile">BG Image</label>
                      <div class="custom-file">
                          <input type="file" name="bg_image" class="custom-file-input" required>
                          <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                      </div>
                  </fieldset>
                  <fieldset class="form-group">
                      <label for="basicInputFile">BG Comp Image</label>
                      <div class="custom-file">
                          <input type="file" name="bg_comp_image" class="custom-file-input" required>
                          <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                      </div>
                  </fieldset>
                  <fieldset class="form-group">
                      <label for="basicInputFile">Icon/Thumb Image</label>
                      <div class="custom-file">
                          <input type="file" name="icon_image" class="custom-file-input" required>
                          <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                      </div>
                  </fieldset>
                  
                  <div class="form-group">
                    <label>Is a special monster?</label>
                    <ul class="list-unstyled mb-0">
                      <li class="d-inline-block mr-2">
                        <fieldset>
                          <div class="vs-radio-con">
                            <input type="radio" name="special_monster" checked value="1">
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
                            <input type="radio" name="special_monster" value="0">
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
                          <input type="text" class="form-control mb-6" name="s_name" required placeholder="Monster Name">
                          <span class="font-italic">EN</span>
                        </div>
                      </div>
                    </div>
                    <div class="col-12 col-sm-6">
                      <div class="form-group">
                        <div class="controls">
                          <label></label>
                          <input type="text" class="form-control mb-6" name="fr_s_name" required placeholder="Monster Name"
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
                          <input type="text" class="form-control mb-6" name="s_second_name" required placeholder="Monster Second Name"
                            data-validation-required-message="This Monster Second Name field is required">
                          <span class="font-italic">EN</span>
                        </div>
                      </div>
                    </div>
                    <div class="col-12 col-sm-6">
                      <div class="form-group">
                        <div class="controls">
                          <label></label>
                          <input type="text" class="form-control mb-6" name="fr_s_second_name" required placeholder="Monster Second Name"
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
                          <input type="text" class="form-control mb-6" name="s_spell_name" required placeholder="Spell Name"
                            data-validation-required-message="This Spell Name field is required">
                          <span class="font-italic">EN</span>
                        </div>
                      </div>
                    </div>
                    <div class="col-12 col-sm-6">
                      <div class="form-group">
                        <div class="controls">
                          <label></label>
                          <input type="text" class="form-control mb-6" name="fr_s_spell_name" required placeholder="Spell Name"
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
                        <input type="text" class="form-control" value=""
                          placeholder="Please input description" name="s_spell_description"
                          data-validation-required-message="This Spell Description is required">
                          <span class="font-italic" style="margin: auto 5px">EN</span>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="controls">
                      <div class="d-flex">
                        <input type="text" class="form-control" value=""
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
                          <input type="file" class="custom-file-input" name="s_main_image" id="inputGroupFile01" required>
                          <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                      </div>
                  </fieldset>
                  <div>
                    <label>Basic Stats</label>
                    <div class="d-flex">
                      <div class="form-group">
                        <div class="controls d-flex">
                          <label class="custom-label">CRIT Rate</label>
                          <input type="number" class="form-control w-50" name="s_crit_rate" required placeholder="0"
                            value="0" step="0.01" min="0.00"
                            data-validation-required-message="This field is required">
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="controls d-flex">
                          <label class="custom-label">CRIT DMG</label>
                          <input type="number" class="form-control w-50" name="s_crit_dmg" required placeholder="0"
                            value="0" step="0.01" min="0.00"
                            data-validation-required-message="This field is required">
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="controls d-flex">
                          <label class="custom-label">HP</label>
                          <input type="number" class="form-control w-50" name="s_hp" required placeholder="0"
                            value="0" step="0.01" min="0.00"
                            data-validation-required-message="This field is required">
                        </div>
                      </div>
                    </div>
                    <div class="d-flex">
                      <div class="form-group">
                        <div class="controls d-flex">
                          <label class="custom-label">ATK</label>
                          <input type="number" class="form-control w-50" name="s_atk" required placeholder="0"
                            value="0" step="0.01" min="0.00"
                            data-validation-required-message="This field is required">
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="controls d-flex">
                          <label class="custom-label">ACC</label>
                          <input type="number" class="form-control w-50" name="s_acc" required placeholder="0"
                            value="0" step="0.01" min="0.00"
                            data-validation-required-message="This field is required">
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="controls d-flex">
                          <label class="custom-label">DEF</label>
                          <input type="number" class="form-control w-50" name="s_def" required placeholder="0"
                            value="0" step="0.01" min="0.00"
                            data-validation-required-message="This field is required">
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="controls d-flex">
                          <label class="custom-label">RES</label>
                          <input type="number" class="form-control w-50" name="s_res" required placeholder="0"
                            value="0" step="0.01" min="0.00"
                            data-validation-required-message="This field is required">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="controls">
                      <label>Mana Cost</label>
                      <input type="number" class="form-control" name="s_mana_cost" required placeholder="Mana Cost"
                        value="0" step="0.01" min="0.00"
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
                          <input type="text" class="form-control mb-6" name="skill_stone1_name" required placeholder="Name"
                            data-validation-required-message="This field is required">
                          <span class="font-italic">EN</span>
                        </div>
                      </div>
                    </div>
                    <div class="col-12 col-sm-6">
                      <div class="form-group">
                        <div class="controls">
                          <label></label>
                          <input type="text" class="form-control mb-6" name="fr_skill_stone1_name" required placeholder="Name"
                            data-validation-required-message="This field is required">
                          <span class="font-italic">FR</span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <fieldset class="form-group">
                      <label for="basicInputFile">Skill Stone 1 - Icon image</label>
                      <div class="custom-file">
                          <input type="file" class="custom-file-input"  name="skill_stone1_image" id="inputGroupFile01" required>
                          <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                      </div>
                  </fieldset>
                </div>
                <div class="col-12 col-sm-6">
                  <div class="form-group">
                    <div class="controls">
                      <label>Skill Stone 1 - Description</label>
                      <div class="d-flex">
                        <input type="text" class="form-control" value=""
                          placeholder="Please input description"  name="skill_stone1_description"
                          data-validation-required-message="This field is required">
                          <span class="font-italic" style="margin: auto 5px">EN</span>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="controls">
                      <div class="d-flex">
                        <input type="text" class="form-control" value=""
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
                          <input type="text" class="form-control mb-6"  name="skill_stone2_name" required placeholder="Name"
                            data-validation-required-message="This field is required">
                          <span class="font-italic">EN</span>
                        </div>
                      </div>
                    </div>
                    <div class="col-12 col-sm-6">
                      <div class="form-group">
                        <div class="controls">
                          <label></label>
                          <input type="text" class="form-control mb-6"  name="fr_skill_stone2_name" required placeholder="Name"
                            data-validation-required-message="This field is required">
                          <span class="font-italic">FR</span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <fieldset class="form-group">
                      <label for="basicInputFile">Skill Stone 2 - Icon image</label>
                      <div class="custom-file">
                          <input type="file" class="custom-file-input" name="skill_stone2_image" id="inputGroupFile01" required>
                          <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                      </div>
                  </fieldset>
                </div>
                <div class="col-12 col-sm-6">
                  <div class="form-group">
                    <div class="controls">
                      <label>Skill Stone 2 - Description</label>
                      <div class="d-flex">
                        <input type="text" class="form-control" value=""
                          placeholder="Please input description" name="skill_stone2_description"
                          data-validation-required-message="This field is required">
                          <span class="font-italic" style="margin: auto 5px">EN</span>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="controls">
                      <div class="d-flex">
                        <input type="text" class="form-control" value=""
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
                          <input type="text" class="form-control mb-6" name="skill_stone3_name" required placeholder="Name"
                            data-validation-required-message="This field is required">
                          <span class="font-italic">EN</span>
                        </div>
                      </div>
                    </div>
                    <div class="col-12 col-sm-6">
                      <div class="form-group">
                        <div class="controls">
                          <label></label>
                          <input type="text" class="form-control mb-6" name="fr_skill_stone3_name" required placeholder="Name"
                            data-validation-required-message="This field is required">
                          <span class="font-italic">FR</span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <fieldset class="form-group">
                      <label for="basicInputFile">Skill Stone 3 - Icon image</label>
                      <div class="custom-file">
                          <input type="file" class="custom-file-input" name="skill_stone3_image" id="inputGroupFile01" required>
                          <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                      </div>
                  </fieldset>
                </div>
                <div class="col-12 col-sm-6">
                  <div class="form-group">
                    <div class="controls">
                      <label>Skill Stone 3 - Description</label>
                      <div class="d-flex">
                        <input type="text" class="form-control" value=""
                          placeholder="Please input description"  name="skill_stone3_description"
                          data-validation-required-message="This field is required">
                          <span class="font-italic" style="margin: auto 5px">EN</span>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="controls">
                      <div class="d-flex">
                        <input type="text" class="form-control" value=""
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
    })
  </script>
@endsection

