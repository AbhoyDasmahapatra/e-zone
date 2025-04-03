 <?php
include('./db_connection.php');
$name=$_POST['name'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$password=$_POST['password'];


$sql="INSERT INTO user(name,phone,email,password) VALUES('".$name."','".$phone."', '".$email."','".$password."')";
$query=mysqli_query($conn,$sql);
if($query)
{
    echo "<script>alert('Registration Successful.');window.location.href='register.php';</script>";
}
else
{
    echo "<script>alert('Ooops...Registration Unsuccessful!!.');window.location.href='register.php';</script>";
}
?>