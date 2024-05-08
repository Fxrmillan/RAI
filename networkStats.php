<?php
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }

    // Check if the user is not logged in, redirect to login page
    if (!isset($_SESSION['user_logged_in']) || $_SESSION['user_logged_in'] !== true) {
        header('Location: index.php');
        exit; // Important to prevent further script execution
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Network Stats</title>
    <style>
        .centered {
            text-align: center;
            margin-top: 50px; /* Adjust the value as needed */
        }
    </style>
</head>

<body>
<?php
include("navbar.php");
?>
<div class="centered">
        <a href="networkStats.php?a=3h"><?php echo _('Last 3 Hours')?></a> |
        <a href="networkStats.php?a=1d"><?php echo _('Daily')?></a> |
        <a href="networkStats.php?a=1m"><?php echo _('Monthly')?></a> |
        <a href="networkStats.php?meas=1"><?php echo _('Meas')?></a>
</div>
<style>
img {
    padding-top: 20px;
}
</style>
<div class="centered">
			<?php
				$age = (isset($_GET['a'])) ? $_GET['a'] : '12h';

				$graphs = array('fs_calls','calls','mm_contexts','pdp_contexts','chanr','chans');
				if (file_exists('/var/rhizomatica/rrd/mybts')) {
				  $mybts=explode(' ',file_get_contents('/var/rhizomatica/rrd/mybts'));
				} else {
				  $mybts=array();
                                  for ($i=0;$i<6;$i++) { array_push($mybts,$i); }
				}
				
				if (file_exists('/var/rhizomatica/rrd/mybts_M')) {
				  $mybts_m=explode(' ',file_get_contents('/var/rhizomatica/rrd/mybts_M'));
				} else {
				  $mybts_m=array();
                                  for ($i=0;$i<6;$i++) { array_push($mybts_m,$i); }
				}

                                foreach ($mybts as $i) {
				  array_push($graphs,"chans-".$i);
				}

				foreach ($mybts_m as $i) {
				  array_push($graphs,"bts_amps-".$i);
				}

				array_push($graphs,  'broken','lur','sms','hlr_onlinereg','hlr_onlinenoreg');
				foreach ($graphs as &$g) {
					echo "<img src='graphs/$g-$age.png' /><br/><br/>";
				}
			?>
            </div>
	</body>
</html>
