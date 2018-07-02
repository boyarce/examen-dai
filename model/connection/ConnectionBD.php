 <?php
 
$servername = "localhost";
$username = "braulio";
$password = "innsmouth.1834";

try {
    $conn = new PDO("mysql:host=$servername;examen", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
?> 
