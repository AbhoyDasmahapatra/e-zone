<?php
include('db_connection.php');
$id=$_GET['id'];
$sql="DELETE FROM cart WHERE id='".$id."'";
$query=mysqli_query($conn,$sql);
if($query){
    echo "<script> alert('Item Remove successful')
       window.location.href='cart.php';
    </script>";
  }
  else{
    echo "<script> alert('Item Remove Un successful')
       window.location.href='cart.php';
    </script>";
  }
?>