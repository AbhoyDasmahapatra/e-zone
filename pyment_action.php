<?php
 include("db_connection.php");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $zip = $_POST['zip'];
    $country = $_POST['country'];

    // Sanitize inputs to prevent SQL injection
    $name = $conn->real_escape_string($name);
    $email = $conn->real_escape_string($email);
    $phone = $conn->real_escape_string($phone);
    $address = $conn->real_escape_string($address);
    $city = $conn->real_escape_string($city);
    $state = $conn->real_escape_string($state);
    $zip = $conn->real_escape_string($zip);
    $country = $conn->real_escape_string($country);

    // Insert data into the database
    $sql = "INSERT INTO user_details (name, email, phone, address, city, state, zip, country) 
            VALUES ('$name', '$email', '$phone', '$address', '$city', '$state', '$zip', '$country')";

    if ($conn->query($sql) === TRUE) {
        echo "Record added successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close connection
$conn->close();
?>
