<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>Data Supplier</title>
    <link rel="icon" href="{{asset('template')}}/dist/img/nakulasadewa1.png">
    <meta name="description" content="Doodle is a Dashboard & Admin Site Responsive Template by hencework." />
    <meta name="keywords" content="admin, admin dashboard, admin template, cms, crm, Doodle Admin, Doodleadmin, premium admin templates, responsive admin, sass, panel, software, ui, visualization, web app, application" />
    <meta name="author" content="hencework" />

    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Morris Charts CSS -->
    <link href="{{asset('template')}}/vendors/bower_components/morris.js/morris.css" rel="stylesheet" type="text/css" />

    <!-- Data table CSS -->
    <link href="{{asset('template')}}/vendors/bower_components/datatables/media/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />

    <link href="{{asset('template')}}/vendors/bower_components/jquery-toast-plugin/dist/jquery.toast.min.css" rel="stylesheet" type="text/css">

    <!-- Custom CSS -->
    <link href="{{asset('template')}}/dist/css/style.css" rel="stylesheet" type="text/css">
</head>

<body>
    <!-- Preloader -->
    <div class="preloader-it">
        <div class="la-anim-1"></div>
    </div>
    <!-- /Preloader -->
    <div class="wrapper theme-1-active box-layout pimary-color-red">
        <!-- Top Menu Items -->
        @include('layout.header')
        <!-- /Top Menu Items -->

        <!-- Left Sidebar Menu -->
        @include('layout.sidebar')
        <!-- /Left Sidebar Menu -->

        <!-- Main Content -->
        <div class="page-wrapper">
            <div class="container-fluid">
                <!-- Title -->
                <div class="row heading-bg">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h5 class="txt-dark">Tambah Data Supplier</h5>
                    </div>
                </div>
                <!-- Row -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="panel panel-default card-view">
                            <div class="panel-heading">
                    <form action="/supplier/insert" method="post">
                        <div class="form-group">
                            <label class="control-label mb-10 text-left">Kode<span class="help"> Supplier</span></label>
                            <input type="text" id="kode_supplier" name="kode_supplier"class="form-control" value="">
                        </div>
                        <div class="form-group">
                            <label class="control-label mb-10 text-left" for="example-email">Nama <span class="help"> </span></label>
                            <input type="text" id="nama_supplier" name="nama_supplier" class="form-control" placeholder="">
                        </div>
                        <div class="form-group">
                            <label class="control-label mb-10 text-left" for="example-email">Email <span class="help"> </span></label>
                            <input type="email" id="email_supplier" name="email_supplier" class="form-control" placeholder="">
                        </div>
                        <div class="form-group">
                            <label class="control-label mb-10 text-left">PIC Supplier</label>
                            <input type="text" id="pic_supplier" name="pic_supplier" class="form-control" value="">
                        </div>
                        <div class="form-group">
                            <label class="control-label mb-10 text-left">Alamat</label>
                            <textarea id="alamat_supplier" name="alamat_supplier" class="form-control" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <label class="control-label mb-10 text-left"> No HP <span class="help"> </span></label>
                            <input type="number" id="telp_supplier" name="telp_supplier" class="form-control" placeholder="">
                        </div>
                        <div class="form-group">
                        <button class="btn btn-primary">Simpan</button>
                        </div>
                        
                    </form>
                    
                </div>
                <!-- /Row -->
                 </div>
            </div>

            <!-- Footer -->
            @include('layout.footer')
            <!-- /Footer -->

        </div>
        <!-- /Main Content -->

    </div>
    <!-- /#wrapper -->

    <!-- JavaScript -->

    @include('layout.javascript')
</body>

</html>































<!-- <div class="modal fade" id="addsup" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h5 class="modal-title" id="exampleModalLabel1">Tambah</h5>
            </div>
            <div class="modal-body">
                <!-- <h6 class="mb-15">Apakah anda yakin mengubah status</h6> -->
                <!-- <form action="supplier" method="POST">
                    <div class="form-group">
                        <label class="control-label mb-10 text-left">Kode<span class="help"> Supplier</span></label>
                        <input type="text" id="kode_supplier" name="kode_supplier"class="form-control" value="">
                    </div>
                    <div class="form-group">
                        <label class="control-label mb-10 text-left" for="example-email">Nama <span class="help"> </span></label>
                        <input type="text" id="nama_supplier" name="nama_supplier" class="form-control" placeholder="">
                    </div>
                    <div class="form-group">
                        <label class="control-label mb-10 text-left" for="example-email">Email <span class="help"> </span></label>
                        <input type="email" id="email_supplier" name="email_supplier" class="form-control" placeholder="">
                    </div>
                    <div class="form-group">
                        <label class="control-label mb-10 text-left">PIC Supplier</label>
                        <input type="text" id="pic_supplier" name="pic_supplier" class="form-control" value="">
                    </div>
                    <div class="form-group">
                        <label class="control-label mb-10 text-left">Alamat</label>
                        <textarea id="alamat_supplier" name="alamat_supplier" class="form-control" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                        <label class="control-label mb-10 text-left"> No HP <span class="help"> </span></label>
                        <input type="number" id="telp_supplier" name="telp_supplier" class="form-control" placeholder="">
                    </div>

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                <button href="supplier/insert" type="button" class="btn btn-primary" data-dismiss="modal">Simpan</button>
            </div>
        </div>
    </div> -->