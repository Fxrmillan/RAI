<?php
    include('connection.php'); // PDO comes from here

    if (session_status() === PHP_SESSION_NONE) {
		session_start();
	}

    if (isset($_POST['submit'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $language = $_POST['language'];

        $sql = "SELECT * FROM users WHERE username = :username";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([':username' => $username]);

        if ($stmt->rowCount() == 1) {
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            if (password_verify($password, $row['password'])) {
                $_SESSION['userName'] = $username;
                $_SESSION['user_logged_in'] = true;
                $_SESSION['language'] = $language;
                header("Location: site.php");
                exit; // Make sure to call exit after header redirects!!!!
            }
            else {
                echo '<script>
                    alert("Invalid username or password");
                    window.location.href = "index.php";
                </script>';
            }
        }
    }
?>