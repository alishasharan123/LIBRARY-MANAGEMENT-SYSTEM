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
        <p><i>FOR THOSE WHO WANT TO LEARN</i></p>
    </div>
    -->
  </header>
	
<body>
<!-- header -->

  <form action="" method="post">

<table>

<tr>
<td><h1><i>CREATE AN ACCOUNT</i></h1></td>
    <td>
    <h1><i></i></h1>
</td>
</tr>


<tr>

<td>
    
      <h3>EMAIL ID:</h3> 
</td>
<td>
      <input id="email" oninvalid="InvalidMsg(this);" name="email" oninput="InvalidMsg(this);" type="email" required="required" placeholder="enter your email" />
        <script>
        function InvalidMsg(textbox) {
        if (textbox.value == '') {
            textbox.setCustomValidity('Required email address');
        }
        else if (textbox.validity.typeMismatch){
            textbox.setCustomValidity('please enter a valid email address e.g. ranjan@gmail.com');
        }
        else {
                textbox.setCustomValidity('');
        }
            return true;
        }
        </script>
</td>
</tr>
    


<tr>

<td>
    
      <h3>NAME:</h3> 
</td>
<td>
      <input type="text" name="name" placeholder="Enter your name" pattern="[A-Z,a-z]{3,20}" id="name" required>
    <script>
            var input = document.getElementById('name');
            input.oninvalid = function(event) 
            {
                event.target.setCustomValidity('please enter only alphabets [A-Z,a-z] and must contain atleast 3 alphabets and upto 20 e.g. john');
            }
    </script>
</td>
</tr>
<tr>

<td>
    
      <h3>COLLEGE NAME:</h3> 
</td>
<td>
      <input type="text" name="college_name" placeholder="Enter your college name" pattern="[A-Z]{2,20}" id="clg" required>
         <script>
            var input = document.getElementById('clg');
            input.oninvalid = function(event) 
            {
                event.target.setCustomValidity('please enter only alphabets [A-Z] and must contain atleast 2 alphabets and upto 20 e.g. UIT');
            }
    </script>
</td>
</tr>
    
<tr>

<td>
    
      <h3>PASSWORD:</h3> 
</td>
<td>
      <input type="password" name="password" placeholder="Enter your password" pattern="^[a-z,A-Z,0-9]{5,}" id="psw" required>
    <script>
            var input = document.getElementById('psw');
            input.oninvalid = function(event) 
            {
                event.target.setCustomValidity('your password must conatain A-Z,a-z,0-9 and it must be of 5 chars');
            }
    </script>
</td>
</tr>


<tr>

    <td><center><input type="submit" name="register" value="create account"/></center>
</td>
    <td>
    <h1><i></i></h1>
</td>
</tr>

      </table>
</form>
<br>
<br>
<br>
<br>


</body>
    </div>
    </body>
</html>
<?php
global $db;
if(isset($_POST['register']))
{
$s_email=$_POST['email'];
$s_name=$_POST['name'];
$s_colname=$_POST['college_name'];
$s_pass=$_POST['password'];
$insert_s="insert into students( email_id,student_name,college_name,password) values('$s_email','$s_name','$s_colname','$s_pass')";
$run_s=mysql_query($insert_s);
$q="select student_id from students where email_id='$s_email' and student_name='$s_name' and college_name='$s_colname'";
$query=mysql_query($q);
$num=mysql_fetch_array($query);
$l_id=$num['student_id'];


echo "<script type='text/javascript'>alert('registration successful.$l_id')</script>";


}
?>