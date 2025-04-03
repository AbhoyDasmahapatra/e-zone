<?php
include('admin_header_link.php');
include('sidebar.php');
?>
 <!DOCTYPE html>
<html lang="en">

<head>
    
    <style>
        /* Global Styles */
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            color: #333;
        }

        a {
            text-decoration: none;
            color: inherit;
        }

        /* Sidebar Styles */
        .sidebar {
            width: 250px;
            height: 100vh;
            background-color: #333;
            color: #fff;
            position: fixed;
            top: 0;
            left: 0;
            display: flex;
            flex-direction: column;
            padding-top: 20px;
        }

        .sidebar h2 {
            text-align: center;
            margin-bottom: 20px;
            font-size: 24px;
        }

        .sidebar a {
            padding: 15px 20px;
            display: block;
            color: #fff;
            transition: background-color 0.3s ease;
        }

        .sidebar a:hover {
            background-color: #444;
        }

        /* Header Styles */
        .header {
            margin-left: 250px;
            height: 60px;
            background-color: #fff;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 20px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .header h1 {
            font-size: 20px;
            color: #333;
        }

        .header .profile {
            display: flex;
            align-items: center;
        }

        .header .profile img {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            margin-right: 10px;
        }

        /* Main Content Styles */
        .main-content {
            margin-left: 281px;
            padding: 36px;
        }

        .main-content h2 {
            margin-bottom: 80px;
        }

        .card-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
        }

        .card {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            padding: 20px;
            text-align: center;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        }

        .card i {
            font-size: 40px;
            margin-bottom: 10px;
            color: #333;
        }

        .card h3 {
            margin: 10px 0;
            font-size: 20px;
        }

        .card p {
            color: #777;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .sidebar {
                width: 200px;
            }

            .header {
                margin-left: 200px;
            }
        }

        @media (max-width: 576px) {
            .sidebar {
                width: 100%;
                height: auto;
                position: relative;
            }

            .header {
                margin-left: 0;
            }

            .main-content {
                margin-left: 0;
            }
        }
    </style>
</head>

<body>
     

   

    <!-- Main Content -->
    <div class="main-content col-md-10">
        <h2 style="margin-left: 330px;">Welcome to the Dashboard</h2>
        <div class="card-container">
            <div class="card">
                <i class="fa fa-user"></i>
                <h3>Users</h3>
                <p>Manage all users.</p>
                <div class="card-body">
                          <?php
                          global $conn;
                          $conn = mysqli_connect('localhost','root','','sem_project');
                          $dash_user="SELECT * FROM  user";
                          $dash_user_query_run=mysqli_query($conn,$dash_user);
                          if($user_total=mysqli_num_rows($dash_user_query_run)){
                          echo "<h5>$user_total</h5>";    
                          }
                          else{
                            echo "no data found";
                          }
                          ?>
                        </div>
            </div>
            <div class="card">
                <i class="fas fa-landmark"></i>
                <h3>all product</h3>
                <p>Manage tour destinations.</p>
                <div class="card-body">
                          <?php
                          global $conn;
                          $conn = mysqli_connect('localhost','root','','sem_project');
                          $dash_user="SELECT * FROM  products";
                          $dash_user_query_run=mysqli_query($conn,$dash_user);
                          if($user_total=mysqli_num_rows($dash_user_query_run)){
                          echo "<h5>$user_total</h5>";    
                          }
                          else{
                            echo "no data found";
                          }
                          ?>
                        </div>
            </div>
            
            <div class="card">
                <i class="fas fa-plane"></i>
                <h3>order</h3>
                <p>Manage all bookings.</p>
            </div>
        </div>
    </div>
</body>

</html>


<?php
include('admin_footer_link.php');
?>
