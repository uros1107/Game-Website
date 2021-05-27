
@extends('layouts/contentLayoutMaster')

@section('title', 'Monster Management')

@section('vendor-style')
        {{-- vendor files --}}
        <link rel="stylesheet" href="{{ asset(mix('vendors/css/file-uploaders/dropzone.min.css')) }}">
        <link rel="stylesheet" href="{{ asset(mix('vendors/css/tables/datatable/datatables.min.css')) }}">
        <link rel="stylesheet" href="{{ asset(mix('vendors/css/tables/datatable/extensions/dataTables.checkboxes.css')) }}">
@endsection
@section('page-style')
        {{-- Page css files --}}
        <link rel="stylesheet" href="{{ asset(mix('css/plugins/file-uploaders/dropzone.css')) }}">
        <link rel="stylesheet" href="{{ asset(mix('css/pages/data-list-view.css')) }}">
@endsection
@section('content')
{{-- Data list view starts --}}
<section id="data-thumb-view" class="data-thumb-view-header">
    {{-- dataTable starts --}}
    <div class="table-responsive">
      <table class="table data-thumb-view">
        <thead>
          <tr>
            <th></th>
            <th>MAIN IMAGE</th>
            <th>NAME</th>
            <th>SECOND NAME</th>
            <th>SPELL NAME</th>
            <th>MANA COST</th>
            <th>SPECIAL MONSTER</th>
            <th>ROLE</th>
            <th>RARITY</th>
            <th>ELEMENT</th>
            <th>ACTION</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($monsters as $monster)
            @if($product["order_status"] === 'delivered')
              <?php $color = "success" ?>
            @elseif($product["order_status"] === 'pending')
              <?php $color = "primary" ?>
            @elseif($product["order_status"] === 'on hold')
              <?php $color = "warning" ?>
            @elseif($product["order_status"] === 'canceled')
              <?php $color = "danger" ?>
            @endif

            <?php
              $arr = array('success', 'primary', 'info', 'warning','danger');
            ?>
            <tr>
              <td></td>
              <td class="product-img"><img src="{{ asset('images/game/main_images/'.$monster->main_image) }}" alt="Img placeholder">
              </td>
              <td class="product-name">{{ $product["name"] }}</td>
              <td class="product-category">{{ $product["category"] }}</td>
              <td>
                <div class="progress progress-bar-{{ $arr[array_rand($arr)] }}">
                  <div class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="40" aria-valuemax="100"
                    style="width:{{ $product["popularity"] }}%"></div>
                </div>
              </td>
              <td>
                <div class="chip chip-{{$color}}">
                  <div class="chip-body">
                    <div class="chip-text">{{ $product["order_status"]}}</div>
                  </div>
                </div>
              </td>
              <td class="product-price">{{ $product["price"] }}</td>
              <td class="product-action">
                <span class="action-edit"><i class="feather icon-edit"></i></span>
                <span class="action-delete"><i class="feather icon-trash"></i></span>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    {{-- dataTable ends --}}

    {{-- add new sidebar starts --}}
    <div class="add-new-data-sidebar">
      <div class="overlay-bg"></div>
      <div class="add-new-data">
        <div class="div mt-2 px-2 d-flex new-data-title justify-content-between">
          <div>
            <h4 class="text-uppercase">Thumb View Data</h4>
          </div>
          <div class="hide-data-sidebar">
            <i class="feather icon-x"></i>
          </div>
        </div>
        <div class="data-items pb-3">
          <div class="data-fields px-2 mt-1">
            <div class="row">
              <div class="col-sm-12 data-field-col">
                <label for="data-name">Name</label>
                <input type="text" class="form-control" id="data-name">
              </div>
              <div class="col-sm-12 data-field-col">
                <label for="data-category"> Category </label>
                <select class="form-control" id="data-category">
                  <option>Audio</option>
                  <option>Computers</option>
                  <option>Fitness</option>
                  <option>Appliance</option>
                </select>
              </div>
              <div class="col-sm-12 data-field-col">
                <label for="data-status">Order Status</label>
                <select class="form-control" id="data-status">
                  <option>Pending</option>
                  <option>Canceled</option>
                  <option>Delivered</option>
                  <option>On Hold</option>
                </select>
              </div>
              <div class="col-sm-12 data-field-col">
                <label for="data-price">Price</label>
                <input type="text" class="form-control" id="data-price">
              </div>
              <div class="col-sm-12 data-field-col data-list-upload">
                <form action="#" class="dropzone dropzone-area" id="dataListUpload">
                  <div class="dz-message">Upload Image</div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <div class="add-data-footer d-flex justify-content-around px-3 mt-2">
          <div class="add-data-btn">
            <button class="btn btn-primary">Add Data</button>
          </div>
          <div class="cancel-data-btn">
            <button class="btn btn-outline-danger">Cancel</button>
          </div>
        </div>
      </div>
    </div>
    {{-- add new sidebar ends --}}
  </section>
  {{-- Data list view end --}}
@endsection
@section('vendor-script')
{{-- vendor js files --}}
        <script src="{{ asset(mix('vendors/js/extensions/dropzone.min.js')) }}"></script>
        <script src="{{ asset(mix('vendors/js/tables/datatable/datatables.min.js')) }}"></script>
        <script src="{{ asset(mix('vendors/js/tables/datatable/datatables.buttons.min.js')) }}"></script>
        <script src="{{ asset(mix('vendors/js/tables/datatable/datatables.bootstrap4.min.js')) }}"></script>
        <script src="{{ asset(mix('vendors/js/tables/datatable/buttons.bootstrap.min.js')) }}"></script>
        <script src="{{ asset(mix('vendors/js/tables/datatable/dataTables.select.min.js')) }}"></script>
        <script src="{{ asset(mix('vendors/js/tables/datatable/datatables.checkboxes.min.js')) }}"></script>
@endsection
@section('page-script')
        {{-- Page js files --}}
        <script src="{{ asset(mix('js/scripts/ui/data-list-view.js')) }}"></script>
@endsection
