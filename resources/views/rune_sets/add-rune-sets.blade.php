@extends('layouts/contentLayoutMaster')

@section('title', 'Add Rune Set')

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
            <form action="{{ route('store-spell') }}" method="POST" enctype="multipart/form-data">
              {{ csrf_field() }}
              <div class="row mt-1">
                <div class="col-12"><h5 class="mb-1"><i class="feather icon-user mr-25"></i>Add a rune set</h5></div>
                <div class="col-12 col-sm-6">
                  <div class="row">
                    <div class="col-12 col-sm-6">
                      <div class="form-group">
                        <div class="controls">
                          <label>Rune Set Name</label>
                          <input type="text" name="rs_name" class="form-control mb-6" required placeholder="Rune Set Name"
                            data-validation-required-message="This Rune Set Name field is required">
                          <span class="font-italic">EN</span>
                        </div>
                      </div>
                    </div>
                    <div class="col-12 col-sm-6">
                      <div class="form-group">
                        <div class="controls">
                          <label></label>
                          <input type="text" name="fr_rs_name" class="form-control mb-6" required placeholder="Rune Set Name"
                            data-validation-required-message="This Rune Set Name field is required">
                          <span class="font-italic">FR</span>
                        </div>
                      </div>
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <div class="controls">
                      <label>Comment</label>
                      <div class="d-flex">
                        <input type="text" name="rs_comment" class="form-control" value=""
                          placeholder="Please input description"
                          data-validation-required-message="This Spell Description field is required">
                          <span class="font-italic" style="margin: auto 5px">EN</span>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="controls">
                      <div class="d-flex">
                        <input type="text" name="fr_rs_comment" class="form-control" value=""
                          placeholder="Please input description"
                          data-validation-required-message="This Spell Description field is required">
                          <span class="font-italic" style="margin: auto 5px">FR</span>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="controls">
                      <label>Comp Position</label>
                      <input type="number" name="rs_comp_position" class="form-control" required placeholder="Position"
                        value="" min="1" max="8"
                        data-validation-required-message="This Mana Cost field is required">
                    </div>
                  </div>
                </div>
                <div class="col-12 col-sm-6">
                  <div class="form-group">
                    <label>Rune Set</label>
                    <ul class="list-unstyled mb-0">
                      @foreach($runes as $rune)
                      <li class="d-inline-block mr-2">
                        <fieldset>
                          <div class="vs-radio-con">
                            <input type="radio" name="rs_rune" value="{{ $rune->r_id }}" required>
                            <span class="vs-radio">
                              <span class="vs-radio--border"></span>
                              <span class="vs-radio--circle"></span>
                            </span>
                            {{ $rune->r_name }}
                          </div>
                        </fieldset>
                      </li>
                      @endforeach
                    </ul>
                  </div>
                  <div class="form-group">
                    <label>Sub-Stats</label>
                    <ul class="list-unstyled mb-0">
                      @foreach($sub_stats as $sub_stat)
                      <li class="d-inline-block mr-2">
                        <fieldset>
                          <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" name="rs_substats[]" value="{{ $sub_stat->sub_id }}" id="customCheck{{$sub_stat->sub_id}}">
                            <label class="custom-control-label" for="customCheck{{ $sub_stat->sub_id }}">{{ $sub_stat->sub_name }}</label>
                          </div>
                        </fieldset>
                      </li>
                      @endforeach
                    </ul>
                  </div>
                  <div class="form-group">
                    <label>Skill Stone</label>
                    <ul class="list-unstyled mb-0">
                      @foreach($skill_stones as $skill_stone)
                      <li class="d-inline-block mr-2">
                        <fieldset>
                          <div class="vs-radio-con">
                            <input type="radio" name="rs_skill_stones" value="{{ $skill_stone->skill_id }}" required>
                            <span class="vs-radio">
                              <span class="vs-radio--border"></span>
                              <span class="vs-radio--circle"></span>
                            </span>
                            {{ $skill_stone->skill_name }}
                          </div>
                        </fieldset>
                      </li>
                      @endforeach
                    </ul>
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

