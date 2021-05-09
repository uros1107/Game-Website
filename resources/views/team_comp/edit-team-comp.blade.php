@extends('layouts/contentLayoutMaster')

@section('title', 'Validate a Comp')

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
            <form action="{{ route('update-team-comp') }}" method="POST" enctype="multipart/form-data">
              {{ csrf_field() }}
              <input type="hidden" name="c_id" value="{{ $team_comp->c_id }}">
              <input type="hidden" name="c_verify" value="1">
              <div class="row mt-1">
                <!-- <div class="col-12"><h5 class="mb-1"><i class="feather icon-user mr-25"></i>Add a rune set</h5></div> -->
                <div class="col-12 col-sm-6">
                  <div class="row">
                    <div class="col-12 col-sm-6">
                      <div class="form-group">
                        <div class="controls">
                          <label>Comp Title</label>
                          <input type="text" name="c_name" class="form-control mb-6" required placeholder="Comp Title" value="{{ $team_comp->c_name }}"
                            data-validation-required-message="This Rune Set Name field is required">
                          <span class="font-italic">EN</span>
                        </div>
                      </div>
                    </div>
                    <div class="col-12 col-sm-6">
                      <div class="form-group">
                        <div class="controls">
                          <label></label>
                          <input type="text" name="c_fr_name" class="form-control mb-6" required placeholder="Comp Title" value="{{ $team_comp->c_fr_name }}"
                            data-validation-required-message="This Rune Set Name field is required">
                          <span class="font-italic">FR</span>
                        </div>
                      </div>
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <div class="controls">
                      <label>General Info</label>
                      <div class="d-flex">
                        <input type="text" name="c_general_info" class="form-control" value="{{ $team_comp->c_general_info }}"
                          placeholder="Please input description"
                          data-validation-required-message="This Spell Description field is required">
                          <span class="font-italic" style="margin: auto 5px">EN</span>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="controls">
                      <div class="d-flex">
                        <input type="text" name="c_fr_general_info" class="form-control" value="{{ $team_comp->c_fr_general_info }}"
                          placeholder="Please input description"
                          data-validation-required-message="This Spell Description field is required">
                          <span class="font-italic" style="margin: auto 5px">FR</span>
                      </div>
                    </div>
                  </div>

                  @php
                    $user = DB::table('users')->where('id', $team_comp->c_sent_by_user)->first();
                  @endphp
                  <div class="form-group">
                    <div class="controls">
                      <label>Sent by User</label>
                      <input type="text" class="form-control" required placeholder="User name"
                        value="{{ $user->name }}" disabled
                        data-validation-required-message="This Mana Cost field is required">
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="controls">
                      <label>Publication Date</label>
                      <input type="text" class="form-control" required placeholder="Date"
                        value="{{ $team_comp->created_at }}" disabled
                        data-validation-required-message="This Mana Cost field is required">
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-12 col-sm-6">
                      <div class="form-group">
                        <div class="controls">
                          <label>Likes</label>
                          <input type="text" name="c_likes" class="form-control mb-6" required placeholder="Comp Title" value="{{ $team_comp->c_likes }}"
                            data-validation-required-message="This Rune Set Name field is required">
                        </div>
                      </div>
                    </div>
                    <div class="col-12 col-sm-6">
                      <div class="form-group">
                        <div class="controls">
                          <label>Dislikes</label>
                          <input type="text" name="c_dislikes" class="form-control mb-6" required placeholder="Comp Title" value="{{ $team_comp->c_dislikes }}"
                            data-validation-required-message="This Rune Set Name field is required">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-12 col-sm-6">
                  <div class="row">
                    @php
                      $positions = json_decode($team_comp->c_position);
                      $monsters = DB::table('monsters')->get();
                    @endphp
                    @for($i=1; $i<=8; $i++)
                    <div class="col-12 col-sm-6">
                      <div class="form-group">
                        <label>Position {{$i}}</label>
                        <select class="form-control" name="c_position[]" required>
                          @foreach($monsters as $monster)
                          <option value="{{$monster->id}}" {{ $positions[$i-1] == $monster->id  ? 'selected' : '' }}>{{ $monster->name }}</option>
                          @endforeach
                        </select>
                      </div>
                    </div>
                    @endfor
                  </div>

                  <div class="row mt-3">
                    @php
                      $c_spells = json_decode($team_comp->c_spell);
                      $spells = DB::table('spells')->get();
                    @endphp
                    @for($i=1; $i<=3; $i++)
                    <div class="col-12 col-sm-6">
                      <div class="form-group">
                        <label>Spell {{$i}}</label>
                        <select class="form-control" name="c_spell[]" required>
                          @foreach($spells as $spell)
                          <option value="{{$spell->id}}" {{ $c_spells[$i-1] == $spell->id  ? 'selected' : '' }}>{{ $spell->name }}</option>
                          @endforeach
                        </select>
                      </div>
                    </div>
                    @endfor
                  </div>
                </div>
                <div class="col-12 d-flex flex-sm-row flex-column justify-content-end mt-1">
                  <button type="submit" class="btn btn-primary glow mb-1 mb-sm-0 mr-0 mr-sm-1">Validate</button>
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



