<div class="inner-block">
<!--KONTEN-->
<h1>Data Banner</h1><hr>
  <a href="<?php echo base_url("index.php/admin/view/banner_promo/form"); ?>">Tambah Banner</a><br><br>
<table border="1" cellpadding="8">
<tr>
  <th>ID Banner</th>
  <th>File Banner</th>
  <th>Link Banner</th>
  <th>Desc</th>
</tr>
<?php
if( ! empty($U_banner)){ // Jika data pada database tidak sama dengan empty (alias ada datanya)
  foreach($gambar as $data){ // Lakukan looping pada variabel gambar dari controller
    echo "<tr>";
    echo "<td><img src='".base_url("admin/uploads/".$data->f_banner)."' width='100' height='100'></td>";
    echo "<td>".$data->id_banner."</td>";
    echo "<td>".$data->f_banner."</td>";
    echo "<td>".$data->l_banner."</td>";
    echo "<td>".$data->desc."</td>";
    echo "</tr>";
  }
}else{ // Jika data tidak ada
  echo "<tr><td colspan='5'>Data tidak ada</td></tr>";
}
?>
</table>
</form>
<div class="clearfix"> </div>
</div>
<!--climate start here-->
<!--climate end here-->

