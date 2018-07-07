<?php
include("config.php");

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

<div id="address">
<center>
<address style="font-size:20px; letter-spacing:3px; color:#F60">

<h3 align="center">My First Application</h3>


<b>Contact Us :<span class="fa fa-mobile"></span>(+91)9173xxxxxxx</b><br />



<b>Email :<span class="fa fa-inbox"></span><a href="mailto:bkpandey.pandey@gmail.com">bkpandey.pandey@gmail.com</a></b><br />


<b style="word-wrap:break-word !important; font-size:16px">Website :<span class="fa fa-internet-explorer"></span><a target="_blank" href="http://onlineportfolio.byethost14.com">www.onlineportfolio.byethost14.com</a></b><br />


<h2 align="center"><u>Get in Touch with Us</u></h2>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d59301.24199966037!2d70.42525938181647!3d21.728820753253835!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39581e16560474af%3A0x3bd763433745a173!2sDhoraji%2C+Gujarat+360410!5e0!3m2!1sen!2sin!4v1530266021338" width="500" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>




</address>

</center>
</div>

<div id="i">
<img src="images/family.png" class="img-responsive" style="width:20%; height:480px; transform:rotate(-8deg); margin-left:22%;" />
</div>

</div>
</div>
</div>
</div>





<?php
include("footer.php");


?>



<!---for call register and login page modal-->

<?php


include("login.php");
include("register.php");
?>


</body>
</html>