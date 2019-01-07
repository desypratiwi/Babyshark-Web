<link href="<?php echo base_url()?>asset/plugins/datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">
<div class="row">
  <div class="col-lg-2">.<div class="panel-group category-products" id="accordian"><!--category-productsr-->
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#sportswear">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											Akun Saya
										</a>
									</h4>
								</div>
								<div id="sportswear" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
											<li><a href="">Profil </a></li>
											<li><a href="">Bank & Kartu </a></li>
											<li><a href="">Ubah Password </a></li>
											<li><a href="">Alamat</a></li>
 



 </div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#mens">
											<span class="badge pull-right"></span>
											Belanjaan Saya
										</a>
									</h4>
								</div>
							</div>
							
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#womens">
											<span class="badge pull-right"></i></span>
											Notifikasi
										</a>
									</h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="#">Voucher Saya</a></h4>
								</div>
							</div>
						</div><!--/category-products--></div>
						
  <div class="col-lg-8">.<h4>Profil Saya</h4><form class="form-horizontal" method="post" action="<?php echo site_url('akun/update')?>">

  <input type="hidden" value="<?php echo $user->id_user;?>" name="id">
							  <div class="form-group">
								<label for="inputEmail3" class="col-sm-2 control-label">Email</label>
								<div class="col-sm-10">
								  <input type="text" name="email" class="form-control" id="inputEmail3" name="email" placeholder="Email" value ="<?php echo $user->email;?>">
								</div>
							  </div>
							  <div class="form-group">
								<label for="inputNotelp3" class="col-sm-2 control-label" >No Telp</label>
								<div class="col-sm-10">
								  <input type="text" name="no_telp" class="form-control" name="no_telp" id="inputNotelp3" placeholder="No Telp" value ="<?php echo $user->no_telp;?>">
								</div>
							  </div>
							  <div class="form-group">
									<label for="inputNamatoko" class="col-sm-2 control-label">Nama Toko</label>
									<div class="col-sm-10">
										<input type="text" name="nama_toko" class="form-control" id="inputNamatoko" placeholder="NamaToko" value ="<?php echo $user->nama_toko;?>">
								</div>
								</div>
								<div class="form-group">
									<label for="inputTL" class="col-sm-2 control-label">Jenis Kelamin</label>
									<div class="col-sm-10">
									<select name="jk">
										<option value="L" <?php if ($user->jk=="L"){echo 'selected';}?> >
											laki-laki
										</option>
										<option value="P" <?php if ($user->jk=="P"){echo 'selected';}?>>
											Perempuan
										</option>
									</select>
									
									</div>	
								</div>
								<div class="form-group">
									<label for="inputTL" class="col-sm-2 control-label">Tanggal Lahir</label>
									<div class="col-sm-10">
										<div class="input-group date" data-provide="datepicker">
											<input type="text" name="tgl_lahir" class="form-control" value ="<?php echo $user->tgl_lahir;?>">
											<div class="input-group-addon">
												<span class="glyphicon glyphicon-th"></span>
											</div>
										</div>
									</div>
								</div>
								
								
							  <div class="form-group">
								<div class="col-sm-offset-2 col-sm-10">
								  <button type="submit" class="btn btn-default">Simpan</button>
								</div>
							  </div>
							</form></div>
							
<div class="col-lg-2"><img class="size-medium wp-image-14258 aligncenter" src="<?php echo base_url()?>asset/content/noah.jpg" alt="" width="200" height="150" style="margin-top:25px" />
<button type="button" class="btn btn-primary btn-sm">Pilih Gambar</button>
</div>
</div>
<script src="<?php echo base_url()?>asset/plugins/datepicker/js/bootstrap-datepicker.min.js"></script>
<script>
$(document).ready(function(){
	$('.datepicker').datepicker({
		format: 'mm/dd/yyyy',
		startDate: '-3d'
	});
})
</script>