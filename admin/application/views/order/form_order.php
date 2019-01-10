

<!-- Modal -->
<div class="modal fade" id="orderModal" tabindex="-1" role="dialog" aria-labelledby="orderModalTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="orderModalTitle">Detail Order</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="form_kurir" method="post" enctype="multipart/form-data" action="<?php echo site_url('kurir/form/tambah') ?>">
                    <?php if (isset($error)) print_r($error); ?>
                    <div class="form-group">
                        <label for="deskripsi">Status</label>
                        <select>
                            <option>Menunggu Konfirmasi Penjual</option>
                            <option>Menunggu Konfirmasi Pembayaran</option>
                            <option>Sedang Di Proses Penjual</option>
                            <option>Dikirim oleh Kurir</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="nama">Resi</label>
                        <input class="form-control" type="text" id="nama" name="nama_perusahaan" placeholder="Isikan Resi"/>
                    </div>

                    <!--<button class="btn btn-primary" type="submit">Tambah</button>-->


                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" form="form_kurir">Save changes</button>
            </div>
        </div>
    </div>
</div>




