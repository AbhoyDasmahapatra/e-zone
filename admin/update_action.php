<?php
include('./db_connection.php');
$user_id=$_POST['id'];
$uname=$_POST['name'];
$uphone=$_POST['phone'];
$uemail=$_POST['email'];
$upassword=$_POST['password'];


$sql="UPDATE user SET name='{$uname}',phone='{$uphone}',email='{$uemail}',password='{$upassword}' WHERE id='{$user_id}'";
$query=mysqli_query($conn,$sql);
if($query)
{
    echo "<script>alert('Update Successful.');window.location.href='user_table.php';</script>";
}
else
{
    echo "<script>alert('Ooops...update Unsuccessful!!.');window.location.href='user_table.php';</script>";
}