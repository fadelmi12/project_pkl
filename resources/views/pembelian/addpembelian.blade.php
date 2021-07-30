@extends('layout.master')
@section('title', 'Data Pembelian')
@section('content')

<!-- Main Content -->
<div class="page-wrapper">
    <div class="container-fluid">
        <!-- Title -->
        <div class="row heading-bg">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h5 class="txt-dark">Tambah Data Pembelian</h5>
            </div>
        </div>
        <!-- Row -->
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-default card-view">
                    <div class="panel-heading">
                        <form action="{{ url('addPembelian') }}" method="post" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group">
                                <label class="control-label mb-10 text-left" for="example-email">No PO <span class="help"> </span></label>
                                <input type="text" id="noPO" name="noPO" class="form-control" placeholder="">
                            </div>
                            <div class="form-group">
                                <label class="control-label mb-10 text-left">Tanggal beli<span class="help"> </span></label>
                                <input type="date" id="tgl_beli" name="tgl_beli" class="form-control" placeholder="">
                            </div>
                            <div class="form-group">
                                <label class="control-label mb-10 text-left" for="example-email">Nama barang <span class="help"> </span></label>
                                <input type="text" id="nama_barang" name="nama_barang" class="form-control" placeholder="">
                            </div>
                            <div class="form-group">
                                <label class="control-label mb-10 text-left">Harga beli</label>
                                <input type="text" id="harga_beli" name="harga_beli" class="form-control" value="">
                            </div>
                            <div class="form-group">
                                <label class="control-label mb-10 text-left">Jumlah</label>
                                <input type="number" id="jumlah_beli" name="jumlah_beli" class="form-control" rows="3"></textarea>
                            </div>

                            <div class="form-group">
                                <button class="btn btn-success mr-5" name="submit" type="submit">Simpan</button>
                                <button class="btn btn-danger  " name="reset" type="reset">Batal
                                </button>
                            </div>
                        </form>
                    </div>
                    <!-- /Row -->
                </div>
            </div>
        </div>
        <!-- /Main Content -->
    </div>
    <!-- /#wrapper -->
    @endsection