<!-- Modal -->
<div class="modal fade" id="kategoriModalLong" tabindex="-1" role="dialog" aria-labelledby="kategoriModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="kategoriModalLongTitle">Kategori</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <form id="form_kategori" method="post" enctype="multipart/form-data" action="<?php echo site_url('kategori/form/').(isset($aksi)?$aksi:"tambah") ?>">
                        <div class="form-group" style="display:none;">
                            <label for="id">Id</label>
                            <input class="form-control" id="id" type="text" name="id_kategori" placeholder="Isikan Kategori" value="<?php echo (isset($kategori->id_kategori))?($kategori->id_kategori):"";?>"/>
                        </div>
                        <div class="form-group">
                            <label for="nama">Kategori</label>
                            <input class="form-control" id="nama" type="text" name="nama_kategori" placeholder="Isikan Kategori" value="<?php echo (isset($kategori->nama_kategori))?($kategori->nama_kategori):"";?>"/>
                        </div>
                        <div class="form-group">
                            <label for="deskripsi">Deskripsi Kategori</label>
                            <input class="form-control" id="deskripsi" type="textarea" name="deskripsi_kategori" placeholder="Isikan Deskripsi Kategori"value="<?php echo (isset($kategori->deskripsi_kategori))?($kategori->deskripsi_kategori):"";?>"/>
                        </div>
                        <div class="form-group">
                            <label for="gambar">Gambar</label>
                            <?php if(!isset($aksi)){?> <input id="gambar" type="file" class="form-control-file" name="gambar" />
                            <?php } else {?> <img src="<?php echo base_url($kategori->gambar);?>"/><?php }?>
                        </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" form="form_kategori" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>

