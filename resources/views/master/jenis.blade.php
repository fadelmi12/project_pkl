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
                                                        <td>{{ $data_jenis->jenis }}</td>
                                                        <td>{{ $data_jenis->keterangan }}</td>
                                                        <td>
                                                            <!-- <a href="jenis/editjenis" class="btn btn-success btn-icon-anim btn-square "><i class="fa fa-edit"></i></a> -->
                                                            <button class="btn btn-success btn-icon-anim btn-square" data-toggle="modal" data-target="#editjns" onclick="setEditForm('{{ $data_jenis->id_jenis }}', '{{ $data_jenis->jenis }}', '{{ $data_jenis->keterangan }}')"><i class="fa fa-edit"></i></button>
                                                            <button class="btn btn-danger btn-icon-anim btn-square" href="delete" onclick="return confirm('Yakin ingin menghapus data ini?')"><i class="fa fa-trash-o"></i> </button>
                                                        </td>
                                                    </tr>
                                                    @include('master.editjns')
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
                <script type="text/javascript">
                function setEditForm(id_jenis, jenis, keterangan) {
                    document.getElementById('edit_id_jenis').value = id_jenis;
                    document.getElementById('edit_jenis').value = jenis;
                    document.getElementById('edit_keterangan').value = keterangan;
                }
                </script>
                <!-- /#wrapper -->

                @include('layout.javascript')
                @include('layout.footer')
</body>

</html>
