@extends('layout.master')
@section('title', 'Data Transaksi')
@section('content')

<!-- Main Content -->
<div class="page-wrapper">
	<div class="container-fluid">

		<!-- Title -->
		<div class="row heading-bg">
			<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
				<h5 class="txt-dark">tambah barang masuk</h5>
			</div>
			<!-- Breadcrumb -->
			<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
				<ol class="breadcrumb">
					<!-- <li><a href="index.html">master data</a></li> -->
					<li><a href="#"><span>transaksi</span></a></li>
					<li class="active"><span>tambah barang masuk</span></li>
				</ol>
			</div>
			<!-- /Breadcrumb -->
		</div>
		<!-- /Title -->

		<!-- Row -->

		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default card-view">
					<div class="panel-wrapper collapse in">
						<div class="panel-body">
							<div class="row">
								<div class="col-sm-12 col-xs-12">
									<div class="form-wrap">
										<form action="#">
											<div class="form-body">
												<!-- <h6 class="txt-dark capitalize-font"><i class="zmdi zmdi-account mr-10"></i>Person's Info</h6>
															<hr class="light-grey-hr"/> -->
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label mb-10">No. Transaksi</label>
															<input type="text" id="no_transaksi" class="form-control" placeholder="No. Transaksi">
															<!-- <span class="help-block"> This is inline help </span>  -->
														</div>
													</div>
													<!--/span-->
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label mb-10">Jenis Transaksi</label>
															<input type="text" id="barang" class="form-control" placeholder="Pilih Barang">
															<!-- <span class="help-block"> This field has error. </span>  -->
														</div>
													</div>
													<!--/span-->
												</div>
												<!-- /Row -->
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label mb-10">Tanggal Masuk</label>
															<input type="date" class="form-control" placeholder="dd/mm/yyyy">
														</div>
													</div>
													<!--/span-->
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label mb-10">Jumlah Masuk</label>
															<input type="text" class="form-control" placeholder="">
														</div>
													</div>
													<!--/span-->
												</div>
												<!-- /Row -->
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label mb-10">Supplier</label>
															<input type="text" class="form-control" placeholder="">
														</div>
													</div>
													<!--/span-->
													<div class="row">
														<div class="col-md-6">
															<div class="form-group">
																<label class="control-label mb-10">Pengirim</label>
																<input type="text" class="form-control" placeholder="">
															</div>
														</div>
														<!--/span-->

														<div class="form-actions mt-10">
															<button type="submit" class="btn btn-primary ">+ Tambah Data</button>
														</div>
														<!--/span-->
													</div>
													<!-- /Row -->


													<!-- /Row -->

												</div>

										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /Row -->
		<div class="row">
			<!-- Basic Table -->
			<div class="col-sm-12">
				<div class="panel panel-default card-view">
					<div class="panel-heading">
						<div class="pull-left">
							<h6 class="panel-title txt-dark">Barang Masuk</h6>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="panel-wrapper collapse in">
						<div class="panel-body">
							<div class="table-wrap mt-40">
								<div class="table-responsive">
									<table class="table mb-0">
										<thead>
											<tr>
												<th>Kode</th>
												<th>Barang</th>
												<th>Jumlah</th>
												<th>#</th>
												<th>#</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>1</td>
												<td>Jens</td>
												<td>Brincker</td>
												<td>Brincker123</td>
												<td><span class="label label-danger">admin</span> </td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- /Basic Table -->
		</div>
		<!-- /Row -->
		<!-- /Main Content -->
	</div>
	<!-- /#wrapper -->
	@endsection