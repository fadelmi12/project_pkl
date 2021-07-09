@extends('layout.master')
@section('title', 'Data Barang')
@section('content')

<!-- Main Content -->
<div class="page-wrapper">
    <div class="container-fluid">

        <!-- Title -->
        <div class="row heading-bg">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h5 class="txt-dark">tambah data barang</h5>
            </div>
            <!-- Breadcrumb -->
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                <ol class="breadcrumb">
                    <li><a href="index.html">master data</a></li>
                    <li><a href="#"><span>jenis barang</span></a></li>
                    <li class="active"><span>tambah data barang</span></li>
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
                                <form action="{{ url('addbarang2') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label class="control-label mb-10 text-left">Kode<span class="help"> Kategori</span></label>
                                        <select name="kode_kategori" id="kode_kategori" class="form-control select2">
                                            @foreach($kategori as $ktg)
                                            <option value="{{ $ktg->kode_kategori }}">{{ $ktg->kode_kategori }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group" >
                                        <label class="control-label mb-10 text-left">Nama barang <span class="help"> </span></label>
                                        <input type="text" class="form-control" name="nama_barang" id="nama_barang">
                                    @error('nama_barang')
                                        <div class="alert alert-danger">{{$message}}</div>
                                    @enderror
                                    </div>
                                    
                                    <div class="form-group">
                                        <label class="control-label mb-10 text-left">Jenis</label>
                                        <select name="jenis_barang" id="jenis_barang" class="form-control select2">
                                            @foreach($jenis as $jen)
                                            <option value="{{ $jen->jenis_barang }}">{{ $jen->jenis_barang }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label mb-10 text-left">Stok</label>
                                        <input type="text" class="form-control" name="stok" id="stok">
                                    @error('stok')
                                        <div >{{$message}}</div>
                                    @enderror
                                    </div>
                                    <div class="form-group mb-30">
                                        <label class="control-label mb-10 text-left">File upload</label>
                                        <input type="file" id="gambar" name="gambar">
                                    @error('gambar')
                                        <div class="alert alert-danger">{{$message}}</div>
                                    @enderror
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label mb-10 text-left">Status</label>
                                        <select name="status" id="status" class="form-control select2">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                        </select>
                                    </div>
                                    <div class="form-group-justified">
                                        <button class="btn btn-success mr-5" name="submit" type="submit">
                                            Simpan
                                        </button>
                                        <button class="btn btn-danger  " name="reset" type="reset">Batal
                                        </button>
                                    </div>
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