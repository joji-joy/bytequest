<?php
$conn = mysqli_connect( 'localhost', 'root');


mysqli_select_db( $conn, 'techfest' );

$sql = "SELECT id, name, name2, name3, name4, events, email, phone, amount, college FROM bytequest";
$result = mysqli_query($conn, $sql);

// Step 5: Fetch and Display Data
echo "<style>
* {
    font-family: sans-serif; /* Change your font family */
  }
  
  .content-table {
    border-collapse: collapse;
    margin: 25px 0;
    font-size: 1em;
    min-width: 400px;
    border-radius: 5px 5px 0 0;
    overflow: hidden;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
  }
  
  .joetable {
    background-color: #009879;
    color: #ffffff;
    text-align: left;
    font-weight: bold;
  }
  
  .content-table th,
  .content-table td {
    padding: 12px 15px;
  }
  
  .content-table tbody tr {
    border-bottom: 1px solid #dddddd;
  }
  
  .content-table tbody tr:nth-of-type(even) {
    background-color: #f3f3f3;
  }
  
  .content-table tbody tr:last-of-type {
    border-bottom: 2px solid #009879;
  }
  
  .content-table tbody tr.active-row {
    font-weight: bold;
    color: #009879;
  }
  .joetab{
    font-size: 2em;
    color:  #464646;
}
  </style>";

echo "<h2 class='joetab'>ByteQuest 2024 - Registeration Details</h2>";

echo "<table class='content-table'>";
echo "<tr class='joetable'><th>Sl no.</th><th>Name</th><th>Teammate2</th><th>Teammate3</th><th>Teammate4</th><th>Events</th><th>Email</th><th>Phone</th><th>Amount</th><th>College</th></tr>";
while($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>". $row["id"]. "</td>";
    echo "<td>". $row["name"]. "</td>";
    echo "<td>". $row["name2"]. "</td>";
    echo "<td>". $row["name3"]. "</td>";
    echo "<td>". $row["name4"]. "</td>";
    echo "<td>". $row["events"]. "</td>";
    echo "<td>". $row["email"]. "</td>";
    echo "<td>". $row["phone"]. "</td>";
    echo "<td> ₹". $row["amount"]. "</td>";
    echo "<td>". $row["college"]. "</td>";
    echo "</tr>";
}
echo "</table>";

// Step 6: Close Connection
mysqli_close($conn);

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registeration Details</title>
</head>
<body>
  <form action="delete.php" method="post">
    <input type="text" name="where" placeholder="Where">
    <input type="text" name="value" placeholder="Specifier">
    <input type="text" name="password" placeholder="Password">
    <input type="submit" value="Delete">
  </form>
</body>
</html>