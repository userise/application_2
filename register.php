<?php
if(isset($_POST["sub"]))

{
  
  $tmp=$_FILES["img"]["tmp_name"];
  $type=$_FILES["img"]["type"];
  $size=$_FILES["img"]["size"];
  $path="upload/".$_FILES["img"]["name"];
  move_uploaded_file($tmp,$path);
  
  $unm=$_POST["uname"];
  
  
  $mob=$_POST["mob"];
  
  
  $em=$_POST["em"];
  
  $pass=$_POST["pass"];
  
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
  
  $ins="insert into user(upload_photo,username,mobile,email,password,gender,hobby,dob,message,eduid,colid,year,upload_cv,address1,address2,tehsil,village,cid,sid,city) values('$path','$unm','$mob','$em','$pass','$g','$h','$dob','$msg','$edu','$clg','$pyear','$path1','$add1','$add2','$tehsil','$vlg','$cn','$st','$ct')";
  
 
  $ex=$conn->query($ins);
  
  
  if($ex)
  
  {
  
  
  echo "<script>
  
  
  alert('Thanks for Registered with Us!')
  
  
  window.location='index.php';
  
  
  
  </script>";
	
	
	
  }
  
  
  else
  
  {
	  
	 
  echo "<script>
  
  
  alert('Sorry You are Not Registered Try Again')
  
  
  window.location='index.php';
  
  
  
  </script>";
	 
	  
	  
  }
	
	
	
}





?>

    
 <!---register modal-------->
 
 
 <div id="Myregister" class="modal fade" role="dialog" >
 
 <div class="modal-dialog">
 <div class="modal-content" style="background-color:#3CC">
 <div class="modal-header">   
    
  <button type="button" class="close" data-dismiss="modal">&times;</button>
  
  <h1 align="center" style="text-decoration:underline; color:blue; letter-spacing:2px">User SignUp Form </h1>
  
  </div>
  
  
  <div class="modal-body" >
  
   <form method="post" enctype="multipart/form-data">  
  
  <div class="form-group">
  <h2 style="text-decoration:underline; color:blue">Personal Information :</h2>
  </div>
  
  <div class="form-group">
  <label>Upload Images *:</label>
  <span class="fa fa-user fa-4x"></span>
  <input type="file" name="img" required  class="form-control">

  </div>
  
  <div class="form-group">
  <label>Enter Name *:</label>
  <input type="text" name="uname" required placeholder="Enter Name" class="form-control">

  </div>
  
  <div class="form-group">
  <label>Enter Mobile *:</label>
  <input type="text" name="mob" required placeholder="Enter mobile" class="form-control">

  </div>
  
  
  <div class="form-group">
  <label>Enter Email *:</label>
  <input type="text" name="em" required placeholder="Enter email" class="form-control">

  </div>
  
   <div class="form-group">
  <label>Enter Password *:</label>
  <input type="password" name="pass" required placeholder="Enter Passsword" class="form-control">

  </div>
  
  
   <div class="form-group">
  <label>Select Gender *:</label>
  Male<span class="fa fa-male"></span><input type="radio" name="gender" value="male">
  
  Female<span class="fa fa-female"></span><input type="radio" name="gender" value="female">

  </div>
  
  
    <div class="form-group">
  <label>Select Hobby *:</label>
  Read<span class="fa fa-book"></span><input type="checkbox" name="chk[]" value="read">
  
    Play<span class="fa fa-play"></span><input type="checkbox" name="chk[]" value="play">
    
      Dance<span class="fa fa-mice"></span><input type="checkbox" name="chk[]" value="dance">
  
  

  </div>
  
   <div class="form-group">
  <label class="col-md-12 col-xs-12">Select DOB *:</label>
  <!--for day-->
  <label class="col-md-3 col-xs-12">
<select name="day" class="form-control">
<option value="">-Day-</option>
<?php
for($i=1;$i<=31;$i++)
{

?>
<option value="<?php echo $i;?>"><?php echo $i;?></option>
<?php
}
?>

 </select>
 
 </label>

   <label class="col-md-3 col-xs-12">
   <select name="month" class="form-control">
<option value="">-month-</option>
<?php
for($i=1;$i<=12;$i++)
{

?>
<option value="<?php echo $i;?>"><?php echo $i;?></option>
<?php
}
?>

 </select>
   
  </label>
  
  <label class="col-md-3 col-xs-12">
   <select name="year" class="form-control">
<option value="">-year-</option>
<?php
for($i=1970;$i<=2030;$i++)
{

?>
<option value="<?php echo $i;?>"><?php echo $i;?></option>
<?php
}
?>

 </select>
   </label>
   </div>
   
   <br />
   <br />
  
  <div class="form-group col-md-12 col-xs-12">
  <label>Enter Message *:</label>
  <textarea name="message" required placeholder="Enter Message" class="form-control"></textarea>

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
  
  while($fet=$ex->fetch_array())
  
  {
  
  ?>
  <option value="<?php echo $fet["eduid"];?>"> <?php echo $fet["eduname"];?></option>
  
  <?php
  
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
  
  ?>
  <option value="<?php echo $fet1["colid"];?>"><?php echo $fet1["collegename"];?></option>
  
  <?php
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
  ?>
  
  <option value="<?php echo $y;?>"><?php echo $y;?></option>
  
  <?php
  }
  ?>
  </select>
  </div>
  
  
  <div class="form-group">
  <label>Upload your CV *:</label>
  <input type="file" name="cv" required  class="form-control"></textarea>

  </div>
  
  
  <div class="form-group">
  <h2 style="text-decoration:underline; color:blue">Permanent Address<span class="fa fa-map-marker"></span> :</h2>
  </div>
  
  <div class="form-group col-md-6 col-xs-12">
  <label>Enter Addrees1:</label>
  <input type="text" name="add1" class="form-control" />
  </div>
  
  <div class="form-group col-md-6 col-xs-12">
  <label>Enter Addrees2:</label>
  <input type="text" name="add2" class="form-control"/>
  </div>
  
  
  <div class="form-group col-md-6 col-xs-12">
  <label>Enter Tehsil:</label>
  <input type="text" name="tehsil" class="form-control"/>
  </div>
  
  
  <div class="form-group col-md-6 col-xs-12">
  <label>Enter village:</label>
  <input type="text" name="village" class="form-control"/>
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
  
  ?>
  <option value="<?php echo $fet2["cid"];?>"><?php echo $fet2["cname"];?></option>
  
  <?php
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
  
  ?>
  <option value="<?php echo $fet3["sid"];?>"><?php echo $fet3["sname"];?></option>
  
  <?php
  }
  ?>
  </select>
  
  
  </div>
  
  
 <div class="form-group col-md-12 col-xs-12">
  <label>Enter city Name:</label>
  
  <input type="text" name="city" placeholder="Enter Ciuty" required="required" class="form-control" />
  
  </div> 
  
  
  
  
  <div class="form-group">
  
  <input type="submit" name="sub" value="Submit" class="btn btn-lg btn-success" >




  <input type="reset" name="reset" value="Clear!" class="btn btn-lg btn-danger" >

  </div>
  
  
  
  </form>
  
  
  
  
  </div>
  
  </div>
  </div>
  </div>  
  