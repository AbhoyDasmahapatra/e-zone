<?php
include("db_connection.php");
include('admin_header_link.php');
include('sidebar.php');

// Fetch products from the database
$sql = "SELECT * FROM products";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Display</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container my-5 cal-md-5" style="padding-left: 200px;">
    <h1 class="text-center mb-4">Our Products</h1>
    
    <?php if ($result->num_rows > 0): ?>
        <table class="table table-bordered table-hover table-striped">
            <thead class="table-dark">
                <tr>
                    <th>#</th>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Price (Before)</th>
                    <th>Price (Discounted)</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($product = $result->fetch_assoc()): ?>
                    <tr>
                    <td><?php echo htmlspecialchars($product['p_id']); ?></td>
                        <td>
                            <img src="../upload/<?php echo htmlspecialchars($product['pimg']); ?>" 
                                 alt="<?php echo htmlspecialchars($product['pname']); ?>" 
                                 class="img-thumbnail" 
                                 style="max-width: 100px;">
                        </td>
                        <td><?php echo htmlspecialchars($product['pname']); ?></td>
                        <td><?php echo htmlspecialchars($product['pdis']); ?></td>
                        <td class="text-decoration-line-through text-danger">₹<?php echo number_format($product['ppis'], 2); ?></td>
                        <td class="text-success">₹<?php echo number_format($product['pdprs'], 2); ?></td>
                        <td>
                            <a href="edit_product.php?id=<?php echo $product['p_id']; ?>" class="btn btn-warning btn-sm">Edit</a>
                            <a href="delete_product.php?id=<?php echo $product['p_id']; ?>" 
                               class="btn btn-danger btn-sm" 
                               onclick="return confirm('Are you sure you want to delete this product?');">Delete</a>
                        </td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p class="text-center">No products available.</p>
    <?php endif; ?>

</div>

<?php $conn->close(); ?>

<!-- Bootstrap 5 JS (optional for Bootstrap's JavaScript components) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
