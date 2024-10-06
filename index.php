<!Doctype html>
<html>
  <head>
      <title> </title>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="parking.css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  </head>
  <style>
	  *{ margin: 0; padding: 0; box-sizing: border-box;
	    font-family: 'Josefin Sans', sans-serif;}
	    
	  .inner img {
	    width: 100%;
	    height: 91vh;
	  }
	  .middle img{
	    box-shadow: 2px 2px 10px #888;
	  }
	  .midd{
	    width: 80vh;
	    height: 350px!important;    
	  }  
  </style>
  <body>

    <?php include 'nav.php'; 
         ?>    
      
     
      <div class="container">
               <video autoplay loop muted>
                  <source src="video.mp4" type="video/mp4">
               </video>
               <div class="text-box">
                    <h1 class="dead"><b>Parking <br> System</b></h1>
               </div>        
          </div>
        

<section class="my-5">    <!--Contact US-->
        <div class="py-5">
          <h2 id="contactus" class="text-center">Contact Us</h2>
        </div>
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-6 col-md-6 col-12">
		<section class="my-4"> 
		  <div class="container-fluid">
		    <div class="row">
		      <div class="w-50 m-auto">
				<form action="Feedback.php" method="post"> 
				<div class="form-group">
				    <label>Username :<span style="color:red;">*</span></label>
				    <input type="text" name="user" autocomplete="off" class="form-control">
				</div>
				<div class="form-group">
				    <label>Email ID :</label>
				    <input type="text" name="email" autocomplete="off" class="form-control">
				</div>
				<div class="form-group">
				    <label>Mobile No. :<span style="color:red;">*</span></label>
				    <input type="text" name="mobile" autocomplete="on" class="form-control">
				</div>
				<div class="form-group">
				    <label>Comments :</label>
				    <textarea class="form-control" name="comments">
				    </textarea>
				</div>
				<button type="submit" class="btn btn-warning">SUBMIT
				</button>
				</form>
		      </div>

		        <div class="col-md-2">					
		                    <h4 class="classic-title"><span></span></h4>					
		                    <div class="hr1" style="margin-bottom:10px;">
		                    </div>
		                    <div class="middle"> 
		                        <img src="feedback.jpg" alt="atm image" class="midd">
		                    </div>
		        </div>
		        
		    </div>
		  </div>
		</section>
      </div>
    </div> 
  </div>     
</section>  
            
    <?php
    include 'footer.php';
    ?>

        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

  </body>
  

</html>

