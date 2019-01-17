<script src="<?php echo base_url() . 'asset/js/'; ?>jquery-3.3.1.js" type="text/javascript"></script>
<script src="<?php echo base_url() . 'asset/js/'; ?>jquery.dataTables.min.js" type="text/javascript"></script>
<script src="<?php echo base_url() . 'asset/js/'; ?>dataTables.bootstrap.min.js" type="text/javascript"></script>
<link href='<?php echo base_url() . 'asset/css/'; ?>jquery.dataTables.min.css' rel='stylesheet' type='text/css'>
<div id="container-list-order">
    
    <table id="tabel-order" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Id</th>
                <th>Tgl Order</th>
                <th>Total Pembayaran</th>
                <th>Nama Customer</th>
                <th>Status Order</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($order as $row){ 
                switch($row->id_status){
                    case 'MKPE': $status = 'Menunggu Konfirmasi Penjual';
                        break;
                    case 'SDPP': $status = 'Sedang di Proses Penjual';
                        break;
                    case 'DK': $status = 'Dikirim oleh Kurir';
                        break;
                }

                ?>
            <tr>
                <td><?php echo $row->id_order ?></td>
                <td><?php echo $row->tgl_order ?></td>
                <td><?php echo $row->total_pembayaran ?></td>
                <td><?php echo $row->nama_customer ?></td>
                <td><?php echo $status ?></td>
                <td><?php switch($row->id_status){
                    case 'MKPE': echo "<form action=".site_url('c_vorder/confirm/'.$row->id_order).">
                    <button type='submit'>KONFIRMASI</button>
                    </form>
                    ";
                        break;
                    case 'SDPP': echo "<form action=".site_url('c_vorder/kirim/')." METHOD='POST'>
                                        RESI:<input type='text' name='resi'><br>
                                        <button type='submit' value ='KIRIM' formaction=".site_url('c_vorder/kirim/'.$row->id_order).">KIRIM</button>
                                        </form>";
                        break;          
                    case 'DK': echo "RESI:".$row->resi;
                        break;
                } ?></td>
            </tr>
            <?php } ?>
        </tbody>
        <tfoot>
            <tr>
                <th>Id</th>
                <th>Tgl Order</th>
                <th>Total Pembayaran</th>
                <th>Nama Customer</th>
                <th>Status Order</th>
                <th>Action</th>
            </tr>
        </tfoot>
    </table>

</div>