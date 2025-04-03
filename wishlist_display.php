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

// Fetch wishlist items
$sql = "SELECT * FROM wishlist ORDER BY added_date DESC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>{$row['item_id']}</td>
                <td>{$row['name']}</td>
                <td><img src='{$row['img']}' alt='{$row['name']}' style='width:50px;'></td>
                <td>{$row['quantity']}</td>
                <td>{$row['amount']}</td>
                <td>{$row['added_date']}</td>
              </tr>";
    }
} else {
    echo "<tr><td colspan='6'>No items in wishlist</td></tr>";
}

$conn->close();
?>
