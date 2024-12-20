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
                        <!-- <form action="{{route('laporan.store')}}" method="post" enctype="multipart/form-data">
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

                            

                            <div class="col-md-6">
                                <div class="card h-100 p-0">
                                    <div class="card-header border-bottom bg-base py-16 px-24">
                                        <h6 class="text-lg fw-semibold mb-0">Upload With image preview</h6>
                                    </div>
                                    <div class="card-body p-24">

                                        <div class="upload-image-wrapper d-flex align-items-center gap-3 flex-wrap">
                                            <div class="uploaded-imgs-container d-flex gap-3 flex-wrap"></div>

                                            <label class="upload-file-multiple h-120-px w-120-px border input-form-light radius-8 overflow-hidden border-dashed bg-neutral-50 bg-hover-neutral-200 d-flex align-items-center flex-column justify-content-center gap-1" for="upload-file-multiple">
                                                <iconify-icon icon="solar:camera-outline" class="text-xl text-secondary-light"></iconify-icon>
                                                <span class="fw-semibold text-secondary-light">Upload</span>
                                                <input id="upload-file-multiple" type="file" hidden multiple>
                                            </label>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="col-12 mb-4">
                                <label class="form-label">Keterangan laporan</label>
                                <textarea id="summernote" name="editordata"></textarea>
                            </div>


                            <div class="col-12 mb-4 mt-3">
                                <button type="submit" class="btn btn-primary-600">Submit</button>
                            </div>
                        </form> -->
                        <form action="#" class="d-flex flex-column gap-20">
                            <div>
                                <label class="form-label fw-bold text-neutral-900" for="title">Post Title: </label>
                                <input type="text" class="form-control border border-neutral-200 radius-8" id="title"
                                    placeholder="Enter Post Title">
                            </div>
                            <div>
                                <label class="form-label fw-bold text-neutral-900">Post Category: </label>
                                <select class="form-control border border-neutral-200 radius-8">
                                    <option value="">Technology</option>
                                    <option value="">Business</option>
                                    <option value="">Course</option>
                                    <option value="">Fashion</option>
                                </select>
                            </div>

                            <div>
                                <label class="form-label fw-bold text-neutral-900">Upload Thumbnail </label>
                                <div class="upload-image-wrapper">
                                    <div
                                        class="uploaded-img d-none position-relative h-160-px w-100 border input-form-light radius-8 overflow-hidden border-dashed bg-neutral-50">
                                        <button type="button"
                                            class="uploaded-img__remove position-absolute top-0 end-0 z-1 text-2xxl line-height-1 me-8 mt-8 d-flex bg-danger-600 w-40-px h-40-px justify-content-center align-items-center rounded-circle">
                                            <iconify-icon icon="radix-icons:cross-2" class="text-2xl text-white"></iconify-icon>
                                        </button>
                                        <img id="uploaded-img__preview" class="w-100 h-100 object-fit-cover" src="assets/images/user.png"
                                            alt="image">
                                    </div>
                                    <label
                                        class="upload-file h-160-px w-100 border input-form-light radius-8 overflow-hidden border-dashed bg-neutral-50 bg-hover-neutral-200 d-flex align-items-center flex-column justify-content-center gap-1"
                                        for="upload-file">
                                        <iconify-icon icon="solar:camera-outline" class="text-xl text-secondary-light"></iconify-icon>
                                        <span class="fw-semibold text-secondary-light">Upload</span>
                                        <input id="upload-file" type="file" hidden>
                                    </label>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary-600 radius-8">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection