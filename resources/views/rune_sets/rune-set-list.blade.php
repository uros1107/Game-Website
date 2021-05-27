
@extends('layouts/contentLayoutMaster')

@section('title', 'Rune Sets Management')

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
            <th>USER NAME</th>
            <th>MONSTER</th>
            <th>RUNE SET NAME</th>
            <th>RUNE SET NAME (FR)</th>
            <th>RUNE</th>
            <th>SKILL STONE</th>
            <th>STATUS</th>
            <th>ACTION</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($rune_sets as $rune_set)
            <tr>
              <td></td>
              @php
                $user_name = DB::table('users')->where('id', $rune_set->rs_user_id)->first();
              @endphp
              <td>{{ $user_name->name }}</td>
              @php
                $monster = DB::table('monsters')->where('id', $rune_set->rs_monster_id)->first();
              @endphp
              <td class="product-name"><img src="{{ asset('images/game/main_images/'.$monster->main_image) }}" style="height:130px"></td>
              <td class="product-category">{{ $rune_set->rs_name }}</td>
              <td class="product-category">{{ $rune_set->fr_rs_name }}</td>
              @php
                $rune = DB::table('runes')->where('r_id', $rune_set->rs_rune)->first();
              @endphp
              <td>
                <div class="text-center">
                  <img src="{{ asset('images/game/icons/runes/'.$rune->r_icon) }}" style="height: 50px">
                  <p class="text-center">{{ $rune->r_name }}</p>
                </div>
              </td>
              @if($rune_set->rs_skill_stones == 1)
              <td>
                <div class="text-center">
                  <img src="{{ asset('images/game/skill_images/'.$monster->skill_stone1_image) }}" style="height: 50px">
                  <p class="text-center">{{ $monster->skill_stone1_name }}</p>
                </div>
              </td>
              @elseif($rune_set->rs_skill_stones == 2)
              <td>
                <div class="text-center">
                  <img src="{{ asset('images/game/skill_images/'.$monster->skill_stone2_image) }}" style="height: 50px">
                  <p class="text-center">{{ $monster->skill_stone2_name }}</p>
                </div>
              </td>
              @elseif($rune_set->rs_skill_stones == 3)
              <td>
                <div class="text-center">
                  <img src="{{ asset('images/game/skill_images/'.$monster->skill_stone3_image) }}" style="height: 50px">
                  <p class="text-center">{{ $monster->skill_stone3_name }}</p>
                </div>
              </td>
              @endif
              <td>
                @if($rune_set->verify == 1)
                  <?php $color = "success" ?>
                @else
                  <?php $color = "danger" ?>
                @endif
                <div class="chip chip-{{$color}}">
                  <div class="chip-body">
                    <div class="chip-text mx-auto">{{ $rune_set->verify == 1? 'Verified' : 'Unverified' }}</div>
                  </div>
                </div>
              </td>
              <td class="product-action">
                <span class="edit-rune-set" data-value="{{ $rune_set->rs_id }}"><i class="feather icon-edit"></i></span>
                <span class="delete-rune-set" data-value="{{ $rune_set->rs_id }}"><i class="feather icon-trash"></i></span>
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
        <script src="{{ asset(mix('js/scripts/ui/rune-set.js')) }}"></script>
        <script src="{{ asset(mix('js/scripts/extensions/toastr.js')) }}"></script>
@endsection
