 
<?php
include("../db_connection.php");

// Validate the ID parameter
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = intval($_GET['id']); // Ensure it's an integer to prevent injection

    // Use prepared statements for security
    $stmt = $conn->prepare("DELETE FROM user WHERE id = ?");
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        // Use JavaScript to show an alert and redirect
        echo "<script>
            alert('User deleted successfully.');
            window.location.href = 'user_table.php'; // Redirect after the alert
        </script>";
    } else {
        // Show an error message and redirect
        echo "<script>
            alert('Error deleting user: " . htmlspecialchars($stmt->error, ENT_QUOTES, 'UTF-8') . "');
            window.location.href = 'user_table.php';
        </script>";
    }

    $stmt->close();
} else {
    // Handle invalid ID input
    echo "<script>
        alert('Invalid ID provided.');
        window.location.href = 'user_table.php';
    </script>";
}

$conn->close();
exit;
?>
