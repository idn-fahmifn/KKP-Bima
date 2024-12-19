@extends('template.template')

@section('page-title')
Detail Laporan
@endsection

@section('content')
<div class="dashboard-main-body">
    <div class="card p-0 radius-12 overflow-hidden">
        <div class="card-body p-0">
            <div class="max-h-400-px overflow-hidden">
                <img src="{{asset('storage/images/pengaduan/'.$data->dokumentasi)}}" alt="" class="hover-scale-img__img w-100 h-100 object-fit-cover">
            </div>
            <div class="p-32">
                <div class="d-flex align-items-center gap-16 justify-content-between flex-wrap mb-24">
                    <div class="d-flex align-items-center gap-8">
                        <div class="d-flex flex-column">
                            <ul class="d-flex flex-wrap align-items-center gap-32">
                                <li class="text-white bg-neutral-600 border border-neutral-300 radius-4 px-4 py-4 text-sm line-height-1 fw-medium"><i class="fa-solid fa-spinner"></i> {{$data->status}}</li>
                                <li class="text-white bg-info-400 border border-info-400 radius-4 px-8 py-4 text-sm line-height-1 fw-medium"><i class="fas fa-tags"></i> {{$data->jenis_laporan}}</li>
                                <li class="text-white bg-info-400 border border-info-400 radius-4 px-8 py-4 text-sm line-height-1 fw-medium"><i class="fa fa-history"></i> {{$data->tanggal_update}}</li>
                            </ul>
                        </div>
                    </div>
                    <div class="d-flex align-items-center gap-md-3 gap-2 flex-wrap">
                        <div class="d-flex align-items-center gap-8 text-neutral-500 text-sm text-uppercase fw-medium">
                            <i class="fas fa-user"></i>
                            {{$data->user->name}}
                        </div>
                        -
                        <div class="d-flex align-items-center gap-8 text-neutral-500 text-sm fw-medium">
                            <i class="fas fa-edit"></i>
                            {{$data->tanggal_laporan}}
                        </div>
                    </div>
                </div>
                <h3 class="mb-16"> {{$data->judul_laporan}} </h3>
                <div class="text-neutral-500 mb-16">
                    {!!($data->keterangan)!!}
                </div>



            </div>
        </div>
    </div>
    @if ($tanggapan)
    @foreach ($tanggapan as $item)
    <div class="card mt-3 radius-12 overflow-hidden">
        <div class="card-header">
            <span>Tanggapan Admin</span>
        </div>
        <div class="card-body">
            <div class="text-neutral-500 mb-16">
                {!!($item->keterangan)!!}
            </div>
            @if (!$item->dokumentasi)
                <span>Tanggapan tidak disertai gambar</span>
            @else
                <div class="max-h-400-px overflow-hidden">
                    <img src="{{asset('storage/images/tanggapan/'.$item->dokumentasi)}}" alt="" class="hover-scale-img__img w-100 h-100 object-fit-cover">
                </div>
            @endif
        </div>
    </div>
    @endforeach
    @else

    <div class="card mt-3 radius-12 overflow-hidden">
        <div class="card-body">
            <span>Belum tinggapi, mohon menunggu</span>
        </div>
    </div>
    @endif

</div>

@endsection