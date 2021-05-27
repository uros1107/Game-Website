@extends('layouts/fullLayoutMaster')

@section('title', 'Login Page')

@section('page-style')
        {{-- Page Css files --}}
        <link rel="stylesheet" href="{{ asset(mix('css/pages/authentication.css')) }}">
        <style>
          .main-color {
            color: #B9BDDC;
          }
        </style>
@endsection

@section('content')
<section class="row flexbox-container">
  <div class="col-xl-8 col-11 d-flex justify-content-center">
      <div class="card bg-authentication rounded-0 mb-0">
          <div class="row m-0">
              <div class="col-lg-12 col-12 p-0">
                  <div class="card rounded-0 mb-0 px-2" style="background: #202039">
                      <div class="card-header pb-1">
                          <div class="card-title">
                              <h4 class="mb-0 text-white">Login</h4>
                          </div>
                      </div>
                      <p class="px-2 main-color">Welcome back, please login to your account.</p>
                      <div class="card-content">
                          <div class="card-body pt-1">
                            <form method="POST" action="{{ route('admin.login.submit') }}">
                              @csrf
                              <fieldset class="form-label-group form-group position-relative has-icon-left">

                                  <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="E-Mail Address" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                  <div class="form-control-position">
                                      <i class="feather icon-user"></i>
                                  </div>
                                  <label for="email">E-Mail Address</label>
                                  @error('email')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                  @enderror
                              </fieldset>

                              <fieldset class="form-label-group position-relative has-icon-left">

                                  <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password"required autocomplete="current-password">

                                  <div class="form-control-position">
                                      <i class="feather icon-lock"></i>
                                  </div>
                                  <label for="password">Password</label>
                                  @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                  @enderror
                              </fieldset>
                              <div class="form-group d-flex justify-content-between align-items-center">
                                  <div class="text-left">
                                      <fieldset class="checkbox">
                                        <div class="vs-checkbox-con vs-checkbox-primary">
                                          <input type="checkbox" {{ old('remember') ? 'checked' : '' }}>
                                          <span class="vs-checkbox">
                                            <span class="vs-checkbox--check">
                                              <i class="vs-icon feather icon-check"></i>
                                            </span>
                                          </span>
                                          <span class="main-color">Remember me</span>
                                        </div>
                                      </fieldset>
                                  </div>
                                  @if (Route::has('password.request'))
                                    <div class="text-right"><a class="card-link" href="{{ route('password.request') }}">
                                        Forgot Password?
                                      </a></div>
                                  @endif

                              </div>
                              <button type="submit" class="btn btn-primary float-right btn-inline" style="width: 100%;margin-bottom:22px;background:#5a52ad">Login</button>
                            </form>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</section>
@endsection
