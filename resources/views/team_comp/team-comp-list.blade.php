
@extends('layouts/contentLayoutMaster')

@section('title', 'Team Comp Management')

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
            <th>TITLE (EN)</th>
            <th>TITLE (FR)</th>
            <th>SENT BY USER</th>
            <th>PUBLICATION DATE</th>
            <th>LIKES</th>
            <th>DISLIKES</th>
            <th>ACTION</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($team_comps as $team_comp)
            <tr>
              <td></td>
              <td>{{ $team_comp->c_name }}</td>
              <td>{{ $team_comp->c_fr_name }}</td>
              @php
                $user_name = DB::table('users')->where('id', $team_comp->c_sent_by_user)->first();
              @endphp
              <td>{{ $user_name->name }}</td>
              <td class="product-name">{{ $team_comp->c_likes }}</td>
              <td class="product-category">{{ $team_comp->c_dislikes }}</td>
              <td>
                @if($team_comp->c_verify == 1)
                  <?php $color = "success" ?>
                @else
                  <?php $color = "danger" ?>
                @endif
                <div class="chip chip-{{$color}}">
                  <div class="chip-body">
                    <div class="chip-text mx-auto">{{ $team_comp->c_verify == 1? 'Verified' : 'Unverified' }}</div>
                  </div>
                </div>
              </td>
              <td class="product-action">
                <span class="edit-team-comp" data-value="{{ $team_comp->c_id }}"><i class="feather icon-edit"></i></span>
                <span class="delete-team-comp" data-value="{{ $team_comp->c_id }}"><i class="feather icon-trash"></i></span>
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
        <script src="{{ asset(mix('js/scripts/ui/team-comp.js')) }}"></script>
        <script src="{{ asset(mix('js/scripts/extensions/toastr.js')) }}"></script>
@endsection
