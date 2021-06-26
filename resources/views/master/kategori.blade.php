@extends('layout.master')
@section('title', 'Data Kategori')
@section('content')

<!-- Main Content -->
<div class="page-wrapper">
    <div class="container-fluid">

        <!-- Title -->
        <div class="row heading-bg">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h5 class="txt-dark">Data kategori</h5>
            </div>
            <!-- Breadcrumb -->
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                <ol class="breadcrumb">
                    <li><a href="#"><span>Master Data</span></a></li>
                    <li class="active"><span>Data kategori</span></li>
                </ol>
            </div>
            <!-- /Breadcrumb -->
        </div>
        <!-- /Title -->

        <!-- Row -->
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-default card-view">
                    <div class="panel-heading">
                        <p>
                            <a href="kategori/addkategori" class="btn btn-success">Tambah baru
                            </a>
                        </p>
                        <div class="clearfix"></div>
                        <div id="myTable1_wrapper" class="dataTables_wrapper">
                            <div class="dataTables_length" id="myTable1_length"><label>Show <select name="myTable1_length" aria-controls="myTable1" class="">
                                        <option value="10">10</option>
                                        <option value="25">25</option>
                                        <option value="50">50</option>
                                        <option value="100">100</option>
                                    </select> entries</label></div>
                            <div id="myTable1_filter" class="dataTables_filter"><label>Search:<input type="search" class="" placeholder="" aria-controls="myTable1"></label></div>
                            <table id="myTable1" class="table table-hover display dataTable dtr-inline" role="grid" aria-describedby="myTable1_info" style="width: 1253px;">
                        </div>
                    </div>

                    <div class="panel-wrapper collapse in">
                        <div class="panel-body">
                            <div class="table-wrap">
                                <div class="">
                                    <table id="myTable1" class="table table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Kode kategori</th>
                                                <th>Kategori</th>
                                                <th>Keterangan</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $no = 1; ?>
                                            @foreach ($data_kategori as $data_kategori)
                                            <tr>
                                                <td>{{ $no++ }}</td>
                                                <td>{{ $data_kategori->kode_kategori }}</td>
                                                <td>{{ $data_kategori->kategori }}</td>
                                                <td>{{ $data_kategori->keterangan }}</td>
                                                <td>
                                                    <a href="/kategori/editKategori/{{ $data_kategori->id_kategori }}"><button class="btn btn-success btn-icon-anim btn-square"><i class="fa fa-edit"></i></button></a>
                                                    <button class="btn btn-danger btn-icon-anim btn-square" data-toggle="modal" data-target="#hapusktg" onclick="setEditForm( {{url('deletektg')}}/{{ $data_kategori->id_kategori }})"><i class="fa fa-trash"></i></button>
                                                </td>
                                            </tr>
                                            @include('master.hapusktg')
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Main Content -->
        </div>
        @endsection