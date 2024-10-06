<?php
session_start();
if (!isset($_SESSION['user_id']) || empty($_SESSION['user_id'])) {
    header("location:login.php");
}
include('include/connect.php');
$user_id = $_SESSION['user_id'];
$sql = "SELECT * FROM `users` WHERE u_id=$user_id";
//echo $sql;exit;
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
    

    <style>
        body {
            background-image: url('images/wal6.jpg');
            position: auto;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
        }

        .container {
            padding-top: 20px;
        }

        .btn {
            border-radius: 0px;
        }

        .jumbotron {
            border-radius: 0px;
        }
    </style>
</head>

<body>
    

<!DOCTYPE html>
<html>
  <head>
  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- bootstrap 5  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
 <body>
    <?php include 'user_nav.php' ?>
   
    <div class="container">
        <div class="jumbotron">
            <h1 class="display-5">
                <?php echo "WELCOME "; ?> <b> <?php echo strtoupper($row['u_name']); ?>! </b>
            </h1>
            <p class="lead">List & Rent your Space for Parking.</p>
            <center>
                <hr class="my-4">
                <a class="btn btn-primary btn-lg" href="check_booking.php?user_id=<?php echo $row['u_id'] ?>" role="button">Book</a>
                <a class="btn btn-danger btn-lg" href="source/selected_datetime.php?user_id=<?php echo $row['u_id'] ?>" role="button">Cancel</a>
            </center>
        </div>
    </div>
    

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
    <footer class="footer bg-dark " >
        <p>PARK MY VEHICLE<br>
        <a href="https://github.com/pvmeht">@ </a> Park_My_Vehicle All rights reserve 2022-2023 </p>
    </footer>
</body>

</html>