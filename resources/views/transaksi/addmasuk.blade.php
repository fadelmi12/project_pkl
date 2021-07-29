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
					<li class="active"><span>tambah data</span></li>
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
										<form action="{{ url('addmasuk2') }}" method="POST" enctype="multipart/form-data">
											@csrf
											<div class="form-body">
												<!-- <h6 class="txt-dark capitalize-font"><i class="zmdi zmdi-account mr-10"></i>Person's Info</h6>
															<hr class="light-grey-hr"/> -->
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label mb-10">No. Transaksi</label>
															<input type="text" id="no_transaksi" name="no_transaksi" class="form-control" readonly>
															<!-- <span class="help-block"> This is inline help </span>  -->
														</div>
													</div>
													<!--/span-->
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label mb-10">Jenis Transaksi</label>
															<input type="text" id="jns_transaksi" name="jns_transaksi" class="form-control">
															<!-- <span class="help-block"> This field has error. </span>  -->
														</div>
													</div>
												</div>
												<!--/span-->
											</div>
											<!-- /Row -->
											<div class="row">
												<div class="col-md-6">
													<div class="form-group">
														<label class="control-label mb-10">Tanggal Transaksi</label>
														<input type="date" name="tgl_transaksi" id="tgl_transaksi" class="form-control">
													</div>
												</div>
												<!--/span-->
												<div class="col-md-6">
													<div class="form-group">
														<label class="control-label mb-10">Jumlah Masuk</label>
														<input type="number" class="form-control" name="jumlah" id="jumlah">
													</div>
												</div>
												<!--/span-->
											</div>
											<!-- /Row -->
											<div class="row">
												<div class="col-md-6">
													<div class="form-group">
														<label class="control-label mb-10">Supplier</label>
														<select name="nama_supplier" id="nama_supplier" class="form-control select2">
															@foreach($supplier as $sup)
															<option value="{{ $sup->nama_supplier }}">{{ $sup->kode_supplier }} | {{ $sup->nama_supplier }}</option>
															@endforeach
														</select>
													</div>
												</div>
												<!--/span-->
												<!-- <div class="row"> -->
												<div class="col-md-6">
													<div class="form-group">
														<label class="control-label mb-10">Pengirim</label>
														<input type="text" name="pengirim" id="pengirim" class="form-control">
													</div>
												</div>
											</div>
									</div>
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label class="control-label mb-10">Nama barang</label>
												<select name="nama_barang" id="nama_barang" class="form-control select2">
													@foreach($barang as $brg)
													<option value="{{ $brg->nama_barang }}">{{ $brg->kode_barang }} | {{ $brg->nama_barang }}</option>
													@endforeach
												</select>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label class="control-label mb-10">Penerima</label>
												<input type="text" name="penerima" id="penerima" class="form-control">
											</div>
											<div class="row">
												<div class="col-md-12">
													<div class="form-group">
														<label class="control-label mb-10">Kondisi</label>
														<input type="text" id="kondisi" name="kondisi" class="form-control">
														<!-- <span class="help-block"> This is inline help </span>  -->
													</div>
												</div>
											</div>
										</div>
										<!--/span-->
										<!-- <div class="row"> -->
										<div class="col-md-10">
											<div class="form-actions mt-5 mr-10">
												<button type="submit" name="submit" class="btn btn-primary ">Tambah Data</button>
											</div>
										</div>
										<!--/span-->
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
	<!-- /Row -->
	<!-- /Main Content -->
</div>
<!-- /#wrapper -->
@endsection