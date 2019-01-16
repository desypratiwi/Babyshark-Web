<html>
	<head>
		<title>Upload Banner</title>
	</head>
		<body>
			<?php echo form_open_multipart('U_banner/aksi_upload');?>
		 
			<input type="file" name="userfile" size="20" />
		 
			<br /><br />
		 
			<input type="submit" value="upload" />
		 
		</form>
		 
		</body>
</html>


<div class="inner-block">
<!--KONTEN-->
<h1>Data Banner</h1><hr>
  <a href="<?php echo base_url("index.php/admin/view/banner_promo/form"); ?>">Tambah Banner</a><br><br>
<table border="1" cellpadding="8">
<tr>
  <th>Gambar Banner</th>
  <th>ID Banner</th>
  <th>File Banner</th>
</tr>
<?php foreach($table as $row){ // Lakukan looping pada variabel gambar dari controller
    echo "<tr>";
    echo "<td><img src='".base_url("./gambar/".$row->nama_file)."' width='100' height='100'></td>";
    echo "<td>".$row->id_banner."</td>";
    echo "<td>".$row->nama_file."</td>";
    echo "</tr>";
  }
?>
</table>
</form>
<div class="clearfix"> </div>
</div>
<!--climate start here-->
<!--climate end here-->
