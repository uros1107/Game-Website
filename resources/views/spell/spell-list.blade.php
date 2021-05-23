
@extends('layouts/contentLayoutMaster')

@section('title', 'Spell Management')

@section('vendor-style')
        {{-- vendor files --}}
        <link rel="stylesheet" href="{{ asset(mix('vendors/css/tables/datatable/datatables.min.css')) }}">
        <link rel="stylesheet" href="{{ asset(mix('vendors/css/file-uploaders/dropzone.min.css')) }}">
        <link rel="stylesheet" href="{{ asset(mix('vendors/css/tables/datatable/extensions/dataTables.checkboxes.css')) }}">
        <link rel="stylesheet" href="{{ asset(mix('vendors/css/extensions/toastr.css')) }}">
@endsection
@section('page-style')
        {{-- Page css files --}}
        <link rel="stylesheet" href="{{ asset(mix('css/plugins/file-uploaders/dropzone.css')) }}">
        <link rel="stylesheet" href="{{ asset(mix('css/pages/data-list-view.css')) }}">
        <link rel="stylesheet" href="{{ asset(mix('css/plugins/extensions/toastr.css')) }}">
@endsection

@section('content')
{{-- Data list view starts --}}
<section id="data-list-view" class="data-list-view-header">

    {{-- DataTable starts --}}
    <div class="table-responsive">
      <table class="table data-list-view">
        <thead>
          <tr>
            <th></th>
            <th>MAIN IMAGE</th>
            <th>ICON IMAGE</th>
            <th>NAME (EN)</th>
            <th>NAME (FR)</th>
            <th>DESCRIPTION</th>
            <th>MANA COST</th>
            <th>ACTION</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($spells as $spell)
            <tr>
              <td></td>
              <td class="product-name"><img src="{{ asset('images/game/main_images/'.$spell->main_image) }}" style="height:130px"></td>
              <td class="product-name"><img src="{{ asset('images/game/icon_images/'.$spell->icon_image) }}" style="height:70px"></td>
              <td class="product-category">{{ $spell->name }}</td>
              <td class="product-category">{{ $spell->fr_name }}</td>
              <td>
                {{ $spell->description }}
              </td>
              <td>
                {{ $spell->mana_cost }}
              </td>
              <td class="product-action">
                <span class="action-edit" data-value="{{ $spell->id }}"><i class="feather icon-edit"></i></span>
                <span class="action-delete" data-value="{{ $spell->id }}"><i class="feather icon-trash"></i></span>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    {{-- DataTable ends --}}

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
        <script src="{{ asset(mix('vendors/js/extensions/toastr.min.js')) }}"></script>
@endsection
@section('page-script')
        {{-- Page js files --}}
        <script src="{{ asset(mix('js/scripts/ui/data-list-view.js')) }}"></script>
        <script src="{{ asset(mix('js/scripts/extensions/toastr.js')) }}"></script>
@endsection
