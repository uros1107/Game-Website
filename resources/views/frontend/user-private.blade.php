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
            
            <form class="personal_form">
                <div class="personal_info">
                    <div class="form_field form_field_group">
                        <input type="text" value="Hakio" readonly/>
                        <p>Kindly note that your profile name is not editable once the profil has been created.</p>
                    </div>
                    <div class="form_field">
                        <input type="email" name="email" placeholder="Email*" />
                    </div>
                    <div class="form_field">
                        <input type="password" name="password" placeholder="Password*" />
                    </div>
                    <div class="form_field">
                        <input type="text" name="in-game-name" placeholder="Lost Centuria in-game name" />
                    </div>
                    <div class="form_field">
                        <input type="text" name="Guild-name" placeholder="Guild name" />
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