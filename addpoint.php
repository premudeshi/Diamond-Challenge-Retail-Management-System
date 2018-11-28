<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $pid = htmlspecialchars($_REQUEST['pid']);
    $qty = htmlspecialchars($_REQUEST['qty']);
    $phone = htmlspecialchars($_REQUEST['phone']);    
    $items[] = $pid;
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dc";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO temp_orders (pid, quantity, supplier)
VALUES ('$pid', '$qty', '$phone')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
header("Location: neworderfile.php")
?>