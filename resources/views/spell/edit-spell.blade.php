@extends('layouts/contentLayoutMaster')

@section('title', 'Edit Spell')

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
            <form action="{{ route('update-spell') }}" method="POST" enctype="multipart/form-data">
              {{ csrf_field() }}
              <div class="row mt-1">
                <div class="col-12"><h5 class="mb-1"><i class="feather icon-user mr-25"></i>Edit a spell</h5></div>
                <div class="col-12 col-sm-6">
                  <div class="row">
                    <div class="col-12 col-sm-6">
                      <div class="form-group">
                        <div class="controls">
                          <label>Spell Name</label>
                          <input type="text" name="name" class="form-control mb-6" value="{{ $spell->name }}" required placeholder="Spell Name"
                            data-validation-required-message="This Spell Name field is required">
                          <span class="font-italic">EN</span>
                        </div>
                      </div>
                    </div>
                    <div class="col-12 col-sm-6">
                      <div class="form-group">
                        <div class="controls">
                          <label></label>
                          <input type="text" name="fr_name" class="form-control mb-6" value="{{ $spell->fr_name }}" required placeholder="Spell Name"
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
                        <input type="text" name="description"  value="{{ $spell->description }}" class="form-control" value=""
                          placeholder="Please input description"
                          data-validation-required-message="This Spell Description field is required">
                          <span class="font-italic" style="margin: auto 5px">EN</span>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="controls">
                      <div class="d-flex">
                        <input type="text" name="fr_description" value="{{ $spell->fr_description }}" class="form-control" value=""
                          placeholder="Please input description"
                          data-validation-required-message="This Spell Description field is required">
                          <span class="font-italic" style="margin: auto 5px">FR</span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-sm-6">
                  <div class="form-group">
                    <div class="controls">
                      <label>Mana Cost</label>
                      <input type="number" name="mana_cost" class="form-control" value="{{ $spell->mana_cost }}" required placeholder="Mana Cost"
                        value="" step="0.01" min="0.00"
                        data-validation-required-message="This Mana Cost field is required">
                    </div>
                  </div>
                  <fieldset class="form-group">
                      <label for="basicInputFile">Main Image (card format)</label>
                      <div class="custom-file">
                          <input type="text" id="main_img_input" class="custom-file-input">
                          <input type="file" name="main_image" id="main_img_hidden" class="custom-file-input d-none">
                          <label class="custom-file-label" for="inputGroupFile01">{{ $spell->main_image }}</label>
                      </div>
                  </fieldset>
                  <fieldset class="form-group">
                      <label for="basicInputFile">Icon/Thumb Image</label>
                      <div class="custom-file">
                          <input type="text" id="icon_img_input" class="custom-file-input">
                          <input type="file" name="icon_image" id="icon_img_hidden" class="custom-file-input d-none">
                          <label class="custom-file-label" for="inputGroupFile01">{{ $spell->icon_image }}</label>
                      </div>
                  </fieldset>
                  <input type="hidden" name="id" value="{{ $spell->id }}">
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
