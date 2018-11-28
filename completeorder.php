<?php

require __DIR__ . '/vendor/autoload.php';
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dc";
$items = array();

$random = new Rych\Random\Random();
$ordernumber = $random->getRandomString(8);


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $total = htmlspecialchars($_REQUEST['total']); 
    
}

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$date = date("Y/m/d");

$sqla = "INSERT INTO orders (number, type, account, address, date, total)
    VALUES ('$ordernumber', 'tribe', 'Mama Massai', 'Mama Massai', '$date',  '$total')";
    
    if ($conn->query($sqla) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sqla . "<br>" . $conn->error;
    }

$sql = "SELECT * FROM temp_orders";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $pid = $row["pid"];
        $quantity = $row["quantity"];
        $sql3 = "INSERT INTO orders_items (number, pid, quantity)
        VALUES ('$ordernumber', '$pid', '$quantity')";
        
        if ($conn->query($sql3) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        $number = $row["supplier"];
        $sqllii = "SELECT name FROM products WHERE 'pid' = '$pid'";
        $namers = $conn->query($sqllii);
        if ($namers->num_rows > 0) {
            $namz = $row["name"];
        }
       
        $bodytext = "Hello There! Mama Massai has ordered " . $quantity ." ". $namz. ".Please take immidiate action!";
        $sid = "ACd186357b5afd86f3cfd7629a6a697019"; // Your Account SID from www.twilio.com/console
        $token = "9bcf3e36070d40573d87059c078b9448"; // Your Auth Token from www.twilio.com/console

        $client = new Twilio\Rest\Client($sid, $token);
        $message = $client->messages->create($number, // Text this number
        array(
        'from' => '9705146385', // From a valid Twilio number
        'body' => $bodytext
        )
        );

        print $message->sid;
    }
} else {
    echo "Nothing Ordered";
}

$sql = "TRUNCATE TABLE temp_orders";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>