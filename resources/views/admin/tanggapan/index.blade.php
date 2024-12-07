@extends('template.template')


@section('page-title')
Pengaduan Masuk
@endsection

@section('content')

<div class="dashboard-main-body">
    <div class="card basic-data-table">
        <div class="card-header">
            <h5 class="card-title mb-0">Semua Pengaduan</h5>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table bordered-table mb-0" id="dataTable" data-page-length='10'>
                    <thead class="text-center">
                        <th>Judul</th>
                        <th>Tanggal Dibuat</th>
                        <th>Status</th>
                        <th>Action</th>
                    </thead>
                    <tbody>
                        @foreach ($data as $item)
                        <tr>
                            <td>{{$item->judul_laporan}}</td>
                            <td>{{$item->tanggal_laporan}}</td>
                            <td>
                                @if ($item->status === 'diajukan')
                                <span class="text-white bg-neutral-400 border border-neutral-400 radius-4 px-4 py-4 text-sm line-height-1 fw-medium">pending</span>
                                @elseif ($item->status === 'diproses')
                                <span class="text-white bg-primary-400 border border-primary-400 radius-4 px-4 py-4 text-sm line-height-1 fw-medium">diproses</span>
                                @elseif($item->status === 'diproses')
                                <span class="text-white bg-success-400 border border-success-400 radius-4 px-4 py-4 text-sm line-height-1 fw-medium">selesai</span>
                                @else
                                <span class="text-white bg-danger-400 border border-danger-400 radius-4 px-4 py-4 text-sm line-height-1 fw-medium">selesai</span>
                                @endif
                            </td>
                            <td class="text-center">
                                <a href="{{route('pengaduan.detail', $item->slug)}}"
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
</div>

@endsection