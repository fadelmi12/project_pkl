<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>Inventory System</title>
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
        <!-- /Right Sidebar Menu -->

        <!-- Main Content -->
        <div class="page-wrapper">
            <div class="container-fluid pt-25">

                <!-- Row -->
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="panel panel-default card-view pa-0">
                            <div class="panel-wrapper collapse in">
                                <div class="panel-body pa-0">
                                    <div class="sm-data-box bg-red">
                                        <div class="container-fluid">
                                            <div class="row">
                                                <div class="col-xs-6 text-center pl-0 pr-0 data-wrap-left">
                                                    <span class="txt-light block counter"><span class="counter-anim">914,001</span></span>
                                                    <span class="weight-500 uppercase-font txt-light block font-13">visits</span>
                                                </div>
                                                <div class="col-xs-6 text-center  pl-0 pr-0 data-wrap-right">
                                                    <i class="zmdi zmdi-male-female txt-light data-right-rep-icon"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="panel panel-default card-view pa-0">
                            <div class="panel-wrapper collapse in">
                                <div class="panel-body pa-0">
                                    <div class="sm-data-box bg-yellow">
                                        <div class="container-fluid">
                                            <div class="row">
                                                <div class="col-xs-6 text-center pl-0 pr-0 data-wrap-left">
                                                    <span class="txt-light block counter"><span class="counter-anim">46.41</span>%</span>
                                                    <span class="weight-500 uppercase-font txt-light block">bounce rate</span>
                                                </div>
                                                <div class="col-xs-6 text-center  pl-0 pr-0 data-wrap-right">
                                                    <i class="zmdi zmdi-redo txt-light data-right-rep-icon"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="panel panel-default card-view pa-0">
                            <div class="panel-wrapper collapse in">
                                <div class="panel-body pa-0">
                                    <div class="sm-data-box bg-green">
                                        <div class="container-fluid">
                                            <div class="row">
                                                <div class="col-xs-6 text-center pl-0 pr-0 data-wrap-left">
                                                    <span class="txt-light block counter"><span class="counter-anim">4,054,876</span></span>
                                                    <span class="weight-500 uppercase-font txt-light block">pageviews</span>
                                                </div>
                                                <div class="col-xs-6 text-center  pl-0 pr-0 data-wrap-right">
                                                    <i class="zmdi zmdi-file txt-light data-right-rep-icon"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="panel panel-default card-view pa-0">
                            <div class="panel-wrapper collapse in">
                                <div class="panel-body pa-0">
                                    <div class="sm-data-box bg-blue">
                                        <div class="container-fluid">
                                            <div class="row">
                                                <div class="col-xs-6 text-center pl-0 pr-0 data-wrap-left">
                                                    <span class="txt-light block counter"><span class="counter-anim">46.43</span>%</span>
                                                    <span class="weight-500 uppercase-font txt-light block">growth rate</span>
                                                </div>
                                                <div class="col-xs-6 text-center  pl-0 pr-0 pt-25  data-wrap-right">
                                                    <div id="sparkline_4" style="width: 100px; overflow: hidden; margin: 0px auto;"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Row -->

            </div>

            @include('layout.footer')

        </div> -->
        <!-- /Main Content -->

    </div>
    <!-- /#wrapper -->

    @include('layout.javascript')
</body>

</html>