@extends('layout.master')
@section('title', 'Data Transaksi')
@section('content')

<!-- Main Content -->
<div class="page-wrapper">
    <div class="container-fluid">

        <!-- Title -->
        <div class="row heading-bg">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h5 class="txt-dark">barang masuk retur</h5><br>
                <a href="/addmasukbaru" class="btn btn-primary btn-icon-anim"><i class="fa fa succes"></i> BARU</a>
                <a href="/addmasukretur" class="btn btn-primary btn-icon-anim"><i class="fa fa succes"></i> RETUR</a>

            </div>
            <!-- Breadcrumb -->
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                <ol class="breadcrumb">
                    <!-- <li><a href="index.html">master data</a></li> -->
                    <li><a href="#"><span>transaksi</span></a></li>
                    <li class="active"><span>barang masuk retur</span></li>
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
                                        <form action="{{ url('addmasukretur2') }}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-body">
                                                <div class="row">
                                                   
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="control-label mb-10">No Transaksi</label>
                                                                <input type="hidden" id="no_transaksi" name="no_transaksi" value="" class="form-control" placeholder="" readonly>
                                                                <input type="text" id="no_trans" name="no_trans" value="" class="form-control" placeholder="" readonly>
                                                            </div>
                                                        </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="control-label mb-10">No PO</label>
                                                            <input type="text" id="po" name="po" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--/span-->
                                            </div>
                                            <!-- /Row -->
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label mb-10">Instansi</label>
                                                        <!-- <select name="nama_supplier" id="nama_supplier" class="form-control select2">
                                                            @foreach($supplier as $sup)
                                                            <option value="{{ $sup->nama_supplier }}">{{ $sup->kode_supplier }} | {{ $sup->nama_supplier }}</option>
                                                            @endforeach
                                                        </select> -->
                                                        <input type="text" id="instansi" name="instansi" class="form-control">
                                                    </div>

                                                </div>
                                                <!--/span-->
                                               <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label mb-10">Kondisi</label>
                                                        <input type="text" id="kondisi" name="kondisi" class="form-control">
                                                    </div>
                                                </div>
                                                <!--/span-->
                                            </div>
                                            <!-- /Row -->
                                            <div class="row">
                                                
                                                <!--/span-->
                                                <!-- <div class="row"> -->
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label mb-10">Penerima</label>
                                                        <input type="text" name="penerima" id="penerima" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <hr>
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															
															<label class="control-label mb-10">Nama Barang</label>
															<select name="nama_barang" id="nama_barang" class="form-control">
                                                                @foreach($barang as $brg)
                                                                <option value="{{ $brg->nama_barang }}">{{ $brg->nama_barang }}|{{ $brg->kode_barang }} </option>
																@endforeach
															</select>
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label mb-10">Jumlah</label>
															<input type="number" id="jumlah" name="jumlah" class="form-control">
															@foreach($barang as $brg)
															<input  id="kode_barang" name="kode_barang" value="{{$brg->kode_barang}}" hidden>
															@endforeach
														</div>
													</div>
													<div class="col-md-12">
														<div class="form-group">
															<label class="control-label mb-10">Keterangan</label>
															<input type="text" id="keterangan" name="keterangan" class="form-control">
														</div>
													</div>
												</div>
                                    </div>
                                    <div class="row">

                                        <!--/span-->
                                        <!-- <div class="row"> -->
                                        <div class="col-md-12" style="text-align:right;">
                                            <button type="button" onclick="ambildata()" class="btn btn-primary ">Tambah Data</button>
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
                            <form action="{{ url('addmasukretur2') }}" id="form2" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="">
                                    <div classs="col">
                                        <table class="table table-bordered align-items-center">
                                            <thead class="thead-light">
                                                <tr>
                                                    <th>No PO</th>
                                                    <th>Instansi</th>
                                                    <th>Nama barang</th>
                                                    <th>Kondisi</th>
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
                                            <button type="submit" name="submit"  class="btn btn-success ">Simpan</button>
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
        var po = document.getElementById('po').value;
        var instansi = document.getElementById('instansi').value;
        var nama_barang = document.getElementById('nama_barang').value;
        var penerima = document.getElementById('penerima').value;
        var kondisi = document.getElementById('kondisi').value;
        addrow(tgl_transaksi, po, instansi, nama_barang, penerima, kondisi);
    }
    var i = 0;

    function addrow(tgl_transaksi, po, instansi, nama_barang, penerima, kondisi) {
        i++;
        $('#TabelDinamis').append('<tr id="row' + i + '"><td style="display:none;"><input type="text" style="outline:none;border:0;" readonly name="tgl_transaksi[]" id="tgl_transaksi" value="' + tgl_transaksi + '"></td><td><input type="text" style="outline:none;border:0;" readonly name="po[]" id="po" value="' + po + '"></td><td><input type="text" style="outline:none;border:0;" readonly name="instansi[]" id="instansi" value="' + instansi + '"></td><td><input type="text" style="outline:none;border:0;" readonly name="nama_barang[]" id="nama_barang" value="' + nama_barang + '"></td><td style="display:none;"><input type="text" style="outline:none;border:0;" readonly name="penerima[]" id="penerima" value="' + penerima + '"></td><td><input type="text" style="outline:none;border:0;" readonly name="kondisi[]" id="kondisi" value="' + kondisi + '"></td><td><button type="button" id="' + i + '" class="btn btn-danger btn-small remove_row">&times;</button></td></tr>');
    };
    $(document).on('click', '.remove_row', function() {
        var row_id = $(this).attr("id");
        $('#row' + row_id + '').remove();
    });
</script>
@endsection
