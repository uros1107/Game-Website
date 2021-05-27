@extends('layouts/contentLayoutMaster')

@section('title', 'Edit User Page')

@section('vendor-style')
        {{-- Page Css files --}}
        <link rel="stylesheet" href="{{ asset(mix('vendors/css/forms/select/select2.min.css')) }}">
        <link rel="stylesheet" href="{{ asset(mix('vendors/css/pickers/pickadate/pickadate.css')) }}">
        <link rel="stylesheet" href="{{ asset(mix('vendors/css/extensions/toastr.css')) }}">
@endsection

@section('page-style')
        {{-- Page Css files --}}
        <link rel="stylesheet" href="{{ asset(mix('css/plugins/forms/validation/form-validation.css')) }}">
        <link rel="stylesheet" href="{{ asset(mix('css/pages/app-user.css')) }}">
        <link rel="stylesheet" href="{{ asset(mix('css/plugins/extensions/toastr.css')) }}">
        
@endsection

@section('content')
<!-- users edit start -->
<section class="users-edit">
  <div class="card">
    <div class="card-content">
      <div class="card-body">
        <ul class="nav nav-tabs mb-3" role="tablist">
          <li class="nav-item">
            <a class="nav-link d-flex align-items-center active" id="account-tab" data-toggle="tab" href="#account"
              aria-controls="account" role="tab" aria-selected="true">
              <i class="feather icon-user mr-25"></i><span class="d-none d-sm-block">Account</span>
            </a>
          </li>
          <!-- <li class="nav-item">
            <a class="nav-link d-flex align-items-center" id="information-tab" data-toggle="tab" href="#information"
              aria-controls="information" role="tab" aria-selected="false">
              <i class="feather icon-info mr-25"></i><span class="d-none d-sm-block">Information</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link d-flex align-items-center" id="social-tab" data-toggle="tab" href="#social"
              aria-controls="social" role="tab" aria-selected="false">
              <i class="feather icon-share-2 mr-25"></i><span class="d-none d-sm-block">Social</span>
            </a>
          </li> -->
        </ul>
        <div class="tab-content">
          <div class="tab-pane active" id="account" aria-labelledby="account-tab" role="tabpanel">
            <!-- users edit account form start -->
            <form novalidate id="account">
              <div class="row">
                <div class="col-12 col-sm-6">
                  <input type="hidden" value="{{ $user->id }}" name="id">
                  <div class="form-group">
                    <div class="controls">
                      <label>Name</label>
                      <input type="text" class="form-control" name="name" placeholder="Name" value="{{$user->name}}" required
                        data-validation-required-message="This name field is required">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="controls">
                      <label>E-mail</label>
                      <input type="email" class="form-control" name="email" placeholder="Email" value="{{$user->email}}"
                        required data-validation-required-message="This email field is required">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="controls">
                      <label>Password</label>
                      <input type="password" class="form-control" placeholder="Password">
                    </div>
                    <input type="hidden" name="password" id="password">
                  </div>
                  <div class="form-group">
                    <div class="controls">
                      <label>Game Name</label>
                      <input type="text" class="form-control" name="game_name" placeholder="Game Name" value="{{$user->game_name}}" required
                        data-validation-required-message="This name field is required">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="controls">
                      <label>Guild Name</label>
                      <input type="text" class="form-control" name="guild_name" placeholder="Guild Name" value="{{$user->guild_name}}" required
                        data-validation-required-message="This name field is required">
                    </div>
                  </div>
                </div>
                <div class="col-12 col-sm-6">

                  <div class="form-group">
                    <label>Verified</label>
                    <select class="form-control" name="verified">
                      <option value="1"  {{ $user->verified == 1  ? 'selected' : '' }}>Verified</option>
                      <option value="0"  {{ $user->verified == 0  ? 'selected' : '' }}>Unverified</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Role</label>
                    <select class="form-control" name="role">
                      <option value="1" {{ $user->role == 1  ? 'selected' : '' }}>Admin</option>
                      <option value="0" {{ $user->role == 0  ? 'selected' : '' }}>User</option>
                    </select>
                  </div>
                </div>
                <div class="col-12 d-flex flex-sm-row flex-column justify-content-end mt-1">
                  <button type="submit" class="btn btn-primary glow mb-1 mb-sm-0 mr-0 mr-sm-1">Save
                    Changes</button>
                </div>
              </div>
            </form>
            <!-- users edit account form ends -->
          </div>
          <div class="tab-pane" id="information" aria-labelledby="information-tab" role="tabpanel">
            <!-- users edit Info form start -->
            <form novalidate id="information">
              <div class="row mt-1">
                <div class="col-12 col-sm-6">
                  <h5 class="mb-1"><i class="feather icon-user mr-25"></i>Personal Information</h5>
                  <div class="row">
                    <div class="col-12">
                      <div class="form-group">
                        <div class="controls">
                          <label>Birth date</label>
                          <input type="text" class="form-control birthdate-picker" name="birthday" value="{{isset($user_info->birthday)?$user->birthday:''}}" required placeholder="Birth date"
                            data-validation-required-message="This birthdate field is required">
                        </div>
                      </div>
                    </div>
                  </div>
                  <input type="hidden" value="{{ $user->id }}" name="user_id">
                  <div class="form-group">
                    <div class="controls">
                      <label>Mobile</label>
                      <input type="text" class="form-control" name="phone_number" value="{{isset($user_info->phone_number)?$user_info->phone_number:''}}"
                        placeholder="Mobile number here..."
                        data-validation-required-message="This mobile number is required">
                    </div>
                  </div>

                  <div class="form-group">
                    <label>Gender</label>
                    <ul class="list-unstyled mb-0">
                      <li class="d-inline-block mr-2">
                        <fieldset>
                          <div class="vs-radio-con">
                            <input type="radio" name="gender" checked value="0">
                            <span class="vs-radio">
                              <span class="vs-radio--border"></span>
                              <span class="vs-radio--circle"></span>
                            </span>
                            Male
                          </div>
                        </fieldset>
                      </li>
                      <li class="d-inline-block mr-2">
                        <fieldset>
                          <div class="vs-radio-con">
                            <input type="radio" name="gender" value="1">
                            <span class="vs-radio">
                              <span class="vs-radio--border"></span>
                              <span class="vs-radio--circle"></span>
                            </span>
                            Female
                          </div>
                        </fieldset>
                      </li>

                    </ul>
                  </div>

                </div>
                <div class="col-12 col-sm-6">
                  <h5 class="mb-1 mt-2 mt-sm-0"><i class="feather icon-map-pin mr-25"></i>Address</h5>
                  <div class="form-group">
                    <div class="controls">
                      <label>Address Line 1</label>
                      <input type="text" class="form-control" name="address" value="{{isset($user_info->address)?$user_info->address:''}}" required
                        placeholder="Address Line 1" data-validation-required-message="This Address field is required">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="controls">
                      <label>Postcode</label>
                      <input type="text" class="form-control" required placeholder="postcode" name="post_code" value="{{isset($user_info->post_code)?$user_info->post_code:''}}"
                        data-validation-required-message="This Postcode field is required">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="controls">
                      <label>City</label>
                      <input type="text" class="form-control" required name="city" value="{{isset($user_info->city)?$user_info->city:''}}"
                        data-validation-required-message="This Time Zone field is required">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="controls">
                      <label>State</label>
                      <input type="text" class="form-control" required name="state" value="{{isset($user_info->state)?$user_info->state:''}}"
                        data-validation-required-message="This Time Zone field is required">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="controls">
                      <label>Country</label>
                      <input type="text" class="form-control" required name="country" value="{{isset($user_info->country)?$user_info->country:''}}"
                        data-validation-required-message="This Time Zone field is required">
                    </div>
                  </div>
                </div>
                <div class="col-12 d-flex flex-sm-row flex-column justify-content-end mt-1">
                  <button type="submit" class="btn btn-primary glow mb-1 mb-sm-0 mr-0 mr-sm-1">Save
                    Changes</button>
                </div>
              </div>
            </form>
            <!-- users edit Info form ends -->
          </div>
          <div class="tab-pane" id="social" aria-labelledby="social-tab" role="tabpanel">
            <!-- users edit socail form start -->
            <form novalidate id="social">
              <div class="row">
                <div class="col-12 col-sm-6">
                <input type="hidden" value="{{ $user->id }}" name="user_id">
                  <fieldset>
                    <label>Twitter</label>
                    <div class="input-group mb-75">
                      <div class="input-group-prepend">
                        <span class="input-group-text feather icon-twitter" id="basic-addon3"></span>
                      </div>
                      <input type="text" class="form-control" name="twitter" value="{{ isset($user_info->twitter)?$user_info->twitter:'' }}"
                        placeholder="https://www.twitter.com/" aria-describedby="basic-addon3">
                    </div>

                    <label>Facebook</label>
                    <div class="input-group mb-75">
                      <div class="input-group-prepend">
                        <span class="input-group-text feather icon-facebook" id="basic-addon4"></span>
                      </div>
                      <input type="text" class="form-control" name="facebook" value="{{ isset($user_info->facebook)?$user_info->facebook:'' }}"
                        placeholder="https://www.facebook.com/" aria-describedby="basic-addon4">
                    </div>
                    <label>Instagram</label>
                    <div class="input-group mb-75">
                      <div class="input-group-prepend">
                        <span class="input-group-text feather icon-instagram" id="basic-addon5"></span>
                      </div>
                      <input type="text" class="form-control" name="instagram" value="{{ isset($user_info->instagram)?$user_info->instagram:'' }}"
                        placeholder="https://www.instagram.com/" aria-describedby="basic-addon5">
                    </div>
                  </fieldset>
                </div>
                <div class="col-12 d-flex flex-sm-row flex-column justify-content-end mt-1">
                  <button type="submit" class="btn btn-primary glow mb-1 mb-sm-0 mr-0 mr-sm-1">Save
                    Changes</button>
                  <!-- <button type="reset" class="btn btn-outline-warning">Reset</button> -->
                </div>
              </div>
            </form>
            <!-- users edit socail form ends -->
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- users edit ends -->
@endsection

@section('vendor-script')
  {{-- Vendor js files --}}
  <script src="{{ asset(mix('vendors/js/forms/select/select2.full.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/forms/validation/jqBootstrapValidation.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/pickers/pickadate/picker.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/pickers/pickadate/picker.date.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/extensions/toastr.min.js')) }}"></script>
@endsection

@section('page-script')
  {{-- Page js files --}}
  <script src="{{ asset(mix('js/scripts/pages/app-user.js')) }}"></script>
  <script src="{{ asset(mix('js/scripts/navs/navs.js')) }}"></script>
  <script src="{{ asset(mix('js/scripts/extensions/toastr.js')) }}"></script>

  <script>
    $(document).ready(function() {
      $(document).on('change', "input[type='password']", function() {
        $('#password').val($(this).val());
      });
    });
  </script>
@endsection

