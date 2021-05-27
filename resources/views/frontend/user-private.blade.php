@extends('layouts.frontend.layout')

@section('head')
<link rel="alternate" hreflang="en" href="{{ url('en/user-private/'.Auth::user()->slug) }}" />
<link rel="alternate" hreflang="fr" href="{{ url('fr/user-private/'.Auth::user()->slug) }}" />
<link rel="alternate" hreflang="x-default" href="{{ url('en/user-private/'.Auth::user()->slug) }}" />
@endsection

@section('styles')

@endsection

@section('content')
    <!-- Content Start-->
    <div class="main-content user_page_private">
        
        <!-- Body Content -->
        <div class="page-space">
            <!--  -->
            <div class="text-center ragdoll-top-sec page-title-section mt-3 mt-md-0">
                <h1 class="page-title">@lang('user-private.personal')</h1>
                <img src="{{ asset('assets/image/add-run-set/separator-title.png') }}" alt="">
                <p class="page-title-subtext">@lang('user-private.descript')</p>
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
                        <p>@lang('user-private.description1')</p>
                    </div>
                    <div class="form_field">
                        <input type="email" name="email" placeholder="@lang('user-private.email')" value="{{ Auth::user()->email }}" />
                    </div>
                    @if ($errors->has('email'))
                        <span class="help-block pl-3 mb-4 d-block" style="color:#d61919">
                            <p>{{ $errors->first('email') }}</p>
                        </span>
                    @endif
                    <div class="form_field">
                        <input type="password" name="password" placeholder="@lang('user-private.password')" value="" />
                    </div>
                    <div class="form_field">
                        <input type="text" name="game_name" placeholder="@lang('user-private.game_name')" value="{{ Auth::user()->game_name }}" />
                    </div>
                    <div class="form_field">
                        <input type="text" name="guild_name" placeholder="@lang('user-private.guild_name')" value="{{ Auth::user()->guild_name }}" />
                    </div>
                    <div class="form_field_btn text-center">
                        <input type="submit" value="@lang('user-private.save')" class="common-btn" />
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