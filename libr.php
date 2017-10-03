<?php
include("includes/db.php");
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>librarian</title>
<script type="text/javascript"></script>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" media="screen" href="css/style.css"/>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,300italic,400italic,400,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
    <style>
/* Full-width input fields */

</style>
</head>
<body>
<!--navigation bar-->
<nav class="navbar navbar-inverse" style="background-color:burlywood;border-color:burlywood;">
  <div class="container-fluid">
    <div class="navbar-header">                    
        <a class="navbar-brand" href="contact.html"><img src="home.png" style="height:30px"></a>
    </div>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"></a></li>
        <li><a href="#"></a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#" onMouseOver="this.style.backgroundColor='#b8860b'" onMouseOut="this.style.backgroundColor='#deb887'" style="color:cadetblue; font-size:25px "><span class="glyphicon glyphicon-user">You</span><span class="caret"></span></a>
          <ul class="dropdown-menu" style="background-color:black; color: aliceblue;">
            <li><a href="#">Profile</a></li>
            <li><a href="#">Change Password</a></li>
          </ul>
        </li>
        <li><a href="contact.html" style="color:cadetblue; font-size:25px " onMouseOver="this.style.backgroundColor='#b8860b'" onMouseOut="this.style.backgroundColor='#deb887'"><span class="glyphicon glyphicon-log-in"> Logout</span> </a></li>
      </ul>
        <nav class="navbar-form navbar-left">
      <div class="input-group" style="width:400px;">
        <input type="text" class="form-control" placeholder="Search Student">
        <div class="input-group-btn">
          <button class="btn btn-default" type="submit">
            <i class="glyphicon glyphicon-search"></i>
          </button>
        </div>
      </div>
            <div class="input-group" style="width:400px;">
        <input type="text" class="form-control" placeholder="Search Books">
        <div class="input-group-btn">
          <button class="btn btn-default" type="submit">
            <i class="glyphicon glyphicon-search"></i>
          </button>
        </div>
      </div>
    </nav>
    </div>
</nav>
<!--Slider-->
<div>
    <div class="container">
	<div id="content-slider">
    	<div id="slider">
        	<div id="mask">
            
            <ul>
           	<li id="first" class="firstanimation">
            <img src="images/img_1.jpg" style="width:100%"/>
            </li>

            <li id="second" class="secondanimation">
            <img src="images/img_2.jpg" style="width:100%"/>
            </li>
            
            <li id="third" class="thirdanimation">
            <img src="images/img_3.jpg" style="width:100%"/>
            </li>
                        
            <li id="fourth" class="fourthanimation">
            <img src="images/img_4.jpg" style="width:100%"/>
            </li>
                        
            <li id="fifth" class="fifthanimation">
            <img src="images/img_5.jpg" style="width:100%"/>
            </li>
            </ul>
                
            </div>
            <div class="progress-bar"></div>
        </div>
    </div>
</div>
</div>
<!--librarian task-->
<div class="itemdown">
    <div class="item">
    <img src="cart.png" onclick="document.getElementById('id01').style.display='block'" style="height:100px;width:100px"/>
    <span class="caption">Order new book</span>
        <div id="id01" class="modal">
  
  <form class="modal-content method="GET" animate" action="">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <h2>Add Some New Books</h2>
    </div>

    <div class="container1">
      <label><b>Book Name</b></label>
      <input type="text" placeholder="Enter Bookname" name="bname" pattern="{3,}" id="bname" required/>
         <script>
            var input = document.getElementById('bname');
            input.oninvalid = function(event) 
            {
                event.target.setCustomValidity('name must be of atleast 3 chars e.g. c++');
            }
    </script>

      <label><b>Subject</b></label><br>
      <select name="bsub" style="width:100%;height:45px;">
    <option value="CSE&IT">CSE & IT</option>
    <option value="ECE">ECE</option>
    <option value="EE">EE</option>
    <option value="CE">CE</option>
    <option value="AEIE">AEIE</option>
  </select><br>
        
        <label><b>Author</b></label>
      <input type="text" placeholder="Enter Author Name" name="bauthor" pattern="[A-Z,a-z]{3,}" id="bau" required/>
        <script>
            var input = document.getElementById('bau');
            input.oninvalid = function(event) 
            {
                event.target.setCustomValidity('author name must be of atleast 3 chars and it can only of alphabets e.g. Andrew tet');
            }
    </script>

        
        <label><b>Publisher</b></label>
      <input type="text" placeholder="Enter Publisher Name" name="bpublisher" pattern="[A-Z,a-z]{3,}" id="bpub" required/>
        <script>
            var input = document.getElementById('bpub');
            input.oninvalid = function(event) 
            {
                event.target.setCustomValidity('publisher name must be of atleast 3 chars and it can only of alphabets e.g.Oracle');
            }
    </script>
        
        <label><b>Edition</b></label>
      <input type="text" placeholder="Enter Edition" name="bedition" pattern="[0-9]{1,2}" id="bedi" required/>
        <script>
            var input = document.getElementById('bedi');
            input.oninvalid = function(event) 
            {
                event.target.setCustomValidity('edition must be digit upto 99');
            }
    </script>
        
        <label><b>Number Of Copies</b></label>
        <input type="text" placeholder="Enter Number of copies of books" name="bcopy" pattern="^([1-9][0-9][0-9][0-9]|+[1-9][0-9][0-9]|+[1-9][0-9]+|[1-9])$" id="cpy"required/>
            <script>
            var input = document.getElementById('bcpy');
            input.oninvalid = function(event) 
            {
                event.target.setCustomValidity('number of copies must be digit zreater than 0 upto 9999');
            }
    </script>            
        
      
        <button type="submit" name="submit">Add</button>
    </div>

      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
  </form>
