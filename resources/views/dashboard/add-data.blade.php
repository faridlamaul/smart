@extends('dashboard.layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Tambah Data Hasil Pemeriksaan</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('dashboard/data/add') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @if (session('success'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <strong>Success!</strong> {{ session('success') }}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @elseif ($errors->any())
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <strong>Failed!</strong> Data Gagal Ditambahkan
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                {{-- <div class="alert alert-danger">
                                    Data Gagal Ditambahkan, Silahkan Cek Kembali Data Anda
                                </div> --}}
                            @endif
                            <div class="form-group">
                                <label for="nama-pemilik-kendaraan">Nama Pemilik Kendaraan</label>
                                <input name="nama_pemilik_kendaraan" type="text" class="form-control"
                                    id="nama-pemilik-kendaraan" placeholder="Nama Pemilik Kendaraan">
                            </div>
                            <div class="form-group">
                                <label for="nomor-plat-tnkb">Nomor Plat TNKB </label>
                                <input name="no_plat_tnkb" type="text" class="form-control" id="nomor-plat-tnkb"
                                    placeholder="Nomor Plat TNKB">
                            </div>
                            <div class="form-group">
                                <label for="file-hasil-pemeriksaan">File Hasil Pemeriksaan</label>
                                <input name="file_hasil_pemeriksaan" type="file" class="form-control-file"
                                    id="file-hasil-pemeriksaan">
                            </div>
                            <div class="form-group">
                                <label for="keterangan">Keterangan</label>
                                <select name="keterangan" class="form-control" id="keterangan">
                                    <option value="Lulus">Lulus</option>
                                    <option value="Tidak Lulus">Tidak Lulus</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
