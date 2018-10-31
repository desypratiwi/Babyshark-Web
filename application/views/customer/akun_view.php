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
						
  <div class="col-lg-8">.<h4>Profil Saya</h4><form class="form-horizontal">
							  <div class="form-group">
								<label for="inputEmail3" class="col-sm-2 control-label">Email</label>
								<div class="col-sm-10">
								  <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
								</div>
							  </div>
							  <div class="form-group">
								<label for="inputNotelp3" class="col-sm-2 control-label">No Telp</label>
								<div class="col-sm-10">
								  <input type="no_telp" class="form-control" id="inputNotelp3" placeholder="No Telp">
								</div>
							  </div>
							  <div class="form-group">
									<label for="inputNamatoko" class="col-sm-2 control-label">Nama Toko</label>
									<div class="col-sm-10">
										<input type="nama_toko" class="form-control" id="inputNamatoko" placeholder="NamaToko">
								</div>
								</div>
								<div class="form-group">
									<label for="inputJK" class="col-sm-2 control-label">Jenis Kelamin</label>
									<div class="radio col-lg-2">
									  <label>
										<input type="radio" name="optionsRadios" id="lakilaki" value="lakilaki" checked>
										Laki-laki
									  </label>
									</div>
									<div class="radio">
									  <label>
										<input type="radio" name="optionsRadios" id="perempuan" value="perempuan">
										Perempuan
									  </label>
									</div>
								</div>
								<div class="form-group">
									<label for="inputTL" class="col-sm-2 control-label">Tanggal Lahir</label>
									<div class="col-sm-10">
										<div class="input-group date" data-provide="datepicker">
											<input type="text" class="form-control">
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