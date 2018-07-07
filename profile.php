<?php
error_reporting(0);
if(!isset($_SESSION["uid"]))

{
   
   
    echo "<script>
	
	window.location='index.php';
	
	</script>";	
	
 	
}


//show profile/..

$uid=$_SESSION["uid"];


$sel="select user.*,eduname,collegename,cname,sname from user join education on user.eduid=education.eduid join college on college.colid=user.colid join country on country.cid=user.cid join state on state.sid=user.sid where uid='$uid'";

$ex=$conn->query($sel);


$fet=$ex->fetch_array();



//update user profile


if(isset($_REQUEST["upd"]))


{

  $uid=$_SESSION["uid"];
  
  $tmp=$_FILES["img"]["tmp_name"];
  $type=$_FILES["img"]["type"];
  $size=$_FILES["img"]["size"];
  $path="upload/".$_FILES["img"]["name"];
  move_uploaded_file($tmp,$path);
  
  $unm=$_POST["uname"];
  
  
  $mob=$_POST["mob"];
  
  
  $em=$_POST["em"];
  
  
  $g=$_POST["gender"];
  
  $h=implode(",",$_POST["chk"]);
  
  $day=$_POST["day"];
  
  $month=$_POST["month"];	 
  
  $year=$_POST["year"];	 
  
  $dob=$day."/".$month."/".$year;
  
  $msg=$_POST["message"];
  $edu=$_POST["edu"];	
  $clg=$_POST["clg"];
  $pyear=$_POST["pyear"];
  
  
  $tmp1=$_FILES["cv"]["tmp_name"];
  $type=$_FILES["cv"]["type"];
  $size=$_FILES["cv"]["size"];
  $path1="upload/".$_FILES["cv"]["name"];
  move_uploaded_file($tmp1,$path1);
  
  $add1=$_POST["add1"];
  $add2=$_POST["add2"];
  $tehsil=$_POST["tehsil"];
  $vlg=$_POST["village"];
  $cn=$_POST["country"];
  $st=$_POST["state"];
  $ct=$_POST["city"];	
	

   $upd="";	
	
	
}

?>

    
 <!---register modal-------->
 
 
 <div id="MyProfile" class="modal fade" role="dialog" >
 
 <div class="modal-dialog">
 <div class="modal-content" style="background-color:#3CC">
 <div class="modal-header">   
    
  <button type="button" class="close" data-dismiss="modal">&times;</button>
  
  <h1 align="center" style="text-decoration:underline; color:blue; letter-spacing:2px">User Profile :</h1>
  
  </div>
  
  
  <div class="modal-body" >
  
   <form method="post" enctype="multipart/form-data">  
  
  <div class="form-group">
  <h2 style="text-decoration:underline; color:blue">Personal Information :</h2>
  </div>
  
  <div class="form-group">
  <center>
  <img src="<?php   echo $fet["upload_photo"];?>" style="width:100px; height:100px; border-radius:100%">
</center>
  </div>
  
  <div class="form-group">
  <label>Enter Name *:</label>
  <input type="text" name="uname" required placeholder="Enter Name" class="form-control" value="<?php echo $fet["username"];?>" readonly>

  </div>
  
  <div class="form-group">
  <label>Enter Mobile *:</label>
  <input type="text" name="mob" required placeholder="Enter mobile" class="form-control" value="<?php echo $fet["mobile"];?>" readonly>

  </div>
  
  
  <div class="form-group">
  <label>Enter Email *:</label>
  <input type="text" name="em" required placeholder="Enter email" class="form-control" value="<?php echo $fet["email"];?>" readonly>

  </div>
  
 
  
  
   <div class="form-group">
  <label>Select Gender *:</label>
  Male<span class="fa fa-male"></span><input type="radio" name="gender" value="male" <?php 
  
  
  if($fet["gender"]=='male')
  
  {
	  
	echo "checked='checked'";  
	  
  }?>>
  
  Female<span class="fa fa-female"></span><input type="radio" name="gender" value="female" <?php 
  
  
  if($fet["gender"]=='female')
  
  {
	  
	echo "checked='checked'";  
	  
  }?>>

  </div>
  
  
    <div class="form-group">
  <label>Select Hobby *:</label>
  Read<span class="fa fa-book"></span><input type="checkbox" name="chk[]" value="read" <?php 
  
  $chk=$fet["hobby"];
  
  $h=explode(",",$chk);
  
  if($h[0]=='read')
  
  {
	  echo "checked='checked'";  
  }
  
   ?>>
  
    Play<span class="fa fa-play"></span><input type="checkbox" name="chk[]" value="play"  <?php 
  
  $chk=$fet["hobby"];
  
  $h=explode(",",$chk);
  
  if($h[0]=='play' || $h[1]=='play')
  
  {
	  echo "checked='checked'";  
  }
  
   ?>>
    
      Dance<span class="fa fa-mice"></span><input type="checkbox" name="chk[]" value="dance" <?php 
  
  $chk=$fet["hobby"];
  
  $h=explode(",",$chk);
  
  if($h[0]=='dance' || $h[1]=='dance' || $h[2]=='dance')
  
  {
	  echo "checked='checked'";  
  }
  
   ?>>
  
  

  </div>
  
   <div class="form-group">
  <label class="col-md-12 col-xs-12">Select DOB *:</label>
  
  <input type="text" name="dob" value="<?php echo $fet["dob"];?>" class="form-control" readonly>


