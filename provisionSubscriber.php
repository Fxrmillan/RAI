<?php 
include("navbar.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Subscriber Provisioning</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="RAICard.css">
</head>
<body>
<form class="raiCard">
    <div class="card text-center">
        <div class="card-header">
            <ul class="nav nav-pills card-header-pills">
                <li class="nav-item">
                    <a class="nav-link active" href="#" id="layout1Button">IMSI</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" id="layout2Button">IMEI</a>
                </li>
            </ul>
        </div>
        <div class="card-body" id="layout1">
        <h5 class="card-title border-bottom pb-3"><?php echo _('Provision a new subscriber')?></h5>
            <div class="form-group row">
                <label><?php echo _("Name")?>:</label>
                <input type="text" class="form-control" id="provisonNameIMSI" value="">
                <div  class="text-muted mb-2"> <small> <?php echo _("Subscriber Name")?> </small></div>
            </div>
            <div class="form-group row">
                <label><?php echo _("Subscriber Number or IMSI")?>:</label>
                <input type="text" class="form-control" id="provisonSubscriberNumberIMSI" value="">
                <div  class="text-muted mb-2"> <small> <?php echo _("Subscriber Number")?> </small></div>
            </div>
            <div class="form-group row">
                <label><?php echo _("Equipment")?>:</label>
                <input type="text" class="form-control" id="provisonEquipmentIMSI" value="">
                <div  class="text-muted mb-2"> <small> <?php echo _("A short description of the phone and modal")?> </small></div>
            </div>
            <div  class="text-muted mb-2"> <small> <?php echo _("iPhone5/Galaxy 7/etc")?> </small></div>
            <a href="#" id="addButtonProvisionIMSI" class="btn btn-primary">Add</a>
        </div>

        <div class="card-body" id="layout2" style="display: none;">
        <h5 class="card-title border-bottom pb-3"><?php echo _('Provision a new subscriber')?></h5>
            <div class="form-group row">
                <label><?php echo _("Name")?>:</label>
                <input type="text" class="form-control" id="provisonNameIMEI" value="">
                <div  class="text-muted mb-2"> <small> <?php echo _("Subscriber Name")?> </small></div>
            </div>
            <div class="form-group row">
                <label><?php echo _("IMSI( *#06# )")?>:</label>
                <input type="text" class="form-control" id="provisonNumberIMEI" value="">
                <div  class="text-muted mb-2"> <small> <?php echo _("The phone must be connected or have recently attempted to connect")?> </small></div>
            </div>
            <div class="form-group row">
                <label><?php echo _("Equipment")?>:</label>
                <input type="text" class="form-control" id="provisonEquipmentIMEI" value="">
                <div  class="text-muted mb-2"> <small> <?php echo _("A short description of the phone and modal")?> </small></div>
            </div>
            <div  class="text-muted mb-2"> <small> <?php echo _("iPhone5/Galaxy 7/etc")?> </small></div>
            <a href="#" id="addButtonProvisionIMEI" class="btn btn-primary">Add</a>
        </div>
    </div>
</form>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Get the button elements
        var layout1Button = document.getElementById('layout1Button');
        var layout2Button = document.getElementById('layout2Button');

        // Get the layout elements
        var layout1 = document.getElementById('layout1');
        var layout2 = document.getElementById('layout2');

        var layout1Button = document.getElementById('layout1Button');
        var layout2Button = document.getElementById('layout2Button');

        function deactivateAllButtons() {
            layout1Button.classList.remove('active');
            layout2Button.classList.remove('active');
        }

        // Add click event listeners to the button elements
        layout1Button.addEventListener('click', function(event) {
            event.preventDefault(); // Prevent the default behavior of the button
            layout1.style.display = 'block';
            layout2.style.display = 'none';
            deactivateAllButtons();
            layout1Button.classList.add('active');

        });

        layout2Button.addEventListener('click', function(event) {
            event.preventDefault(); // Prevent the default behavior of the button
            layout1.style.display = 'none';
            layout2.style.display = 'block';
            deactivateAllButtons();
            layout2Button.classList.add('active');

        });
    });
</script>
</body>
</html>