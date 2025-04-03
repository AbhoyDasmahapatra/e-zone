<?php
include("function.php");
session_start();
$u_id=$_SESSION['id'];
$pid=$_GET['p_id'];
$insert=InsertCartProduct($u_id,$pid);
if($insert){
    echo "<script>
    alert('Product Add Successfully');
    window.location.href='cart.php';
    </script>";
}
else{
    echo "<script>
    alert('Product Add un Successfully');
    window.location.href='cart.php';
    </script>";
}
?> 