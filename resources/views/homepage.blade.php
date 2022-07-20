<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Homepage | SMART</title>
    <link rel="icon" type="image/x-icon" href="/images/logo.png">

    <!-- Font Awesome icons (free version)-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900"
        rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i"
        rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="https://startbootstrap.github.io/startbootstrap-one-page-wonder/css/styles.css" rel="stylesheet" />

    <style>
        body {
            color: #3b61d1;
            background: #f5f5f5;
            font-family: 'Roboto', sans-serif;
        }

        .table-responsive {
            margin: 30px 0;
        }

        .table-wrapper {
            min-width: 1000px;
            background: #fff;
            padding: 20px;
            box-shadow: 0 1px 1px rgba(0, 0, 0, .05);
        }

        .table-title {
            font-size: 15px;
            padding-bottom: 10px;
            margin: 0 0 10px;
            min-height: 45px;
        }

        .table-title h2 {
            margin: 5px 0 0;
            font-size: 24px;
        }

        .table-title select {
            border-color: #ddd;
            border-width: 0 0 1px 0;
            padding: 3px 10px 3px 5px;
            margin: 0 5px;
        }

        .table-title .show-entries {
            margin-top: 7px;
        }

        .search-box {
            position: relative;
            float: right;
        }

        .search-box .input-group {
            min-width: 200px;
            position: absolute;
            right: 0;
        }

        .search-box .input-group-addon,
        .search-box input {
            border-color: #ddd;
            border-radius: 0;
        }

        .search-box .input-group-addon {
            border: none;
            border: none;
            background: transparent;
            position: absolute;
            z-index: 9;
        }

        .search-box input {
            height: 34px;
            padding-left: 28px;
            box-shadow: none !important;
            border-width: 0 0 1px 0;
        }

        .search-box input:focus {
            border-color: #3FBAE4;
        }

        .search-box i {
            color: #a0a5b1;
            font-size: 19px;
            position: relative;
            top: 8px;
        }

        table.table tr th,
        table.table tr td {
            border-color: #e9e9e9;
        }

        table.table th i {
            font-size: 13px;
            margin: 0 5px;
            cursor: pointer;
        }

        table.table td:last-child {
            width: 130px;
        }

        table.table td a {
            color: #a0a5b1;
            display: inline-block;
            margin: 0 5px;
        }

        table.table td a.view {
            color: #03A9F4;
        }

        table.table td a.edit {
            color: #FFC107;
        }

        table.table td a.delete {
            color: #E34724;
        }

        table.table td i {
            font-size: 19px;
        }

        .pagination {
            float: right;
            margin: 0 0 5px;
        }

        .pagination li a {
            border: none;
            font-size: 13px;
            min-width: 30px;
            min-height: 30px;
            padding: 0 10px;
            color: #999;
            margin: 0 2px;
            line-height: 30px;
            border-radius: 30px !important;
            text-align: center;
        }

        .pagination li a:hover {
            color: #666;
        }

        .pagination li.active a {
            background: #03A9F4;
        }

        .pagination li.active a:hover {
            background: #0397d6;
        }

        .pagination li.disabled i {
            color: #ccc;
        }

        .pagination li i {
            font-size: 16px;
            padding-top: 6px
        }

        .hint-text {
            float: left;
            margin-top: 10px;
            font-size: 13px;
        }
    </style>

</head>

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top" style="background-color: #3b61d1">
        <div class="container px-0">
            <a class="navbar-brand" href="{{ url('/') }}">SMART</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span
                    class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                    @guest
                        <li class="nav-item"><a class="nav-link" href="{{ url('/login') }}" style="color: white">Login</a>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>
    <!-- Header-->
    <header class="masthead text-center text-white"
        style="
            background-image: url('/images/bg.jpg'); 
            background-position-y: -730px;
            background-size: cover;
            background-repeat: no-repeat;
            margin-bottom: 50px;
            ">
        <div class="masthead-content">
            <div class="container px-5">
                <h1 class="masthead-heading mb-0">Selamat Datang</h1>
                <h2 class="masthead-subheading mb-0">Sistem Informasi Hasil Pemeriksaan Tangki</h2>
                <a class="btn btn-primary btn-xl rounded-pill mt-5" href="#scroll">Learn More</a>
            </div>
        </div>
        <div class="bg-circle-3 bg-circle"
            style="
                            height: 20rem;
                            width: 20rem;
                            bottom: -10rem;
                            left: 85%;
                            ">
        </div>
        <div class="bg-circle-4 bg-circle"
            style="
                            height: 20rem;
                            width: 20rem;
                            top: -5rem;
                            right: 85%;
                            ">
        </div>
    </header>
    <!-- Content section 1-->
    <section id="scroll">
        <div class="container-xl">
            <div class="table-responsive">
                <div class="table-wrapper">
                    <div class="table-title">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="show-entries">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <h2 class="text-center">Data Hasil Pemeriksaan Tangki</h2>
                            </div>
                            <div class="col-sm-4">
                                {{-- <div class="search-box">
                                    <div class="input-group">
                                        <form action="">
                                        <span class="input-group-addon"><i class="material-icons">&#xE8B6;</i></span>
                                        <input name="search" type="text" class="form-control"
                                            placeholder="Search&hellip;">
                                        <button hidden type="button"></button> 
                                        </form> 
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                    <table class="table table-bordered" id="table_id">
                        <thead>
                            <th>No</th>
                            <th>Nama Pemilik Kendaraan</th>
                            <th>Nomor Plat TNKB</th>
                            {{-- <th>File Hasil Pemeriksaan</th> --}}
                            <th>Keterangan</th>
                            <th>Actions</th>
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
                                        <a href="{{ url('viewPDF/' . $data->id) }}" class="view" title="View"
                                            data-toggle="tooltip"><i class="material-icons">&#xE417;</i></a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="clearfix">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Content section 2-->

    <!-- Footer-->
    <footer class="py-5" style="background-color: #3b61d1">
        <div class="container px-5">
            <p class="m-0 text-center text-white small">Copyright &copy; SMART 2022</p>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="https://startbootstrap.github.io/startbootstrap-one-page-wonder/js/scripts.js"></script>

    <script>
        $(document).ready(function() {
            $('#table_id').DataTable({
                paging: false
            });
        });
    </script>
</body>

</html>