</div>
  <div class="form-group col-md-12 col-xs-12">
  <label>Enter Message *:</label>
  <textarea name="message" required placeholder="Enter Message" class="form-control"><?php echo $fet["message"];?> </textarea>

  </div>
  
  
  
  <div class="form-group">
  <h2 style="text-decoration:underline; color:blue">Educational Information<span class="fa fa-graduation-cap"></span> :</h2>
  </div>
  
   <div class="form-group">
  <label>Select your Education *:</label>
  <select name="edu" class="form-control">
  <option value="">-select Education-</option>
  <?php
  $sel="select * from education";
  
  $ex=$conn->query($sel);
  
  while($fet21=$ex->fetch_array())
  
  {
	  
	  if($fet["eduid"]==$fet21["eduid"])
	  
	  {
  
  ?>
  <option value="<?php echo $fet["eduid"];?>" selected="selected"> <?php echo $fet["eduname"];?></option>
  
  <?php
  
  }
  
  else
  {
	  
	  ?>
      
      
  <option value="<?php echo $fet21["eduid"];?>"> <?php echo $fet21["eduname"];?></option>
  
  <?php
  
  }
  
  }
	  
  ?>
  </select>
  </div>
  
  
   <div class="form-group">
  <label>Select your College *:</label>
  <select name="clg" class="form-control">
  <option value="">-select College-</option>
  
  <?php
  $sel1="select * from college";
  $ex1=$conn->query($sel1);
  
  while($fet1=$ex1->fetch_array())
  
  {
	  
	  if($fet1["colid"]==$fet["colid"])
     {
  ?>
  <option value="<?php echo $fet["colid"];?>" selected="selected"><?php echo $fet["collegename"];?></option>
  
  <?php
  }
  
  else
  {
  ?>
  
  <option value="<?php echo $fet1["colid"];?>"><?php echo $fet1["collegename"];?></option>
  
  <?php
  
  }
  
  }
  ?>
  </select>
  </div>
  
  
   <div class="form-group">
  <label>Select Passing Year *:</label>
  <select name="pyear" class="form-control">
  <option value="">-select passing year-</option>
  <?php
  for($y=1970; $y<=2025; $y++)
  {  
     if($fet["year"]=="$y")
	 {
  ?>
  
  
      
  
  <option value="<?php echo $y;?>" selected="selected"><?php echo $y;?></option>
  
  <?php
  }
  else
  {
	  
	 ?>
     
  <option value="<?php $y ;?>"><?php echo $y;?></option>
  
  
  
  <?php
  }
  
  }
  ?>
  </select>
  </div>
  
  
  <div class="form-group">
  <label>Upload your CV *:</label>
  <input type="file" name="cv" required  class="form-control">

  </div>
  
  
  <div class="form-group">
  <h2 style="text-decoration:underline; color:blue">Permanent Address<span class="fa fa-map-marker"></span> :</h2>
  </div>
  
  <div class="form-group col-md-6 col-xs-12">
  <label>Enter Addrees1:</label>
  <input type="text" name="add1" class="form-control" value="<?php echo $fet["address1"];?>" />
  </div>
  
  <div class="form-group col-md-6 col-xs-12">
  <label>Enter Addrees2:</label>
  <input type="text" name="add2" class="form-control" value="<?php echo $fet["address2"];?>"/>
  </div>
  
  
  <div class="form-group col-md-6 col-xs-12">
  <label>Enter Tehsil:</label>
  <input type="text" name="tehsil" class="form-control" value="<?php echo $fet["tehsil"];?>"/>
  </div>
  
  
  <div class="form-group col-md-6 col-xs-12">
  <label>Enter village:</label>
  <input type="text" name="village" class="form-control" value="<?php echo $fet["village"];?>"/>
  </div>
  
  
  <div class="form-group col-md-6 col-xs-12">
  <label>Select Country:</label>
  <select name="country" class="form-control">
  <option value="">-select country-</option>
  <?php
  $sel2="select * from country";
  $ex2=$conn->query($sel2);
  
  while($fet2=$ex2->fetch_array())
  
  {
  
    if($fet2["cid"]==$fet["cid"])
	
	{
  ?>
  <option value="<?php echo $fet["cid"];?>" selected="selected"><?php echo $fet["cname"];?></option>
  
  <?php
  }
  
  else
  {
  ?>
  
  <option value="<?php echo $fet2["cid"];?>"><?php echo $fet2["cname"];?></option>
  <?php
  }
  }
  ?>
  </select>
  
  </div>
  
  <div class="form-group col-md-6 col-xs-12">
  <label>Select State:</label>
  <select name="state" class="form-control">
  <option value="">-select state-</option>
  <?php
  $sel3="select * from state";
  $ex3=$conn->query($sel3);
  
  while($fet3=$ex3->fetch_array())
  
  {
	  
	    if($fet3["sid"]==$fet["sid"])
     {
  ?>
  <option value="<?php echo $fet["sid"];?>" slected="selected"><?php echo $fet["sname"];?></option>
  
  <?php
  }
  
  }
  ?>
  </select>
  
  
  </div>
  
  
 <div class="form-group col-md-12 col-xs-12">
  <label>Enter city Name:</label>
  
  <input type="text" name="city" placeholder="Enter Ciuty" required="required" class="form-control" value="<?php echo $fet["city"];?>" />
  
  </div> 
  
  
  
  
  <div class="form-group">
  
  <input type="submit" name="upd" value="Update!" class="btn btn-lg btn-success" >

  </div>
  
  
  
  </form>
 
  
  
  </div>
  
  </div>
  </div>
  </div>  
   
