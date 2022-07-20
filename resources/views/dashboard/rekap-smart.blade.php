@extends('dashboard.layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Rekap Data Hasil Pemeriksaan</h3>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <div class="table-wrapper">
                                <div class="table-title">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="eksport-excel">
                                                <div class="input-group">
                                                    <form action="https://www.jotform.com/tables/213524945584463">
                                                        @csrf
                                                        <button type="submit" class="btn btn-success">Export Data
                                                            Rekap</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <table class="table table-bordered">
                                    <thead>
                                        <th>No</th>
                                        <th>Nama Pemilik Kendaraan</th>
                                        <th>Nomor Plat TNKB</th>
                                        <th>File Hasil Pemeriksaan</th>
                                        <th>Keterangan</th>
                                    </thead>
                                    <tbody>
                                        @foreach ($datas as $data)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $data->nama_pemilik_kendaraan }}</td>
                                                <td>{{ $data->no_plat_tnkb }}</td>
                                                {{-- <td>{{ $data->file_hasil_pemeriksaan }}</td> --}}
                                                <td>
                                                    <a href="{{ url('dashboard/viewPDF/' . $data->id) }}" class="view"
                                                        title="View" data-toggle="tooltip"><i
                                                            class="material-icons">&#xE417;</i></a>
                                                </td>
                                                <td>{{ $data->keterangan }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
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
