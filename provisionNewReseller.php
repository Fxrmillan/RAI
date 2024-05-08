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
        <div class="card-body">
        <h5 class="card-title border-bottom pb-3"><?php echo _('Provision a new Reseller')?></h5>
            <div class="form-group row">
                <label><?php echo _("Reseller number")?>:</label>
                <input type="text" class="form-control" id="resellerName" value="">
                <div  class="text-muted mb-2"> <small> <?php echo _("Resseller number")?> </small></div>
            </div>
            <div class="form-group row">
                <label><?php echo _("PIN")?>:</label>
                <input type="text" class="form-control" id="resellerCode" value="">
                <div  class="text-muted mb-2"> <small> <?php echo _("Resseller code")?> </small></div>
            </div>
            <div class="form-group row">
                <label><?php echo _("Inital Balance")?>:</label>
                <input type="text" class="form-control" id="reselleInitalBalance" value="">
                <div  class="text-muted mb-2"> <small> <?php echo _("Ammount to add")?> </small></div>
            </div>
            <a href="#" id="provisionNewResellerSubmit" class="btn btn-primary">Add</a>
        </div>
    </div>
</form>

<script>
</script>
</body>
</html>