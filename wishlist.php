<?php
// Database connection
$host = 'localhost';
$db = 'sem_project';
$user = 'root';
$pass = '';

$conn = new mysqli($host, $user, $pass, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $item_id = intval($_POST['item_id']);
    $name = $conn->real_escape_string($_POST['name']);
    $img = $conn->real_escape_string($_POST['img']);
    $quantity = intval($_POST['quantity']);
    $amount = floatval($_POST['amount']);

    $sql = "INSERT INTO wishlist (item_id, name, img, quantity, amount) 
            VALUES ('$item_id', '$name', '$img', '$quantity', '$amount')";

    if ($conn->query($sql) === TRUE) {
        header("Location: wishlist_in.php"); // Redirect after successful submission
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
