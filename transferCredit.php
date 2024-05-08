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
<form class="raiCard" method="post">
    <div class="card text-center">
        <div class="card-body">
            <h5 class="card-title border-bottom pb-3"><?php echo _('Transfer Credit')?></h5>
            <div class="form-group row">
                <label><?php echo _("Source number")?>:</label>
                <input type="text" class="form-control" id="transferCreditSource" value="123451XXXXXX">
                <div  class="text-muted mb-2"> <small> <?php echo _("Enter digits to search for a subscriber number")?> </small></div>
            </div>
            <div class="form-group row">
                <label><?php echo _("Destination Number")?>:</label>
                <input type="text" class="form-control" id="transferDestination" value="123451XXXXXX">
                <div  class="text-muted mb-2"> <small> <?php echo _("Amount to add")?> </small></div>
            </div>
            <div class="form-group row">
                <label><?php echo _("Amount")?>:</label>
                <input type="text" class="form-control" id="transferAmmount" value="000">
                <div  class="text-muted mb-2"> <small> <?php echo _("Amount to add")?> </small></div>
            </div>
            <input type="submit" id="addButtonProvisionIMSI" class="btn btn-primary" value="<?php echo _('Next')?> >>">
        </div>
    </div>
</form>



<script>
</script>
</body>
</html>