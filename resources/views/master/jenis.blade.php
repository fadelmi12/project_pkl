@extends('layout.master')
@section('title', 'Data Jenis')
@section('content')

<!-- Main Content -->
<div class="page-wrapper">
    <div class="container-fluid">
        
        <!-- Title -->
        <div class="row heading-bg">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h5 class="txt-dark">Data jenis barang</h5>
            </div>
            <!-- Breadcrumb -->
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                <ol class="breadcrumb">
                    <li><a href="#"><span>Master Data</span></a></li>
                    <li class="active"><span>Jenis barang</span></li>
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
                            <a href="jenis/addjenis" class="btn btn-success">Tambah baru
                            </a>
                        </p>
                        {{-- @if(Session::has('success'))
                            <div class="alert alert-success" role="alert">
                                {{ Session('success') }}
                            </div> 
                            @endif --}}
                        <div class="clearfix">
                            
                        </div>
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
                                                <th>Jenis barang</th>
                                                <th>Keterangan</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $no = 1; ?>
                                            @foreach ($data_jenis as $data_jenis)
                                            <tr>
                                                <td>{{ $no++ }}</td>
                                                <td>{{ $data_jenis->jenis_barang }}</td>
                                                <td>{{ $data_jenis->keterangan }}</td>
                                                <td>
                                                    <a href="/jenis/editJenis/{{ $data_jenis->id_jenis }}"><button class="btn btn-success btn-icon-anim btn-square"><i class="fa fa-edit"></i></button></a>
                                                    <button class="btn btn-danger btn-icon-anim btn-square" data-toggle="modal" data-target="#hapusjns{{ $data_jenis->id_jenis }}" onclick="setEditForm( {{url('deletejenis')}}/{{ $data_jenis->id_jenis }})"><i class="fa fa-trash"></i></button>
                                                    <div class="modal fade" id="hapusjns{{ $data_jenis->id_jenis }}" role="dialog" aria-labelledby="exampleModalLabel1">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                                    <h5 class="modal-title" id="exampleModalLabel1">Hapus</h5>
                                                                </div>
                                                                <form action="{{ url('deletejenis') }}/{{ $data_jenis->id_jenis }}" class="modal-body" method="post">
                                                                    {{ csrf_field() }}
                                                                    {{ method_field('DELETE') }}
                                                                    <div class="container">
                                                                        <h6 class="mb-15">{{ $data_jenis->id_jenis }}</h6>
                                                                    </div>
                                                    
                                                                    {{-- <div class="form-group">
                                                                        <input type="hidden" id="id_master" name="id_master">
                                                                        <label class="control-label mb-10 text-left" for="example-email">Kode kategori <span class="help"> </span></label>
                                                                        <input type="text" id="id_master" name="id_master" class="form-control" placeholder="">
                                                                    </div> --}}
                                                    
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                                                                        <button type="submit" class="btn btn-primary">Ya</button>
                                                                    </div>
                                                                </form>
                                                    
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal -->

            <!-- /Main Content -->
        </div>
    @endsection