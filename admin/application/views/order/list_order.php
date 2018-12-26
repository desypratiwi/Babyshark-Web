<script src="<?php echo base_url() . 'asset/js/'; ?>jquery-3.3.1.js" type="text/javascript"></script>
<script src="<?php echo base_url() . 'asset/js/'; ?>jquery.dataTables.min.js" type="text/javascript"></script>
<script src="<?php echo base_url() . 'asset/js/'; ?>dataTables.bootstrap.min.js" type="text/javascript"></script>
<link href='<?php echo base_url() . 'asset/css/'; ?>jquery.dataTables.min.css' rel='stylesheet' type='text/css'>
<div id="container-list-order">
<!--    <div ><button type="button" class="btn btn-primary btn-md pull-right" style="margin-bottom: 20px">
            <span class="glyphicon glyphicon-plus"></span>New Kurir </button>
    </div>-->
    
    <table id="tabel-order" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Id</th>
                <th>Tgl Order</th>
                <th>Total Pembayaran</th>
                <th>Nama Customer</th>
                <th>Email</th>
                <th>Status Order</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>

        </tbody>
        <tfoot>
            <tr>
                <th>Id</th>
                <th>Tgl Order</th>
                <th>Total Pembayaran</th>
                <th>Nama Customer</th>
                <th>Email</th>
                <th>Status Order</th>
                <th>Action</th>
            </tr>
        </tfoot>
    </table>

</div>

<script>
    $(document).ready(function () {
        $('#tabel-order').DataTable({
           ajax: "order/all_order",
           "columns":[
               {"data":"id_order"},
               {"data":"tgl_order"},
               {"data":"total_pembayaran"},
               {"data":"nama_customer"},
               {"data":"email"},
               {"data":"status_order"},
               {"data":"aksi"}
           ],
            "columnDefs": [
                {
                    "targets": [0],
                    "visible": true,
                    "searchable": true
                }
            ]
        });
           
    });
    function formOrder(id_order,aksi) {
        if(aksi!=="delete"){
            $.post("order/"+aksi,{id:id_order},function(data){
                $("#orderModal").remove();
                $("#container-list-order").append(data);
                $("#orderModal").modal('show');
            });
        }else{
            
        }
    }
</script>
