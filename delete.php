<?php
$conn = mysqli_connect( 'localhost', 'root');

mysqli_select_db( $conn, 'techfest' );

$realpass = "Byte@Achr@2024";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $password = $_POST["password"];
    // Retrieve the name from the form
    $where = $_POST["where"]; // Assuming your form field name is "name"
    $specifier = $_POST["value"];

    // Define the query
    
    if ($password == $realpass) {
        // Define the query
        $sql = "DELETE FROM bytequest WHERE $where = '$specifier'";

        // Execute the query
        $conn->query($sql);
    }

header('location:data.php');
exit;
}

// Close the connection
$conn->close();
?>