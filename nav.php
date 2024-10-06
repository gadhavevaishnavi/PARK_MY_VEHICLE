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
  <style>
    
/* navbar section starts  */
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
    <a class="navbar-brand" href="../index.php" id="icon"><i class="fab fab-car-front" style="font-size:24px; color:lightgreen"></i>PARK MY VEHICLE</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse menu" id="navbarSupportedContent">

      <ul class="navbar-nav ms-auto">
        
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
      

      <li class="nav-item">
          <a class="nav-link active" href="aboutus.php">About US</a>
      </li>

      <li class="nav-item">
          <a class="nav-link active" href="#contactus">Contact us</a>
      </li>
      <li class="nav-item">
          <a class="nav-link active" href="login.php">Login / Register</a>
      </li>
      </ul>
     
    </div>
  </div>
</nav>
 <!-- navbar ends  -->
    <!-- javascript bootstrap  -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
</body>
</html>
