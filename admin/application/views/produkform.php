
<form action='/babyshark-web/admin/index.php/produk/tambahProduct' method='POST' enctype="multipart/form-data" >
Nama Produk : <input type="text" name="nama_produk" value="<?php if(isset($produk)){echo $produk->nama_produk;}?>">
<br>
<span>
  <span  style="vertical-align: middle;">Deskripsi Produk : </span>
  <textarea rows="4" cols="50"   name="deskripsi_produk" style="vertical-align: middle;" ><?php if(isset($produk)){echo $produk->deskripsi_produk;}?></textarea>
</span>

<br>
Kategori : 
<select name="kategori">
<?php for($i=0;$i<count($kategori);$i++) { ?>
	<option <?php if(isset($produk)){
		if($kategori[$i]->id_kategori==$produk->id_kategori){echo "selected";}
	}?> value="<?php echo $kategori[$i]->id_kategori?>"><?php echo $kategori[$i]->nama_kategori?></option>
	
<?php } ?>	
</select><br> 
Harga Awal: <input type="text" name="harga_awal" value="<?php if(isset($produk)){echo $produk->harga_awal;}?>">
<br>
Harga Jual: <input type="text" name="harga_jual" value="<?php if(isset($produk)){echo $produk->harga_jual;}?>">
<br>
Stok : <input type="text" name="stok" value="<?php if(isset($produk)){echo $produk->stok;}?>">
<br>
Diskon : <input type="text" name="diskon" value="<?php if(isset($produk)){echo $produk->diskon;}?>">
<br>
Produk Tersedia : <input type="text" name="produk_tersedia" value="<?php if(isset($produk)){echo $produk->produk_tersedia;}?>">
<br>
Catatan : <input type="text" name="catatan" value="<?php if(isset($produk)){echo $produk->catatan;}?>">
<br>
Brand : 
<select name="brand">
<?php for($i=0;$i<count($brand);$i++){?>
	<option <?php if(isset($produk)){ 
	if($kategori[$i]->id_kategori==$produk->id_kategori){echo "selected ";}
	}?>value ="<?php echo $brand[$i]->id_brand?>"><?php echo $brand[$i]->nama_brand ?></option>
<?php } ?>
</select><br> 
Upload Foto : 
<input type="file" name="gambar" size="20" />

<br /><br />

<input type="submit" value="Submit" />

</form>              
