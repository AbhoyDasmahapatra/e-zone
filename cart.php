<?php
include('header_link.php');
include('menubar.php');
include('function.php');
?>

<section class="about" style="background-image: url(./assets/img/about_bg.jpg);">
  <div class="about_overlay">
    <div class="container">
      <div class="about_text">
        <h1>Cart Details</h1>
      </div>
    </div>
  </div>
</section>
<!-- Add to cart section Start-->

<!------   Add to Cart start   ------>
<div class="py-3 py-md-5 bg-light">
  <div class="container">
    <div class="row">
      <div class="col-md-9">
        <div class="row">
          <div class="col-md-12">
            <div class="shopping-cart">
              <div class="cart-header d-none d-sm-none d-mb-block d-lg-block">
                <div class="row">
                  <div class="col-md-5">
                    <h4>Products</h4>
                  </div>
                  <div class="col-md-2">
                    <h4>Price</h4>
                  </div>

                  <div class="col-md-2">
                    <h4 style="margin-left: 249px;">Remove</h4>
                  </div>
                </div>
              </div>
              <?php
              $cart = addtoCart();
              $totalPrice = 0; // Initialize total price
              if (!empty($cart)) {
                foreach ($cart as $val) {
                  $totalPrice += $val['ppis']; // Add product price to total
              ?>
                  <div class="cart-item shadow bg-white p-3">
                    <div class="row">
                      <div class="col-md-5 my-auto">
                        <div class="product-name" style="width: 185px; height: 100px;">
                          <img src="assets/images/<?php echo $val['pimg']; ?>" alt="" style="width: 111px;">

                        </div>
                      </div>
                      <div class="col-md-2 my-auto">
                        <input type="text" value="<?php echo $val['ppis']; ?>" style="border: none;" readonly>
                      </div>
                      <div class="col-md-3 col-7 my-auto">
                      </div>
                      <div class="col-md-2 col-5 my-auto">
                        <div class="remove">
                          <a href="remove.php?id=<?php echo $val['id']; ?>" class="btn btn-danger btn-sm">
                            <i class="fa fa-trash"></i> Remove
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
              <?php
                }
              } else {
                echo "<p>Your cart is empty.</p>";
              }
              ?>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-3">
        <div class="card shadow" style="width: 300px;">
          <div class="card-body">
            <h3 class="text-center text-danger">Price Details</h3><br>
            <hr>
            <?php
            $discountPercentage = 40; // Discount percentage
            $discountAmount = ($totalPrice * $discountPercentage) / 100; // Calculate the discount amount
            $finalAmount = $totalPrice - $discountAmount; // Calculate the total amount after the discount
            ?>
            <div class="row">
              <div class="col-md-8">
                <p>Price (<?php echo count($cart); ?> item<?php echo count($cart) > 1 ? 's' : ''; ?>):</p>
              </div>
              <div class="col-md-4">
                <i class="fa fa-inr"></i>
                <input type="text" id="total_price" class="totalp" style="padding: 0;border:none;width: calc(100% - 17px);" value="<?php echo $totalPrice; ?>" readonly>
              </div>
            </div>
            <div class="row">
              <div class="col-md-8">
                <p>Discount (<?php echo $discountPercentage; ?>%):</p>
              </div>
              <div class="col-md-4">
                <i class="fa fa-inr"></i>
                <input id="total_discount" class="discou" style="padding: 0;border:none;width: calc(100% - 17px);" value="<?php echo $discountAmount; ?>" readonly>
              </div>
            </div>
            <div class="row">
              <div class="col-md-8">
                <p>Delivery Charge:</p>
              </div>
              <div class="col-md-4">
                <p style="padding-right: 18px;">Free</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-md-8">
                <p>Total Amount:</p>
              </div>
              <div class="col-md-4">
                <i class="fa fa-inr"></i>
                <input type="text" id="total_amount" class="totalp" style="padding: 0;border:none;width: calc(100% - 17px);" value="<?php echo $finalAmount; ?>" readonly>
              </div>
            </div>
            <a href="pyment.php" class="btn bg-info border">Checkout</a>
          </div>
        </div>



      </div>
    </div>
  </div>
</div>

<!-- Add to cart section end -->

<?php
include('footer_link.php');
include('footer.php');
?>