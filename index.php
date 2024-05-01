<?php 
    include("connection.php");
    //include("login.php");
?>
    
<html>
    <head>
        <title>Login</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
       
        <div id="form">
            <h1>Login Form</h1>
            <form name="form" action="login.php" onsubmit="return isvalid()" method="POST">
                <label>Username: </label>
                <input type="text" id="user" name="username"></br></br>
                <label>Password: </label>
                <input type="password" id="pass" name="password"></br></br>
                <input type="submit" id="btn" value="Login" name = "submit"/>
            </form>
        </div>
        <script>
            function isvalid(){
                var user = document.form.user.value;
                var pass = document.form.pass.value;
                if(user.length=="" && pass.length==""){
                    alert("Please provide a username and a password");
                    return false;
                }
                else if(user.length==""){
                    alert("Please provide a username");
                    return false;
                }
                else if(pass.length==""){
                    alert("Please provide a password");
                    return false;
                }
                
            }
        </script> 
    </body>
</html>