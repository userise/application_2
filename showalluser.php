<?php
include("config.php");

if(!isset($_SESSION["uid"]))

{
   
   
    echo "<script>
	
	window.location='index.php';
	
	</script>";	
	
 	
}


//show all users/..


$sel="select user.*,eduname,collegename,cname,sname from user join education on user.eduid=education.eduid join college on college.colid=user.colid join country on country.cid=user.cid join state on state.sid=user.sid";

$ex=$conn->query($sel);



//delete user...


  if(isset($_REQUEST["did"]))
  
  
  {
	  
	  
	  
	  $did=$_REQUEST["did"];
	  
	  $del="delete from user where uid='$did'";
	  
	  $ex=$conn->query($del);
	  
	  
	  echo "<script>
	  
	    alert('User succefully deleted')
		
		
		window.location='showalluser.php';
	  
	  </script>";
	  
	  
  }


?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>My first application in php Like and comments</title>

<link rel="stylesheet" href="css/bootstrap.min.css" />


<link rel="stylesheet" href="css/style.css" />


<link rel="stylesheet" href="css/font-awesome.min.css" />


<script src="js/jquery.js" type="text/javascript"></script>


<script src="js/bootstrap.min.js" type="text/javascript"></script>



<script src="js/npm.js" type="text/javascript"></script>




</head>




<body>
<?php
include("header.php");


include("menu.php");

?>

<br /><br />

<div class="content">
<div class="container-fluid">
<div class="row">
<div class="col-md-12 col-xs-12">

<div id="address" style="width:750px; overflow:auto; height:auto">
<center>
<address style="font-size:12px; letter-spacing:3px; color:#F60">

<h3 align="center">Show All Users</h3>


<table align="center" class="table-responsive table-bordered table-hover" style="width:70%;">

<tr>
<th>Uid</th>
<th>Photo</th>
<th>Username</th>
<th>Mobile</th>
<th>Email</th>
<th>Gender</th>
<th>Hobby</th>
<th>Date of Birth</th>
<th>Message</th>
<th>Education</th>
<th>college</th>
<th>Year</th>
<th>Download CV</th>
<th>Address1</th>
<th>Address2</th>
<th>Tehsil</th>
<th>village</th>
<th>country</th>
<th>state</th>
<th>city</th>
<th>Action</th>
</tr>

<?php


while($fet=$ex->fetch_array())
{



?>


<tr>

<td><?php echo $fet["uid"];?></td>

<td><img src="<?php echo $fet["upload_photo"];?>" style="width:100px; height:80px;"></td>

<td><?php echo $fet["username"];?></td>

<td><?php echo $fet["mobile"];?></td>

<td><?php echo $fet["email"];?></td>

<td><?php echo $fet["gender"];?></td>


<td><?php echo $fet["hobby"];?></td>


<td><?php echo $fet["dob"];?></td>

<td><?php echo $fet["message"];?></td>

<td><?php echo $fet["eduname"];?></td>


<td><?php echo $fet["collegename"];?></td>


<td><?php echo $fet["year"];?></td>


<td><?php echo $fet["upload_cv"];?></td>


<td><?php echo $fet["address1"];?></td>

<td><?php echo $fet["address2"];?></td>


<td><?php echo $fet["tehsil"];?></td>


<td><?php echo $fet["village"];?></td>


<td><?php echo $fet["cname"];?></td>


<td><?php echo $fet["sname"];?></td>


<td><?php echo $fet["city"];?></td>

<td>
<a href="showalluser.php?did=<?php echo $fet["uid"];?>"
 onclick="return confirm('Are you sure to Delete user?')"><span class="glyphicon glyphicon-trash" style="color:#F00; font-size:20px"></span></a>



<a href="#profile.php?eid=<?php echo $fet["uid"];?>"
 onclick="return confirm('Are you sure to Edit user?')" data-toggle="modal" data-target="#MyProfile"><span class="glyphicon glyphicon-edit" style="color:green; font-size:20px"></span></a>


</td>

</tr>


<?php

}
?>


</table>




</address>

</center>
</div>

<div id="i">
<img src="images/family.png" class="img-responsive" style="width:20%; height:480px; transform:rotate(-8deg); margin-left:0%;" />
</div>





</div>
</div>
</div>
</div>


<h2 align="center"><u>Get in Touch with Us</u></h2>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d59301.24199966037!2d70.42525938181647!3d21.728820753253835!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39581e16560474af%3A0x3bd763433745a173!2sDhoraji%2C+Gujarat+360410!5e0!3m2!1sen!2sin!4v1530266021338" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>



<?php
include("footer.php");


?>



<!---for call register and login page modal-->

<?php
include("profile.php");
?>


</body>
</html>