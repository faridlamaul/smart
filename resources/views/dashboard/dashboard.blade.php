@extends('dashboard.layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Dashboard</h3>
                    </div>
                    <div class="card-body">
                        @if (session('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong>Success!</strong> {{ session('success') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @elseif ($errors->any())
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <strong>Failed!</strong> Silahkan ulangi kembali
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif
                        <div class="table-responsive">
                            <div class="table-wrapper">
                                <div class="table-title">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <div class="show-entries">
                                            </div>
                                        </div>
                                        <div class="col-sm-5">
                                            <h2 class="text-center">Data Hasil Pemeriksaan Tangki</h2>
                                        </div>
                                        <div class="col-sm-4">

                                        </div>
                                    </div>
                                </div>
                                <table class="table table-bordered" id="table_id">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Pemilik Kendaraan</th>
                                            <th>Nomor Plat TNKB</th>
                                            {{-- <th>File Hasil Pemeriksaan</th> --}}
                                            <th>Keterangan</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($datas as $data)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $data->nama_pemilik_kendaraan }}</td>
                                                <td>{{ $data->no_plat_tnkb }}</td>
                                                {{-- <td>{{ $data->file_hasil_pemeriksaan }}</td> --}}
                                                <td>{{ $data->keterangan }}</td>
                                                <td>
                                                    <a href="{{ url('dashboard/viewPDF/' . $data->id) }}" class="view"
                                                        title="View" data-toggle="tooltip"><i
                                                            class="material-icons">&#xE417;</i></a>
                                                    <a href="#" class="edit" title="Edit" data-toggle="modal"
                                                        data-target="#modal-edit-{{ $data->id }}"><i
                                                            class="material-icons">create</i></a>
                                                    <a href="#" class="delete" title="Delete" data-toggle="modal"
                                                        data-target="#modal-delete-{{ $data->id }}"><i
                                                            class="material-icons">delete</i></a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                @foreach ($datas as $data)
                                    <div class="modal fade" id="modal-edit-{{ $data->id }}" tabindex="-1"
                                        role="dialog" aria-labelledby="modal-edit-{{ $data->id }}Label"
                                        aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="modal-edit-{{ $data->id }}Label">Edit
                                                        Data - {{ $data->nama_pemilik_kendaraan }}</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <form action="{{ url('dashboard/data/edit/' . $data->id) }}"
                                                    method="POST" enctype="multipart/form-data">
                                                    @csrf
                                                    @method('PUT')
                                                    <div class="modal-body">
                                                        <div class="form-group">
                                                            <label for="nama_pemilik_kendaraan">Nama Pemilik
                                                                Kendaraan</label>
                                                            <input name="nama_pemilik_kendaraan" type="text"
                                                                class="form-control" id="nama_pemilik_kendaraan"
                                                                placeholder="Nama Pemilik Kendaraan"
                                                                value="{{ $data->nama_pemilik_kendaraan }}">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="no_plat_tnkb">Nomor Plat TNKB</label>
                                                            <input name="no_plat_tnkb" type="text" class="form-control"
                                                                id="no_plat_tnkb" placeholder="Nomor Plat TNKB"
                                                                value="{{ $data->no_plat_tnkb }}">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="file_hasil_pemeriksaan">File Hasil
                                                                Pemeriksaan</label>
                                                            <input name="file_hasil_pemeriksaan" type="file"
                                                                id="file_hasil_pemeriksaan"
                                                                placeholder="File Hasil Pemeriksaan"
                                                                value="{{ public_path('/FileHasilPemeriksaan/' . $data->file_hasil_pemeriksaan) }}">
                                                            <input class="form-control" type="text"
                                                                placeholder="{{ $data->file_hasil_pemeriksaan }}"
                                                                disabled>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="keterangan">Keterangan</label>
                                                            <select name="keterangan" class="form-control" id="keterangan">
                                                                <option @if ($data->keterangan == 'Lulus') selected @endif
                                                                    value="Lulus">Lulus</option>
                                                                <option @if ($data->keterangan == 'Tidak Lulus') selected @endif
                                                                    value="Tidak Lulus">Tidak Lulus</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-primary">Update</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal fade" id="modal-delete-{{ $data->id }}" tabindex="-1"
                                        role="dialog" aria-labelledby="modal-delete-{{ $data->id }}Label"
                                        aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="modal-delete-{{ $data->id }}Label">
                                                        Delete Data - {{ $data->nama_pemilik_kendaraan }}</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <p>Apakah anda yakin ingin menghapus data ini?</p>
                                                </div>
                                                <div class="modal-footer">
                                                    <form action="{{ url('dashboard/data/delete/' . $data->id) }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="button" class="btn btn-secondary"
                                                            data-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-danger">Delete</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                <div class="clearfix">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
