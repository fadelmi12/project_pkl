@extends('layout.master')
@section('title', 'Data Barang')
@section('content')

<!-- Main Content -->
<div class="page-wrapper">
    <div class="container-fluid">
        <!-- Title -->
        <div class="row heading-bg">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h5 class="txt-dark">Data Barang</h5>
            </div>
            <!-- Breadcrumb -->
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                <ol class="breadcrumb">
                    <li><a href="inventory">Warehouse</a></li>
                    <li class="active"><span>Data Barang</span></li>
                </ol>
            </div>
            <!-- /Breadcrumb -->
        </div>
        <!-- Row -->
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-default card-view">
                    <div class="panel-heading">
                        <div class="pull-left">
                            <!-- <h6 class="panel-title txt-dark">DataTable</h6> -->
                            <!-- <button data-toggle="modal" data-target="#myModal" class="btn btn-success col-mr-2" >Tambah Barang</button> -->
                            <a href="databrg/addbarang" class="btn btn-success"> Tambah Data</a>

                            <!-- <button class="btn btn-primary btn-sm btn-icon mb-3"><i class="fa fa-plus fa-sm"></i> Tambah Data</button> -->
                        </div>
                        <div class="clearfix"></div>
                        <div id="myTable1_wrapper" class="dataTables_wrapper">
                            <div class="dataTables_length" id="myTable1_length"><label>Show <select name="myTable1_length" aria-controls="myTable1" class="">
                                        <option value="10">10</option>
                                        <option value="25">25</option>
                                        <option value="50">50</option>
                                        <option value="100">100</option>
                                    </select> entries</label></div>
                            <div id="myTable1_filter" class="dataTables_filter"><label>Search:<input type="search" class="" placeholder="" aria-controls="myTable1"></label></div>
                            <table id="myTable1" class="table table-hover display dataTable dtr-inline" role="grid" aria-describedby="myTable1_info" style="width: 1253px;">
                        </div>
                    </div>
                    <div class="panel-wrapper collapse in">
                        <div class="panel-body">
                            <div class="table-wrap">
                                <div class="">
                                    <table id="myTable1" class="table table-bordered display  pb-30">
                                        <thead>
                                            <tr>
                                                <th>Kode</th>
                                                <th>Nama Barang</th>
                                                <th>Jenis</th>
                                                <th>Stok</th>
                                                <th>Gambar</th>
                                                <th>Status</th>
                                                <th colspan="3">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($barang as $brg)
                                            <tr>
                                                <td>{{$brg->kode_barang}}</td>
                                                <td>{{$brg->nama_barang}}</td>
                                                <td>{{$brg->jenis_barang}}</td>
                                                <td>{{$brg->stok}}</td>
                                                <td>
                                                    @if($brg->gambar)
                                                    <img src="{{ url('img/logo') }}/{{ $brg->gambar }}" style="width: 150px; height: 120px;">
                                                    @endif
                                                </td>
                                                <td>{{$brg->status}}</td>
                                                <td>
                                                    <a href="#"><button class="btn btn-primary btn-icon-anim btn-square"><i class="fa fa-eye"></i></button></a>
                                                    <a href="/databrg/editBarang/{{ $brg->id_master }}"><button class="btn btn-success btn-icon-anim btn-square"><i class="fa fa-edit"></i></button></a>
                                                    <button class="btn btn-danger btn-icon-anim btn-square" data-toggle="modal" data-target="#hapusbrg" action="( {{url('delete')}}/{{ $brg->id_master }})" >
                                                    <i class="fa fa-trash"></i></button>
                                                </td>
                                                <!-- @include('master.hapusbrg') -->
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    
                                    <!-- Modal -->
                                    <div class="modal fade" id="hapusbrg" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                    <h5 class="modal-title" id="exampleModalLabel1">Hapus</h5>
                                                </div>
                                                <form action="{{ url('deletebrg') }}/{{ $brg->id_master }}" class="modal-body" method="post">
                                                    {{ csrf_field() }}
                                                    {{ method_field('DELETE') }}
                                                    <div class="container">
                                                        <h6 class="mb-15">Apakah anda yakin menghapus data ini?</h6>
                                                    </div>

                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                                                        <button type="submit" class="btn btn-primary">Ya</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>

                                    <script>
                                        // display a modal (small modal)
                                        $(document).on('click', '#hapusbrg', function(event) {
                                            event.preventDefault();
                                            let href = $(this).attr('data-attr');
                                            $.ajax({
                                                url: href
                                                , beforeSend: function() {
                                                    $('#loader').show();
                                                },
                                                // return the result
                                                success: function(result) {
                                                    $('#smallModal').modal("show");
                                                    $('#smallBody').html(result).show();
                                                }
                                                , complete: function() {
                                                    $('#loader').hide();
                                                }
                                                , error: function(jqXHR, testStatus, error) {
                                                    console.log(error);
                                                    alert("Page " + href + " cannot open. Error:" + error);
                                                    $('#loader').hide();
                                                }
                                                , timeout: 8000
                                            })
                                        });

                                    </script>



                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Row -->
</div>
</div>
<!-- /Main Content -->
</div>
<!-- /#wrapper -->
@endsection