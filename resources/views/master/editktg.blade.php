<div class="modal fade" id="editktg" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1">
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
                        <label class="control-label mb-10 text-left">id<span class="help"> Kategori</span></label>
                        <input id="id" name="id" type="text" class="form-control" value="{{ $kategories->id_kategori }}" readonly>
                    </div>
                    <div class="form-group">
                        <label class="control-label mb-10 text-left">Kode<span class="help"> Kategori</span></label>
                        <input id="kode" name="kode" type="text" class="form-control" value="{{ $kategories->kode_kategori }}">
                    </div>
                    <div class="form-group">
                        <label class="control-label mb-10 text-left">Nama kategori</label>
                        <select id="nama" name="nama" class="form-control" value="{{ $kategories->kategori }}">
                            <option value="Hardware">Hardware</option>
                            <option value="Software">Software</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="control-label mb-10 text-left">Keterangan</label>
                        <input id="keterangan" name="keterangan" type="text" class="form-control" value="{{ $kategories->keterangan }}">
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-default">Batal</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>