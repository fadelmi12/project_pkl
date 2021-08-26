@extends('layout.master')
@section('title', 'Data Peminjaman')
@section('content')

<!-- Main Content -->
<div class="page-wrapper">
    <div class="container-fluid">

        <!-- Title -->
        <div class="row heading-bg">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h5 class="txt-dark">Data peminjaman</h5>
            </div>
            <!-- Breadcrumb -->
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                <ol class="breadcrumb">
                    <!-- <li><a href="#"><span>Master Data</span></a></li> -->
                    <li class="active"><span>Data peminjaman</span></li>
                </ol>
            </div>
            <!-- /Breadcrumb -->
        </div>
        <!-- /Title -->

        <!-- Row -->
        <div class="row">
            <div class="col-sm-14">
                <div class="panel panel-default card-view">
                    <div class="panel-heading">
                        <p>
                            <a href="peminjaman/addpinjam" class="btn btn-success"> Tambah Data</a>

                        </p>
                        <div class="clearfix"></div>

                        <div class="panel-wrapper collapse in">
                            <div class="panel-body">
                                <div class="table-wrap">
                                    <div class="table-responsive">
                                        <table id="datable_1" class="table table-bordered display pb-30">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Nama</th>
                                                    <th>kebutuhan</th>
                                                    <th>Tanggal Pinjam</th>
                                                    <th>Tanggal kembali</th>
                                                    <th>Aksi</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $no = 1; ?>
                                                @foreach($peminjaman as $peminjaman)
                                                <tr>
                                                    <td>{{ $no++ }}</td>
                                                    <td>{{ $peminjaman->pic_teknisi }}</td>
                                                    <td>{{ $peminjaman->kebutuhan }}</td>
                                                    <td>{{ $peminjaman->created_at }}</td>
                                                    <td>{{ $peminjaman->tglKembali }}</td>
                                                    <td>
                                                        <a href="/peminjaman/editpinjam/{{ $peminjaman->id_peminjaman }}"><button class="btn btn-success btn-icon-anim btn-square"><i class="fa fa-edit"></i></button></a>
                                                        <button class="btn btn-danger btn-icon-anim btn-square" data-toggle="modal" data-target="#hapus{{ $peminjaman->id_peminjaman }}"><i class="fa fa-trash"></i></button>
                                                    </td>
                                                    @include('peminjaman.hapus')
                                                </tr>
                                                @endforeach
                                            </tbody>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Main Content -->
        </div>
        <!-- /#wrapper -->
        @endsection
