<div class="modal fade" id="editpinjam" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h5 class="modal-title" id="exampleModalLabel1">Edit</h5>
            </div>
            <div class="modal-body">
                <!-- <h6 class="mb-15">Apakah anda yakin mengubah status</h6> -->
                <form>
                    <div class="form-group">
                        <label class="control-label mb-10 text-left">Nama</label>
                        <input type="text" class="form-control" value="">
                    </div>
                    <div class="form-group">
                        <label class="control-label mb-10 text-left">Nama barang</label>
                        <input type="text" class="form-control" value="">
                    </div>
                    <div class="form-group">
                        <label class="control-label mb-10 text-left">Jumlah</label>
                        <input type="number" class="form-control" value="">
                    </div>
                    <div class="form-group">
                        <label class="control-label mb-10 text-left">Tanggal Pinjam</label>
                        <input type="date" class="form-control" value="">
                    </div>
                    <div class="form-group">
                        <label class="control-label mb-10 text-left">Tanggal Kembali</label>
                        <input type="date" class="form-control" value="">
                    </div>
                    <div class="form-group mt-30 mb-30">
                        <label class="control-label mb-10 text-left">Status</label>
                        <select class="form-control">
                            <option>Pinjam</option>
                            <option>Dikembalikan</option>
                        </select>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                <button type="button" class="btn btn-primary" data-dismiss="modal">Simpan</button>
            </div>
        </div>
    </div>