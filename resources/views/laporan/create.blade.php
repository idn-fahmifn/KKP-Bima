@extends('template.template')


@section('page-title')
Buat Pengaduan
@endsection

@section('content')

<div class="container">
    <div class="row gy-4 mb-4">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h2 class="card-title mb-0">Form pengaduan sarana prasarana</h2>
                    <p class="text-muted">Masukan pengaduan pada form dibawah.</p>
                </div>
                <div class="card-body">
                    <div class="row gy-3">
                        <form action="{{route('laporan.store')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="col-12 mb-4">
                                <label class="form-label">Judul Laporan</label>
                                <input type="text" name="judul_laporan" class="form-control" required placeholder="Masukan judul laporan">
                                <input type="text" name="id_user" value="{{Auth::user()->id}}" class="form-control" hidden>
                            </div>
                            <div class="col-12 mb-4">
                                <label class="form-label">Jenis Laporan</label>
                                <select name="jenis_laporan" class="form-control" required>
                                    <option value="">-Pilih Jenis Laporan-</option>
                                    <option value="kerusakan">kerusakan</option>
                                    <option value="kehilangan">kehilangan</option>
                                </select>
                            </div>

                            <div class="col-12 mb-4 border p-4 mt-4">
                                <label class="form-label">Masukan Dokumentasi</label>
                                <div class="upload-image-wrapper d-flex align-items-center gap-3 flex-wrap">
                                    <div class="uploaded-imgs-container d-flex gap-3 flex-wrap"></div>
                                    <label class="upload-file-multiple h-120-px w-120-px border input-form-light radius-8 overflow-hidden border-dashed bg-neutral-50 bg-hover-neutral-200 d-flex align-items-center flex-column justify-content-center gap-1" for="upload-file-multiple">
                                        <iconify-icon icon="solar:camera-outline" class="text-xl text-secondary-light"></iconify-icon>
                                        <span class="fw-semibold text-secondary-light">Unggah</span>
                                        <input id="upload-file-multiple" type="file" hidden multiple>
                                    </label>
                                </div>
                            </div>

                            <div class="col-12 mb-4">
                                <label class="form-label">Keterangan laporan</label>
                                <textarea id="summernote" name="editordata"></textarea>
                            </div>


                            <div class="col-12 mb-4 mt-3">
                                <button type="submit" class="btn btn-primary-600">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection