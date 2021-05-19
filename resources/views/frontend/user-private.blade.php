@extends('layouts.frontend.layout')

@section('styles')

@endsection

@section('content')
    <!-- Content Start-->
    <div class="main-content user_page_private">
        
        <!-- Body Content -->
        <div class="page-space">
            <!--  -->
            <div class="text-center ragdoll-top-sec page-title-section mt-3 mt-md-0">
                <h1 class="page-title">Personal Info</h1>
                <img src="assets/image/add-run-set/separator-title.png" alt="">
                <p class="page-title-subtext">You can edit your profile information from this page.</p>
            </div>
            
            @if(Session::has('success'))
            <div class="text-center mt-3">
                <h1 class="page-title text-white" style="font-size: 20px">{{ Session::get('success') }}</h1>
            </div>
            @endif
            <p></p>
            <form class="personal_form" action="{{ route('update') }}" method="POST">
                {{ csrf_field() }}
                <div class="personal_info">
                    <div class="form_field form_field_group">
                        <input type="text" value="{{ Auth::user()->name }}" readonly/>
                        <p>Kindly note that your profile name is not editable once the profil has been created.</p>
                    </div>
                    <div class="form_field">
                        <input type="email" name="email" placeholder="Email*" value="{{ Auth::user()->email }}" />
                    </div>
                    @if ($errors->has('email'))
                        <span class="help-block pl-3 mb-4 d-block" style="color:#d61919">
                            <p>{{ $errors->first('email') }}</p>
                        </span>
                    @endif
                    <div class="form_field">
                        <input type="password" name="password" placeholder="Password*" value="" />
                    </div>
                    <div class="form_field">
                        <input type="text" name="game_name" placeholder="Lost Centuria in-game name" value="{{ Auth::user()->game_name }}" />
                    </div>
                    <div class="form_field">
                        <input type="text" name="guild_name" placeholder="Guild name" value="{{ Auth::user()->guild_name }}" />
                    </div>
                    <div class="form_field_btn text-center">
                        <input type="submit" value="Save" class="common-btn" />
                    </div>
                </div>
            </form>
            <!--  -->

        </div>
        <!-- Body Content Close -->
    </div>
    <!-- Content Start-->
@endsection

@section('scripts')

@endsection