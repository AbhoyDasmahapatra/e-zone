<?php
include('admin_header_link.php');
include('sidebar.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add Product</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .main-content {
      margin-left: 250px; /* Adjust based on sidebar width */
      padding: 20px;
      background-color: #f8f9fa;
      min-height: 100vh;
    }

    .card {
      border-radius: 12px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
      border: none;
    }

    .card-header {
      border-bottom: none;
      padding-bottom: 10px;
    }

    .card-body {
      padding-top: 0;
    }

    .form-label {
      font-weight: 600;
    }

    .btn-success {
      background-color: #28a745;
      border-color: #28a745;
      transition: background-color 0.3s ease, box-shadow 0.3s ease;
    }

    .btn-success:hover {
      background-color: #218838;
      box-shadow: 0 4px 10px rgba(40, 167, 69, 0.4);
    }
  </style>
</head>

<body>
  <!-- Main content -->
  <div class="main-content">
    <div class="container" style="margin-right: 850px;">
      <div class="row justify-content-center">
        <div class="col-lg-6">
          <div class="card">
            <div class="card-header bg-primary text-white text-center">
              <h4 class="mb-0">Add New Product</h4>
            </div>
            <div class="card-body">
              <p class="text-muted text-center">Fill out the form below to add a new product to your inventory.</p>
              <form action="addproduct_action.php" method="POST" enctype="multipart/form-data">
                <!-- Product Name -->
                <div class="mb-3">
                  <label for="productName" class="form-label">Product Name</label>
                  <input type="text" id="productName" name="pname" class="form-control" 
                         placeholder="Enter product name" required>
                </div>
                <!-- Product Description -->
                <div class="mb-3">
                  <label for="productDescription" class="form-label">Product Description</label>
                  <textarea id="productDescription" name="pdis" class="form-control" 
                            rows="3" placeholder="Enter product description" required></textarea>
                </div>
                <!-- Product Image -->
                <div class="mb-3">
                  <label for="productImage" class="form-label">Product Image</label>
                  <input type="file" id="productImage" name="pimg" class="form-control" 
                         accept="image/*" required>
                </div>
                <!-- Product Price -->
                <div class="mb-3">
                  <label for="productPrice" class="form-label">Product Price</label>
                  <input type="number" id="productPrice" name="ppis" class="form-control" 
                         placeholder="Enter product price" min="0" step="0.01" required>
                </div>
                <!-- Discounted Price -->
                <div class="mb-3">
                  <label for="productDiscountedPrice" class="form-label">Discounted Price</label>
                  <input type="number" id="productDiscountedPrice" name="pdprs" class="form-control" 
                         placeholder="Enter discounted price (if any)" min="0" step="0.01">
                </div>
                <!-- Submit Button -->
                <div class="d-grid">
                  <button type="submit" class="btn btn-success btn-lg">Add Product</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
