@extends('layout.master')
@section('title', 'Data Jenis')
@section('content')

<!-- Main Content -->
<div class="page-wrapper">
    <div class="container-fluid">

        <!-- Title -->
        <div class="row heading-bg">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h5 class="txt-dark">edit jenis barang</h5>
            </div>
            <!-- Breadcrumb -->
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                <ol class="breadcrumb">
                    <li><a href="index.html">master data</a></li>
                    <li><a href="#"><span>jenis barang</span></a></li>
                    <li class="active"><span>edit jenis barang</span></li>
                </ol>
            </div>
            <!-- /Breadcrumb -->
        </div>
        <!-- /Title -->

        <!-- Row -->
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-default card-view ">
                    <!-- <div class="panel-heading">
                                <div class="clearfix"></div>
                            </div> -->
                    <div class="panel-wrapper collapse in ">
                        <div class="panel-body">
                            <div class="form-wrap mt-3">
                                <form action="{{ url('updateJenis') }}" method="post" role="form" autocomplete="off">
                                    {{ csrf_field() }}
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <input type="hidden" value="{{ $data_jenis->id_jenis }}" name="edit_id_jenis">
                                            <label class="control-label mb-10 text-left" for="example-email">Jenis <span class="help"> </span></label>
                                            <input type="text" value="{{ $data_jenis->jenis_barang }}" name="edit_jenis" class="form-control" placeholder="">
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label mb-10 text-left" for="example-email">Keterangan <span class="help"> </span></label>
                                            <input type="text" value="{{ $data_jenis->keterangan }}" name="edit_keterangan" class="form-control" placeholder="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button class="btn btn-primary">Simpan</button>
                                        <button class="btn btn-danger  " name="reset" type="reset">Batal
                                        </button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Row -->
        <!-- /Main Content -->
    </div>
    <!-- /#wrapper -->
    @endsection