<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Payment Settings</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      margin: 0;
      font-family: Arial, sans-serif;
      background-color: #f8f9fa;
    }

    section {
      padding: 50px 20px;
      background-image: url('https://mdbcdn.b-cdn.net/img/Photos/Others/background3.webp');
      background-size: cover;
      background-position: center;
    }

    .card {
      border: none;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
      border-radius: 15px;
    }

    .form-control {
      border: 1px solid #ced4da;
      border-radius: 8px;
    }

    .btn-success {
      background-color: #28a745;
      border: none;
      border-radius: 8px;
      transition: all 0.3s ease;
    }

    .btn-success:hover {
      background-color: #218838;
    }
  </style>
</head>

<body>
  <section class="p-4 p-md-5">
    <div class="row d-flex justify-content-center">
      <div class="col-md-10 col-lg-8 col-xl-6">
        <div class="card rounded-3">
          <div class="card-body p-4">
            <div class="text-center mb-4">
              <h3>Address Details</h3>
            </div>
            <form id="addressForm" action="pyment_action.php" method="POST">
              <p class="fw-bold mb-4">Enter your details:</p>
              <div class="form-outline mb-4">
                <input type="text" name="name" id="name" class="form-control form-control-lg" placeholder="Full Name" required />
              </div>
              <div class="form-outline mb-4">
                <input type="email" name="email" id="email" class="form-control form-control-lg" placeholder="Email Address" required />
              </div>
              <div class="form-outline mb-4">
                <input type="tel" name="phone" id="phone" class="form-control form-control-lg" placeholder="Phone Number" required />
              </div>
              <div class="form-outline mb-4">
                <input type="text" name="address" id="address" class="form-control form-control-lg" placeholder="Street Address" required />
              </div>
              <div class="row mb-4">
                <div class="col-6">
                  <input type="text" name="city" id="city" class="form-control form-control-lg" placeholder="City" required />
                </div>
                <div class="col-6">
                  <input type="text" name="state" id="state" class="form-control form-control-lg" placeholder="State" required />
                </div>
              </div>
              <div class="row mb-4">
                <div class="col-6">
                  <input type="text" name="zip" id="zip" class="form-control form-control-lg" placeholder="Zip Code" required />
                </div>
                <div class="col-6">
                  <input type="text" name="country" id="country" class="form-control form-control-lg" placeholder="Country" required />
                </div>
              </div>
              <hr class="my-4">
      <div class="mb-3">
        <label for="card-number" class="form-label">Card Number</label>
        <input type="text" id="card-number" class="form-control" placeholder="Enter your card number" required>
      </div>
      <div class="row">
        <div class="col-6">
          <label for="expiry-date" class="form-label">Expiry Date</label>
          <input type="text" id="expiry-date" class="form-control" placeholder="MM/YY" required>
        </div>
        <div class="col-6">
          <label for="cvv" class="form-label">CVV</label>
          <input type="password" id="cvv" class="form-control" placeholder="CVV" required> <br>
        </div>
        
              <button type="submit" class="btn btn-success btn-lg btn-block"><a href="successful.php" style="text-decoration: none; color: black;"> Payment</a></button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>