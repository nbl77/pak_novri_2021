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
                      <span class="svg-icon svg-icon-md">
                          <!--begin::Svg Icon | path:assets/media/svg/icons/Design/PenAndRuller.svg-->
                          <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                  <rect x="0" y="0" width="24" height="24"/>
                                  <path d="M3,16 L5,16 C5.55228475,16 6,15.5522847 6,15 C6,14.4477153 5.55228475,14 5,14 L3,14 L3,12 L5,12 C5.55228475,12 6,11.5522847 6,11 C6,10.4477153 5.55228475,10 5,10 L3,10 L3,8 L5,8 C5.55228475,8 6,7.55228475 6,7 C6,6.44771525 5.55228475,6 5,6 L3,6 L3,4 C3,3.44771525 3.44771525,3 4,3 L10,3 C10.5522847,3 11,3.44771525 11,4 L11,19 C11,19.5522847 10.5522847,20 10,20 L4,20 C3.44771525,20 3,19.5522847 3,19 L3,16 Z" fill="#000000" opacity="0.3"/>
                                  <path d="M16,3 L19,3 C20.1045695,3 21,3.8954305 21,5 L21,15.2485298 C21,15.7329761 20.8241635,16.200956 20.5051534,16.565539 L17.8762883,19.5699562 C17.6944473,19.7777745 17.378566,19.7988332 17.1707477,19.6169922 C17.1540423,19.602375 17.1383289,19.5866616 17.1237117,19.5699562 L14.4948466,16.565539 C14.1758365,16.200956 14,15.7329761 14,15.2485298 L14,5 C14,3.8954305 14.8954305,3 16,3 Z" fill="#000000"/>
                              </g>
                          </svg>
                          <!--end::Svg Icon-->
                      </span>Download
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
                  @php
                    $i = 1;
                  @endphp
                  @foreach ($userArray as $index => $arr)
                    <tr>
                      <td>{{ $i }}</td>
                      <td>{{ $arr['nama'] ?? ''}}</td>
                      <td>{{ $arr['kelas'] ?? ''}}</td>
                      <td>{{ $arr['nilai'] ?? ''}}</td>
                      <td>{{ $arr['nilai2'] ?? '' }}</td>
                      <td>{{ $arr['nilai3'] ?? ''}}</td>
                      <td>{{ $arr['uk1'] ?? ''}}</td>
                      <td>{{ $arr['uk2'] ?? ''}}</td>
                      <td>{{ $arr['semester'] ?? ''}}</td>
                      <td align="right">{{ $arr['pelajaran'] ?? ''}}</td>
                    </tr>
                    @php
                    $i++;
                    @endphp
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
    <script src="{{ asset('js/pages/crud/ktdatatable/base/user-table.js') }}" type="text/javascript"></script>
@endsection
