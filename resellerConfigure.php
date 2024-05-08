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
<form class="raiCardLarge" method="post">
    <div class="card text-center">
        <div class="card-body">
            <h5 class="card-title border-bottom pb-3"><?php echo _('Configure reseller notification messages')?></h5>
            <div class="form-group row">
                <label><?php echo _("Invalid data")?>:</label>
                <textarea class="form-control" id="invalidData" rows="3"></textarea>
                <div  class="text-muted mb-2"> <small> <?php echo _("Invalid data sent to shortcode")?> </small></div>
            </div>
            <div class="form-group row">
                <label><?php echo _("Reseller not enough credit 1")?>:</label>
                <textarea class="form-control" id="resellerNotEnoughCredit" rows="3"></textarea>
                <div  class="text-muted mb-2"> <small> <?php echo _("Message sent to the subscriber")?> </small></div>
            </div>
            <div class="form-group row">
                <label><?php echo _("Reseller not enough credit 2")?>:</label>
                <textarea class="form-control" id="resellerNotEnoughCreditTwo" rows="3"></textarea>
                <div  class="text-muted mb-2"> <small> <?php echo _("Message sent to the reseller")?> </small></div>
            </div>
            <div class="form-group row">
                <label><?php echo _("Credit added successfully to subscribe account")?>:</label>
                <textarea class="form-control" id="sucesfullyAddedCreditMessage" rows="3"></textarea>
                <div  class="text-muted mb-2"> <small> <?php echo _("Message sent to the reseller")?> </small></div>
            </div>
            <div class="form-group row">
                <label><?php echo _("General Error")?>:</label>
                <textarea class="form-control" id="sucesfullyAddedCreditMessage" rows="3"></textarea>
                <div  class="text-muted mb-2"> <small> <?php echo _("General error notice message")?> </small></div>
            </div>
            <input type="submit" id="resselerConfigSumbit" class="btn btn-primary" value="<?php echo _('Save')?>">
        </div>
    </div>
</form>



<script>
</script>
</body>
</html>