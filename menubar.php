<!-- top navbar -->

<!-- top navbar -->

<!-- navbar -->
<nav class="navbar navbar-expand-lg" id="navbar">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.html" id="logo"><span id="span1">E</span>Zone<span></span></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span><img src="./images/menu.png" alt="" width="30px"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#product">Product</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Category
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown"
                        style="background-color: rgb(208, 22, 22);">
                        <li><a class="dropdown-item" href="Mobile Phone.php">Mobile Phone</a></li>
                        <li><a class="dropdown-item" href="samrtwatch.php">Samrt Watch</a></li>
                        <li><a class="dropdown-item" href="Headphone.php">Headphone</a></li>
                        <li><a class="dropdown-item" href="Laptop.php">Laptop</a></li>
                        <li><a class="dropdown-item" href="tv.php">TV</a></li>

                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href=" Discount.php">Discount Sale</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact</a>
                </li>


            </ul>
            <form class="d-flex" id="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>






            <div class="d-flex nav-item">
                <span class="nav-item nav-cart"><a href=""><i class="fa-sharp fa-solid fa-heart"></i></a></span>
                <span class="nav-item nav-cart"> <a href="cart.php"><i class="fa-sharp fa-solid fa-cart-shopping"></i></a></span>



                <!-- <i class="fa-sharp fa-solid fa-cart-shopping" ><a href="cart.html"></a></i> -->
                <span class="dropdown">
                    <a class="nav-link" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa-regular fa-user" class="user_icon"></i> <?php echo isset($_SESSION['username']) ? $_SESSION['username'] : ''; ?></a>


                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown" style="background-color: rgb(208, 22, 22);">
                        <?php
                        if (isset($_SESSION['username'])) {
                        ?>
                            <li><a class="dropdown-item" href="#">Account</a></li>
                            <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                        <?php
                        } else {
                        ?>
                            <li><a class="dropdown-item" href="register.php">Registration</a></li>
                            <li><a class="dropdown-item" href="login.php"> login</a></li>
                            <!-- <li><hr class="dropdown-divider"></li> -->
                            <li><a class="dropdown-item" href="#">Gift Card</a></li>
                        <?php } ?>



                    </ul>

                </span>
            </div>



        </div>
    </div>
</nav>
<!-- navbar -->