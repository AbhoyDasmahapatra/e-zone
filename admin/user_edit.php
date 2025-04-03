<?php
include("db_connection.php");

// Get the user ID
$id = $_GET['id'];

// Fetch user details for editing
$sql = "SELECT * FROM user WHERE id = $id";
$result = $conn->query($sql);
$user = $result->fetch_assoc();

if (!$user) {
    echo "User not found!";
    exit;
}

// Update user details if form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $password = $_POST['password'];
      // This could be a file upload field

    // Update query
    $update_sql = "UPDATE user SET 
        name='$name', 
        phone='$phone',
        email='$email', 
        password='$password', 
        WHERE id = $id";

    if ($conn->query($update_sql) === TRUE) {
        echo "User updated successfully.";
        header("Location: user_table.php"); // Redirect back to the user list page
        exit;
    } else {
        echo "Error updating user: " . $conn->error;
    }
}
 
?>


<div class="container my-5">
    <h2>Edit User</h2>
    <form method="POST">
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="<?php echo htmlspecialchars($user['name']); ?>" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="<?php echo htmlspecialchars($user['email']); ?>" required>
        </div>
        <div class="mb-3">
            <label for="phone" class="form-label">Phone</label>
            <input type="text" class="form-control" id="phone" name="phone" value="<?php echo htmlspecialchars($user['phone']); ?>" required>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password" value="<?php echo htmlspecialchars($user['password']); ?>" required>
        </div>
         
        <button type="submit" class="btn btn-primary">Save Changes</button>
    </form>
</div>

</body>
</html>
