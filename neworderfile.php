


<html>
<title>Order Creation Tool</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<h3>
				Order Creation Tool
			</h3>
			<form role="form" method="post" action="addpoint.php">
				<div class="form-group">
					 
					<label for="pid">
						Product ID
					</label>
					<input type="text" name="pid" class="form-control" />
				</div>
                <div class="form-group">
					 
					<label for="qty">
						Quantity
					</label>
					<input type="text" name="qty" class="form-control" size="6"/>
				</div>
                
<?php
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
echo '<select name="supplier">';
$sql = "SELECT * FROM contacts WHERE type = 'supplier'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
        echo '<option value="'. $row["phone"] .'">'. $row["name"]. '</option>';
    }
} else {
    echo "0 results";
}
$conn->close();
echo "</select><br>";
?>
				<button type="submit" class="btn btn-primary">
					Add
				</button>
			</form>
			<form action="delete.php">
            <button type="submit" class="btn btn-danger">
					Clear
				</button>
            </form>
            
            <table class="w3-table-all w3-hoverable">
    <thead>
      <tr class="w3-light-grey">
        <th>ID</th>
        <th></th>
        <th>Buying Cost</th>
        <th>Quantity Requested</th>
        <th>Location</th>
      </tr>
    </thead>
            <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dc";
$items = array();
$prices = array();

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM temp_orders";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      array_push($items, $row["pid"]);
      $price = $row["price"];
      $quantity = $row["quantity"];
      $rtotal = $price * $quantity;
      array_push($prices, $rtotal);

    }
} else {
    echo "Nothing Ordered";
}

foreach($items as $x) {
  $sql1 = "SELECT * FROM products WHERE pid = '". $x ."'";
  $result1 = $conn->query($sql1); 
  
  if ($result1->num_rows > 0) {
      // output data of each row
      while($row1 = $result1->fetch_assoc()) {
          $productimage = "images/products/" . $row1["image"];
          echo "<tr><td>" . $row1["pid"]. '</td><td><img src="'. $productimage .'" width="100" height="100"></td>' . "<td> Tsh " . $price. "</td><td>" . $quantity ."<br><i>". $row1["stock"] ." in stock</i></td><td>" . $row1["location"]. "</td></tr>";
      }
  } else {
      echo "0 results";
  }
  reset($items);  
}

$conn->close();
?>
  </table>

		</div>
	</div>
    <h3>Total: <?php echo array_sum($prices); ?></h3>
    
    <form method="post" action="completeorder.php">
    <input type="hidden" id="total" name="total" value="<?php echo array_sum($prices); ?>">
    <button type="submit" class="btn btn-primary">
					Complete
				</button>
</div>

</html>

