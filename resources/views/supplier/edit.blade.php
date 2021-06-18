<div class="modal fade" id="editsup" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h5 class="modal-title" id="exampleModalLabel1">Edit</h5>
            </div>
            <form action="supplier/update" method="post" role="form" autocomplete="off">
                {{ csrf_field() }}
                {{ method_field('PUT') }}
                <div class="modal-body">
                    <!-- <h6 class="mb-15">Apakah anda yakin mengubah status</h6> -->
                    <div class="form-group">
                        <input type="hidden" id="edit_id_sup" name="edit_id_sup">
                        <label class="control-label mb-10 text-left" for="example-email">Kode kategori <span class="help"> </span></label>
                        <input type="text" id="edit_kode" name="edit_kode" class="form-control" placeholder="">
                    </div>
                    <div class="form-group">
                        <label class="control-label mb-10 text-left" for="example-email">Email <span class="help"> </span></label>
                        <input type="email" id="edit_email" name="edit_email" class="form-control" placeholder="">
                    </div>
                    <div class="form-group">
                        <label class="control-label mb-10 text-left">Alamat</label>
                        <textarea class="form-control" rows="3" id="edit_alamat" name="edit_alamat"></textarea>
                    </div>
                    <div class="form-group">
                        <label class="control-label mb-10 text-left" for="example-email">PIC Supplier <span class="help"> </span></label>
                        <input type="text" id="edit_pic" name="edit_pic" class="form-control" placeholder="">
                    </div>
                    <div class="form-group">
                        <label class="control-label mb-10 text-left" for="example-email">No HP <span class="help"> </span></label>
                        <input type="number" id="edit_no" name="edit_no" class="form-control" placeholder="">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>