<?php
    session_start();
    include("includes/db.php");

    $user_email=($_SESSION['email_id']);
    $q="select student_id from students where email_id='$user_email' ";
    $query=mysql_query($q);
    $num=mysql_fetch_array($query);
    $user_id=$num['student_id'];

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Student</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" media="screen" href="css/style.css"/>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,300italic,400italic,400,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
    </head>
    <body>
<!--navigation bar-->
        <nav class="navbar navbar-inverse" style="background-color:burlywood;border-color:burlywood;">
            <div class="container-fluid">
                <div class="navbar-header">                    
                    <a class="navbar-brand" href="contact.html" style="display:inline-block">
                        <img src="home.png" style="height:30px;width:">
                    </a>
                </div>
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="news" onMouseOver="this.style.backgroundColor='#b8860b'" onMouseOut="this.style.backgroundColor='#deb887'" style="color:cadetblue; font-size:25px "><span class="glyphicon glyphicon-send">News</span></a>
                    </li>
                    <li>
                        <a href="servies" onMouseOver="this.style.backgroundColor='#b8860b'" onMouseOut="this.style.backgroundColor='#deb887'" style="color:cadetblue; font-size:25px "><span class="glyphicon glyphicon-credit-card">Services</span></a>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#" onMouseOver="this.style.backgroundColor='#b8860b'" onMouseOut="this.style.backgroundColor='#deb887'" style="color:cadetblue; font-size:25px "><span class="glyphicon glyphicon-user">You</span><span class="caret"></span></a>
                        <ul class="dropdown-menu" style="background-color:black; color: aliceblue;">
                            <li><a href="#">Profile</a></li>
                            <li><a href="#">Change Password</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="logout.php" style="color:cadetblue; font-size:25px " onMouseOver="this.style.backgroundColor='#b8860b'" onMouseOut="this.style.backgroundColor='#deb887'"><span class="glyphicon glyphicon-log-in"> Logout</span> </a>
                    </li>
                </ul>
        
                <nav class="navbar-form navbar-left" style="margin-left:130px">
                    <div class="input-group" style="width:500px;">
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
                        <div class="progress-bar">
                        </div>
                    </div>
                </div>
            </div>
        </div>
