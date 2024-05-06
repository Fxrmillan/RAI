<!-- <?php
    // PostgreSQL connection parameters
    $servername = "localhost"; // or another server IP/hostname
    // $username = "rhizomatica";
    $username = "postgres"; // user is rhizomatica in the actual system
    $password = "rhizomatica";
    $db_name = "rhizomatica";
    $port = 5432; // Default PostgreSQL port

    // PDO conn (Data Source Name) string
    $conn = "pgsql:host=$servername;port=$port;dbname=$db_name;user=$username;password=$password";

    try {
        // Create PDO instance to connect to PostgreSQL
        $pdo = new PDO($conn);

        // Set error mode to exception to catch potential errors
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // echo "Connected successfully to PostgreSQL database";
    } catch (PDOException $e) {
        // Handle connection errors
        die("Could not connect to the database: " . $e->getMessage());
    }
?> -->
<?php
// Replace these values with your database information
$host = "localhost"; // Often 'localhost'
$dbname = "rhizomatica";
$user = "postgres";
$password = "rhizomatica";
$port = "5432"; // default PostgreSQL port

// Create connection string
$connection_string = "host={$host} port={$port} dbname={$dbname} user={$user} password={$password}";

// Establish connection
$conn = pg_connect($connection_string);

if(!$conn){
    echo "An error occurred connecting to the database";
    exit;
}
?>