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
                    <th title="Field #3">Option</th>
                </tr>
                </thead>
                <tbody>
                  @foreach ($pelajaran as $data)
                    <tr>
                        <td>{{ $data->nama_pelajaran }}</td>
                        <td>{{ $data->link }}</td>
                        <td align="right">
                          {{ $data->id_pelajaran }}
                        </td>
                    </tr>
                  @endforeach
                </tbody>
            </table>
            <!--end: Datatable-->
        </div>

        <!-- Modal-->
        <div class="modal fade" id="edit_study" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="edit_study" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="edit_study">Modal Title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <i aria-hidden="true" class="ki ki-close"></i>
                        </button>
                    </div>
                    <div class="modal-body">
                      <div class="input-icon">
                          <input type="text" class="form-control" placeholder="Ubah..." id="modal_pelajaran_input" />
                          <span>
                            <i class="flaticon-edit text-muted"></i>
                          </span>
                      </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">Close</button>
                        <button type="button" id="modal_submit_form" class="btn btn-primary font-weight-bold">Save changes</button>
                    </div>
                </div>
            </div>
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
