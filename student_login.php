<?php
include("includes/db.php");
session_start();
?>
<!DOCTYPE html>
<!--
Template Name: Interlingua
Author: <a href="http://www.os-templates.com/">OS Templates</a>
Author URI: http://www.os-templates.com/
Licence: Free to use under our free template licence terms
Licence URI: http://www.os-templates.com/template-terms
-->
<html lang="">
<head>
<title>Interlingua</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>
<body id="top">
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row0">
  <div id="topbar" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <div class="fl_left">
      <ul>
        <li><i class="fa fa-phone"></i> +00 (123) 456 7890</li>
        <li><i class="fa fa-envelope-o"></i> info@domain.com</li>
      </ul>
    </div>
    <div class="fl_right">
      
    </div>
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row1">
  <header id="header" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <div id="logo" class="fl_left">
      <h1><a href="index.html">LIBRARY MANAGEMENT SYSTEM</a></h1>
      <p><i>FOR THOSE WHO WANT TO LEARN</p>
    </div>
    <div id="quickinfo" class="fl_right">
      <ul class="nospace inline">
        <li><strong>Praesent:</strong><br>
          +00 (123) 456 7890</li>
        <li><strong>Faucibus:</strong><br>
          +00 (123) 456 7890</li>
      </ul>
    </div>
    <!-- ################################################################################################ -->
  </header>
<body background="f.jpg"> 
<center><h1> JUST A SMALL FORM AND WE ARE HERE TO HELP YOU</h1> 
<div class="container">



  <form method="POST" action="">

<table width="500"align="center" bgcolor="#ffffff">
<div class="form-group">
<tr>

<td>
    
      <label for="name"><h3 bgcolor="#cc0066">LOGIN TO CONTINUE:</h3> </label>
</td>
</tr>
    </div>

<div class="form-group">
<tr>

<td>
    
      <label for="email"><h3>EMAIL: </h3></label>
</td>
<td>
      <h3><input type="text" class="form-control" name="email" placeholder="Enter email" required></h3>
</td>
</tr>
    </div>


<div class="form-group">
<tr>

<td>
    
      <label for="email"><h3>PASSWORD: </h3></label>
</td>
<td>
      <input type="password" class="form-control" name="pass" placeholder="Enter passsword" required>
</td>
</tr>
<tr>
<td colspan=3><a href="checkout.php?forgot_pass">FORGOT PASSWORD?</a></td>
</tr>
    </div>



</table>
<h2 style="float: right;"><a href="student_register.php">REGISTER HERE</a></h2>
<input type="submit" name="login" value="login"/>
</form>    
<?php
global $db;
if(isset($_POST['login']))
{
$s_email=$_POST['email'];
$s_pass=$_POST['pass'];
$sel_c="select * from students where password='$s_pass' AND email_id='$s_email'";
$_SESSION['email_id']=$s_email;
$run_c=mysql_query($sel_c);
echo "nyu";
$check_customer=mysql_num_rows($run_c);
if($check_customer==0)
{
echo "nyu";
echo "<script type='text/javascript'>alert('password or email is incorrect, try again!')</script>";
exit();
}
if($check_customer>0 )
{

echo "<script type='text/javascript'>alert('loggingsuccessful')</script>";
echo "<script type='text/javascript'>window.open('student.php', '_self')</script>";
}
else
{
$_SESSION['email_id']='$s_email';
echo "<script type='text/javascript'>alert('loggingsuccessful')</script>";
echo "<script type='text/javascript'>window.open('student.php', '_self')</script>";
}
}
?>

<h2><button><a href="index.php" target="_blank">GO BACK</a></buttton></h2>



<br>
<br>
<br>
<br>

</body>
</html>