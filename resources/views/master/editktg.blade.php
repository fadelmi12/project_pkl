<div class="modal fade" id="editktg" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h5 class="modal-title" id="exampleModalLabel1">Edit</h5>
            </div>
            <form action="kategori/update" method="post" role="form" autocomplete="off">
                {{ csrf_field() }}
                {{ method_field('PUT') }}
                <div class="modal-body">
                    <!-- <h6 class="mb-15">Apakah anda yakin mengubah status</h6> -->
                    <div class="form-group">
                        <input type="hidden" id="edit_id_ktg" name="edit_id_ktg">
                        <label class="control-label mb-10 text-left" for="example-email">Kode kategori <span class="help"> </span></label>
                        <input type="text" id="edit_kode" name="edit_kode" class="form-control" placeholder="">
                    </div>
                    <div class="form-group">
                        <label class="control-label mb-10 text-left" for="example-email">Kategori <span class="help"> </span></label>
                        <input type="text" id="edit_kategori" name="edit_kategori" class="form-control" placeholder="">
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
</div>
</div>