<div class="modal fade" id="editjns" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h5 class="modal-title" id="exampleModalLabel1">Edit</h5>
            </div>
            <div class="modal-body">
                <!-- <h6 class="mb-15">Apakah anda yakin mengubah status</h6> -->
                <form method="POST" action="{{ url('edit') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label class="control-label mb-10 text-left">id<span class="help"> jenis</span></label>
                        <input id="id" name="id" type="text" class="form-control" value="{{ $jenis->id_jenis }}" readonly>
                    </div>
                    <div class="form-group">
                        <label class="control-label mb-10 text-left">Jenis<span class="help"> barang</span></label>
                        <input id="jenis" name="jenis" type="text" class="form-control" value="{{ $jenis->jenis }}">
                    </div>
                    <div class="form-group">
                        <label class="control-label mb-10 text-left">Keterangan</label>
                        <input id="keterangan" name="keterangan" type="text" class="form-control" value="{{ $jenis->keterangan }}">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-toggle="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>