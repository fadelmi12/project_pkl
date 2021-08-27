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
               
                <!-- /Title -->

                <!-- Row -->
                <!-- Row -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default card-view">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="row">
                                        <div class="col-xs-8">
                                            <div class="form-group">
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
                                            </div>
                                        </div>
                                        
                                        <div class="col-xs-4">
                                                <div class="form-group mt-20 ">
                                                    
                                                <img  src="{{asset('template')}}/dist/img/ns.jpg">
                                                </div>
                                        </div>
                                        </div>
                                        <hr>
                                        
                                        <div class="row">
                                            
                                            <div class="col-xs-8">
                                                <div class="form-group">
                                                    <table>
                                                        <div class="text-left">
                                                            <h6 class="txt-dark"><strong>TO</strong></h6>
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
                                            <div class="col-xs-4">
                                                <div class="form-group">
                                                    <table>
                                                        <div class="text-left">
                                                            <h6 class="txt-dark"><strong>PENAWARAN</strong></h6>
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

                                        <table id="myTable1" class="table table display pb-30">
                                            <thead>
                                                <tr>
                                                    <th>no</th>
                                                    <th>Deskripsi</th>
                                                    <th>Keterangan</th>
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
                                                    <td>#</td>
                                                </tr>
                                                <tr class="txt-dark">
                                                    <td colspan="4"></td>
                                                    
                                                    <td>Total</td>
                                                    <td>#</td>
                                                </tr>
                                    </div>
                                                <tr class="txt-dark">
                                                    <td colspan="4"></td>
                                                    <td>PPn 10%</td>
                                                    <td>#</td>
                                                </tr>
                                                <tr class="txt-dark">
                                                <td colspan="4"></td>
                                                    <td>PPh 2.5%</td>
                                                    <td>#</td>
                                                </tr>
                                                <tr class="txt-dark">
                                                <td colspan="4"></td>
                                                    <td>Balance Due</td>
                                                    <td>#</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-8">
                                    
                                </div>
                                <div class="col-xs-4">
                                    <div class="form-group">
                                        <table>
                                            <div class="text-center">
                                                <h6 class="txt-dark">Malang,26 Agustus 2021</h6>
                                            </div><br><br><br><br><br>
                                            <div class="text-center">
                                                <h6 class="txt-dark">YUDHA PRAYOGO A.</h6>
                                            </div>
                                            <hr ">
                                            <div class="text-center mt-2">
                                                <h6 class="txt-dark">IT Marketing</h6>
                                            </div>
                                            
                                        </table>


                                                </div>
                                            </div>
                                </div>
                                        
                        </div>
                        <div class="pull-right">
												<button type="submit" class="btn btn-primary mr-10">
													Proceed to payment 
												</button>
												<button type="button" class="btn btn-success btn-outline btn-icon left-icon" onclick="javascript:window.print();"> 
													<i class="fa fa-print"></i><span> Print</span> 
												</button>
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