<!DOCTYPE html>
<html>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<head>
	<title>Login and Registration Page</title>
	<style>
		body {
			background-image: url("login.jpg");
			background-size: cover;
			
		}
		.container {
			display: flex;
			flex-direction: column;
			justify-content: center;
			align-items: center;
			height: 100vh;
		}
		body {
			background-color: #f5f5f5;
			font-family: Arial, sans-serif;
		}
		h1 {
			text-align: center;
			margin-top: 30px;
		}
		.container {
			display: flex;
			flex-direction: row;
			justify-content: center;
			align-items: center;
			height: 100vh;
		}
		form {
			background-color: #fff;
			padding: 30px;
			border-radius: 10px;
			box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
			width: 400px;
			text-align: center;
		}
		input[type="text"], input[type="password"], input[type="email"] {
			display: block;
			width: 100%;
			padding: 10px;
			margin-bottom: 20px;
			border-radius: 5px;
			border: none;
			box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
			font-size: 16px;
		}
		button[type="submit"] {
			display: block;
			margin: auto;
			padding: 10px 20px;
			background-color: #4CAF50;
			color: #fff;
			border: none;
			border-radius: 5px;
			box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
			font-size: 16px;
			cursor: pointer;
		}
		p {
			margin-top: 10px;
		}
		#register-form {
			display: none;
		}
	</style>
</head>


<body>
    <div class="container">
        <?php
        //sucessfully registered message
        if (isset($_GET['status']) && $_GET['status'] == 1) {
        ?>
            <div class="alert alert-success" role="alert">
                Sucessfully registered!
            </div>
        <?php  } else 
                    if (isset($_GET['status']) == 2) {
        ?>
            <div class="alert alert-danger" role="alert">
                Invalid User!
            </div>
        <?php
        } ?>
        
        <div class="row">
            <div class="col-lg-3"></div>            
                    
                    <div class="card-body">
                        <div class="form-group">
                            <form action="source/login_user.php" method="post">
							<h2>Login</h2>
                                <div class="input-container">
                                    <i class="fa fa-envelope icon"></i>
                                    <input type="text" class="form-control" name="user_email" placeholder="User Email " required></div>
                                <br>
                                <div class="input-container">
                                    <i class="fa fa-key icon"></i>
                                    <input type="password" class="form-control" name="password" placeholder="Password" required></div>
                                <br>
                                <button type="submit" class="btn btn-success btn-lg btn-block" name="submit">Login</button>
                                <p>Don't have an account? <a href="register.php">Register</a></p><br>
								<p>ADMIN <a href="admin/admin_login.php">ADMIN_LOGIN</a></p>
                            </form>
                        </div>
                    </div>
                
            <div class="col-lg-3"></div>
        </div>
    </div>
</body>

</html>

