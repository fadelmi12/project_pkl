<div class="modal fade" id="addbrg" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h5 class="modal-title" id="exampleModalLabel1">Tambah</h5>
            </div>
            <div class="modal-body">
                <!-- <h6 class="mb-15">Apakah anda yakin mengubah status</h6> -->
                <form>
                    <div class="form-group">
                        <label class="control-label mb-10 text-left">Kode<span class="help"> Kategori</span></label>
                        <input type="text" class="form-control" value="">
                    </div>
                    <div class="form-group">
                        <label class="control-label mb-10 text-left" for="example-email">Nama barang <span class="help"> </span></label>
                        <input type="text" id="example-email" name="example-email" class="form-control" placeholder="">
                    </div>
                    <div class="form-group">
                        <label class="control-label mb-10 text-left">Jenis</label>
                        <select name="jenis" id="jenis" class="form-control select2">
                            @foreach($jenis as $jen)
                                <option value="{{ $jen->jenis }}" >{{ $jen->jenis }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="control-label mb-10 text-left">Stok</label>
                        <input type="text" class="form-control" value="">
                    </div>
                    <div class="form-group mb-30">
                        <label class="control-label mb-10 text-left">File upload</label>
                        <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                            <div class="form-control" data-trigger="fileinput"> <i class="glyphicon glyphicon-file fileinput-exists"></i> <span class="fileinput-filename"></span></div>
                            <span class="input-group-addon fileupload btn btn-info btn-anim btn-file"><i class="fa fa-upload"></i>
                                <span class="fileinput-new btn-text">Select file</span>
                                <!-- <span class="fileinput-exists btn-text">Change</span>
                                                        <input type="file" name="..."></span>  -->
                                <!-- <a href="#" class="input-group-addon btn btn-danger btn-anim fileinput-exists" data-dismiss="fileinput"><i class="fa fa-trash"></i><span class="btn-text"> Remove</span></a> -->
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label mb-10 text-left">Status</label>
                        <input type="text" class="form-control" value="">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                <button type="button" class="btn btn-primary" data-dismiss="modal">Simpan</button>
            </div>
        </div>
    </div>