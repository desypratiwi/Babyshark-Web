<?php $this->load->view('admin_layout/header'); ?>

<!--KONTEN-->
<div class="inner-block">

<form action="/Git/Babyshark-Web/admin/index.php/c_addbrand/addBrand" method="POST">
	<table>
	<tr><td>ID:</td><td><input type="text" name="id"></td></tr>
	<tr><td>Nama:</td><td><input type="text" name="name"></td></tr>
	<tr><td>Deskripsi:</td><td><textarea rows="4" cols="50" name="desc"></textarea></td></tr>	
	</table>
	<input type="submit">
</form>

  <div class="clearfix"> </div>
</div>
<!--climate start here-->
<!--climate end here-->
</div>
<!--KONTEN-->

<?php $this->load->view('admin_layout/footer'); ?>
