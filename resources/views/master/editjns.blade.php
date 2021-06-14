<div class="modal fade" id="editjns" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h5 class="modal-title" id="exampleModalLabel1">Edit</h5>
            </div>
            <form action="jenis/update" method="post" role="form" autocomplete="off">
            {{ csrf_field() }}
            {{ method_field('PUT') }}
            <div class="modal-body">
                <!-- <h6 class="mb-15">Apakah anda yakin mengubah status</h6> -->
                    <div class="form-group">
                        <input type="hidden" id="edit_id_jenis" name="edit_id_jenis">
                        <label class="control-label mb-10 text-left" for="example-email">Jenis <span class="help"> </span></label>
                        <input type="text" id="edit_jenis" name="edit_jenis" class="form-control" placeholder="">
                    </div>
                    <div class="form-group">
                        <label class="control-label mb-10 text-left" for="example-email">Keterangan <span class="help"> </span></label>
                        <input type="text" id="edit_keterangan" name="edit_keterangan" class="form-control" placeholder="">
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
            </form>
        </div>
    </div>