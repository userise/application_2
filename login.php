<?php
if(isset($_POST["log"]))

{
   
   $em=$_POST["em"];
   $pass=$_POST["pass"];	
	
	
	$sel="select * from user where email='$em' and password='$pass'";
	
	$ex=$conn->query($sel);
	
	$fet=$ex->fetch_array();
	
	$no=$ex->num_rows;
	
	if($no==1)
	
	
	{
		
	  
	  
	  $_SESSION["uid"]=$fet["uid"];
	  
	  
	  $_SESSION["em"]=$fet["email"];
	  
	  
	  $_SESSION["uname"]=$fet["username"];
	  
	  
	  echo "<script>
	  
	  alert('You are Logged in! succefully')
	  
	  
	  window.location='showalluser.php';
	  
	  </script>";
	  
	  	
		
		
	}
	
	
	
	else
	{
		
		  
	  echo "<script>
	  
	  alert('Sorry Email Id! and Password are Incorect try again')
	  
	  
	  window.location='index.php';
	  
	  </script>";
	  
		
	}
}




?>
    
 <!---Login modal-------->
 
 
 <div id="Mylogin" class="modal fade" role="dialog">
 
 <div class="modal-dialog">
 <div class="modal-content">
 <div class="modal-header">   
    
  <button type="button" class="close" data-dismiss="modal">&times;</button>
  
  <h1 align="center">Login Form</h1>
  
  </div>
  
  
  <div class="modal-body">
  
   <form method="post">  

  
  
  <div class="form-group">
  <label>Enter Email *:</label>
  <input type="text" name="em" required placeholder="Enter email" class="form-control">

  </div>
  
  
  
  <div class="form-group">
  <label>Enter Password *:</label>
  <input type="password" name="pass" required placeholder="Enter Password" class="form-control">

  </div>
  
  
  
  <div class="form-group" style="display:none">
  <label>Enter Name *:</label>
  <input type="text" name="uname"  placeholder="Enter Name" class="form-control">

  </div>
  
  <div class="form-group">
  
  <input type="submit" name="log" value="Login" class="btn btn-block btn-success" >

  </div>
  
  
  
  </form>
  
  
  
  
  </div>
  
  </div>
  </div>
  </div>  
