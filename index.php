o<?php 
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
            <h1><?=echo_('Login Form')?></h1> <!-- need to add translation -->
            <form name="form" action="login.php" onsubmit="return isvalid()" method="POST">
                <label><?=echo_('Username')?>: </label>
                <input type="text" id="user" name="username"></br></br>
                <label><?=echo_('Password:')?> </label>
                <input type="password" id="pass" name="password"></br></br>
                <label>Language: </label>
                <select name="language" id="language"><!-- need to add translation -->
                    <option value="en">English</option>
                    <option value="es">Español</option>
                    <!-- <option value="es" <?=($language=='es') ? 'selected="selected"' : ''?>data-imagesrc="img/es<?=$_code['es']?>_flag.png">Español</option>
                    <option value="pt_BR" <?=($language=='pt_BR') ? 'selected="selected"' : ''?>data-imagesrc="img/br_flag.png">Português</option>
                    <option value="en" <?=($language=='en') ? 'selected="selected"' : ''?>data-imagesrc="img/en<?=$_code['en']?>_flag.png">English</option> -->
                </select></br></br>
                <input type="submit" id="btn" value="<?=echo_('Login')?>"  name = "submit"/>
            </form>
        </div>
        <?php 
        $error_txt = "";
    	if (isset($_POST['submit'])) {
    		$username = $_POST['username'];
    		$password = $_POST['password'];
    		if ($username == "") {
    			$error_txt .= echo_("Username is empty")."\n";
    		}
    		if ($password == "") {
    			$error_txt .= echo_("Password is empty")."\n";
    		}
    		if ($username && $password) {
    			$error_txt .= echo_("Login Incorrect")."\n";
    		}
	    }

    	if (isset($_POST['access']) && $error_txt != "") {
    		echo($error_txt);
    	} else {
    		echo('');
    	}

        ?>

      
    </body>
</html>
