<?php
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }

    // Check if the user is not logged in, redirect to login page
    if (!isset($_SESSION['user_logged_in']) || $_SESSION['user_logged_in'] !== true) {
        header('Location: index.php');
        exit; // Important to prevent further script execution
    }

    include('navbar.php');
?>

<!DOCTYPE html>
<html>
<head>
    <title>Calls Details Records</title>
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.5/css/dataTables.dataTables.css" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/2.0.5/js/dataTables.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <table id="example" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th><?php echo _('ID')?></th>
                <th><?php echo _('Call Date')?></th>
                <th><?php echo _('Caller Number')?></th>
                <th><?php echo _('Called Number')?></th>
                <th><?php echo _('Context')?></th>
                <th><?php echo _('Duration')?></th>
                <th><?php echo _('Hangup Cause')?></th>
                <th><?php echo _('Destination')?></th>
                <th><?php echo _('Cost')?></th>
                <th></th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th><?php echo _('ID')?></th>
                <th><?php echo _('Call Date')?></th>
                <th><?php echo _('Caller Number')?></th>
                <th><?php echo _('Called Number')?></th>
                <th><?php echo _('Context')?></th>
                <th><?php echo _('Duration')?></th>
                <th><?php echo _('Hangup Cause')?></th>
                <th><?php echo _('Destination')?></th>
                <th><?php echo _('Cost')?></th>
                <th></th>
            </tr>
        </tfoot>
    </table>
    <script>
        $(document).ready(function() {
            // Initialize DataTable
            var table = $('#example').DataTable({
                "ajax": {
                    "url": "logic/callsDetailsRecordsLogic.php",
                    "dataSrc": ''
                },
                "columns": [
                    { data: "id" }, // TODO
                    { data: "start_stamp" },
                    { data: "caller_id_number" },
                    { data: "destination_number"},
                    { data: "context"}, 
                    { data: "duration"},
                    { data: "hangup_cause"},
                    { data: "destination_name"},
                    { data: "cost"},                   
                    { data: null, defaultContent: '<button type="button" class="btn btn-danger" id="deleteBtn">Delete</button>' },
                    { data: null, defaultContent: '<button type="button" class="btn btn-primary" >Click</button>' }
                ]
            });

            $('#example').on('click', 'button#deleteBtn', function (e) {
                var data = table.row($(this).parents('tr')).data();
                var msisdn = data["msisdn"]
                $.post("logic/deleteRowFromDb.php", {msisdn},
                    function(data) {
                        alert(data);
                        table.ajax.reload();
                    }
                );
            });
        });
    </script>
</body>
</html>