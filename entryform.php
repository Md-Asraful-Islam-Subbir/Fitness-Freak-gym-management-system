<!DOCTYPE html>
<?php

// php select option value from database

$hostname = "localhost";
$username = "root";
$password = "";
$databaseName = "fitness freak";

// connect to mysql database

$connect = mysqli_connect($hostname, $username, $password, $databaseName);

// mysql select query
$query = "SELECT * FROM `Trainer`";

// for method 1

$result1 = mysqli_query($connect, $query);



?>
<html>
  <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
  </head>
  <body>
       
 <div class="jumbotron" style="border-radius:0;background:url('images/3.jpg');background-size:cover;height:400px;"></div>
 <div style="margin-left: 2rem;">
<h4><strong>Information Form are below & You can register here....</strong></h4>
<h5>*If you want ,you can pay online payment here .Otherwise pay offline payment.</h5>

 </div> 
 <div class="container-fluid">
            <div class="col-md-8">
            <div class="card">
                
     <div class="card-body" style="background-color:#3498DB;color:FFFFFF;">
                <h3>Register New Members</h3>
                </div> 
                <div class="card-body"></div>
                <form class="form-group" action="func.php" method="post">
                <label>First Name:</label>
<input type="text" name="fname" class="form-control"><br>
                    <label>Last Name:</label>
<input type="text" name="lname" class="form-control"><br> 
 <label>Email</label>
                    <input type="text" name="email" class="form-control"><br>
                    <label>Membership type</label>
<input type="text" name="contact" class="form-control"><br>        
 <label>Trainer </label> 
 <select class="form-control" name="docapp">

            <?php while($row1 = mysqli_fetch_array($result1)):;?>

            <option value="<?php echo $row1[0];?>"><?php echo $row1[1];?></option>

            <?php endwhile;?>

        </select>
        <br>
                                        
  <input type="submit" class="btn btn-primary" name="pat_submit"style="margin-left: 2rem;margin-top:-1.4rem;"  value="Register">      
              <a href="func.php" class="btn btn-light"></a>
              <div class="main-wrapper"style="margin-left: 50rem;margin-top:-2.6rem;">
	      
        <div class="nav-login">
          <?php
             if (isset($_SESSION['u_id'])) {
           echo '<form action="includes/paymentGateway.php" method="POST">
                   <button type="submit" name="submit">Back</button>
                     </form>';	
                              } 
                              else{
           
           echo '<form action="includes/paymentGateway.php" method="POST">
                           
                                        
                     </form>
                   <a href="paymentGateway.php" class="btn btn-light" style="background-color:#3498DB;color:FFFFFF;">Payment</a>';
           
         }
        
         ?>
       
     
        </div>
</div> 
                    
                </form>
                </div>
      </div>
       </div>
      <div class="col-md-1"></div>
      </div>
    <header>
 <nav>
     <div class="main-wrapper">
	      
		       <div class="nav-login">
			       <?php
				        if (isset($_SESSION['u_id'])) {
						  echo '<form action="includes/index.php" method="POST">
					            <button type="submit" name="submit">Back</button>
					              </form>';	
                                 } 
                                 else{
							
							echo '<form action="includes/index.php" method="POST">
                              
                               						
				                </form>
				              <a href="index.php" class="btn btn-light" style="background-color:#3498DB;color:FFFFFF">Back</a>';
							
						}
				   
				    ?>
					
				
		       </div>
	 </div>

 </nav>

</header>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

     </body>
    
</html>
   