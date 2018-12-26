<script src="<?php echo base_url() . 'asset/js/'; ?>jquery-3.3.1.js" type="text/javascript"></script>
<script src="<?php echo base_url() . 'asset/js/'; ?>jquery.dataTables.min.js" type="text/javascript"></script>
<script src="<?php echo base_url() . 'asset/js/'; ?>dataTables.bootstrap.min.js" type="text/javascript"></script>
<link href='<?php echo base_url() . 'asset/css/'; ?>jquery.dataTables.min.css' rel='stylesheet' type='text/css'>
<div id="container-list-user">
    <div ><button type="button" class="btn btn-primary btn-md pull-right" style="margin-bottom: 20px" data-toggle="modal" data-target="#userModal">
            <span class="glyphicon glyphicon-plus"></span>New User </button>
    </div>

    <table id="tabel-user" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Id</th>
                <th>Username</th>
                <th>Nama</th>
                <th>Email</th>
                <th>No Telp</th>
                <th>Role</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>

        </tbody>
        <tfoot>
            <tr>
                <th>Id</th>
                <th>Username</th>
                <th>Nama</th>
                <th>Email</th>
                <th>No Telp</th>
                <th>Role</th>
                <th>Action</th>
            </tr>
        </tfoot>
    </table>
    <div class="container-modal">

    </div>
</div>

<script type="text/javascript">
    jQuery(document).ready(function () {

        $('#tabel-user').DataTable({
            ajax: "user/all_user",
            "columns": [
                {"data": "id_user"},
                {"data": "username"},
                {"data": "nama"},
                {"data": "email"},
                {"data": "no_telp"},
                {"data": "role"},
                {"data": "aksi"}
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
    function formUser(user_id, aksi) {
        if (aksi !== "delete") {
            $.post("user/" + aksi, {id: user_id}, function (data) {
                $("#userModal").remove();
                $('.container-modal').html(data);
                $('#userModal').modal('show');
                //$('#userModal').modal('toggle');
            });
        } else {
            
            $.post("user/"+aksi, {id:user_id}, function (data) {
                
                //$("#container-list-user").remove();
                //$(".inner-block").html(data);
                //var table = $("#table-user").DataTable();
                
            });
            window.location = "user";
        }
    }
</script>
