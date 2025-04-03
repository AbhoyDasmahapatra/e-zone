<?php
include('header_link.php');
include('menubar.php');
?>


    <!--login-->


    <form action="login_action.php" method="post">
        <div class="container" id="login" >
            <div class="row">
                <div class="col-md-5 py-3 py-md-0" id="side1">
                    <h3 class="text-center">Welcome to EZone</h3>
                </div>
                <div class="col-md-7 py-3 py-md-0" id="side2">
                    <h3 class="text-center">Account login</h3>
                    <p class="text-center"> welcome to Electronic Zone please login your account. </p>
                    <div class="input2 text-center">
                        <input type="name" placeholder="User Name" name="username" id="names">
                        <input type="password" placeholder="Password"  name="password" id="passwords">
                    </div>
                    <!-- <p class="text-center" id="btnlogin"><a href="#">LOG IN</a></p> -->
                    <br>
                    <input class="px-4 py-2 fw-bold " type="submit" value="Login" onclick="return validation()"
                        style="margin-left: 219px; background-color: #ffc800; box-shadow: 1px 1px 5px rgba(0, 0, 0, 0.283); border-radius: 1px 20px 1px 20px;">
                    <p class="text-center">Forgot Password<a href="index.php">Click</a></p>
                    
                </div>

            </div>
        </div>
    </form>


    <!--end the login-->


    <!-- newslater -->











    <!-- newslater -->

    <?php
include('footer_link.php');
include('footer.php');
?>


 