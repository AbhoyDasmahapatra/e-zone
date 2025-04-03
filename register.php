<?php
include('header_link.php');
include('menubar.php');
?>



<!--register-->

<form action="action.php" method="post">
  <div class="container"  id="login">
    <div class="row">
      <div class="col-md-5 py-3 py-md-0" id="side1">
        <h3 class="text-center">Register</h3>
      </div>
      <div class="col-md-7 py-3 py-md-0" id="side2">
        <h3 class="text-center">Create Account</h3>
        <div class="input2 text-center">
          <input type="name" placeholder="Name" name="name" id="name">
          <input type="number" placeholder="Phone" name="phone" id="phone">
          <input type="email" placeholder="Email" name="email" id="email">
          <input type="password" placeholder="Password"  name="password" id="password">
        </div>
        <!-- <p class="text-center" id="btnlogin"><a href="#">SIGN UP</a></p> -->
         <br><input class="px-4 py-2 rounded-pill fw-bold" type="submit" value="SIGN UP" onclick="return validation()" style="margin-left: 220px; background-color:  #ffc800; ">

      </div>

    </div>
  </div>
</form>

 
     <script>
      function validation(){
         let nm=document.getElementById("name").value;
         let nn=document.getElementById("phone").value;
         let em=document.getElementById("email").value;
         let em_ptr=/^[A-Za-z0-9.-_+^#]+@[A-Za-z]+\.[A-Za-z]{2,}/;
         let mm=document.getElementById("password").value;
        
         if (nm=="" || nm==" "){
             alert("Enter your name");
             return false;
         }
         else if (nn==""){
             alert("Enter your phone number");
             return false;
         }
         else if (em==""){
                alert("Enter your email");
                return false;
            }
            else if(!em.match(em_ptr)){
                alert("Enter valid Email Id.......");
                return false;
            }

         else if (mm==""){
             alert("Enter your passwors");
             return false;
         }
         
         else{
             alert("Successfull....");
             return true;
         }
     }
 </script>
  
<?php
include('footer_link.php');
include('footer.php');
?>