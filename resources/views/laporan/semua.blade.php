@extends('template.template')


@section('page-title')
Pengaduan Masuk
@endsection

@section('content')

<div class="dashboard-main-body">
    <div class="card basic-data-table">
        <div class="card-header">
            <h5 class="card-title mb-0">Semua Pengadua</h5>
        </div>
        <div class="card-body">
            <table class="table bordered-table mb-0" id="dataTable" data-page-length='10'>
                <thead>
                    <tr>
                        <th scope="col">Judul</th>
                        <th scope="col">Tanggal Dibuat</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $item)
                    <tr>
                        <td>{{$item->judul_laporan}}</td>
                        <td>{{$item->tanggal_dibuat}}</td>
                        <td>
                            <span class="bg-secondary-focus text-secondary-main px-24 py-4 rounded-pill fw-medium text-sm">pending</span>
                        </td>
                        <td class="text-center">
                            <a href="javascript:void(0)"
                                class="w-32-px h-32-px bg-primary-light text-primary-600 rounded-circle d-inline-flex align-items-center justify-content-center">
                                <iconify-icon icon="iconamoon:eye-light"></iconify-icon>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection