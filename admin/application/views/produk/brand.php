<table border=1>
	<thead>
		<th>Brand</th>
		<th>Deskripsi</th>
		<th>Logo</th>
		<th>Logo</th>
	</thead>
	<tbody>

		<?php 
		foreach($brand as $row){ ?>
		<tr>
			<td><?php echo $row->nama_brand; ?></td>
			<td><?php echo $row->deskripsi_brand; ?></td>
			<td><?php if($row->logo == ""){ ?>
				<?php echo form_open_multipart('C_addbrand/uploadBrand/'.$row->id_brand);?>
					<input type="file" name="userfile"/>
		 			<input type="submit" value="Upload" size="20" />
				</form>
				<?php }else{
				 echo "<img src='".base_url("gambar/brand/".$row->logo)."' height='100'>";
				} ?>
		</tr>
		<?php }?>
	</tbody>
</table>