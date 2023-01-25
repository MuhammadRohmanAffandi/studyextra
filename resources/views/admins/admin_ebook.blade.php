@extends('admins.template_admin_master')

@section('content')
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h6>Admin E-Book</h6>
                </div>
                <div class="card-header pb-0">
                    <a href="admin-tambah-ebook" type="submit" class="btn btn-small btn-primary">Tambah</a>
                </div>
                <div class="card-header d-flex">
                    <form action="/admin-ebook" method="GET">
                        <input name="search" type="search" class="form-control" placeholder="Cari">
                    </form>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center justify-content-center mb-0">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">@sortablelink('id', 'ID')</th>
                                    <th></th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Nama E-Book</th>
                                    <th></th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">File E-Book</th>
                                    <th></th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Option</th>
                                    <th></th>
                                    <!-- <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Email Siswa</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">Completion</th> -->
                                </tr>
                                @foreach ($tambahebooks as $item)
                            </thead>
                            <tbody>
                                <tr>
                                    <th></th>
                                    <th>
                                        <span class="text-xs font-weight-bold">{{ $item->id }}</span>
                                    </th>
                                    <th></th>
                                    <th>
                                        <span class="text-xs font-weight-bold">{{ $item->nama_ebook }}</span>
                                    </th>
                                    <th></th>
                                    <th>
                                        <span class="text-xs font-weight-bold"><a href="{{ asset('dokumen/ebook/'. $item ->file_ebook) }}" target="_blank" rel="noopener noreferrer">Lihat Dokumen</a></span>
                                    </th>
                                    <th></th>
                                    <th class="align-middle">
                                        <a class="btn btn-link text-danger text-gradient px-0 mb-0" href="{{ url('admin-delete-ebook', $item->id)}}"><i class="far fa-trash-alt me-2" aria-hidden="true"></i></a>
                                        <a class="btn btn-link text-info text-gradient px-0 mb-0" href="{{ url('admin-edit-ebook', $item->id)}}"><i class="fas fa-pencil-alt text-dark me-2" aria-hidden="true"></i></a>
                                        </a>
                                    </th>
                                    <th></th>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card-header pb-0">
                    <div class="tm-table-mt tm-table-actions-row">
                        <div class="box-footer">
                            {{-- <div class="box-body"> --}}
                            {!! $tambahebooks->appends(Request::except('page'))->render() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('sweetalert::alert')
@endsection