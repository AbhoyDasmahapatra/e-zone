<?php 
include('db_connection.php');

  function InsertCartProduct($uid,$pid){
      global $conn;
      $sql = "INSERT INTO cart(u_id,p_id) VALUES('".$uid."','".$pid."')";
      $query = mysqli_query($conn,$sql);
      if($query){
          return $query;
      }
      else{
          return false;
      }
    }  
 function addtoCart()
{
  global $conn;
  $sql="SELECT products.pimg,products.ppis,cart.id FROM products JOIN cart ON products.p_id=cart.p_id";
  $query=mysqli_query($conn,$sql);
  $count=mysqli_num_rows($query);
  if($count){
   $data=mysqli_fetch_all($query,MYSQLI_ASSOC);
   return $data;
  }
  else{
   return false;
  }
}
?>