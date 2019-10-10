

<!-- Modal -->
<div class="modal fade" id="kurirModal" tabindex="-1" role="dialog" aria-labelledby="kurirModalTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="kurirModalTitle">Kurir</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="form_kurir" method="post" enctype="multipart/form-data" action="<?php echo site_url('kurir/form/').(isset($aksi)?$aksi:"tambah")?>">
                    <?php if (isset($error)) print_r($error); ?>
                    <div class="form-group" style="display:none" >
                        <label for="id">Id</label>
                        <input class="form-control" type="text" id="id" name="id_kurir" placeholder="Isikan Nama Perusahaann Kurir" value="<?php echo (isset($kurir->id_kurir))?($kurir->id_kurir):"";?>"/>
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama Perusahaan Kurir</label>
                        <input class="form-control" type="text" id="nama" name="nama_perusahaan" placeholder="Isikan Nama Perusahaann Kurir" value="<?php echo (isset($kurir->nama_perusahaan))?($kurir->nama_perusahaan):"";?>"/>
                    </div>
                    <div class="form-group">
                        <label for="deskripsi">Deskripsi Perusahaan Kurir</label>
                        <input class="form-control" type="textarea" id="deskripsi" name="deskripsi_perusahaan" placeholder="Isikan Deskripsi Perusahaan Kurir" value="<?php echo (isset($kurir->deskripsi_perusahaan))?($kurir->deskripsi_perusahaan):"";?>"/>
                    </div>
                    <div class="form-group">
                        <label for="telp">Telp Perusahaan Kurir</label>
                        <input class="form-control" type="textarea" id="telp" name="telp_perusahaan" placeholder="Isikan Telp Kurir" value="<?php echo (isset($kurir->telp_perusahaan))?($kurir->telp_perusahaan):"";?>"/>
                    </div>
                    <div class="form-group">
                        <label for="email">Email Perusahaan Kurir</label>
                        <input class="form-control" type="email" id="email" name="email_perusahaan" placeholder="Isikan Email Kurir" value="<?php echo (isset($kurir->email_perusahaan))?($kurir->email_perusahaan):"";?>"/>
                    </div>
                    <div class="form-group">
                        <label for="logo">Logo</label>
                        <?php if(!isset($aksi)){?><input id="logo" class="form-control" type="file" name="logo_perusahaan" />
                        <?php } else {?> <img src="<?php echo base_url($kurir->logo_perusahaan);?>"/><?php }?>
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




