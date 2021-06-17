<div class="modal fade" id="editktg" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h5 class="modal-title" id="exampleModalLabel1">Edit</h5>
            </div>
            <div class="modal-body">
                <!-- <h6 class="mb-15">Apakah anda yakin mengubah status</h6> -->
                <form action="update" method="post" role="form" autocomplete="off">
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}
                    <div class="form-group">
                        <label class="control-label mb-10 text-left">Kode<span class="help"> Kategori</span></label>
                        <input id="edit_kode" name="edit_kode" type="text" class="form-control" readonly >
                    </div>
                    <div class="form-group">
                        <label class="control-label mb-10 text-left">Nama kategori</label>
                        <input id="edit_nama" name="edit_nama" type="text" class="form-control" >
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="control-label mb-10 text-left">Keterangan</label>
                        <input id="edit_keterangan" name="edit_keterangan" type="text" class="form-control">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>