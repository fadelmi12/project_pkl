@extends('layout.master')
@section('title', 'Data Pengajuan')
@section('content')

<!-- Main Content -->
<div class="page-wrapper">
    <div class="container-fluid">

        <!-- Title -->
        <div class="row heading-bg">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h5 class="txt-dark">Tambah Pengajuan Barang Baru</h5>
            </div>
            <!-- Breadcrumb -->
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                <ol class="breadcrumb">
                    <li><a href="index.html">Pengajuan</a></li>
                    <li><a href="/brgbaru"><span>Pengajuan Barang Baru</span></a></li>
                    <li class="active"><span>Tambah Pengajuan Barang Baru</span></li>
                </ol>
            </div>
            <!-- /Breadcrumb -->
        </div>
        <!-- /Title -->

        <!-- Row -->
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-default card-view ">
                    <!-- <div class="panel-heading">
                                <div class="clearfix"></div>
                            </div> -->
                    <div class="panel-wrapper collapse in ">
                        <div class="panel-body">
                            <div class="form-wrap mt-3">
                                <form action="{{ url('addbaru2') }}" id="form1" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label class="control-label mb-10 text-left" for="example-email">Nama pengajuan<span class="help"> </span></label>
                                        <input type="text" id="nama_pengajuan" name="nama_pengajuan" class="form-control" placeholder="">
                                    </div>
                                    <div class="row">
                                        <div class="col-md-10">
                                            <div class="form-group">
                                                <label class="control-label mb-10 text-left" for="example-email">Kode Pengajuan<span class="help"> </span></label>
                                                <input type="text" id="kode_pengajuan" readonly="readonly" value="" name="kode_pengajuan" class="form-control" placeholder="">
                                                <!-- <button type="button" onclick="randomStringToInput(this)" class="btn btn-success ">Acak Kode</button> -->
                                            </div>
                                        </div>
                                        <div class="col-md-2 mt-30">
                                            <div class="form-group">
                                                <button type="button" onclick="randomStringToInput(this)" class="btn btn-success">Acak Kode</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label mb-10">Nama barang</label>
                                                <input type="text" class="form-control" name="nama_barang" id="nama_barang">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label mb-10">Jumlah</label>
                                                <input type="number" id="jumlah" name="jumlah" class="form-control">
                                                <!-- <span class="help-block"> This is inline help </span>  -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label mb-10 text-left" for="example-email">Keterangan<span class="help"> </span></label>
                                        <input type="text" id="keterangan" name="keterangan" class="form-control" placeholder="">
                                    </div>
                                    <div class="form-group" style="text-align:right;">
                                        <!-- <button type="button" onclick="randomStringToInput(this)" class="btn btn-success ">Acak Kode</button> -->
                                        <button type="button" onclick="ambildata()" class="btn btn-primary ">Tambah Data</button>
                                    </div>

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
                                                    <form action="{{ url('addbaru2') }}" id="form2" method="POST" enctype="multipart/form-data">
                                                        @csrf
                                                        <div class="">
                                                            <div class="col">
                                                                <table class="table table-bordered align-items-center">
                                                                    <thead class="thead-light">
                                                                        <tr>
                                                                            <th>Nama barang</th>
                                                                            <th>Jumlah</th>
                                                                            <th>Keterangan</th>
                                                                            <th>Remove</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody id="TabelDinamis">
                                                                        <!-- <tr>
                                                    <td><a name="nama_pengajuan[]" id="nama_pengajuan"></a></td>
                                                    <td><a name="kode_pengajuan[]" id="kode_pengajuan"></a></td>
                                                    <td><input type="text" name="nama_barang[]" id="nama_barang"  value=" "></td>
                                                    <td><input type="text" name="jumlah[]" id="jumlah" value=" "></td>
                                                    <td><input type="text" name="keterangan[]" id="keterangan" value=" "></td>
                                                    <td><button type="button" class="btn btn-danger btn-small">&times;</button></td>
                                                </tr> -->
                                                                    </tbody>
                                                                </table>
                                                                <div class="col-md-12" style="text-align:right;">
                                                                    <button type="button" onclick="submitForm()" class="btn btn-primary ">Simpan</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="">

            <!-- Basic Table -->

        </div>
        <!-- /Row -->
        <!-- /Main Content -->
    </div>
    <!-- /#wrapper -->
    @endsection
    @section('scripts')
    <script type="text/javascript">
        function ambildata() {
            var nama_barang = document.getElementById('nama_barang').value;
            var jumlah = document.getElementById('jumlah').value;
            var keterangan = document.getElementById('keterangan').value;
            addrow(nama_pengajuan, kode_pengajuan, nama_barang, jumlah, keterangan);
        }
        var i = 0;

        function addrow(nama_pengajuan, kode_pengajuan, nama_barang, jumlah, keterangan) {
            i++;
            $('#TabelDinamis').append('<tr id="row' + i + '"><td><input type="text" style="outline:none;border:0;" readonly name="nama_barang[]" id="nama_barang" value="' + nama_barang + '"></td><td><input type="text" style="outline:none;border:0;" name="jumlah[]" id="jumlah" value="' + jumlah + '"></td><td><input type="text" style="outline:none;border:0;" name="keterangan[]" id="keterangan" value="' + keterangan + '"></td><td><button type="button" id="' + i + '" class="btn btn-danger btn-small remove_row">&times;</button></td></tr>');
        };
        $(document).on('click', '.remove_row', function() {
            var row_id = $(this).attr("id");
            $('#row' + row_id + '').remove();
        });

        submitForm = function submitForm() {
            document.getElementById("form1").submit();
            document.getElementById("form2").submit();
        }
    </script>

    <script>
        function randomStringToInput(clicked_element) {
            var self = $(clicked_element);
            var random_string = generateRandomString(10);
            $('input[name=kode_pengajuan]').val(random_string);
        }

        function generateRandomString(string_length) {
            var characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
            var string = '';

            for (var i = 0; i <= string_length; i++) {
                var rand = Math.round(Math.random() * (characters.length - 1));
                var character = characters.substr(rand, 1);
                string = string + character;
            }

            return string;
        }
    </script>
    @endsection