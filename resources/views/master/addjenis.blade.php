<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>Inventory</title>
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
        <!-- /Right Sidebar Menu -->

        <!-- Main Content -->
        <div class="page-wrapper">
            <div class="container-fluid">

                <!-- Title -->
                <div class="row heading-bg">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h5 class="txt-dark">tambah jenis barang</h5>
                    </div>
                    <!-- Breadcrumb -->
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <ol class="breadcrumb">
                            <li><a href="index.html">master data</a></li>
                            <li><a href="#"><span>jenis barang</span></a></li>
                            <li class="active"><span>tambah jenis barang</span></li>
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
                                        <form action="{{ url('addjenis2') }}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-group">
                                                <label class="control-label mb-10 text-left" for="example-email">Jenis barang <span class="help"> </span></label>
                                                <input type="text" id="jenis" name="jenis" class="form-control" placeholder="">
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label mb-10 text-left" for="example-email">Keterangan <span class="help"> </span></label>
                                                <input type="text" id="keterangan" name="keterangan" class="form-control" placeholder="">
                                            </div>
                                            <div class="form-group-justified">
                                                <label class=" col-md-2 control-label"></label>
                                                <div style=" margin-right:10px; margin-top:30px ">
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
            @include('layout.footer')
            @include('layout.javascript')
</body>

</html>