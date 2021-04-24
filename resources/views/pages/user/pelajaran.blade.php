{{-- Extends layout --}}
@extends('layout.default')

{{-- Content --}}
@section('content')
    <div class="card card-custom">
        <div class="card-header flex-wrap border-0 pt-6 pb-0">
            <div class="card-title">
                <h3 class="card-label">Mata Pelajaran
                    <div class="text-muted pt-2 font-size-sm">Data Mata Pelajaran</div>
                </h3>
            </div>
        </div>
        <div class="card-body">
            <table class="datatable datatable-bordered datatable-head-custom" id="kt_datatable">
                <thead>
                <tr>
                    <th title="Field #1">Mata Pelajaran</th>
                    <th title="Field #2">Link</th>
                </tr>
                </thead>
                <tbody>
                  @foreach ($pelajaran as $data)
                    <tr>
                        <td>{{ $data->nama_pelajaran }}</td>
                        <td>{{ $data->link }}</td>
                    </tr>
                  @endforeach
                </tbody>
            </table>
            <!--end: Datatable-->
        </div>

    </div>

@endsection

{{-- Styles Section --}}
@section('styles')

@endsection

{{-- Scripts Section --}}
@section('scripts')
    <script src="{{ asset('js/pages/crud/ktdatatable/base/pelajaran-table.js') }}" type="text/javascript"></script>
@endsection
