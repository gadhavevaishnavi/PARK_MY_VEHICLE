<?php
//SESSION
session_start();
if(!isset($_SESSION['user_id']) || empty($_SESSION['user_id'])){
	header("location:login.php");
}
include('include/connect.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <style>
    #navbar {
    margin-bottom: 30px;
}
#icon {
    display: inline-block;
    text-decoration: none;
    color: #fff;
    font-weight: 500;
    border-radius: 3px;
    padding: 12px 34px;
    font-size: 18px;
    background: transparent;
    position: relative;
    background: var(--primary-color);
}
#navbarSupportedContent ul li {
    margin: 4px;
    padding: 2px;
    font-size: 1.1rem;
    font-weight: 500;
}

#navbarSupportedContent ul li:hover:after {
    width: 100%;
}
@media screen and (max-width: 496px) {
    #navbarSupportedContent ul li {
        line-height: 1rem;
    }
    #navbarSupportedContent ul li:hover:after {
        width: 0;
    }
}
@media screen and (max-width: 991px) {
    #navbarSupportedContent ul li {
        line-height: 1rem;
    }
    #navbarSupportedContent ul li:hover:after {
        width: 0%;
    }
}
.menu li a:hover{
  background-color: #23cdaf;
  color:white;
  box-shadow: 5px 10px 30px rgba(24, 139 ,119, 0.2);
  transition: all ease 0.2s;
}
.menu li a{
  height: 40px;
  line-height: 43px;
  margin: 3px;
  padding: 0px 22px;
  display: flex;
  font-size: 0.8em;
  text-transform: uppercase;
  font-weight: 500;
  letter-spacing: 1px;
  color: gray;
}
#main{
  width: 100%;
  height:50vh;
  position: relative;
}
footer {

    position:absolute;
    bottom:0;
  text-align: center;
  padding: 3px;
  background-color: DarkSalmon;
  width:100%;
  color: white;
}

nav{
  display: flex;
  justify-content:space-around;
  align-items: center;
  position: fixed;
  top: 0;
  left: 0;
  width:100%;
  background-color: white;
  box-shadow: 5px 10px 30px rgba(0, 0, 0, 0.02);
  z-index: 1;
}
  </style>
  <body>

<nav class=" navbar navbar-expand-lg navbar-dark bg-dark py-0 my-0 ">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php" id="icon"><i class="fab fab-car-front" style="font-size:24px; color:lightgreen"></i> Park My Vehicle</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse menu" id="navbarSupportedContent">

      <ul class="navbar-nav ms-auto">

      <li class="nav-item">
          <a class="nav-link active" href="#">PROFILEs</a>
      </li>
      <li class="nav-item">
          <a class="nav-link active" href="source/logout_user.php">Logout</a>
      </li>
      </ul>
     
    </div>
  </div>
</nav>

    <div class="container">
        <?php
    $user_id=$_GET['user_id'];

    $check="SELECT * FROM parking_details where u_id='$user_id'";
    //echo $sql;
    //exit;
    $result_check=mysqli_query($conn,$check);

    if($data=mysqli_num_rows($result_check) == 1){ 
        ?>
        <div class="alert alert-dark" role="alert">
            You already have booking!<a href="user_dashboard.php"> Go Back</a>
        </div>
        <?php
        } else {
        header("location:source/select_datetime.php?user_id=".$user_id);
        }
        ?>

</body>

</html>