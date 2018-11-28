<!DOCTYPE html>
<html>
<title>Premium</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>
<div class="w3-container">
  <h2>Hoverable Table</h2>

  <table class="w3-table-all w3-hoverable">
    <thead>
      <tr class="w3-light-grey">
        <th></th>
        <th>Item Name</th>
        <th>Price</th>
        <th>Quantity</th>
        <th>Total</th>
      </tr>
    </thead>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "dc";
    $items = array();
    $items = array();
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
    
    $sql = "SELECT * FROM orders_items WHERE number = 'A1' ";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
          array_push($items, $row["pid"]);
        }
    } else {
        echo "0 results";
    }
    
    foreach($items as $x) {
      $sql1 = "SELECT * FROM products WHERE pid = '". $x ."'";
      $result1 = $conn->query($sql1); 
      
      if ($result1->num_rows > 0) {
          // output data of each row
          while($row1 = $result1->fetch_assoc()) {
              $productimage = "images/products/" . $row1["image"];
              echo "<tr><td>" . $row1["pid"]. '</td><td><img src="'. $productimage .'" width="100" height="100"></td>' . "<td> Tsh " . $row1["price"]. "</td><td>" . $row1["stock"] ."</td><td>" . $row1["location"]. "</td></tr>";
          }
      } else {
          echo "0 results";
      }
      
  }

    $conn->close();
    ?>
  </table>
</div>

</body>
</html> 
