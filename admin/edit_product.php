<?php
include('../db_connection.php');

// Initialize variables for alert messages
$success_message = '';
$error_message = '';

// Fetch product details
$id = $_GET['id'];
$sql = "SELECT * FROM products WHERE p_id = $id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $product = $result->fetch_assoc();
} else {
    echo "Product not found.";
    exit;
}

// Update product
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $product_name = $_POST['pname'];
    $product_description = $_POST['pdis'];
    $product_price = $_POST['ppis'];
    $product_discounted_price = $_POST['pdprs'];

    $update_sql = "UPDATE products SET 
        pname='$product_name',
        pdis='$product_description',
        ppis=$product_price,
        pdprs=$product_discounted_price
        WHERE p_id = $id";

    if ($conn->query($update_sql) === TRUE) {
        $success_message = "Product updated successfully.";
    } else {
        $error_message = "Error updating product: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .form-container {
            max-width: 600px;
            margin: 50px auto;
        }
        .card {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="form-container">
            <div class="card">
                <div class="card-header bg-primary text-white text-center">
                    <h4>Edit Product</h4>
                </div>
                <div class="card-body">
                    <!-- Success or Error Alerts -->
                    <?php if (!empty($success_message)) : ?>
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <?php echo $success_message; ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    <?php endif; ?>
                    <?php if (!empty($error_message)) : ?>
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <?php echo $error_message; ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    <?php endif; ?>

                    <!-- Form to Edit Product -->
                    <form method="POST">
                        <!-- Product Name -->
                        <div class="mb-3">
                            <label for="productName" class="form-label">Product Name</label>
                            <input type="text" id="productName" name="pname" class="form-control"
                                value="<?php echo htmlspecialchars($product['pname']); ?>" required>
                        </div>
                        <!-- Product Description -->
                        <div class="mb-3">
                            <label for="productDescription" class="form-label">Product Description</label>
                            <textarea id="productDescription" name="pdis" class="form-control" rows="3" required><?php echo htmlspecialchars($product['pdis']); ?></textarea>
                        </div>
                        <!-- Product Price -->
                        <div class="mb-3">
                            <label for="productPrice" class="form-label">Product Price</label>
                            <input type="number" id="productPrice" name="ppis" class="form-control" min="0" step="0.01"
                                value="<?php echo htmlspecialchars($product['ppis']); ?>" required>
                        </div>
                        <!-- Product Discounted Price -->
                        <div class="mb-3">
                            <label for="productDiscountedPrice" class="form-label">Product Discounted Price</label>
                            <input type="number" id="productDiscountedPrice" name="pdprs" class="form-control" min="0"
                                step="0.01" value="<?php echo htmlspecialchars($product['pdprs']); ?>" required>
                        </div>
                        <!-- Submit Button -->
                        <div class="d-grid">
                            <button type="submit" class="btn btn-success">Save Changes</button>
                        </div>
                    </form>
                </div>
                <div class="card-footer text-center">
                    <a href="viewproduct.php" class="btn btn-link">Back to Product List</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
