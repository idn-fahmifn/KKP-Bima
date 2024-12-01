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
                        <form action="{{route('kirim-pengaduan')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="col-12 mb-4 mt-3">
                                <label class="form-label">Judul Laporan</label>
                                <input type="text" name="judul_laporan" class="form-control" required placeholder="Masukan judul laporan">
                                <input type="text" name="id_user" value="{{Auth::user()->id}}" class="form-control" hidden>
                            </div>
                            <div class="col-12 mb-4 mt-3">
                                <label class="form-label">Jenis Laporan</label>
                                <select name="jenis_laporan" class="form-control" required>
                                    <option value="">-Pilih Jenis Laporan-</option>
                                    <option value="perlu perbaikan">Perlu Perbaikan</option>
                                    <option value="perlu pengadaan">Perlu Pengadaan</option>
                                </select>
                            </div>

                            <div class="col-12 mb-4 mt-3">
                                <label class="form-label">Dokumentasi</label>
                                <input type="file" name="dokumentasi" class="form-control">
                            </div>

                            <div class="col-12 mb-4">
                                <label class="form-label">Keterangan laporan</label>
                                <textarea id="summernote" name="keterangan"></textarea>
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