<!--librarian task-->
        <div class="itemdown">
            <table width="1000" align="center" style=" display: table; border-collapse: separate;border-spacing: 10px; border-color: gray;">
                <center><h3>Issued books:</h3></center>
                <tr align="center">
                    <th>
                    </th>
                    <th>BOOK_ID</th>
                
                    <th>BOOK NAME</th>

                    <th>AUTHOR</th>
    
                    <th>EDITION</th>
                    
                    <th>SUBJECT</th>
                
                    <th>RETURN DATE</th>
                </tr>
        
                <?php
                    global $db;
                    $get_c="select book_1,due_date1 from students where student_id=$user_id";
                    $run_c=mysql_query($get_c);
                    $row_c=mysql_fetch_array($run_c);
                    $b1_id=$row_c['book_1'];//get book1 id here
                    $return_date1=$row_c['due_date1'];// get due date 1 here

                    $get_d1=mysql_query("select book_name,author,edition,subject from books where book_id=$b1_id");
                    $row_d1=@mysql_fetch_array($get_d1);
    
                ?>        
                <tr >
                    <td>BOOK_1</td>
                    <td><?php echo $b1_id; ?></td>
                    <td><?php echo $row_d1['book_name']; ?></td>
                    <td><?php echo $row_d1['author']; ?></td>
                    <td><?php echo $row_d1['edition']; ?></td>
                    <td><?php echo $row_d1['subject']; ?></td>
                    <td><?php echo $return_date1; ?></td>
    
                </tr>
                <?php
                    global $db;
                    $get_c2="select book_2,due_date2 from students where student_id=$user_id";
                    $run_c2=mysql_query($get_c2);
                    $row_c2=mysql_fetch_array($run_c2);
                    $b2_id=$row_c2['book_2'];//get book1 id here
                    $return_date2=$row_c2['due_date2'];// get due date 1 here
                    $get_d2=mysql_query("select book_name,author,edition,subject from books where book_id=$b2_id");
                    $row_d2=@mysql_fetch_array($get_d2);
    
                ?>        
                <tr >
                    <td>BOOK_2</td>
                    <td><?php echo $b2_id; ?></td>
                    <td><?php echo $row_d2['book_name']; ?></td>
                    <td><?php echo $row_d2['author']; ?></td>
                    <td><?php echo $row_d2['edition']; ?></td>
                    <td><?php echo $row_d2['subject']; ?></td>
                    <td><?php echo $return_date2; ?></td>
    
                </tr>        
        
                <?php
                    global $db;
                    $get_c3="select book_3,due_date3 from students where student_id=$user_id";
                    $run_c3=mysql_query($get_c3);
                    $row_c3=mysql_fetch_array($run_c3);
                    $b3_id=$row_c3['book_3'];//get book1 id here
                    $return_date3=$row_c3['due_date3'];// get due date 1 here

                    $get_d3=mysql_query("select book_name,author,edition,subject from books where book_id=$b3_id");
                    $row_d3=@mysql_fetch_array($get_d3);
    
                ?>        
                <tr >
                    <td>BOOK_3</td>
                    <td><?php echo $b3_id; ?></td>
                    <td><?php echo $row_d3['book_name']; ?></td>
                    <td><?php echo $row_d3['author']; ?></td>
                    <td><?php echo $row_d3['edition']; ?></td>
                    <td><?php echo $row_d3['subject']; ?></td>
                    <td><?php echo $return_date3; ?></td>
    
                </tr>        
        
                </table>
                <div class="item2">
                    
                    <img src="images/book.png" onclick="document.getElementById('id01').style.display='block'" style="height:100px;width:100px"/>
                    
                    <div id="id01" class="modal">
  
                        <form class="modal-content animate" action="" method="GET">
                            <div class="imgcontainer">
                                <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                                <h2>Add Some New Books</h2>
                            </div>

                            <div class="container1">
                                <label><b>Book ID</b></label>
                                <input type="text" placeholder="Enter Bookid" name="bid">
      
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
              
                                <button type="submit" name="submit" >Add</button>
                            </div>

                            <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
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
            </div>
            <div class="item2" style="margin-left:15px;text-align:left;">
                <h4><u>Borrow Book</u></h4>
                <p>
                    you can borrow only up to 3 books<br>
                </p>
            </div>
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
                            if($run_s)
                                    {
                                        echo "<script type='text/javascript'>alert('borrow request inserted')</script>";
                                        echo "<script type='text/javascript'>window.open('student.php', '_self')</script>";  
                                    }
                        }    
                    }
                    else
                    {
                        echo "<script>alert('You have already borrowed 3 books')</script>"; 
    
                    }
                }
            ?>
            <div class="item2" >
                <img src="images/direction.png" onclick="document.getElementById('id02').style.display='block'" style="height:100px;width:100px"/>
                <span class="caption"> </span>
                
                <div id="id02" class="modal">
  
                    <form class="modal-content animate" action="" method="GET" style="width:601px;">
                    <div class="imgcontainer" style="width:600px;">
                        <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
                        <h2>Return Books</h2>
                    </div>

                    <div class="container1" style="width:600px;">
                        <table width="400px" align="center" bgcolor="pink">

                            <h2>YOUR ISSUED BOOKS</h2>
                            <tr align="center" bgcolor="skyblue">
                                <th>ISSUE_ID</th>

                                <th>BOOK_ID</th>

                                <th>BOOK NAME</th>

                                <th>ISSED DATE</th>
                            </tr>
                            <?php
                                global $db;
                                echo "$user_id";
                                $get_c="select issue_id,book_id,book_name,issue_date from issue where student_id=$user_id";
                                $run_c=mysql_query($get_c);
                                $i=0;
                                while($row_c=mysql_fetch_array($run_c))
                                {
                                    $b_id[$i]=$row_c['book_id'];
                                    $b_name[$i]=$row_c['book_name'];
                                    $b_date[$i]=$row_c['issue_date'];
                                    $b_issue[$i]=$row_c['issue_id'];
                                    $i++;   
                                }
                            ?>

                        <?php
                            for($j=0;$j<$i;$j++)
                            {
                        ?>
                            <tr align='center'>
                                <td><?php echo $b_issue[$j]; ?></td>
                                <td><?php echo $b_id[$j]; ?></td>
                                <td><?php echo $b_name[$j]; ?></td>
                                <td><?php echo $b_date[$j]; ?></td>

                                <td> 
                                    <?php 
                                        echo "<form method='GET' action=''>";
                                        $iss='return'.$j;
                                        echo "<button type='submit' name='$iss'>RETURN</button>";
                                        echo "</form>"; 
                                    ?>
                                </td>
                            </tr>
                            <?php
                                if(isset($_GET[$iss]))
                                {
                                    $query_iss="insert into ret_req (issue_id,student_id,book_id,issue_date) values('$b_issue[$j]','$user_id','$b_id[$j]','$b_date[$j];')";
                                    $run_s=mysql_query($query_iss);
                                    if($run_s)
                                    {
                                        echo "<script type='text/javascript'>alert('Return request sucessful')</script>";
                                        echo "<script type='text/javascript'>window.open('student.php', '_self')</script>";  
                                    }
                                    
                                }
                            }        
                            ?>
                            <?php 
                            ?>
       
                        </table>
                    </div>
                    <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
                </form>
            </div>
            <script>
                // Get the modal
                var modal = document.getElementById('id02');

                // When the user clicks anywhere outside of the modal, close it
                window.onclick = function(event) 
                {
                    if (event.target == modal)
                    {
                        modal.style.display = "none";
                    }
                }
            </script>
        </div>
        <div class="item2" style="margin-left:15px;text-align:left;">
            <h4><u>Return Book</u></h4>
            <p>
                you should return books before duedates.<br>
            </p>
           
        </div>
            <!--footer-->
            <footer>LMS.COPYRIGHT@Roll--01,20,21</footer>
        </div>    
    </body>
</html>
