<html>
	<head>
		<title>Upload Banner</title>
	</head>
		<body>
      <h4>Tambahkan Banner</h4>
      <br>
			<?php echo form_open_multipart('U_banner/aksi_upload');?>
		
			<input type="file" name="userfile" size="20" />
      <input type="text" name="desc" placeholder="Deskripsi" />
		 
			<br></br>
		 
			<input type="submit" value="upload" />
		 
		</form>
		 
		</body>
</html>


<div class="inner-block">

<!--KONTEN-->
<style>
table {
  width:100%;
}
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 5px;
  text-align: left;
}
th{
  background-color: lightgrey;
}
</style>
<h1>Data Banner</h1>
  <table border="1" cellpadding="8">
    <tr>
      <th>Gambar Banner</th>
      <th>ID Banner</th>
      <th>Nama File</th>
      <th>Deskripsi</th>
      <th>Tanggal Upload</th>
    </tr>
<?php foreach($table as $row){ // Lakukan looping pada variabel gambar dari controller
    echo "<tr>";
    echo "<td><img src='".base_url("./gambar/".$row->nama_file)."' width='150' height='100'></td>";
    echo "<td>".$row->id_banner."</td>";
    echo "<td>".$row->nama_file."</td>";
    echo "<td>".$row->deskripsi."</td>";
    echo "<td>".$row->tanggal_upload."</td>";
    echo "</tr>";
  }
?>
</table>
</form>
<div class="clearfix"> </div>
</div>
<!--climate start here-->
<!--climate end here-->
