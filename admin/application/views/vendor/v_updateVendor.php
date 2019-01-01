<?php $this->load->view('admin_layout/header'); ?>

<!--KONTEN-->
<form action="/Git/Babyshark-Web/admin/index.php/c_addbrand/addBrand" method="POST">
	<table>
	<tr><td>ID:</td><td><input type="text" name="id" disabled=1 value=<?php echo $temp->id_vendor; ?>></td></tr>
	<tr><td>Nama Vendor:</td><td><input type="text" name="nama_v"></td></tr>
	<tr><td>Nama Owner:</td><td><input type="text" name="nama_o"></td></tr>
	<tr><td>Telp:</td><td><input type="text" name="telp"></td></tr>
	<tr><td>Alamat:</td><td><input type="text" name="alamat"></td></tr>
	<tr><td>Kota:</td><td><input type="text" name="kota"></td></tr>
	<tr><td>Email:</td><td><input type="text" name="email"></td></tr>	
	</table>
	<input type="submit">
</form>
<!--KONTEN-->
  <div class="clearfix"> </div>
</div>
<!--climate start here-->
<!--climate end here-->
</div>

<?php $this->load->view('admin_layout/footer'); ?>