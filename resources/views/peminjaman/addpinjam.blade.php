@extends('layout.master')
@section('title', 'Data Peminjaman')
@section('content')

<!-- Main Content -->
<div class="page-wrapper">
    <div class="container-fluid">
        <!-- Title -->
        <div class="row heading-bg">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h5 class="txt-dark">Tambah Data Peminjaman</h5>
            </div>
        </div>
        <!-- Row -->
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-default card-view">
                    <div class="panel-heading">
                        <form action="{{ url('addpinjam2') }}" method="post" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group">
                                <label class="control-label mb-10 text-left" for="example-email">Nama <span class="help"> </span></label>
                                <input type="text" id="nama" name="nama" class="form-control" placeholder="">
                            </div>
                            <div class="form-group">
                                <label class="control-label mb-10 text-left" for="example-email">Nama barang <span class="help"> </span></label>
                                <input type="text" id="nama_barang" name="nama_barang" class="form-control" placeholder="">
                            </div>
                            <div class="form-group">
                                <label class="control-label mb-10 text-left">Jumlah</label>
                                <input type="number" id="jumlah" name="jumlah" class="form-control" value="">
                            </div>
                            <div class="form-group">
                                <label class="control-label mb-10 text-left">Keterangan</label>
                                <input type="text" id="keterangan" name="keterangan" class="form-control" value="">
                            </div>
                            <div class="form-group">
                                <label class="control-label mb-10 text-left"> Tanggal Pinjam <span class="help"> </span></label>
                                <input type="date" id="tgl_pinjam" name="tgl_pinjam" class="form-control" placeholder="">
                            </div>
                            <!-- <div class="form-group">
                                <label class="control-label mb-10 text-left"> Tanggal Kembali <span class="help"> </span></label>
                                <input type="date" id="tgl_kembali" name="tgl_kembali" class="form-control" placeholder="">
                            </div>
                            <div class="form-group">
                                <label class="control-label mb-10 text-left">Status</label>
                                <select name="status" id="status" class="form-control select2">
                                    <option value="pinjam">Pinjam</option>
                                    <option value="dikembalikan">Dikembalikan</option>
                                </select>
                            </div> -->
                            <div class="form-group" style="text-align:right;">
                                <button class="btn btn-success" name="submit" type="submit">Simpan</button>
                                <!-- <button class="btn btn-danger  " name="reset" type="reset">Batal
                                </button> -->
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