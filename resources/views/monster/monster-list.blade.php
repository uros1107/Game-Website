
@extends('layouts/contentLayoutMaster')

@section('title', 'Monster Management')

@section('vendor-style')
        {{-- vendor files --}}
        <link rel="stylesheet" href="{{ asset(mix('vendors/css/file-uploaders/dropzone.min.css')) }}">
        <link rel="stylesheet" href="{{ asset(mix('vendors/css/tables/datatable/datatables.min.css')) }}">
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
<section id="data-thumb-view" class="data-thumb-view-header">
    {{-- dataTable starts --}}
    <div class="table-responsive">
      <table class="table data-thumb-view">
        <thead>
          <tr>
            <th></th>
            <th>MAIN IMAGE</th>
            <th>ICON IMAGE</th>
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
            <tr>
              <td></td>
              <td class="product-img text-center"><img src="{{ asset('images/game/main_images/'.$monster->main_image) }}" style="height:110px" alt="Img placeholder"></td>
              <td class="product-img text-center"><img src="{{ asset('images/game/icon_images/'.$monster->icon_image) }}" style="height:65px" alt="Img placeholder"></td>
              <td class="product-name">{{ $monster->name }}</td>
              <td class="product-category">{{ $monster->second_name }}</td>
              <td>
                {{ $monster->spell_name }}
              </td>
              <td>
                {{ $monster->mana_cost }}
              </td>
              <td class="product-price">
              @if($monster->special_monster == 1)
                <?php $color = "success" ?>
              @else
                <?php $color = "danger" ?>
              @endif
                <div class="chip chip-{{$color}}">
                  <div class="chip-body">
                    <div class="chip-text mx-auto">{{ $monster->special_monster == 1? 'Yes' : 'No' }}</div>
                  </div>
                </div>
              </td>
              @php
                $role = DB::table('role')->where('id', $monster->role)->first();
              @endphp
              <td>{{ $role->name }}</td>
              @php
                $rarity = DB::table('rarity')->where('id', $monster->rarity)->first();
              @endphp
              <td>{{ $rarity->name }}</td>
              @php
                $element = DB::table('element')->where('id', $monster->element)->first();
              @endphp
              <td>{{ $element->name }}</td>
              <td class="product-action">
                <span class="monster-edit" data-value="{{ $monster->id }}"><i class="feather icon-edit"></i></span>
                <span class="monster-delete" data-value="{{ $monster->id }}"><i class="feather icon-trash"></i></span>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    {{-- dataTable ends --}}

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
