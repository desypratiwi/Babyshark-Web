<?php
	echo "<h1>Produk</h1>";
	echo "<table border='1'>
	         <tr>
			    <th>Nama Produk</th>
				<th>Deskripsi</th>
				<th>Kategori</th>
				<th>Brand</th>
				<th>Stok</th>
				<th>Harga</th>
				<th>Action</th>
				
			</tr>
			
			";
		//print_r($produks);
	for($i=0;$i<count($produks);$i++){
		$row = $produks[$i];
		$link = site_url('produk/show/').$row->id_produk."/edit";
		//$link = anchor(site_url("dosen/show/$row->nip"),"Detil");
		echo "<tr>
		         <td>{$row->nama_produk}</td>
				 <td>{$row->deskripsi_produk}</td>
				 <td>{$row->nama_kategori}</td>
				 <td>{$row->nama_brand}</td>
				 <td>{$row->stok}</td>
				 <td>{$row->harga_jual}</td>
				 <td><a href='{$link}'><button>Edit</button></a></td>
			</tr>";
	}
	echo "</table>";
?>