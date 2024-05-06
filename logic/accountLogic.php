<?php
require_once("httpful.phar");

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Check if the user is not logged in, redirect to login page
if (!isset($_SESSION['user_logged_in']) || $_SESSION['user_logged_in'] !== true) {
    header('Location: index.php');
    exit; // Important to prevent further script execution
}

// http request for CREDIT:
function get_all_credit_allocated() {
    // path variable comes from originall implementation, since it is hardcoded into the system
    $path = "http://localhost:8085/credit";

    try {
        $response = \Httpful\Request::get($path)->expectsJson()->send();
    }
    // catch (Httpful\Exception\ConnectionErrorException $e) {
    //     throw new Exception($e->getMessage());
    // }
    catch (Exception $e) {
        return null;
    }

    $data = $response->body;
    if ($data->status == 'failed') {
        throw new Exception($data->error);
    }
    return $data;
}

$c_alloc = get_all_credit_allocated();

if($c_alloc == null){
    $c_both = $c_not_paid_auth = $c_paid_not_auth = $c_na = -1;
}
else{
    foreach ($c_alloc as $row) {
        $auth=$row[0];
        $sub=$row[1];
        $amount=$row[2];
        if ($auth && $sub) {
            $c_both=$amount;
        } elseif (!$sub and $auth) {
            $c_not_paid_auth=$amount;
        } elseif ($sub and !$auth) {
            $c_paid_not_auth=$amount;
        } elseif (!$sub and !$auth) {
            $c_na=$amount;
        }
    }
}

// $accountDataQuerry = "SELECT * FROM creditaccount WHERE username = '" . $_SESSION['userName'] . "'";
// $result = pg_query($conn,$accountDataQuerry);  
// $accountData = pg_fetch_assoc($result, MYSQLI_ASSOC); 

// function printAuthorized($authorizedCredits){
//     echo $authorizedCredits;
//     return;
// }

// function printNotAuthorized($notAuthorizedCredits){
//     echo $notAuthorizedCredits;
//     return;
// }

// function printNotPaied($notPaiedCredits){
//     echo $notPaiedCredits;
//     return;
// }

// function printTotalSold($totalSoldCredits){
//     echo $totalSoldCredits;
//     return;
// }



?>