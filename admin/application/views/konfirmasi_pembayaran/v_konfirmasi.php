<div class="inner-block">
<!--KONTEN-->
    <h1>Data Pembayaran</h1><hr>
    <table border="1" cellpadding="8">
      <tr>
        <th>ID Pembayaran</th>
        <th>Tipe Pembayaran</th>
        <th>Tanggal Pembayaran</th>
      </tr>
<?php
if( ! empty($u_konfirmasi)){ // Jika data pada database tidak sama dengan empty (alias ada datanya)
  foreach($bayar as $data){ // Lakukan looping pada variabel bayar dari controller
    echo "<td>".$data->id_pembayaran."</td>";
    echo "<td>".$data->tipe_pembayaran."</td>";
    echo "<td>".$data->date_created."</td>";
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
