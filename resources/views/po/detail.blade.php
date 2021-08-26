@extends('layout.master')
@section('title', 'Detail Purchase Order')
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
                        <h5 class="txt-dark">Detail Purchase Order</h5>
                    </div>
                    <!-- Breadcrumb -->
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <ol class="breadcrumb">
                            <!-- <li><a href="index.html">master data</a></li> -->
                            <li><a href="#"><span>Purchase Order</span></a></li>
                            <li class="active"><span>Detail Purchase Order</span></li>
                        </ol>
                    </div>
                    <!-- /Breadcrumb -->
                </div>
                <!-- /Title -->

                <!-- Row -->
                <!-- Row -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default card-view">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="">
                                            <h4 text-style="left" class="txt-dark">Nakula Sadewa, CV</h4>
                                        </div>
                                        <table>
                                            <tr>
                                                <div class="row">
                                                    <td class="txt-dark"> Jl Candi Mendut Utara 1 No. 11 <br>
                                                        Kel. Mojolangu Kec. Lowokwaru Malang - Jawa Timur<br>
                                                        Phone : <br> Email : </td>
                                                </div>
                                            </tr>
                                        </table>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-8 ">
                                                <div class="form-group">
                                                    <table>
                                                        <div class="text-left">
                                                            <h6 class="txt-dark">TO</h6>
                                                        </div>
                                                        <tr>
                                                            <div class="">
                                                                <td class="txt-dark">BP. BRILLI ANTHONY<br>
                                                                    RSDU LERIK</td>
                                                            </div>
                                                        </tr>
                                                    </table>

                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <table>
                                                        <div class="text-left">
                                                            <h6 class="txt-dark">PENAWARAN</h6>
                                                        </div>
                                                        <tr>
                                                            <div class="">
                                                                <td class="txt-dark"> Number :  <br>
                                                                    Date : <br>
                                                                    Note : </td>
                                                            </div>
                                                        </tr>
                                                    </table>


                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-md-12">

                                        <table id="myTable1" class="table table-bordered display pb-30">
                                            <thead>
                                                <tr>
                                                    <th>no</th>
                                                    <th>Deskripsi</th>
                                                    <th>Qty</th>
                                                    <th>Rate</th>
                                                    <th>Amount</th>
                                                    <!-- <th colspan="3">Aksi</th> -->
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>#</td>
                                                    <td>#</td>
                                                    <td>#</td>
                                                    <td>#</td>
                                                    <td>#</td>
                                                </tr>
                                                <tr class="txt-dark">
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td>Total</td>
                                                    <td>#</td>
                                                </tr>
                                    </div>
                                    <tr class="txt-dark">
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>PPn 10%</td>
                                        <td>#</td>
                                    </tr>
                                    <tr class="txt-dark">
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>PPh 2.5%</td>
                                        <td>#</td>
                                    </tr>
                                    <tr class="txt-dark">
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>Balance Due</td>
                                        <td>#</td>
                                    </tr>
                                    </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Row -->
                    <!-- Row -->

                </div>
                <!-- /Row -->
                <!-- /Main Content -->
    </div>
    <!-- /#wrapper -->
    @endsection