<?php
include('../db_connection.php');
$id = $_GET['id'];
$sql = "DELETE FROM products WHERE p_id = $id";
if ($conn->query($sql) === TRUE) {
    echo "Product deleted successfully.";
} else {
    echo "Error deleting product: " . $conn->error;
}

$conn->close();
header("Location: viewproduct.php"); // Redirect back to the product display page
exit;
?>
