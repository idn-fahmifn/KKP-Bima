@extends('template.template')


@section('page-title')
Halaman Pengaduan
@endsection

@section('content')

<div class="dashboard-main-body">
    <div class="card basic-data-table">
        <div class="card-header">
            <h5 class="card-title mb-0">Pengaduan Masuk</h5>
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
                        <td>{{$item->tanggal_laporan}}</td>
                        <td>
                            @if ($item->status == 'diajukan')
                            <span class="badge text-sm fw-semibold bg-light-100 px-20 py-9 radius-4 text-secondary-light">diajukan</span>
                            @elseif($item->status == 'diproses')
                                <i class="ri-circle-fill circle-icon text-secondary-main w-auto"></i> diproses
                            @endif
                        </td>
                        <td>
                            <a href="javascript:void(0)"
                                class="w-32-px h-32-px bg-primary-light text-primary-600 rounded-circle d-inline-flex align-items-center justify-content-center">
                                <iconify-icon icon="iconamoon:eye-light"></iconify-icon>
                            </a>
                            <a href="javascript:void(0)"
                                class="w-32-px h-32-px bg-success-focus text-success-main rounded-circle d-inline-flex align-items-center justify-content-center">
                                <iconify-icon icon="lucide:edit"></iconify-icon>
                            </a>
                            <a href="javascript:void(0)"
                                class="w-32-px h-32-px bg-danger-focus text-danger-main rounded-circle d-inline-flex align-items-center justify-content-center">
                                <iconify-icon icon="mingcute:delete-2-line"></iconify-icon>
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