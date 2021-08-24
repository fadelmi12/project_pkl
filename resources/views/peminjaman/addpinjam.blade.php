@extends('layout.master')
@section('title', 'Data Peminjaman')
@section('content')

<!-- Main Content -->
<div class="page-wrapper">
    <div class="container-fluid">
        <!-- Title -->
        <div class="row heading-bg">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h5 class="txt-dark">Tambah Data Peminjaman</h5>
            </div>
        </div>
        <!-- Row -->
        <div class="row">
			<div class="col-md-12 mt-10">
				<div class="panel panel-default card-view">
					<div class="panel-wrapper collapse in">
						<div class="panel-body">
							<div class="row">
								<div class="col-sm-12 col-xs-12">
									<div class="form-wrap">
										<form action="{{ url('') }}" method="POST" enctype="multipart/form-data">
											@csrf
											<div class="form-body">
												<div class="row">
													<div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="control-label mb-10 text-left" for="example-email">No Purchase Order</label>
                                                            <input type="text" id="noPO" name="noPO" value="" class="form-control" placeholder="" readonly>
                                                        </div>
													</div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="control-label mb-10 text-left" for="example-email">Nama barang <span class="help"> </span></label>
                                                            <input type="text" id="nama_barang" name="nama_barang" class="form-control" placeholder="">
                                                            @error('nama_barang')
                                                            <div class="tulisan">{{$message}}</div>
                                                            @enderror
                                                        </div>
													</div>
                                                </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="control-label mb-10">Tanggal Pinjam</label>
                                                                <input type="date" class="form-control" name="jumlah" id="jumlah">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="control-label mb-10">####</label>
                                                                <input type="text" id="" name="" value="" class="form-control" placeholder="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- /Row -->
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="control-label mb-10">Jumlah</label>
                                                                <input type="text" name="pengirim" id="pengirim" class="form-control">
                                                            </div>
                                                        </div>
                                                        <!--/span-->
                                                        <!-- <div class="row"> -->
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="control-label mb-10">Kebutuhan</label>
                                                                <input type="text" name="penerima" id="penerima" class="form-control">
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-14" style="text-align:right;">
                                                <button type="button" onclick="ambildata()" class="btn btn-success ">Tambah Data</button>
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
        <div class="">
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
						<form action="{{ url('') }}" id="form2" method="POST" enctype="multipart/form-data">
							@csrf
							<div class="">
								<div classs="col">
									<table class="table table-bordered align-items-center">
										<thead class="thead-light">
											<tr>
												<th>Tanggal transaksi</th>
												<th>Supplier</th>
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
        <!-- /Main Content -->
    </div>
    <!-- /#wrapper -->
    @endsection
