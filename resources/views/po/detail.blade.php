<div class="modal fade" id="detail{{ $data_po->id_PO }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h5 class="modal-title" id="exampleModalLabel1">Detail Purchase Order</h5>
            </div>
                <div class="modal-body table">
                    <table class="table table-bordered no-margin">
                        <tbody>
                            <tr>
                                <th width="200px"><strong>No Purchase Order</strong></th>
                                <td>{{ $data_po->no_PO }}</td>
                            </tr>
                            <tr>
                                <th><strong>Nama Barang</strong> </th>
                                <td>{{ $data_po->namaBarang }}</td>
                            </tr>
                            <tr>
                                <th><strong>Jumlah Barang </strong></th>
                                <td>{{ $data_po->jumlah }}</td>
                            </tr>
                            <tr>
                                <th><strong>Keterangan</strong> </th>
                                <td>{{ $data_po->keterangan }}</td>
                            </tr>
                            <tr>
                                <th><strong>Tanggal Pembuatan</strong> </th>
                                <td>{{ $data_po->created_at }}</td>
                            </tr>
                            <tr>
                                <th><strong>Status </strong></th>
                                <td>{{ $data_po->status }}</td>
                            </tr>
                            <tr>
                                <th><strong>Nama Marketing</strong></th>
                                <td>{{ $data_po->pic_marketing }}</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
        </div>
    </div>
</div>
