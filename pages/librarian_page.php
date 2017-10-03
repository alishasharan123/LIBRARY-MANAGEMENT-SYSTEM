<?php
include("includes/db.php");

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
<title>Interlingua | Pages | Gallery</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="../layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
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
      <ul>
        <li><a href="#"><i class="fa fa-lg fa-home"></i></a></li>
        <li><a href="#">Login</a></li>
        <li><a href="#">Register</a></li>
      </ul>
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
      <h1><a href="../index.html">LIBRARY MANAGEMENT SYSTEM</a></h1>
      <p><I>for those who want to learn</p>
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
	
<body>
<!-- header -->

  <form action="" method="post">

<table>

<tr>
<h1><td><i>ENTER THE DETAILS</i></h1></td>
</tr>
    
<tr>

<td>
    
      <h3>BOOK ID:</h3> 
</td>
<td>
      <input type="text" name="b_id" placeholder="Enter the book- id" required>
</td>
</tr>

<tr>

<td>
    
      <h3>BOOK NAME:</h3> 
</td>
<td>
      <input type="text" name="b_name" placeholder="Enter your email id" required>
</td>
</tr>
    


<tr>

<td>
    
      <h3>STUDENT ID:</h3> 
</td>
<td>
      <input type="text" name="s_id" placeholder="Enter your name" required>
</td>
</tr>
<tr>

<td>
    
      <h3>DATE OF ISSUE:</h3> 
</td>
<td>
      <input type="text" name="i_date" placeholder="Enter your college name" required>
</td>
</tr>
    
<tr>

<td>
    
      <h3>DUE DATE OF RETURN:</h3> 
</td>
<td>
      <input type="text" name="r_date" placeholder="Enter your password" required>
</td>
</tr>
<tr>

<td>
    
      <h3>FINE IMPOSED:</h3> 
</td>
<td>
      <input type="text" name="f_imposed" placeholder="Enter your password" required>
</td>
</tr>

<tr>

<td><center><input type="submit" name="register" value="create account"/>
</td>
</tr>

   
<table>
</form>
<br>
<br>
<br>
<br>


</body>
</html>
<?php
global $db;
if(isset($_POST['register']))
{

$b_id=$_POST['b_id'];
$b_name=$_POST['b_name'];
$s_id=$_POST['s_id'];
$i_date=$_POST['i_date'];
$r_date=$_POST['r_date'];
$f_imposed=$_POST['f_imposed'];
$insert_s="insert into issue( book_id,book_name,student_id,issue_date,return_date,fine_imposed) values('$b_id','$b_name','$s_id','$i_date','$r_date',$f_imposed)";
$run_s=mysql_query($insert_s);



echo "<script type='text/javascript'>alert('registration successful')</script>";


}
?>