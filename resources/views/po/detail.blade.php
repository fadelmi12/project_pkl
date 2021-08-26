@extends('layout.master')
@section('title', 'Detail PO')
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
                        <h5 class="txt-dark">Detail PO</h5>
                    </div>
                    <!-- Breadcrumb -->
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <ol class="breadcrumb">
                            <!-- <li><a href="index.html">master data</a></li> -->
                            <li><a href="#"><span>Purchase Order</span></a></li>
                            <li class="active"><span>Detail PO</span></li>
                        </ol>
                    </div>
                    <!-- /Breadcrumb -->
                </div>
                <!-- /Title -->

                <!-- Row -->
					<div class="row">
						<div class="col-md-12">
							<div class="panel panel-default card-view">
								<div class="panel-heading">
									<div class="pull-left">
										<h6 class="panel-title txt-dark">Invoice</h6>
									</div>
									<div class="pull-right">
										<h6 class="txt-dark">Order # 12345</h6>
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="panel-wrapper collapse in">
									<div class="panel-body">
										<div class="row">
											<div class="col-xs-6">
												<span class="txt-dark head-font inline-block capitalize-font mb-5">Billed to:</span>
												<address class="mb-15">
													<span class="address-head mb-5">Fasbook, Inc.</span>
													795 Folsom Ave, Suite 600 <br>
													San Francisco, CA 94107 <br>
													<abbr title="Phone">P:</abbr>(133) 456-7890
												</address>
											</div>
											<div class="col-xs-6 text-right">
												<span class="txt-dark head-font inline-block capitalize-font mb-5">shiped to:</span>
												<address class="mb-15">
													<span class="address-head mb-5">Xyz, Inc.</span>
													795 Folsom Ave, Suite 600 <br>
													San Francisco, CA 94107 <br>
													<abbr title="Phone">P:</abbr>(123) 456-7890
												</address>
											</div>
										</div>
										
										<div class="row">
											<div class="col-xs-6">
												<address>
													<span class="txt-dark head-font capitalize-font mb-5">Payment Method:</span>
													<br>
													Visa ending **** 4242<br>
													jsmith@email.com
												</address>
											</div>
											<div class="col-xs-6 text-right">
												<address>
													<span class="txt-dark head-font capitalize-font mb-5">order date:</span><br>
													March 7, 2017<br><br>
												</address>
											</div>
										</div>
										
										<div class="seprator-block"></div>
										
										<div class="invoice-bill-table">
											<div class="table-responsive">
												<table class="table table-hover">
													<thead>
														<tr>
															<th>Item</th>
															<th>Price</th>
															<th>Quantity</th>
															<th>Totals</th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td>BS-200</td>
															<td>$10.99</td>
															<td>1</td>
															<td>$10.99</td>
														</tr>
														<tr>
															<td>BS-400</td>
															<td>$20.00</td>
															<td>3</td>
															<td>$60.00</td>
														</tr>
														<tr>
															<td>BS-1000</td>
															<td>$600.00</td>
															<td>1</td>
															<td>$600.00</td>
														</tr>
														<tr class="txt-dark">
															<td></td>
															<td></td>
															<td>Subtotal</td>
															<td>$670.99</td>
														</tr>
														<tr class="txt-dark">
															<td></td>
															<td></td>
															<td>Shipping</td>
															<td>$15</td>
														</tr>
														<tr class="txt-dark">
															<td></td>
															<td></td>
															<td>Total</td>
															<td>$685.99</td>
														</tr>
													</tbody>
												</table>
											</div>
											<div class="pull-right">
												<button type="submit" class="btn btn-primary mr-10">
													Proceed to payment 
												</button>
												<button type="button" class="btn btn-success btn-outline btn-icon left-icon" onclick="javascript:window.print();"> 
													<i class="fa fa-print"></i><span> Print</span> 
												</button>
											</div>
											<div class="clearfix"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /Row -->
    <!-- /Row -->
    <!-- /Main Content -->
</div>
<!-- /#wrapper -->
@endsection



<!-- <div class="modal fade" id="detail{{ $data_po->id_PO }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h5 class="modal-title" id="exampleModalLabel1">Detail Purchase Order</h5>
            </div>
                <div class="modal-body table">
                    <table class="table table-bordered no-margin">
                        <tbody>
                            <tr>
                                <th width="200px"><strong>No Purchase Order</strong></th>
                                <td>{{ $data_po->no_PO }}</td>
                            </tr>
                            <tr>
                                <th><strong>Nama Barang</strong> </th>
                                <td>{{ $data_po->namaBarang }}</td>
                            </tr>
                            <tr>
                                <th><strong>Jumlah Barang </strong></th>
                                <td>{{ $data_po->jumlah }}</td>
                            </tr>
                            <tr>
                                <th><strong>Keterangan</strong> </th>
                                <td>{{ $data_po->keterangan }}</td>
                            </tr>
                            <tr>
                                <th><strong>Tanggal Pembuatan</strong> </th>
                                <td>{{ $data_po->created_at }}</td>
                            </tr>
                            <tr>
                                <th><strong>Status </strong></th>
                                <td>{{ $data_po->status }}</td>
                            </tr>
                            <tr>
                                <th><strong>Nama Marketing</strong></th>
                                <td>{{ $data_po->pic_marketing }}</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
        </div>
    </div>
</div> -->
