@extends('layout.master')
@section('title', 'Detail Pengajuan Barang Baru')
@section('content')

<div class="page-wrapper">
    <div class="container-fluid">

    <!-- Title -->
    <div class="row heading-bg">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h5 class="txt-dark">Detail Pengajuan Barang Baru</h5>
            </div>
            <!-- Breadcrumb -->
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                <ol class="breadcrumb">
                    <li><a href="#"><span>Pengajuan</span></a></li>
                    <li class="active"><span>Barang Baru</span></li>
                </ol>
            </div>
            <!-- /Breadcrumb -->
        </div>
        <!-- /Title -->

        <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
            <div class="panel panel-default card-view">
				<div class="panel-wrapper collapse in">
					<div  class="panel-body row pa-0">
					<table class="table table-hover mb-0">
                        <tr>
                            <th>No PO</th>
                            <th>{{ $data_baru->noPO }}</th>
						</tr>
                        <tr>
                            <th>Nama Barang</th>
                            <th>{{ $data_baru->namaBarang }}</th>

						</tr>
                        <tr>
                            <th>Jenis Barang</th>
                            <th>{{ $data_baru->jenisBarang }}</th>
						</tr>
                        <tr>
                            <th>Jumlah Barang</th>
                            <th>{{ $data_baru->jmlBarang }}</th>
						</tr>
                        <tr>
                            <th>Status</th>
                            <th>{{ $data_baru->status }}</th>
						</tr>
                        <tr>
                            <th>Keterangan</th>
                            <th>{{ $data_baru->keterangan }}</th>
						</tr>
                        <tr>
                            <th>PIC Teknisi</th>
                            <th>{{ $data_baru->pic_teknisi }}</th>
						</tr>
                        <tr>
                            <th>PIC Marketing</th>
                            <th>{{ $data_baru->pic_marketing }}</th>
						</tr>
                        <tr>
                            <th>PIC Warehouse</th>
                            <th>{{ $data_baru->pic_warehouse }}</th>
						</tr>
					</table>
					</div>
				</div>
			</div>
		</div>


    </div>
</div>
        
@endsection