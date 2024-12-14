@extends('layouts.master')

@section('title')
  @lang('Customs Declaration')
@endsection

@section('css')
  <!-- DataTables -->
  <link href="{{ URL::asset('/assets/libs/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
  @component('components.breadcrumb')
    @slot('li_1')
        Customs Declaration
    @endslot
    @slot('li_2')
      {{ route('CustomsDeclaration.show') }}
    @endslot
    @slot('title')
        Customs Declaration List
    @endslot
  @endcomponent

  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-body">
          <div class="d-flex justify-content-end mb-4" id="action_btns">

            {{-- <a href="{{ route('airports.create') }}" class="btn btn-rounded btn-success waves-effect waves-light ms-2"><i class="bx bx-plus font-size-16 me-2 align-middle"></i>@lang('translation.add_resource', ['resource' => __('attributes.airport')])</a> --}}

          </div>
          
          <table id="datatable" class="table-hover table-bordered nowrap w-100 table">
            <thead class="table-light">
              <tr>
                <th>#</th>
                <th> Full Name</th>
                <th> Passport Number</th>
                <th> Declaration Details</th>
                <th> created At</th>
                <th> actions</th>
              </tr>
            </thead>
            <tbody>
                @foreach($customsDeclarations as $index => $declaration)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $declaration->full_name }}</td>
                        <td><span class="badge badge-pill badge-soft-info font-size-14">{{ $declaration->passport_number }}</span></td>
                        <td>{{ $declaration->declaration_details }}</td>
                        <td>{{ $declaration->created_at->format('Y-m-d H:i:s') }}</td>
                        <td>
                            <!-- Add action buttons or links here -->
                            {{-- <a href="{{ route('customs-declaration.edit', $declaration->id) }}" class="btn btn-primary btn-sm">Edit</a> --}}
                            <form action="{{ route('CustomsDeclaration.destroy', $declaration->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
          </table>

        </div>
      </div>
    </div> <!-- end col -->
  </div> <!-- end row -->
@endsection
@section('script')
<script type="text/javascript">
    $(function() {

      //init buttons
      new $.fn.dataTable.Buttons(table, {
        buttons: [{
          extend: 'colvis',
          text: "@lang('translation.colvisBtn')"
        }]
      });

      //add buttons to action_btns
      table.buttons().container()
        .prependTo($('#action_btns'));

      // select dropdown for change the page length
      $('.dataTables_length select').addClass('form-select form-select-sm');

      // add margin top to the pagination and info 
      $('.dataTables_info, .dataTables_paginate').addClass('mt-3');
    });
  </script>
@endsection
