<?php
include("db_connection.php");
include('admin_header_link.php');
include('sidebar.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../assets/bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <style>       
.mt-3 {
    margin-top: 1rem !important;
    margin-left: 28rem;
}
    </style>
</head>
<body>
<div class="main_content">
    <div class="container mt-3 cal-md-5">
        <h2 class="text-success text-center">ALL USER DATA</h2>
        <table id="example" class="table table-bordered table-striped w-100">
            <thead>
                <tr class="bg-info">
                    <th>SL</th>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM user";
                $query = mysqli_query($conn, $sql);
                if (mysqli_num_rows($query) > 0) {
                    $sl = 1;
                    while ($data = mysqli_fetch_assoc($query)) {
                ?>
                        <tr>
                            <td><?php echo $sl++ ?></td>
                            <td><?php echo $data['id'] ?></td>
                            <td><?php echo $data['name'] ?></td>
                            <td><?php echo $data['email'] ?></td>
                            <td><?php echo $data['password'] ?></td>
                    
                            <td>
                                <a href="update.php?id=<?php echo $data['id'];?>" class="btn btn-sm btn-warning editbtn"><i class="fa fa-pencil"></i></a>

                                <!-- <a href="" class=""><i class="fa fa-trash"></i></a> -->
                                <a href="delete_action.php?id=<?php echo $data['id'] ?>" class="btn btn-sm btn-danger deletebtn"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                <?php
                    }
                } else {
                    echo "<tr><td colspan='4'>No Record Found...</td></tr>";
                }
                ?>
            </tbody>
        </table>

    </div>

</div> <!--- End Main Content --->
</div> <!--- End Right  side --->

</body>
</html>