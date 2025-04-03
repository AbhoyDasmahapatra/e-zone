 <?php
$conn;
function connection(){
  $servername = "localhost";
  $username = "root";
  $password = "";
  $database="sem_project";

  global $conn;
  // Create connection
  $conn = mysqli_connect($servername, $username, $password,$database);
  // Check connection
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }
  // echo "Connected successfully";
}

connection();


?> 
