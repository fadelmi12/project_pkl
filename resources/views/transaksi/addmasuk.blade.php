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
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label mb-10">Tanggal Transaksi</label>
															<input type="date" name="tgl_transaksi" id="tgl_transaksi" class="form-control">
														</div>
													</div>
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
														<label class="control-label mb-10">Supplier</label>
														<select name="nama_supplier" id="nama_supplier" class="form-control select2">
															@foreach($supplier as $sup)
															<option value="{{ $sup->nama_supplier }}">{{ $sup->kode_supplier }} | {{ $sup->nama_supplier }}</option>
															@endforeach
														</select>
													</div>

												</div>
												<!--/span-->
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
												<!--/span-->
											</div>
											<!-- /Row -->
											<div class="row">
												<div class="col-md-6">
													<div class="form-group">
														<label class="control-label mb-10">Jumlah Masuk</label>
														<input type="number" class="form-control" name="jumlah" id="jumlah">
													</div>
												</div>
												<!--/span-->
												<!-- <div class="row"> -->
												<div class="col-md-6">
													<div class="form-group">
														<label class="control-label mb-10">Kondisi</label>
														<input type="text" id="kondisi" name="kondisi" class="form-control">
														<!-- <span class="help-block"> This is inline help </span>  -->
													</div>

												</div>
											</div>
									</div>
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label class="control-label mb-10">Pengirim</label>
												<input type="text" name="pengirim" id="pengirim" class="form-control">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label class="control-label mb-10">Penerima</label>
												<input type="text" name="penerima" id="penerima" class="form-control">
											</div>
										</div>
										<!--/span-->
										<!-- <div class="row"> -->
										<div class="col-md-12" style="text-align:right;">
											<button type="button" onclick="ambildata()" class="btn btn-success ">Tambah Data</button>
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
		<div class="">
			<!-- Basic Table -->
			<div class="col-sm-14">
				<div class="panel panel-default card-view">
					<div class="panel-heading">
						<div class="pull-left">
							<h6 class="panel-title txt-dark">Barang Masuk</h6>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="panel-wrapper collapse in">
						<div class="panel-body">
							<form action="{{ url('addmasuk2') }}" id="form2" method="POST" enctype="multipart/form-data">
								@csrf
								<div class="">
									<div class="col">
										<table class="table table-bordered align-items-center">
											<thead class="thead-light">
												<tr>
													<th>Tanggal transaksi</th>
													<!-- <th>Supplier</th> -->
													<th>Nama barang</th>
													<th>Jumlah</th>
													<th>Remove</th>
												</tr>
											</thead>
											<tbody id="TabelDinamis">
												<!-- <tr>
												<td><a name="tgl_transaksi[]" id="tgl_transaksi"></a></td>
												<td><a name="nama_supplier[]" id="nama_supplier"></a></td>
												<td><a name="nama_barang[]" id="nama_barang"></a></td>
												<td><a name="jumlah[]" id="jumlah"></a></td>
												<td><button type="button" class="btn btn-danger btn-small">&times;</button></td>
											</tr> -->
											</tbody>

										</table>

										<div class="col-md-12" style="text-align:right;">
											<button type="submit" name="submit" onclick="submitForm()" class="btn btn-primary ">Simpan</button>
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
			<!-- /Basic Table -->
		</div>
	</div>
	<!-- /Row -->
	<!-- /Row -->
	<!-- /Main Content -->
</div>
<!-- /#wrapper -->
@endsection
@section('scripts')
<script type="text/javascript">
	function ambildata() {
		var tgl_transaksi = document.getElementById('tgl_transaksi').value;
		var jns_transaksi = document.getElementById('jns_transaksi').value;
		var nama_supplier = document.getElementById('nama_supplier').value;
		var nama_barang = document.getElementById('nama_barang').value;
		var jumlah = document.getElementById('jumlah').value;
		var kondisi = document.getElementById('kondisi').value;
		var pengirim = document.getElementById('pengirim').value;
		var penerima = document.getElementById('penerima').value;
		addrow(tgl_transaksi, jns_transaksi, nama_supplier, nama_barang, jumlah, kondisi, pengirim, penerima);
	}
	var i = 0;

	function addrow(tgl_transaksi, jns_transaksi, nama_supplier, nama_barang, jumlah, kondisi, pengirim, penerima) {
		i++;
		$('#TabelDinamis').append('<tr id="row' + i + '"><td><input type="text" style="outline:none;border:0;" readonly name="tgl_transaksi[]" id="tgl_transaksi" value="' + tgl_transaksi + '"></td><td style="display:none;"><input type="text" style="outline:none;border:0;" readonly name="jns_transaksi[]" id="jns_transaksi" value="' + jns_transaksi + '"></td><td style="display:none;"><input type="text" style="outline:none;border:0;" readonly name="nama_supplier[]" id="nama_supplier" value="' + nama_supplier + '"></td><td><input type="text" style="outline:none;border:0;" readonly name="nama_barang[]" id="nama_barang" value="' + nama_barang + '"></td><td><input type="text" style="outline:none;border:0;" readonly name="jumlah[]" id="jumlah" value="' + jumlah + '"></td><td style="display:none;"><input type="text" style="outline:none;border:0;" readonly name="kondisi[]" id="kondisi" value="' + kondisi + '"></td><td style="display:none;"><input type="text" style="outline:none;border:0;" readonly name="pengirim[]" id="pengirim" value="' + pengirim + '"></td><td style="display:none;"><input type="text" style="outline:none;border:0;" readonly name="penerima[]" id="penerima" value="' + penerima + '"></td><td><button type="button" id="' + i + '" class="btn btn-danger btn-small remove_row">&times;</button></td></tr>');
	};
	$(document).on('click', '.remove_row', function() {
		var row_id = $(this).attr("id");
		$('#row' + row_id + '').remove();
	});
</script>
@endsection