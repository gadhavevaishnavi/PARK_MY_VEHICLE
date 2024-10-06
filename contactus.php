<!DOCTYPE html>
<html>
  <head>
    <title>Contact Us</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <style>
      body {
        font-family: Arial, sans-serif;
        background-color: #f7f7f7;
      }
	  *{ margin: 0; padding: 0; box-sizing: border-box;
	    font-family: 'Josefin Sans', sans-serif;}
	    
	  /*.inner img {
	    width: 100%;
	    height: 91vh;
	  }*/
	  .cont{
	  	left: 12rem;
	  }
	  .middle img{
	    box-shadow: 1px 1px 5px #888;
	  }
	  .midd{
	    width: 60vh;
	    height: 550px!important;    
	  } 
	  
    </style>
  </head>
  <body>
    <div class="container" style="margin-left:10vh;">
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
		      <div class=" cont w-50 m-auto">
				<form action="feedback.php" method="post"> 
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
		                        <img src="feedback.jpg" alt=" image" class="midd">
		                        <img src="feedback.jpg" alt=" image" class="midd">
		                    </div>
		        </div>
		        
		    </div>
		  </div>
		</section>
      </div>
    </div> 
  </div>     
</section>  
    </div>
    <?php
    include 'footer.php';
    ?>
  </body>
</html>

