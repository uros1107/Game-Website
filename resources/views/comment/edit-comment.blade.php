@extends('layouts/contentLayoutMaster')

@section('title', 'View Comment')

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
            <form action="{{ route('update-comment') }}" method="POST" enctype="multipart/form-data">
              {{ csrf_field() }}
              <div class="row mt-1">
                <div class="col-12"><h5 class="mb-1"><i class="feather icon-user mr-25"></i>Edit a spell</h5></div>
                <div class="col-12 col-sm-6">
                @php
                  $comp = DB::table('team_comps')->where('c_id', $comment->comment_comps_id)->first();
                  $user = DB::table('users')->where('id', $comment->comment_user_id)->first();
                @endphp
                  <div class="row">
                    <div class="col-12 col-sm-12">
                      <div class="form-group">
                        <div class="controls">
                          <label>Comp Title</label>
                          <input type="text" class="form-control mb-6" value="{{ $comp->c_name }}" required placeholder="Spell Name" disabled
                            data-validation-required-message="This Spell Name field is required">
                        </div>
                      </div>
                    </div>
                    <div class="col-12 col-sm-12">
                      <div class="form-group">
                        <div class="controls">
                          <label></label>
                          <input type="text" class="form-control mb-6" value="{{ $user->name }}" required placeholder="Spell Name" disabled
                            data-validation-required-message="This Spell Name field is required">
                        </div>
                      </div>
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <div class="controls">
                      <label>Comment</label>
                      <div class="d-flex">
                        <input type="text" name="comment_text"  value="{{ $comment->comment_text }}" class="form-control" value=""
                          placeholder="Please input description"
                          data-validation-required-message="This Spell Description field is required">
                      </div>
                    </div>
                  </div>
                  <input type="hidden" name="comment_id" value="{{ $comment->comment_id }}">
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
  $("#main_img_input").on('click', function(){
    $('#main_img_hidden').click();
  })
  $("#icon_img_input").on('click', function(){
    $('#icon_img_hidden').click();
  })
})
</script>
@endsection
