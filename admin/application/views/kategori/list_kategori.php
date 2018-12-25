<script src="<?php echo base_url() . 'asset/js/'; ?>jquery-3.3.1.js" type="text/javascript"></script>
<script src="<?php echo base_url() . 'asset/js/'; ?>jquery.dataTables.min.js" type="text/javascript"></script>
<script src="<?php echo base_url() . 'asset/js/'; ?>dataTables.bootstrap.min.js" type="text/javascript"></script>
<link href='<?php echo base_url() . 'asset/css/'; ?>jquery.dataTables.min.css' rel='stylesheet' type='text/css'>
<div>
    <div ><button type="button" class="btn btn-primary btn-md pull-right" data-toggle="modal" data-target="#kategoriModalLong" style="margin-bottom: 20px">
            <span class="glyphicon glyphicon-plus"></span>New Category </button>
    </div>
    
    <table id="tabel-kategori" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Id</th>
                <th>Kategori</th>
                <th>Deskripsi</th>
                <th>Aktif</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>

        </tbody>
        <tfoot>
            <tr>
                <th>Id</th>
                <th>Kategori</th>
                <th>Deskripsi</th>
                <th>Aktif</th>
                <th>Action</th>
            </tr>
        </tfoot>
    </table>

</div>

<script>
    $(document).ready(function () {
        $('#tabel-kategori').DataTable({
           ajax: "kategori/all_kategori",
           "columns":[
               {"data":"id_kategori"},
               {"data":"nama_kategori"},
               {"data":"deskripsi_kategori"},
               {"data":"aktif"},
               {"data":"aksi"}
           ]
        });
           
    });
    function aksi() {

    }
</script>
