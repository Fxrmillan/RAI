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
<form class="raiCardSMS" method="post">
    <div class="card text-center">
        <div class="card-body">
            <h5 class="card-title border-bottom pb-3"><?php echo _('Send SMS')?></h5>
            <div class="form-group row">
                <label><?php echo _("Message")?>:</label>
                <textarea class="form-control" id="invalidData" rows="3"></textarea>
                <div  class="text-muted mb-2"> <small> <?php echo _("Text of the SMS message")?> </small></div>
            </div>
            <div class="form-group row">
                <label><?php echo _("Number")?>:</label>
                <input type="text" class="form-control" id="smsNumber" value="">
                <div  class="text-muted mb-2"> <small> <?php echo _("Recipient of the SMS message")?> </small></div>
            </div>
            <input type="submit" id="sendSMSSubmit" class="btn btn-primary mb-3" value="<?php echo _('Send SMS')?>">
            <hr>
            <div> <p class="card-text mb-3"><strong><?php echo _('Bulk SMS')?></strong></p></div>
            <hr>
            <div class="form-group row">
                <label><?php echo _("Validity")?>:</label>
                <select class="form-control" id="validityType">
                    <option id=OneHour><?php echo _("One Hour")?></option>
                    <option id="OneDay" ><?php echo _("One Day")?></option>
                    <option id= "OneWeek"><?php echo _("One Week")?></option>
                    <option id= "OneMonth"><?php echo _("One Month")?></option>
                </select>
                
                <div  class="text-muted mb-2"> <small> <?php echo _("Recipient of the SMS message")?> </small></div>
            </div>
        <fieldset class="form-group">
        <div class="form-group row">
          <input class="form-check-input" type="checkbox" name="gridRadios" id="allConnected" value=<?php echo _("All Connected")?> onclick="uncheckOtherCheckboxes(this)">
          <label class="form-check-label" for="gridRadios1">
          <?php echo _("All Connected")?>
          </label>
        </div>
        <div class="form-group row">
          <input class="form-check-input" type="checkbox" name="gridRadios" id="allAuthorized" value=<?php echo _("All Authorized")?> onclick="handleCheckbox(this)">
          <label class="form-check-label" for="gridRadios1">
          <?php echo _("All Authorized")?>
          </label>
        </div>
        <div class="form-group row">
          <input class="form-check-input" type="checkbox" name="gridRadios" id="AllNotAuthorized" value=<?php echo _("All not authorized")?>  onclick="handleCheckbox(this)">
          <label class="form-check-label" for="gridRadios1">
          <?php echo _("All not authorized")?>
          </label>
        </div>
        <div class="form-group row">
          <input class="form-check-input" type="checkbox" name="gridRadios" id="AllSubscrption" value=<?php echo _("All subscription not paid")?>  onclick="handleCheckbox(this)">
          <label class="form-check-label" for="gridRadios1">
          <?php echo _("All subscription not paid")?>
          </label>        
      </div>
      <input type="submit" id="sendSMSSubmitTwo" class="btn btn-primary mt-3" value="<?php echo _('Send SMS')?>">

    </div>
    </div>
    </div>
</form>


<script>
    function uncheckOtherCheckboxes(checkbox) {
        if (checkbox.checked) {
            document.querySelectorAll('input[type="checkbox"]').forEach((chk) => {
                if (chk !== checkbox) {
                    chk.checked = false;
                }
            });
        }
    } 
    function handleCheckbox(checkbox) {
        if (checkbox.checked && checkbox.id !== 'allConnected') {
            // If any checkbox other than "All Connected" is checked, uncheck "All Connected"
            document.getElementById('allConnected').checked = false;
        }
    }
</script>
</body>
</html>