<?php
    include('connection.php');
    // we only extract username and pw if the 'submit' button is pressed
    if (isset($_POST['submit'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";  
        $result = mysqli_query($conn, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
        
        if($count == 1){
            $_SESSION['userName'] = $row["username"];
            header("Location: site.php");
        }
        else{  
            echo  '<script>
                        alert("Invalid username or password")
                        window.location.href = "index.php";
                    </script>';
        }
    }
?>