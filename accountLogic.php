<?php   
$accountDataQuerry = "SELECT * FROM creditaccount WHERE username = '" . $_SESSION['userName'] . "'";
$result = mysqli_query($conn,$accountDataQuerry);  
$accountData = mysqli_fetch_array($result, MYSQLI_ASSOC); 

function printAuthorized($authorizedCredits){
    echo $authorizedCredits;
    return;
}

function printNotAuthorized($notAuthorizedCredits){
    echo $notAuthorizedCredits;
    return;
}

function printNotPaied($notPaiedCredits){
    echo $notPaiedCredits;
    return;
}

function printTotalSold($totalSoldCredits){
    echo $totalSoldCredits;
    return;
}



?>