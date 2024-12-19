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
                </a>
            </div>
            <div class="p-32">
                <div class="d-flex align-items-center gap-16 justify-content-between flex-wrap mb-24">
                    <div class="d-flex align-items-center gap-8">
                        <div class="d-flex flex-column">
                            <ul class="d-flex flex-wrap align-items-center gap-32">
                                <li class="text-white bg-neutral-600 border border-neutral-300 radius-4 px-4 py-4 text-sm line-height-1 fw-medium"><i class="fa-solid fa-spinner"></i> {{$data->status}}</li>
                                <li class="text-white bg-info-400 border border-info-400 radius-4 px-8 py-4 text-sm line-height-1 fw-medium"><i class="fas fa-tags"></i> {{$data->jenis_laporan}}</li>
                                <li class="text-white bg-info-400 border border-info-400 radius-4 px-8 py-4 text-sm line-height-1 fw-medium"><i class="fa fa-history"></i> {{$data->tanggal_laporan->locale('in_id')->diffForHumans()}}</li>
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
                            {{$data->tanggal_update}}
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
    <div class="card mt-3 radius-12 overflow-hidden">
        @if ($pengaduan)

        <div class="card-body">
            <span>Sudah ditanggapi</span>
        </div>

        @else

        <div class="card-body">
            <form action="{{route('tanggapan.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label class="form-label fw-bold text-neutral-900" for="title">Pengaduan yang ditanggapi: </label>
                    <input type="text" class="form-control border border-neutral-200 radius-8" value="{{$data->judul_laporan}}" readonly>
                    <input type="number" class="form-control border border-neutral-200 radius-8" value="{{$data->id}}" name="id_laporan" hidden>
                </div>
                <div class="form-group">
                    <label class="form-label fw-bold text-neutral-900">Tanggapan </label>
                    <textarea id="summernote" name="keterangan"></textarea>
                </div>

                <div class="form-group">
                    <label class="form-label fw-bold text-neutral-900">Status</label>
                    <select name="status" id="" class="form-control">
                        <option value="{{$data->status}}">{{$data->status}}</option>
                        <option value="diproses">Diproses</option>
                        <option value="selesai">Selesai</option>
                        <option value="ditolak">Ditolak</option>
                    </select>
                </div>

                <div class="form-group">
                    <label class="form-label fw-bold text-neutral-900">Dokumentasi </label>
                    <div class="upload-image-wrapper">
                        <label
                            class="upload-file h-160-px w-100 border input-form-light radius-8 overflow-hidden border-dashed bg-neutral-50 bg-hover-neutral-200 d-flex align-items-center flex-column justify-content-center gap-1"
                            for="upload-file">
                            <iconify-icon icon="solar:camera-outline" class="text-xl text-secondary-light"></iconify-icon>
                            <span class="fw-semibold text-secondary-light">Upload</span>
                            <input id="upload-file" type="file" name="dokumentasi" hidden>
                        </label>
                        <div
                            class="uploaded-img d-none position-relative h-160-px w-100 border input-form-light radius-8 overflow-hidden border-dashed bg-neutral-50 mt-8">
                            <button type="button"
                                class="uploaded-img__remove position-absolute top-0 end-0 z-1 text-lg line-height-1 me-8 mt-8 d-flex bg-danger-600 w-40-px h-40-px justify-content-center align-items-center rounded-circle">
                                <iconify-icon icon="radix-icons:cross-2" class="text-2xl text-white"></iconify-icon>
                            </button>
                            <img id="uploaded-img__preview" class="w-100 h-100 object-fit-cover" src=""
                                alt="image">
                        </div>
                    </div>
                </div>
                <div class="form-group mt-4">
                    <button type="submit" class="btn btn-success bg-success-500">Tanggapi</button>
                </div>
            </form>
        </div>
        @endif
    </div>
</div>


@endsection