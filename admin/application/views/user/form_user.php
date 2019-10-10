

<!-- Modal -->
<div class="modal fade" id="userModal" tabindex="-1" role="dialog" aria-labelledby="userModalTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="userModalTitle">Detail User</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?php // print_r($role)
//                print_r($user);
            ?>
            <div class="modal-body">
                <form id="form_user" method="post" enctype="multipart/form-data" action="<?php echo site_url('user/form/') . (isset($aksi) ? $aksi : "tambah") ?>">
                    <?php if (isset($error)) print_r($error); ?>
                    <div class="form-group" style="display:none;">
                            <label for="id">Id</label>
                            <input class="form-control" id="id" type="text" name="id_user" placeholder="Isikan Kategori" value="<?php echo (isset($user->id_user))?($user->id_user):"";?>"/>
                        </div>
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input class="form-control" type="text" id="username" name="username" placeholder="Isikan Username" value="<?php echo (isset($user->username))?($user->username):""; ?>"/>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input class="form-control" type="password" id="password" name="password" placeholder="Isikan User" value="<?php echo (isset($user->password))?($user->password):""; ?>"/>
                    </div>
                    
                    <div class="form-group">
                        <label for="id_role">Role</label>
                        <br>
                        <select name="id_role">
                            <?php 
                                for($i=0;$i<count($role);$i++){
                            ?>
                                <option value="<?php echo $role[$i]->id_role;?>" <?php echo ($role[$i]->id_role==$user->id_role)?"selected" :""; ?> ><?php echo $role[$i]->role;?></option>
                            <?php }?>

                        </select>
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input class="form-control" type="text" id="nama" name="nama" placeholder="Isikan Nama User" value="<?php echo (isset($user->nama))?($user->nama):""; ?>"/>
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input class="form-control" type="textarea" id="alamat" name="alamat" placeholder="Isikan Alamat User" value="<?php echo (isset($user->alamat))?($user->alamat):""; ?>"/>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input class="form-control" type="email" id="email" name="email" placeholder="Isikan Email User" value="<?php echo (isset($user->email))?($user->email):""; ?>"/>
                    </div>
                    <div class="form-group">
                        <label for="no_telp">Telp</label>
                        <input class="form-control" type="phone" id="no_telp" name="no_telp" placeholder="Isikan Telp User" value="<?php echo (isset($user->no_telp))?($user->no_telp):""; ?>"/>
                    </div>

                    <!--<button class="btn btn-primary" type="submit">Tambah</button>-->


                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" form="form_user">Save changes</button>
            </div>
        </div>
    </div>
</div>




