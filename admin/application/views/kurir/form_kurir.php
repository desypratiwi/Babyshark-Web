

<form method="post" enctype="multipart/form-data" action="<?php echo site_url('kurir/form/tambah')?>">
    <?php if(isset($error)) print_r($error); ?>
    <table>
        <tr>
            <td>Nama Perusahaan Kurir</td>
            <td><input type="text" name="nama_perusahaan" placeholder="Isikan Nama Perusahaann Kurir"/></td>
        </tr>
        <tr>
            <td>Deskripsi Perusahaan Kurir</td>
            <td><input type="textarea" name="deskripsi_perusahaan" placeholder="Isikan Deskripsi Perusahaan Kurir"/></td>
        </tr>
        <tr>
            <td>Telp Perusahaan Kurir</td>
            <td><input type="textarea" name="telp_perusahaan" placeholder="Isikan Telp Kurir"/></td>
        </tr>
        <tr>
            <td>Logo</td>
            <td><input type="file" name="logo_perusahaan" /></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="Tambah"/></td>
        </tr>
    </table>
</form>

   


