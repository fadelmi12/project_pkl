@extends('layout.master')
@section('title', 'Data Jenis')
@section('content')

<!-- Main Content -->
<div class="page-wrapper">
    <div class="container-fluid">

        <head>
            <meta charset="UTF-8" />
            <meta name="viewport" content="width=device-width, initial-scale=1.0, maximu m-scale=1.0, user-scalable=no" />
            <title>Inventory</title>
            <meta name="description" content="Doodle is a Dashboard & Admin Site Responsive Template by hencework." />
            <meta name="keywords" content="admin, admin dashboard, admin template, cms, crm, Doodle Admin, Doodleadmin, premium admin templates, responsive admin, sass, panel, software, ui, visualization, web app, application" />
            <meta name="author" content="hencework" />

            <head>
                <meta charset="UTF-8" />
                <meta name="viewport" content="width=device-width, initial-scale=1.0, maximu m-scale=1.0, user-scalable=no" />
                <title>Inventory</title>
                <meta name="description" content="Doodle is a Dashboard & Admin Site Responsive Template by hencework." />
                <meta name="keywords" content="admin, admin dashboard, admin template, cms, crm, Doodle Admin, Doodleadmin, premium admin templates, responsive admin, sass, panel, software, ui, visualization, web app, application" />
                <meta name="author" content="hencework" />

                <!-- Title -->
                <div class="row heading-bg">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h5 class="txt-dark">edit data supplier</h5>
                    </div>
                    <!-- Breadcrumb -->
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <ol class="breadcrumb">
                            <!-- <li><a href="index.html">master data</a></li> -->
                            <li><a href="#"><span>data supplier</span></a></li>
                            <li class="active"><span>edit data supplier</span></li>
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
                                        <form action="{{ url('updateSup') }}" method="post" role="form" autocomplete="off">
                                            {{ csrf_field() }}
                                            <div class="modal-body">
                                                <div class="form-group">
                                                    <input type="hidden" value="{{ $data_supplier->id_supplier }}" name="edit_id_sup">
                                                    <label class="control-label mb-10 text-left" for="example-email">Kode Supplier <span class="help"> </span></label>
                                                    <input type="text" value="{{ $data_supplier->kode_supplier }}" name="edit_kode" class="form-control" placeholder="">
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label mb-10 text-left" for="example-email">Nama Supplier <span class="help"> </span></label>
                                                    <input type="text" value="{{ $data_supplier->nama_supplier }}" name="edit_nama" class="form-control" placeholder="">
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label mb-10 text-left" for="example-email">Email Supplier <span class="help"> </span></label>
                                                    <input type="email" value="{{ $data_supplier->email_supplier }}" name="edit_email" class="form-control" placeholder="">
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label mb-10 text-left">Alamat</label>
                                                    <textarea value="{{ $data_supplier->alamat_supplier }}" name="edit_alamat" class="form-control" rows="3"></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label mb-10 text-left" for="example-email">PIC Supplier <span class="help"> </span></label>
                                                    <input type="text" value="{{ $data_supplier->pic_supplier }}" name="edit_pic" class="form-control" placeholder="">
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label mb-10 text-left" for="example-email">No HP Supplier <span class="help"> </span></label>
                                                    <input type="number" value="{{ $data_supplier->telp_supplier }}" name="edit_no" class="form-control" placeholder="">
                                                </div>
                                                <div class="form-group">
                                                    <button class="btn btn-primary">Simpan</button>
                                                    <button class="btn btn-danger" name="reset" type="reset">Batal
                                                    </button>
                                                </div>
                                        </form>

                                    </div>
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