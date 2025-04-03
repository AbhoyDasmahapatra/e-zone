<?php
include('../header_link.php');
include('../db_connection.php');

global $conn;
$user_id = $_GET['id'];
$sql = "SELECT * FROM user WHERE id='{$user_id}'";
$query = mysqli_query($conn, $sql);

if (mysqli_num_rows($query) > 0) {
    $row = mysqli_fetch_assoc($query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update User</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .form-container {
            max-width: 600px;
            margin: 50px auto;
        }
        .form-container .card {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .form-container .btn-submit {
            background-color: #ffc800;
            color: #fff;
            font-weight: bold;
            border: none;
        }
        .form-container .btn-submit:hover {
            background-color: #e0ac00;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="form-container">
            <div class="card">
                <div class="card-header bg-primary text-white text-center">
                    <h4>Update User</h4>
                </div>
                <div class="card-body">
                    <form action="update_action.php" method="POST" onsubmit="return validation()">
                        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">

                        <!-- Name -->
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" id="name" name="name" class="form-control" placeholder="Enter your name" value="<?php echo htmlspecialchars($row['name']); ?>" required>
                        </div>

                        <!-- Phone -->
                        <div class="mb-3">
                            <label for="phone" class="form-label">Phone</label>
                            <input type="number" id="phone" name="phone" class="form-control" placeholder="Enter your phone number" value="<?php echo htmlspecialchars($row['phone']); ?>" required>
                        </div>

                        <!-- Email -->
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" id="email" name="email" class="form-control" placeholder="Enter your email" value="<?php echo htmlspecialchars($row['email']); ?>" required>
                        </div>

                        <!-- Password -->
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" id="password" name="password" class="form-control" placeholder="Enter your password" value="<?php echo htmlspecialchars($row['password']); ?>" required>
                        </div>

                        <!-- Submit Button -->
                        <div class="d-grid">
                            <button type="submit" class="btn btn-submit">Update</button>
                        </div>
                    </form>
                </div>
                <div class="card-footer text-center">
                    <a href="user_table.php" class="btn btn-link">Back to User List</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Validation Script -->
    <script>
        function validation() {
            let name = document.getElementById("name").value.trim();
            let phone = document.getElementById("phone").value.trim();
            let email = document.getElementById("email").value.trim();
            let password = document.getElementById("password").value.trim();
            let emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;

            if (name === "") {
                alert("Please enter your name.");
                return false;
            }
            if (phone === "") {
                alert("Please enter your phone number.");
                return false;
            }
            if (email === "") {
                alert("Please enter your email.");
                return false;
            }
            if (!email.match(emailPattern)) {
                alert("Please enter a valid email address.");
                return false;
            }
            if (password === "") {
                alert("Please enter your password.");
                return false;
            }

            alert("Form submitted successfully!");
            return true;
        }
    </script>
</body>

</html>

<?php
} else {
    echo "<div class='alert alert-danger text-center'>User not found.</div>";
}
?>
