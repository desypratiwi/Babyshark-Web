

<!-- Modal -->
<div class="modal fade" id="kurirModal" tabindex="-1" role="dialog" aria-labelledby="kurirModalTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="kurirModalTitle">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="form_kurir" method="post" enctype="multipart/form-data" action="<?php echo site_url('kurir/form/tambah') ?>">
                    <?php if (isset($error)) print_r($error); ?>
                    <div class="form-group">
                        <label for="nama">Nama Perusahaan Kurir</label>
                        <input class="form-control" type="text" id="nama" name="nama_perusahaan" placeholder="Isikan Nama Perusahaann Kurir"/>
                    </div>
                    <div class="form-group">
                        <label for="deskripsi">Deskripsi Perusahaan Kurir</label>
                        <input class="form-control" type="textarea" id="deskripsi" name="deskripsi_perusahaan" placeholder="Isikan Deskripsi Perusahaan Kurir"/>
                    </div>
                    <div class="form-group">
                        <label for="telp">Telp Perusahaan Kurir</label>
                        <input class="form-control" type="textarea" id="telp" name="telp_perusahaan" placeholder="Isikan Telp Kurir"/>
                    </div>
                    <div class="form-group">
                        <label for="email">Email Perusahaan Kurir</label>
                        <input class="form-control" type="email" id="email" name="email_perusahaan" placeholder="Isikan Email Kurir"/>
                    </div>
                    <div class="form-group">
                        <label for="logo">Logo</label>
                        <input id="logo" class="form-control" type="file" name="logo_perusahaan" />
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




