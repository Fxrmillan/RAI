<?php
    require_once("logic/httpful.phar");
    include("navbar.php");

    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }

    // Check if the user is not logged in, redirect to login page
    if (!isset($_SESSION['user_logged_in']) || $_SESSION['user_logged_in'] !== true) {
        header('Location: index.php');
        exit; // Important to prevent further script execution
    }

    function get($resource) {
        $path = "http://localhost:8085/statistics";
        
        try {
            $response = \Httpful\Request::get($path."$resource")->expectsJson()->send();
            $data = $response->body;
        } catch (Httpful\Exception\ConnectionErrorException $e) {
            // throw new Exception($e->getMessage());
            return null;
        }
        if (is_array($data)) {
            if (array_key_exists('status', $data)) {
                if ($data->status == 'failed') {
                    throw new Exception($data->error);
                }
            }
        }
        return $data;    
    }

    try {
        $total_cost = get("/costs/total_spent");
    } catch (StatisticException $e) {
        $total_cost = "ERROR $e";
    }
    try {
        $total_credits = get("/costs/total_spent_credits");
    } catch (StatisticException $e) {
        $total_credits = "ERROR $e";
    }
    try {
        $avg_call_cost = get("/costs/average_call_cost");
    } catch (StatisticException $e) {
        $avg_call_cost = "ERROR $e";
    }

    if($total_cost == null){
        $total_cost = -1;
    }
    if($total_credits == null){
        $total_credits = -1;
    }
    if($avg_call_cost == null){
        $avg_call_cost = -1;
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cost Stats</title>
    <style>
        .centered {
            text-align: center;
            margin-top: 50px; /* Adjust the value as needed */
        }
    </style>
</head>
<body>
    <br>
    <br>
    <br>
    <div style="text-align:center">
        <?php echo _('Total spent on calls')?>: <b><?=$total_cost?></b> | <?php echo _('Total on credits')?>: <b><?=$total_credits?></b> | <?php echo _('Average call cost')?>: <b><?=$avg_call_cost?></b><br/><br/>
        <?php echo _('Top 10 destinations')?><br/><br/>
        <?php
            try {
                $top_destinations = get("/costs/top_destinations");
            } catch (Exception $e) {
                echo "Error: ".$e->getMessage();
            }
            
            if($top_destinations != null){
                foreach($top_destinations as $dest) {
                    echo $dest[0].": <b>".$dest[1]."</b><br/>";
                }
            }
            else{
                echo "INFORMATION NOT AVAILABLE";
            }
        ?>

        <br>
        <br>

        <a href="costStats.php?a=7d"><?php echo _('Last 7 days')?></a> | <a href="costStats.php?a=4w"><?php echo _('Last 4 weeks')?></a> | <a href="costStats.php?a=m"><?php echo _('Monthly')?></a><br/><br/>

        <?php
            $age = (isset($_GET['a'])) ? $_GET['a'] : '7d';
            $graphs = array('cost','credits');
            foreach ($graphs as &$g) {
                echo "<img src='stats/$g.php?p=$age' style='border: 1px solid #bbb;'/>&nbsp;&nbsp;";
            }
            echo "<br/>";
        ?>
	</div>
</body>
</html>