</div>
        <script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
</div>
    <div class="item">
    <a href="view_request.php" ><img src="cart.png" style="height:100px;width:100px"/></a>
    <span class="caption">to view all request for book</span>
</div>
    <div class="item">
    <a><img src="cart.png" style="height:100px;width:100px" onclick="document.getElementById('id02').style.display='block'" style="height:100px;width:100px"></a>
    <span class="caption">Upload e-books</span>
</div>
</div>
<!--footer-->
<footer>LMS.COPYRIGHT@Roll--01,20,21</footer>    
    
    
    <?php
if(isset($_GET['submit']))
{
$bname=$_GET['bname'];
$bsub=$_GET['bsub'];
$bauthor=$_GET['bauthor'];
$bpublisher=$_GET['bpublisher'];
$bedition=$_GET['bedition'];
$bcopy=$_GET['bcopy'];
$insert_product="insert into books(publisher,book_name,author,edition,subject,ava_copy)values('$bpublisher','$bname','$bauthor','$bedition','$bsub','$bcopy')";
$run_product=mysql_query($insert_product);
if($run_product)
{

echo "<script>alert('product inserted successfully')</script>";
echo "<script type='text/javascript'>window.open('libr.php', '_self')</script>";
}
}
?>
<div id="id02" class="modal" style="z-index: 3000;">  
<form class="modal-content animate" action="" method="GET" style="background-color:yellow;font-family:cursive;" >
    <div class="imgcontainer">
        <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
        <h2>Borrow Some Hardcopies</h2>
    </div>
    <div class="container1" style="background-color:darkslateblue;color:yellow;">
      
        <label><b>Book Name</b></label>
        <input type="text" placeholder="Enter Bookname" name="bname" required>

        <label><b>Subject</b></label><br>
        <select name="bsub" style="width:100%;height:45px;">
            <option value="CSE&IT">CSE & IT</option>
    
            <option value="ECE">ECE</option>
    
            <option value="EE">EE</option>

            <option value="CE">CE</option>
    
            <option value="AEIE">AEIE</option>

        </select><br>
        
        <label><b>Author</b></label>
        <input type="text" placeholder="Enter Author Name" name="bauthor" required>
            
        <label><b>Edition</b></label>
        <input type="text" placeholder="Enter Edition" name="bedition">
    </div>

        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
        <button type="submit" class="cancelbtn" name="submit" style="float:right;background-color:green;">Add</button>
</form>
</div>
<script>
// Get the modal
    var modal = document.getElementById('id01');

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) 
    {
        if (event.target == modal) 
        {
            modal.style.display = "none";
        }
    }
</script>
<?php
    $user=$_SESSION['email_id'];
    $u="select * from students where email_id='$user'";
    $ru=mysql_query($u);
    $row_name=mysql_fetch_array($ru);
    $s_id=$row_name['student_id'];
    if(isset($_GET['submit']))
    {
        $bid=$_GET['bid'];
        $bname=$_GET['bname'];
        $bsub=$_GET['bsub'];
        $bauthor=$_GET['bauthor'];;
        $bedition=$_GET['bedition'];
        $insert_product="insert into request(book_id,student_id,book_name,author,edition,subject)values('$bid','$s_id','$bname','$bauthor','$bedition','$bsub')";
        $check=mysql_query("select book_1,book_2,book_3 from students where student_id=$s_id");
        $check_row=mysql_fetch_array($check);
                    if($check_row['book_1']=='' || $check_row['book_2']=='' || $check_row['book_3']=='')    
                    {
                        $run_product=mysql_query($insert_product);
                        if($run_product)
                        {
                           
                                echo "<script type='text/javascript'>alert('borrow request inserted')</script>";
                                echo "<script type='text/javascript'>window.open('student1.php', '_self')</script>";  
                                    
                        }    
                    }
                    else
                    {
                        echo "<script>alert('You have already borrowed 3 books')</script>"; 
    
                    }
                }
            ?>
</body>
</html>
