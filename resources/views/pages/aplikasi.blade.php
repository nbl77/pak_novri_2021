{{-- Extends layout --}}
@extends('layout.default')

{{-- Content --}}
@section('content')

    <div class="card card-custom">
        <div class="card-header flex-wrap border-0 pt-6 pb-0">
            <div class="card-title">
                <h3 class="card-label">Data Siswa
                    <div class="text-muted pt-2 font-size-sm">Data siswa yang telah terekam</div>
                </h3>
            </div>
            <div class="card-toolbar">
                <!--begin::Dropdown-->
                <a href="/download">
                  <div class="mr-2">
                      <button type="button" class="btn btn-light-primary font-weight-bolder" >
                      Tambah
                      </button>
                  </div>
                </a>
            </div>

        </div>
        <div class="card-body">
            <!--begin: Search Form-->
            <!--begin::Search Form-->
            <div class="mb-7">
                <div class="row align-items-center">
                    <div class="col-12">
                        <div class="row align-items-center">
                            <div class="col-md-3 my-2 my-md-0">
                                <div class="input-icon">
                                    <input type="text" class="form-control" placeholder="Cari..." id="kt_datatable_search_query"/>
                                    <span>
                                      <i class="flaticon2-search-1 text-muted"></i>
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-3 my-2 my-md-0">
                                <div class="d-flex align-items-center">
                                    <label class="mr-3 mb-0 d-none d-md-block">Semester:</label>
                                    <select class="form-control" id="kt_datatable_search_semester">
                                        <option value="">Semua</option>
                                        <option value="Ganjil">Ganjil</option>
                                        <option value="Genap">Genap</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3 my-2 my-md-0">
                                <div class="d-flex align-items-center">
                                    <label class="mr-3 mb-0 d-none d-md-block">Kelas:</label>
                                    <select class="form-control" id="kt_datatable_search_class">
                                        <option value="">Semua</option>
                                        <option value="10">X</option>
                                        <option value="11">XI</option>
                                        <option value="12">XII</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3 my-2 my-md-0">
                                <div class="d-flex align-items-center">
                                    <label class="mr-3 mb-0 d-none d-md-block">Pelajaran:</label>
                                    <select class="form-control" id="kt_datatable_search_study">
                                        <option value="">Semua</option>
                                        <option value="1">Matematika</option>
                                        <option value="2">B. Indonesia</option>
                                        <option value="3">Agama</option>
                                        <option value="4">B.Inggris</option>
                                        <option value="5">PJOK</option>
                                        <option value="6">Fisika</option>
                                        <option value="7">Kimia</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end::Search Form-->
            <!--end: Search Form-->
            <!--begin: Datatable-->
            <table class="datatable datatable-bordered datatable-head-custom" id="kt_datatable">
                <thead>
                <tr>
                    <th title="Field #1">ID</th>
                    <th title="Field #2">Nama</th>
                    <th title="Field #3">Kelas</th>
                    <th title="Field #4">Latihan 1</th>
                    <th title="Field #5">Latihan 2</th>
                    <th title="Field #6">Latihan 3</th>
                    <th title="Field #7">UK 1</th>
                    <th title="Field #8">UK 2</th>
                    <th title="Field #9">Semester</th>
                    <th title="Field #10">Pelajaran</th>
                </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>Nama</td>
                    <td>Kelas</td>
                    <td>nilai</td>
                    <td>Nilai2</td>
                    <td>Nilai3</td>
                    <td>UK1</td>
                    <td>Uk2</td>
                    <td>Ganjil</td>
                    <td align="right">1</td>
                  </tr>
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
    <script src="{{ asset('js/pages/crud/ktdatatable/base/user-table.js') }}" type="text/javascript"></script>
@endsection
