<script src="<?php echo base_url() . 'asset/js/'; ?>jquery-3.3.1.js" type="text/javascript"></script>
<script src="<?php echo base_url() . 'asset/js/'; ?>jquery.dataTables.min.js" type="text/javascript"></script>
<script src="<?php echo base_url() . 'asset/js/'; ?>dataTables.bootstrap.min.js" type="text/javascript"></script>
<link href='<?php echo base_url() . 'asset/css/'; ?>jquery.dataTables.min.css' rel='stylesheet' type='text/css'>
<div>
    <div ><button type="button" class="btn btn-primary btn-md pull-right" style="margin-bottom: 20px">
            <span class="glyphicon glyphicon-plus"></span>New Kurir </button>
    </div>
    
    <table id="tabel-kurir" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Id</th>
                <th>Perusahaan</th>
                <th>Telp Perusahaan</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>

        </tbody>
        <tfoot>
            <tr>
                <th>Id</th>
                <th>Perusahaan</th>
                <th>Telp Perusahaan</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
        </tfoot>
    </table>

</div>

<script>
    $(document).ready(function () {
        $('#tabel-kurir').DataTable({
           ajax: "kurir/all_kurir",
           "columns":[
               {"data":"id_kurir"},
               {"data":"nama_perusahaan"},
               {"data":"telp_perusahaan"},
               {"data":"email_perusahaan"},
               {"data":"aksi"}
           ],
            "columnDefs": [
                {
                    "targets": [0],
                    "visible": false,
                    "searchable": false
                }
            ]
        });
           
    });
    function aksi() {

    }
</script>
