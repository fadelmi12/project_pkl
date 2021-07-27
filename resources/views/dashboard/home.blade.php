@extends('layout.master')
@section('title', 'Home')
@section('content')

<<<<<<< HEAD
<!-- Main Content -->
<div class="page-wrapper">
    <div class="container-fluid pt-25">
        <div class="alert alert-success alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h5 class="txt-light">Selamat datang, <strong>{{ Auth::user()->name }}</strong></h5>
        </div>
        <!-- Row -->
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="panel panel-default card-view panel-refresh">
                    <div class="refresh-container">
                        <div class="la-anim-1"></div>
                    </div>
=======
    <!-- Main Content -->
    <div class="page-wrapper">
        <div class="container-fluid pt-25">
            <div class="alert alert-success alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h5 class="txt-light">Selamat datang, <strong>{{ Auth::user()->name }}</strong></h5>
            </div>
            <!-- Row -->
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="panel panel-default">
                        <div class="refresh-container">
                            <div class="la-anim-1"></div>
                        </div>
>>>>>>> 21fa4ce9b3e22ed6bf7aa94f5dbeb28a8c35af58

                    <!--  <div class="panel-heading">
                            <div class="pull-left">
                            <h6 class="panel-title txt-dark">Data Stok Barang</h6>
                            </div>
                            <div class="pull-right">
                            <a href="#" class="pull-left inline-block refresh mr-15">
                            <i class="zmdi zmdi-replay"></i>
                            </a>
                            <div class="pull-left inline-block dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false" role="button"><i class="zmdi zmdi-more-vert"></i></a>
                            <ul class="dropdown-menu bullet dropdown-menu-right" role="menu">
                                <li role="presentation"><a href="javascript:void(0)" role="menuitem"><i class="icon wb-reply" aria-hidden="true"></i>Devices</a></li>
                                <li role="presentation"><a href="javascript:void(0)" role="menuitem"><i class="icon wb-share" aria-hidden="true"></i>General</a></li>
                                <li role="presentation"><a href="javascript:void(0)" role="menuitem"><i class="icon wb-trash" aria-hidden="true"></i>Referral</a></li>
                            </ul>
                            </div>
                            </div>
                            <div class="clearfix"></div>
                            </div> -->

                    <div id="piechart"></div>
                    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                    <script type="text/javascript">
                        // Load google charts
                        google.charts.load('current', {
                            'packages': ['corechart']
                        });
                        google.charts.setOnLoadCallback(drawChart);


                        // Draw the chart and set the chart values
                        function drawChart() {
                            const nama_barang = @json($nama_barang);
                            const stok = @json($stok);
                            var value = [
                                ['Task', 'Speakers'],
                            ];
                            for (let i = 0; i < stok.length; i++) {
                                value.push([nama_barang[i], stok[i]]);
                            };
                            var data = google.visualization.arrayToDataTable(value);

<<<<<<< HEAD
                            // Optional; add a title and set the width and height of the chart
                            var options = {
                                'title': 'Data Barang',
                                'width': 550,
                                'height': 400
                            };
=======
                                // Optional; add a title and set the width and height of the chart
                                var options = {
                                    'title': 'Data Barang',
                                    'width': 600,
                                    'height': 400
									
                                };
>>>>>>> 21fa4ce9b3e22ed6bf7aa94f5dbeb28a8c35af58

                            // Display the chart inside the <div> element with id="piechart"
                            var chart = new google.visualization.PieChart(document.getElementById('piechart'));
                            chart.draw(data, options);
                        }
                    </script>
                </div>
                <!-- <div class="panel-wrapper collapse in">
                        <div class="panel-body">
                        <div>
                        <canvas id="chart_6" height="191"></canvas>
                        </div>
                        <hr class="light-grey-hr row mt-10 mb-15" />
                        <div class="label-chatrs">
                        <div class="">
                            <span class="clabels clabels-lg inline-block bg-blue mr-10 pull-left"></span>
                            <span class="clabels-text font-12 inline-block txt-dark capitalize-font pull-left"><span class="block font-15 weight-500 mb-5">44.46% organic</span><span class="block txt-grey">356 visits</span></span>
                            <div id="sparkline_1" class="pull-right" style="width: 100px; overflow: hidden; margin: 0px auto;"></div>
                            <div class="clearfix"></div>
                        </div>
                        </div>
                        <hr class="light-grey-hr row mt-10 mb-15" />
                        <div class="label-chatrs">
                        <div class="">
                            <span class="clabels clabels-lg inline-block bg-green mr-10 pull-left"></span>
                            <span class="clabels-text font-12 inline-block txt-dark capitalize-font pull-left"><span class="block font-15 weight-500 mb-5">5.54% Refrral</span><span class="block txt-grey">36 visits</span></span>
                            <div id="sparkline_2" class="pull-right" style="width: 100px; overflow: hidden; margin: 0px auto;"></div>
                            <div class="clearfix"></div>
                        </div>
                        </div>
                        <hr class="light-grey-hr row mt-10 mb-15" />
                        <div class="label-chatrs">
                        <div class="">
                            <span class="clabels clabels-lg inline-block bg-yellow mr-10 pull-left"></span>
                            <span class="clabels-text font-12 inline-block txt-dark capitalize-font pull-left"><span class="block font-15 weight-500 mb-5">50% Other</span><span class="block txt-grey">245 visits</span></span>
                            <div id="sparkline_3" class="pull-right" style="width: 100px; overflow: hidden; margin: 0px auto;"></div>
                            <div class="clearfix"></div>
                        </div>
                        </div>
                        </div>
                        </div> -->
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="panel panel-default card-view">
                <div class="panel-wrapper collapse in">
                    <div class="panel-body sm-data-box-1">
                        <span class="uppercase-font weight-500 font-14 block text-center txt-dark">customer
                            satisfaction</span>
                        <div class="cus-sat-stat weight-500 txt-success text-center mt-5">
                            <span class="counter-anim">93.13</span><span>%</span>
                        </div>
                        <div class="progress-anim mt-20">
                            <div class="progress">
                                <div class="progress-bar progress-bar-success wow animated progress-animated" role="progressbar" aria-valuenow="93.12" aria-valuemin="0" aria-valuemax="100">
                                </div>
                            </div>
                        </div>
                        <ul class="flex-stat mt-5">
                            <li>
                                <span class="block">Previous</span>
                                <span class="block txt-dark weight-500 font-15">79.82</span>
                            </li>
                            <li>
                                <span class="block">% Change</span>
                                <span class="block txt-dark weight-500 font-15">+14.29</span>
                            </li>
                            <li>
                                <span class="block">Trend</span>
                                <span class="block">
                                    <i class="zmdi zmdi-trending-up txt-success font-20"></i>
                                </span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="panel panel-default card-view">
                <div class="panel-heading">
                    <div class="pull-left">
                        <h6 class="panel-title txt-dark">browser stats</h6>
                    </div>
                    <div class="pull-right">
                        <a href="#" class="pull-left inline-block mr-15">
                            <i class="zmdi zmdi-download"></i>
                        </a>
                        <a href="#" class="pull-left inline-block close-panel" data-effect="fadeOut">
                            <i class="zmdi zmdi-close"></i>
                        </a>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper collapse in">
                    <div class="panel-body">
                        <div>
                            <span class="pull-left inline-block capitalize-font txt-dark">
                                google chrome
                            </span>
                            <span class="label label-warning pull-right">50%</span>
                            <div class="clearfix"></div>
                            <hr class="light-grey-hr row mt-10 mb-10" />
                            <span class="pull-left inline-block capitalize-font txt-dark">
                                mozila firefox
                            </span>
                            <span class="label label-danger pull-right">10%</span>
                            <div class="clearfix"></div>
                            <hr class="light-grey-hr row mt-10 mb-10" />
                            <span class="pull-left inline-block capitalize-font txt-dark">
                                Internet explorer
                            </span>
                            <span class="label label-success pull-right">30%</span>
                            <div class="clearfix"></div>
                            <hr class="light-grey-hr row mt-10 mb-10" />
                            <span class="pull-left inline-block capitalize-font txt-dark">
                                safari
                            </span>
                            <span class="label label-primary pull-right">10%</span>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
            <div class="panel panel-default card-view">
                <div class="panel-heading">
                    <div class="pull-left">
                        <h6 class="panel-title txt-dark">Interaksi Data</h6>
                    </div>
                    <div class="pull-right">
                        <span class="no-margin-switcher">
                            <input type="checkbox" id="morris_switch" class="js-switch" data-color="#ea6c41" data-secondary-color="#177ec1" data-size="small" />
                        </span>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper collapse in">
                    <div class="panel-body">
                        <div id="morris_extra_line_chart" class="morris-chart" style="height:293px;"></div>
                        <ul class="flex-stat mt-40">
                            <li>
                                <span class="block">Weekly Users</span>
                                <span class="block txt-dark weight-500 font-18"><span class="counter-anim">3,24,222</span></span>
                            </li>
                            <li>
                                <span class="block">Monthly Users</span>
                                <span class="block txt-dark weight-500 font-18"><span class="counter-anim">1,23,432</span></span>
                            </li>
                            <li>
                                <span class="block">Trend</span>
                                <span class="block">
                                    <i class="zmdi zmdi-trending-up txt-success font-24"></i>
                                </span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Row -->
</div>
</div>
<!-- /Main Content -->
</div>
<!-- /#wrapper -->
@endsection