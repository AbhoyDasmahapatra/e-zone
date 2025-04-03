<?php
include("db_connection.php");

// Get form data
$pname = $_POST['pname'];
$pdis = $_POST['pdis'];
$ppis = $_POST['ppis'];
$pdprs = $_POST['pdprs'];
$fileName = $_FILES['pimg']['name'];
$tmpName = $_FILES['pimg']['tmp_name'];

// Set upload folder
$uploadFolder = "../upload/" . $fileName;

// Validate fields
if (empty($pname) || empty($pdis) || empty($ppis) || empty($fileName)) {
    echo "
    <script>
        alert('All fields are required!');
        window.location.href='addproduct.php';
    </script>
    ";
    exit;
}

// Insert into database
$sql = "INSERT INTO products (pname, pdis, ppis, pdprs, pimg) VALUES ('$pname', '$pdis', '$ppis', '$pdprs', '$fileName')";
$query = mysqli_query($conn, $sql);

if ($query) {
    // Move uploaded file
    if (move_uploaded_file($tmpName,$uploadFolder)) {
        echo "
        <script>
            alert('Insert successful!');
            window.location.href='addproduct.php';
        </script>
        ";
    } else {
        echo "
        <script>
            alert('Insert successful.');
            window.location.href='addproduct.php';
        </script>
        ";
    }
} else {
    echo "
    <script>
        alert('Insert unsuccessful.');
        window.location.href='addproduct.php';
    </script>
    ";
}
?>
